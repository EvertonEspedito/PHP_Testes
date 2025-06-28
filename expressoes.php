<?php 
    $teste = 'Everton';

    preg_match('/(.*?)ton/',$teste,$retorno );
    echo $retorno[1];
?> 
PAREI NO CPF