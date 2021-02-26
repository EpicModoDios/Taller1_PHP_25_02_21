

<?php
    //4.    El programa muestra primero una tabla de notas con sus equivalentes en el Standard Grading System o el
    //sistemautilizado en los Estados Unidos que va desde la A hasta la F. El programa preguntará al usuario su nota
    //y transformará ese resultado al equivalente en el Standard Grading System. También el programa dará una
    //pequeña pero valiosa recomendación al usuario respecto a su nivel de estudio y calidad como estudiante. 

    $nota = (int) 94;

        if ($nota<=100 && $nota >= 90){
            print_r("Su nota es: 'A'");
            echo ("<br>");
            print_r("Exceeds Proficiency");
        } else if ($nota<=89 && $nota>=80){
            print_r("Su nota es: 'B'");
            echo ("<br>");
            print_r("Demostrates Proficiency");
 
        } else if ($nota<=79 && $nota>=70){
            print_r("Su nota es: 'C'");
            echo ("<br>");
            print_r("Approaches Profiency");
            
        } else if ($nota<=69 && $nota>=60){
            print_r("Su nota es: 'D'");
            echo ("<br>");
            print_r("Falls Well Bellow Proficiency");
            
        } else if ($nota<=60){
            print_r("Su nota es: 'E'");
            echo ("<br>");
            print_r("Lacks all Proficiency");

        } else if ($nota === 0){
            print_r("Su nota es: 'E'");
            echo ("<br>");
            print_r("Not Attempt Made");

        } else {
            print_r("Ingrese Un Valor Correcto");
        }
?>