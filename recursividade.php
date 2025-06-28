<?php 
    teste();
    function teste() {
        static $i = 0;
        echo 'Olá Mundo';
        $i++;
        if ($i < 3) {
            teste();
        }
    }
?>