<?php 
require_once("Libraries/Core/Mysql.php");
class RegistroModel extends Mysql{
    private $intIdUsuario;
    private $strcodigo;
    private $strEmail;
    private $strconfimado;

    public function __construct()
    {
        parent::__construct();
    }

    public function verificarCuenta(int $idUsuario, string $email, string $codigo, string $confimado) {
        $this->intIdUsuario = $idUsuario;
        $this->strcodigo = $codigo;
        $this->strEmail = $email;
        $this->strconfimado = $confimado;

        $sql = "SELECT * FROM persona WHERE (email_user = '{$this->strEmail}') ";
        $request = $this->select_all($sql);

        // Realiza la consulta SQL para verificar la cuenta
        //$query = "SELECT * FROM persona WHERE email_user = :email_user AND codigo = :codigo";
        //$params = array(
        //    ":email_user" => $email,
        //    ":codigo" => $codigo
        //);
        //$result = $this->db->query($query, $params);

        if(empty($request))
        {
            $sql = "UPDATE persona SET confirmado=?
            WHERE idpersona = $this->intIdUsuario ";
            $arrData = array($this->strconfimado);
        }
        else{
            $request = "exist";
        }
        return $request;
        //if ($this->db->rowCount($request) > 0) {
        //    // Actualiza el estado de confirmación en la base de datos
        //    $updateQuery = "UPDATE persona SET confirmado = 'si' WHERE email_user = :email_user";
        //    $updateParams = array(":email_user" => $email);
        //    $this->db->execute($updateQuery, $updateParams);
        //    return true; // La cuenta se verificó correctamente
        //} else {
        //    return false; // Código de verificación inválido
        //}
    }
}

?>
