<?php
require_once("Models/TCliente.php");
require_once("Models/LoginModel.php");
//require_once("Models/RegistroModel.php");

class Registro extends Controllers
{
	use TCliente;
	//use RegistroModel;
	public $login;
	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->login = new LoginModel();
	}

	public function registro()
	{
		$data['page_tag'] = "Registro - SUTEC3D";
		$data['page_title'] = "";
		$data['page_name'] = "registro";
		$data['page_functions_js'] = "functions_verificar.js";
		$this->views->getView($this, "registro", $data);
	}


	public function verificar()
	{
		// error_reporting(0);
		if ($_POST) {
			if (empty($_POST['idUsuario']) || empty($_POST['email']) || empty($_POST['codigo'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			} else {
				$idUsuario = intval($_POST['idUsuario']);
				$strEmail1 = strtolower(strClean($_POST['email']));
				$strcodigo1 = intval(strClean($_POST['codigo']));
				$strconfimadocorreo = 'si';
				$request_user = $this->verificarCuenta($idUsuario, $strEmail1, $strcodigo1, $strconfimadocorreo);

				if ($request_user) {
					// Cambia esta línea para comparar con el código devuelto por la base de datos
					if ($strcodigo1 == $request_user['codigo']) {
						sessionUser($_SESSION['idUser']);
						$arrResponse = array('status' => true, 'msg' => 'Cuenta verificada con éxito.');
					} else {
						$arrResponse = array("status" => false, "msg" => 'El código proporcionado no coincide.');
					}
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible verificar la cuenta.');
				}
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
	}
}
