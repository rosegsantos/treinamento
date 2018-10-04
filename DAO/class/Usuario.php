<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 02/10/2018
 * Time: 09:16
 */


class  Usuario {

    private $idUsuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($value){
        $this->idUsuario = $value;
    }

    public function getDesLogin(){
        return $this->deslogin;
    }

    public function setDesLogin($value){
        $this->deslogin = $value;
    }

    public function getDesSenha(){
        return $this->dessenha;
    }

    public function setDesSenha($value){
        $this->dessenha = $value;
    }

    public function getDtCadastro(){
        return $this->dtcadastro;
    }

    public function setDtCadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        //if(isset($results[0])
        if(count($results) > 0) {
            $this->setData($results[0]);
        }
    }


    public static function getList(){
        /* qdo usamos o this em um metodo nós amarramos no escopo da classe
           qdo não usamos é possível chamar o metodo sem instanciar a classe*/
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ));
    }

    public function login($login, $password){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        //if(isset($results[0])
        if(count($results) > 0) {
            $this->setData($results[0]);
        } else{

            throw new Exception("Login e/ou senha inválidos");

        }

    }

    public function  setData($data){

        $this->setIdUsuario($data['idusuario']);
        $this->setDesLogin($data['deslogin']);
        $this->setDesSenha($data['dessenha']);
        $this->setDtCadastro(new DateTime($data['dtcadastro']));

    }

    public function  insert(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(

            ':LOGIN'=>$this->getDesLogin(),
            ':PASSWORD'=>$this->getDesSenha()
        ));

        if (count($results) > 0 ){
            $this->setData($results[0]);
        }
    }

    public function update( $login, $password){

        $this->setDesLogin($login);
        $this->setDesSenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDesLogin(),
            ':PASSWORD'=>$this->getDesSenha(),
            ':ID'=>$this->getIdUsuario()

        ));
    }

    public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdUsuario()
        ));
    }

    public function  __construct($login="", $password=""){
        $this->setDesLogin($login);
        $this->setDesSenha($password);
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdUsuario(),
            "deslogin"=>$this->getDesLogin(),
            "dessenha"=>$this->getDesSenha(),
            "dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
        ));

    }
}
