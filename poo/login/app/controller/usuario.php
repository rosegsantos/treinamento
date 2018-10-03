<?php

require_once "dao/usuarioDao.php";
require_once "model/usuarioModel.php";

Class Usuario{
    /**
     * @throws Exception
     * @var usuarioDao
     */
    private $usuarioDao;

    /**
     * @throws Exception
     * @var usuarioModel
     */
    private $usuarioModel;


    /**
     * @method __construct
     */
    public  function __construct(){
        //Instanciamos usuarioDao no construtor.
        $this->usuarioDao = new UsuarioDao();
    }

    /**
     * @method doLogin
     * Metodo responsavel por realizar o login do usuario
     */
    public function doLogin(){
        // Criamos um novo usuario, baseado no modelo criado
        $this->usuarioModel = new usuarioModel();

        // Setamos os atributos email e senha com os dados vindos do formulario
        $this->usuarioModel->__set("email", $_POST["usuario"]);
        $this->usuarioModel->__set("senha", $_POST["senha"]);

        // Chamamos o metodo doLogin de usuarioDao. Esse metodo retorna booleano por isso,
        // podemos usa-lo como condicao no if.
        // Caso seja true, daremos um echo em true para que o javascript visualize esse retorno
        if($this->usuarioDao->doLogin($this->usuarioModel)){
            echo "true";
            return;
        }

        // Caso o metodo doLogin retorne falso, daremos um echo false para retornar ao javascript.
        echo "false";
        return;
    }
}