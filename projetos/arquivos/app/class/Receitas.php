<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 11/10/2018
 * Time: 08:37
 */

class Receitas {

    private $receitas_id;
    private $competencia;
    private $conta;
    private $cod_terceiro;
    private $classificador;
    private $nome_conta;
    private $centro_custo;
    private $saldo_inicial;
    private $debito;
    private $credito;
    private $saldo_final;


    public function getReceitasId()
    {
        return $this->receitas_id;
    }

    public function setReceitasId($receitas_id)
    {
        $this->receitas_id = $receitas_id;
    }

    public function getCompetencia()
    {
        return $this->competencia;
    }

    public function setCompetencia($competencia)
    {
        $this->competencia = $competencia;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }

    public function getCodTerceiro()
    {
        return $this->cod_terceiro;
    }

    public function setCodTerceiro($cod_terceiro)
    {
        $this->cod_terceiro = $cod_terceiro;
    }

    public function getClassificador()
    {
        return $this->classificador;
    }

    public function setClassificador($classificador)
    {
        $this->classificador = $classificador;
    }

    public function getNomeConta()
    {
        return $this->nome_conta;
    }

    public function setNomeConta($nome_conta)
    {
        $this->nome_conta = $nome_conta;
    }

    public function getCentroCusto()
    {
        return $this->centro_custo;
    }

    public function setCentroCusto($centro_custo)
    {
        $this->centro_custo = $centro_custo;
    }

    public function getSaldoInicial()
    {
        return $this->saldo_inicial;
    }

    public function setSaldoInicial($saldo_inicial)
    {
        $this->saldo_inicial = $saldo_inicial;
    }

    public function getDebito()
    {
        return $this->debito;
    }

    public function setDebito($debito)
    {
        $this->debito = $debito;
    }

    public function getCredito()
    {
        return $this->credito;
    }

    public function setCredito($credito)
    {
        $this->credito = $credito;
    }

    public function getSaldoFinal()
    {
        return $this->saldo_final;
    }

    public function setSaldoFinal($saldo_final)
    {
        $this->saldo_final = $saldo_final;
    }

    public function loadById($id) {
        $sql = new Sql();

        $results = $sql->select("SELECT receitas_id, competencia, conta, cod_terceiro, classificador, nome_conta, centro_custo, 
            saldo_inicial, debito, credito, saldo_final FROM receitas WHERE receitas_id = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public static function getList() {
        $sql = new Sql();

        return $sql->select("SELECT receitas_id, competencia, conta, cod_terceiro, classificador, nome_conta, centro_custo, saldo_inicial, debito, credito, saldo_final FROM receitas r ORDER BY classificador");
    }

    public static function search($reg_codigo, $competencia) {

        $sql = new Sql();

        return $sql->select("SELECT receitas_id, competencia, conta, cod_terceiro, classificador, nome_conta, 
            centro_custo, saldo_inicial, debito, credito, saldo_final
            FROM   receitas r
                   INNER JOIN receitas_grupo g ON reg_codigo = left(classificador, 4)
            WHERE  reg_codigo = :GRUPO  and competencia = :COMPETENCIA", array(
                ":GRUPO"=>$reg_codigo,
                ":COMPETENCIA"=>$competencia
        ));
    }

    public function setData($data) {

        $this->setReceitasId($data['receitas_id']);
        $this->setCompetencia($data['competencia']);
        $this->setConta($data['conta']);
        $this->setCodTerceiro($data['cod_terceiro']);
        $this->setClassificador($data['classificador']);
        $this->setNomeConta($data['nome_conta']);
        $this->setCentroCusto($data['centro_custo']);
        $this->setSaldoInicial($data['saldo_inicial']);
        $this->setDebito($data['debito']);
        $this->setCredito($data['credito']);
        $this->setSaldoFinal($data['saldo_final']);
    }

    public function insert() {

        $sql = new Sql();

        $results = $sql->select("CALL sp_receitas_insert(:COMPETENCIA, :CONTA, :COD_TERCEIRO, 
                    :CLASSIFICADOR, :NOME_CONTA, :CENTRO_CUSTO, :SALDO_INICIAL, :DEBITO, :CREDITO, :SALDO_FINAL)", array(
            ':COMPETENCIA'=>$this->getCompetencia(),
            ':CONTA'=>$this->getConta(),
            ':COD_TERCEIRO'=>$this->getCodTerceiro(),
            ':CLASSIFICADOR'=>$this->getClassificador(),
            ':NOME_CONTA'=>$this->getNomeConta(),
            ':CENTRO_CUSTO'=>$this->getCentroCusto(),
            ':SALDO_INICIAL'=>$this->getSaldoInicial(),
            ':DEBITO'=>$this->getDebito(),
            ':CREDITO'=>$this->getCredito(),
            ':SALDO_FINAL'=>$this->getSaldoFinal()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }

    }

    public function __construct($competencia="", $conta="", $cod_terceiro="", $classificador="", $nome_conta="",
                                $centro_custo="", $saldo_inicial="", $debito="", $credito="", $saldo_final= "") {

        $this->setCompetencia($competencia);
        $this->setConta($conta);
        $this->setCodTerceiro($cod_terceiro);
        $this->setClassificador($classificador);
        $this->setNomeConta($nome_conta);
        $this->setCentroCusto($centro_custo);
        $this->setSaldoInicial(str_replace(',', '.', str_replace('.','', $saldo_inicial)));
        $this->setDebito(str_replace(',', '.', str_replace('.','', $debito)));
        $this->setCredito(str_replace(',', '.', str_replace('.','', $credito)));
        $this->setSaldoFinal(str_replace(',', '.', str_replace('.','', $saldo_final)));

    }

    public function __toString()
    {

        return json_encode(array(
            "receitas_id"=>$this->getReceitasId(),
            "competencia"=>$this->getCompetencia(),
            "conta"=>$this->getConta(),
            "cod_terceiro"=>$this->getCodTerceiro(),
            "classificador"=>$this->getClassificador(),
            "nome_conta"=>$this->getNomeConta(),
            "centro_custo"=>$this->getCentroCusto(),
            "saldo_inicial"=>$this->getSaldoInicial(),
            "debito"=>$this->getDebito(),
            "credito"=>$this->getCredito(),
            "saldo_final"=>$this->getSaldoFinal()

        ));
    }

}