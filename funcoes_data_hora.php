<?php 
// Modifica o fuso horário a ser utilizado.
date_default_timezone_set('UTC');


// Exibe algo coisa como: Monday
echo date("l");

// Exibe algo como: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

// Exibe: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* Utiliza as constantes do parâmetro de formato */
// Exibe algo como: Mon, 15 Aug 2005 15:12:46 UTC
echo date(DATE_RFC822);

// Exibe algo como: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>