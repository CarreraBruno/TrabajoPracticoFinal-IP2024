<?php
//TRABAJO PRÁCTICO FINAL - INTRODUCCIÓN A LA PROGRAMACIÓN
//Integrantes:
//  Abril Gavilan FAI-5163
//  Bruno Carrera FAI-4912

    echo "Ingrese el numero de lo que desea realizar: ";
    echo "\n";
    echo "  1) Realizar una carga automatica de la matriz de temperaturas.";
    echo "\n";
    echo "  2) Realizar una carga manual de la matriz de temperaturas.";
    echo "\n";
    echo "  3) Mostrar el contenido de la matriz por filas y columnas.";
    echo "\n";
    echo "  4) Dado un año y un mes, devolver el valor de temperatura correspondiente.";
    echo "\n";
    echo "  5) Dado un año, se muestran las temperaturas de los 12 meses.";
    echo "\n";
    echo "  6) Dado un mes, se hace un promedio con las temperaturas de todos los años.";
    echo "\n";
    echo "  7) Mostrar las temperaturas minimas y maximas de cada año.";
    echo "\n";
    echo "  8) Mostrar matrices: ";
    echo "\n";
    echo "      8.1) Escribir 'completa' para visualizar la matriz completa de las temperaturas.";
    echo "\n";    
    echo "      8.2) Escribir 'primavera' para visualizar la matriz de las temperaturas de primavera(oct-nov-dic) de todos los años.";
    echo "\n";
    echo "      8.2) Escribir 'invierno' para visualizar la matriz de las temperaturas de invierno(jul-ago-sep) de los ultimos 5 años.";
    echo "\n";
    $opcion = trim(fgets(STDIN));

    function cargaAutomatica (){
        $tempAuto = [];

        $anio2014 = ["enero" => 30, "febrero" => 28, "marzo" => 26, "abril" => 22, "mayo" => 18, "junio" => 12, "julio" => 10, "agosto" => 14, "septiembre" => 17, "octubre" => 20, "noviembre" => 25, "diciembre" => 29];
        $anio2015 = ["enero" => 33, "febrero" => 30, "marzo" => 27, "abril" => 22, "mayo" => 19, "junio" => 13, "julio" => 11, "agosto" => 15, "septiembre" => 18, "octubre" => 21, "noviembre" => 26, "diciembre" => 31];
        $anio2016 = ["enero" => 34, "febrero" => 32, "marzo" => 29, "abril" => 21, "mayo" => 18, "junio" => 14, "julio" => 12, "agosto" => 16, "septiembre" => 18, "octubre" => 21, "noviembre" => 27, "diciembre" => 32];
        $anio2017 = ["enero" => 33, "febrero" => 31, "marzo" => 28, "abril" => 22, "mayo" => 18, "junio" => 13, "julio" => 11, "agosto" => 14, "septiembre" => 17, "octubre" => 22, "noviembre" => 26, "diciembre" => 31];
        $anio2018 = ["enero" => 32, "febrero" => 30, "marzo" => 28, "abril" => 22, "mayo" => 17, "junio" => 12, "julio" => 9, "agosto" => 13, "septiembre" => 16, "octubre" => 20, "noviembre" => 24, "diciembre" => 30];
        $anio2019 = ["enero" => 32, "febrero" => 30, "marzo" => 27, "abril" => 23, "mayo" => 19, "junio" => 14, "julio" => 12, "agosto" => 11, "septiembre" => 17, "octubre" => 23, "noviembre" => 25, "diciembre" => 29];
        $anio2020 = ["enero" => 31, "febrero" => 29, "marzo" => 28, "abril" => 21, "mayo" => 19, "junio" => 13, "julio" => 10, "agosto" => 12, "septiembre" => 16, "octubre" => 22, "noviembre" => 27, "diciembre" => 29];
        $anio2021 = ["enero" => 30, "febrero" => 28, "marzo" => 26, "abril" => 20, "mayo" => 16, "junio" => 12, "julio" => 11, "agosto" => 13, "septiembre" => 17, "octubre" => 21, "noviembre" => 28, "diciembre" => 30];
        $anio2022 = ["enero" => 31, "febrero" => 29, "marzo" => 27, "abril" => 21, "mayo" => 17, "junio" => 12, "julio" => 11, "agosto" => 15, "septiembre" => 18, "octubre" => 22, "noviembre" => 26, "diciembre" => 30];
        $anio2023 = ["enero" => 32, "febrero" => 30, "marzo" => 27, "abril" => 20, "mayo" => 16, "junio" => 13, "julio" => 13, "agosto" => 15, "septiembre" => 19, "octubre" => 23, "noviembre" => 28, "diciembre" => 31];
    
        $tempAuto[0]=$anio2014;
        $tempAuto[1]=$anio2015;
        $tempAuto[2]=$anio2016;
        $tempAuto[3]=$anio2017;
        $tempAuto[4]=$anio2018;
        $tempAuto[5]=$anio2019;
        $tempAuto[6]=$anio2020;
        $tempAuto[7]=$anio2021;
        $tempAuto[8]=$anio2022;
        $tempAuto[9]=$anio2023;

        return $tempAuto;
    }

    function cargarManualmente($cantAniosManual, $anioInicio){
        $temperaturas= [];
        $tempIngresada = 0;
        for ($i = 0; $i < $cantAniosManual +1; $i++){
            for ($j = 0; $j < 12; $j++){
                echo "Ingrese la temperatura para el año ". $anioInicio++ . " mes ". $j++;
                $tempIngresada = trim(fgets(STDIN));
                $temperaturas[$j] = $tempIngresada;
            }
        }    
        return $temperaturas;
    }
        
?>