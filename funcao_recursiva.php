<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 08:29
 */

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados'=> array(
            //Inicio: Diretor Comercial
            array(
                //Inicio: Gerente de Vendas
                'nome_cargo'=>'Gerente de Vendas'
            )
            //Terminio: Gerente de Vendas
        )
    ),

    //Termino: Diretor Comercial
    //Inicio: Diretor Financeiro

    array(
        'nome_cargo'=>'Diretor Financeiro',
        'subordinados'=> array(
            //inicio: Gerente de Contas a Pagar
            array(
                'nome_cargo'=>'Gerente de Contas a Pagar',
                'subordinados'=>array(
                    //Inicio:  Supervisor de pagamentos
                    array(
                        'nome_cargo'=>'Supervisor de Pagamenots'
                    )
                    //termino: supervisor de pagamentos
                )
            ),

            // Termino: Gerente de Contas a Pagar
            //Inicio: Gerente de Compras
            array(
                'nome_cargo'=>'Gerente de Compras',
                'subordinados'=>array(
                    //Inicio: Supervisor de Suprimenots
                    array(
                        'nome_cargo'=>'Supervisor de Suprimentos',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Comprador'
                            )
                        )
                    )
                    //Termino: Supervisor de Suprimentos
                )
            )
            //Termino: Gerente de Compras
        )
    )
    //Termino: Diretor Financeiro
);

function exibe($cargos){
    //cargoS pq vai receber um array
    $html = '<ul>';

    foreach ($cargos as $cargo){

        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }
        $html .= "</li>";





    }


    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);