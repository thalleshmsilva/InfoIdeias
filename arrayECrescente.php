<?php

function verificarOrdemArray($array){
    $ultimoItem = null;
    
    foreach($array as $item){
        //se o item anterior for maior continua
        if($ultimoItem === null){
            $ultimoItem = $item;
            continue;
        }
        if($ultimoItem <= $item)
        {
            $ultimoItem = $item;
            continue;
        }else{
            return false;
        }
    }
    $ultimoItem = null;

    return 'passou';
}

function ordemCrescente($array){
    $tamanhoArray = count($array);
    for($i=0;$i < $tamanhoArray;$i++)
    {
        //percorrer cada posição e retirar uma
        $valorRetiradoArray = $array[$i];
        unset($array[$i]);
        //ordena array
        ksort($array);
        //vê se o array está em ordem crescente
        $result[] = verificarOrdemArray($array);
        $array[$i] = $valorRetiradoArray;
    }

    $r = array_search('passou',$result);
    if(strlen($r)> 0){
        return true;
    }else{
        return false;
    }
}

if(ordemCrescente([1,3,2,1]))
{
    echo 'Passou';
}else{
    echo 'Não passou';
}
