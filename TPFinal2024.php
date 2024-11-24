<?php
//TRABAJO PRÁCTICO FINAL - INTRODUCCIÓN A LA PROGRAMACIÓN
//Integrantes:
//  Abril Gavilan FAI-5163
//  Bruno Carrera FAI-4912

    echo "Ingrese el numero de lo que desea realizar: \n";
    echo "  1) Realizar una carga automatica de la matriz de temperaturas.\n";
    echo "  2) Realizar una carga manual de la matriz de temperaturas.\n";
    echo "  3) Mostrar el contenido de la matriz por filas y columnas.\n";
    echo "  4) Dado un año y un mes, devolver el valor de temperatura correspondiente.\n";
    echo "  5) Dado un año, se muestran las temperaturas de los 12 meses.\n";
    echo "  6) Dado un mes, se hace un promedio con las temperaturas de todos los años.\n";
    echo "  7) Mostrar las temperaturas minimas y maximas de cada año.\n";
    echo "  8) Mostrar matrices: \n";
    echo "      8.1) Escribir 'completa' para visualizar la matriz completa de las temperaturas.\n";
    echo "      8.2) Escribir 'primavera' para visualizar la matriz de las temperaturas de primavera(oct-nov-dic) de todos los años.\n";
    echo "      8.3) Escribir 'invierno' para visualizar la matriz de las temperaturas de invierno(jul-ago-sep) de los ultimos 5 años.\n";
    echo "  0) Salir.\n";

    $opcion = trim(fgets(STDIN));

    // a) Realizar una carga automática de la matriz de temperaturas con los datos propuestos por la cátedra.

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
    
        $tempAuto[2014]=$anio2014;
        $tempAuto[2015]=$anio2015;
        $tempAuto[2016]=$anio2016;
        $tempAuto[2017]=$anio2017;
        $tempAuto[2018]=$anio2018;
        $tempAuto[2019]=$anio2019;
        $tempAuto[2020]=$anio2020;
        $tempAuto[2021]=$anio2021;
        $tempAuto[2022]=$anio2022;
        $tempAuto[2023]=$anio2023;

        return $tempAuto;
    }

    // b) Realizar una carga manual de la matriz de temperaturas.

    function cargaManual() {
        $temperaturas = array();
        $anios = array("2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022", "2023");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

        foreach ($anios as $anio) {
            echo "Ingrese la temperatura para el año $anio: \n";
            foreach ($meses as $mes) {
                echo "Mes $mes: ";
                $temperatura = trim(fgets(STDIN));
                $temperaturas[$anio][$mes] = $temperatura;
            }
        }

        return $temperaturas;
    }

    // c) Mostrar el contenido de la matriz por filas y columnas.
    function mostrarMatriz($matrizT) {
        $mesNombre = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        // Mostrar encabezado con los nombres de los meses
        echo str_pad("Año", 6); // Espacio para el título de las filas
        foreach ($mesNombre as $mes) {
            echo str_pad($mes, 10); // Ajustar ancho de columna para cada mes
        }
        echo "\n";
        echo str_repeat("-", 126) . "\n"; // Línea separadora
    
        // Mostrar los datos de la matriz
        foreach ($matrizT as $anio => $meses) { // Iterar por años y meses
            echo str_pad($anio, 6); // Mostrar el año
            foreach ($mesNombre as $mes) {
                // Validar si existe el mes en el array
                if (array_key_exists(strtolower($mes), $meses)) {
                    echo str_pad($meses[strtolower($mes)], 10); // Mostrar la temperatura
                } else {
                    echo str_pad("-", 10); // Mostrar guion si falta el dato
                }
            }
            echo "\n";
        }
    }

    //d) Dado un año  y un mes, se mostrará por pantalla la temperatura correspondiente
    function mostrarTemperaturaSegunAnioMes($temperaturas, $anio, $mes) {
        if (isset($temperaturas[$anio]) && isset($temperaturas[$anio][$mes])) {
            echo "En $mes del $anio, la temperatura fue de " . $temperaturas[$anio][$mes] . "\n";
        }
    }

    //e) Dado un año, se mostraran las temperaturas de todos los meses
    function mostrarTodasLasTemperaturasAnio($temperaturas, $anio) {
        if (isset($temperaturas[$anio])) {
            echo "Se muestran las temperaturas del año: $anio\n";
            foreach ($temperaturas[$anio] as $mes => $temperatura) {
                echo "  $mes: $temperatura\n";
            }
        }
    }
    
    //f) Dado un mes, se hace el promedio de las temperaturas de todos los años
    function mostrarTemperaturasPorMes($temperaturas, $mes) {
        $totalProm = 0;
        $cantTemps = 0;

        echo "En el mes de $mes, las temperaturas fueron de:\n";
        foreach ($temperaturas as $anio => $tempsMes) {
            if (isset($tempsMes[$mes])) {
                $temperatura = $tempsMes[$mes];
                echo "$anio: $temperatura\n";
                $totalProm += $temperatura;
                $cantTemps++;
            }
        }

        if ($cantTemps > 0) {
            $promedio = $totalProm / $cantTemps;
            echo "El promedio de temperaturas del mes $mes es: $promedio\n";
        }
    }

?>