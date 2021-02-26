

<?php
//6.Determina si un carácter de entrada es una letra minúscula, una letra mayúscula o un
//número. Si estas tres condiciones son false, el carácter no es un carácter alfanumérico. 

    $caracter = false ;
    if (ctype_upper($caracter) || ctype_lower($caracter) ||  is_numeric($caracter)) {
        print_r("El caracter es un caracter alfanumercio");
    }
    else {
        print_r("El caracter no es un caracter alfanumerico");
    }
?>