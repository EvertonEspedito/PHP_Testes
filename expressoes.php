<?php 
    //$teste = 'Everton';

    //preg_match('/(.*?)ton/',$teste,$retorno );
    //echo $retorno[1];
    echo 'validação de CPF:';
    function cpfValido($cpf){
        $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';#EXPRESSÃ PARA CPF: 000.000,000-00
        return preg_match($expressao, $cpf);
    }
    if (isset($_POST['acao'])) {
        $cpf = $_POST['CPF'];
        if (cpfValido($cpf)) {
            echo' O CPF é válido! ';
        }else{
            echo('O CPF não é válido!');
        }
    }
?> 

<form action="" method="post">
    <input type="text" name="CPF">
    <input name="acao" type="submit">
</form>

