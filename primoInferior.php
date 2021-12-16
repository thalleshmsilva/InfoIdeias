<?php
function primoInferior(int $num)
{   //Verificações
    if($num < 0)return 0; 
    if($num == 2 || $num == 1 || $num == 0)return 'Não há números primos inferiores';
    if($num == 3)return 2;

    $numPrimos = [];
    //percorrer números inferiores
    for($numero=3;$numero < $num;$numero++)
    {
        //verifica se é primo
        if(verificaPrimo($numero)){
            $numPrimos[] = $numero;
        }
    }
    
    return max($numPrimos);
}

function verificaPrimo($numero){
    for($div = 2;$div < $numero;$div++)
        {
            if(is_int($numero/$div))return false;
        }
    return true;
}
