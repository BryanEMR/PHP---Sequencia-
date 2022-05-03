<?php
    function SequenciaCrescente(array $array){
        $contadorDeEntrada = 0; $contador=0;
        $anterior = '';
        foreach($array as $numero){
            if('' == $anterior){
                $anterior =  $numero;
                $contador++;
            }elseif($contador == 1 && $anterior >= $numero){
                $anterior =  $numero;
                $contadorDeEntrada++;
                $contador++;
            }else{
                $contador++;
                if($anterior >= $numero){
                    $contadorDeEntrada++;
                }else{
                    $anterior =  $numero;
                }

            }
        }
        return $contadorDeEntrada <= 1 ? 'true':'false';

    }
?>