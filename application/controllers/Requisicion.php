<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requisicion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();		
		$this->load->model('Requisicion_model');
		$this->load->model('DetalleRequisicion_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
    }
	
	public function index()
	{
			
	}

	public function enviar_email($envia,$destino,$html){

		require_once(APPPATH.'libraries/PHPMailer/class.phpmailer.php');	
	  	$mail = new PHPMailer(); // create a new object	  	
	    $mail->CharSet="UTF-8";
	    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
	    $mail->SMTPAuth = true; // authentication enabled
	    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
	    $mail->Host = "mail.codehaus.mx";
	    $mail->Port = 465; // or 587
	    $mail->IsHTML(true);
	    $mail->Username = "backend@codehaus.mx";
	    $mail->Password = "89CodeHaus";
	    $mail->SetFrom(strip_tags('backend@codehaus.mx'),'Dairmex - Nueva requisición');
	    $mail->Subject = "Dairmex - Nueva requisición";

	    $mail->Body = $html;	 
	    //$mail->AddAddress("pablo@montesdeocacp.com");  
	    $mail->AddAddress($destino);
	    $mail->AddAddress($envia);  
	           
	     if(!$mail->Send()) {
	        return FALSE;
	     } else {        
	        return TRUE;
	     }
	}

	public function guardar_requisicion()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST' && count($_POST)>0)
		{
			
			$elementos_ordenados = array();			
			$x  = 0;
			if(isset($_POST['limit']) && !empty($_POST['limit'])){
				$limite  = intval($_POST['limit']);				
				for ($i =1; $i <= $limite; $i++) { 
					if((isset($_POST['articulo-'.$i]) && !empty($_POST['articulo-'.$i])) && (isset($_POST['cantidad-'.$i]) && !empty($_POST['cantidad-'.$i])) && (isset($_POST['medida-'.$i]) && !empty($_POST['medida-'.$i])) && (isset($_POST['proyecto-'.$i]) && !empty($_POST['proyecto-'.$i]))){

						$elementos_ordenados[$x][] =	strip_tags(htmlentities(trim($_POST['articulo-'.$i])));
						$elementos_ordenados[$x][] =	strip_tags(htmlentities(trim($_POST['cantidad-'.$i])));
						$elementos_ordenados[$x][] =	strip_tags(htmlentities(trim($_POST['medida-'.$i])));
						$elementos_ordenados[$x][] =	strip_tags(htmlentities(trim($_POST['proyecto-'.$i])));
						$elementos_ordenados[$x][] =	strip_tags(htmlentities(trim($_POST['comentarios-'.$i])));

						$x++;
					}
				}
				if(count($elementos_ordenados)>0){
					$id_user = $this->session->userdata('id_usuario');
					if(!empty($id_user) && $id_user!==''){
						$folio 			= $this->Requisicion_model->folio();
						$folio 			= ($folio =='' || $folio ==NULL)?'RE00-1':'RE00-'.($folio+1);
						$requesicion_id = $this->Requisicion_model->new_requisicion($id_user);
								
						if($requesicion_id!==NULL && $requesicion_id!==''){													
							foreach ($elementos_ordenados as $req) {
								$resultadoRequisicion = $this->DetalleRequisicion_model->nuevo_registro($req[0],$req[2],$req[1],utf8_decode($req[3]),$req[4],$folio,$requesicion_id);	
							}
							if($resultadoRequisicion===TRUE){

								date_default_timezone_set('America/Mexico_City');
								ini_alter('date.timezone','America/Mexico_City');
								$fecha			= date('Y-m-d');

								$Emailtemplate ="<!DOCTYPE html>
													<html>
													<head>
														<title>Requisición dairmex</title>
													</head>
													<body>
														<table>
															<tbody>
																<tr>
																	<td>Folio: </td><td>".$folio."</td>
																	<td>Fecha: </td><td>".$fecha."</td>
																</tr>
															</tbody>
														</table>
														<table>
															<thead>
														      <tr>
														        <th>No</th>
														        <th>Artículo</th>
														        <th>Medida</th>
														        <th>Cantidad</th>
														        <th>Proyecto</th>
														        <th>Comentarios</th>	        
														      </tr>
														    </thead>
														    <tbody>";
														    $a =1;
														    foreach ($elementos_ordenados as $re) {
																$Emailtemplate.="<tr>
																					<td>".$a."</td>
																					<td>".$re[0]."</td>
																					<td>".$re[2]."</td>
																					<td>".$re[1]."</td>
																					<td>".$re[3]."</td>
																					<td>".$re[4]."</td>
																				 </tr>";
																$a++;				 		    	
														    }

									    	$Emailtemplate.="</tbody>
														</table>
													</body>
													</html>";

								$enviar_email = $this->enviar_email('backend@codehaus.mx','themstudio@hotmail.com',$Emailtemplate); 
								if($enviar_email==TRUE){
									$this->session->set_flashdata('requisicion_valida','Operación realizada correctamente.');									
								}else{
									$this->session->set_flashdata('requisicion_valida','Error, no se pudo enviar el email de la operación');
								
								}
								redirect(base_url().'Requisicion/nueva_requisicion');								
							}
						}

					}else{
						redirect(base_url().'Login');		
					}	
				}else{
					$this->session->set_flashdata('requisicion_invalida','Operación no realizable, formato de información incorrecto.');
					$this->load->view('nueva_requisicion_view');		
				}				
			}
		}else{
			redirect(base_url().'Login/');
		}
	}

	public function nueva_requisicion()
	{
		$folio 			= $this->Requisicion_model->folio();
		$folio 			= ($folio =='' || $folio ==NULL) ?'RE00-1':'RE00-'.($folio+1);
		$data['folio']  = $folio;

		$id_user = $this->session->userdata('id_usuario');
		if(!empty($id_user) && $id_user!==''){
			$this->load->view('nueva_requisicion_view',$data);
		}else{
			redirect(base_url().'Login');		
		}
	}
	
}
