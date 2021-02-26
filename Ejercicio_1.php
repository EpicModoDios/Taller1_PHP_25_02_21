

<?php

    //1.Programa que lea un valor de precio base y calcule su impuesto, si es valor es mayor 
    //de 150.000 se le aplicará un 19% de impuestos, en caso contrario se le aplicará un 16%.
        $precio = (int) 250000;
        if ( $precio > 150000 ) {
            $impuesto1 = (float) ( ( 19 * $precio ) / 100 );
            print_r("El impuesto aplicado al producto es: ".$impuesto1);
        }
        elseif ($precio < 150000) {
            $impuesto1 = (float) ( ( 16 * $precio ) / 100 );
            print_r("El impuesto aplicado al producto es: ".$impuesto1);
        }
        else {
            print_r("Ingrese un precio valido");
        }



?>