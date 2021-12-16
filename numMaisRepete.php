<?php
function numMaisRepete(){
    $numeros = [];

    for($i=0;$i < 20;$i++)
    {
        $numeros[] = rand(1,10);
    }
    $quantidadeMaisrepete = max(array_count_values($numeros));
    $valorMaisRepete = array_search($quantidadeMaisrepete,array_count_values($numeros));

    echo "O número que mais se repete é o $valorMaisRepete.". PHP_EOL;
    echo "Ele se repete $quantidadeMaisrepete vezes". PHP_EOL;
}

numMaisRepete();