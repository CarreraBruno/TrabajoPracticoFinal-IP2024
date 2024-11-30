<?php
    //TRABAJO PRÁCTICO FINAL - INTRODUCCIÓN A LA PROGRAMACIÓN
    //Integrantes:
    //  Abril Gavilan FAI-5163
    //  Bruno Carrera FAI-4912

    // FUNCIONES:
    //a)Realizar una carga automática de la matriz de temperaturas con los datos propuestos por la cátedra.
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

    //b) Realiza una carga manual de la matriz de temperaturas
    function cargaManual() {
        $matrizManual = [];
        echo "Ingrese los valores de temperatura manualmente:\n";
        for ($año = 0; $año < 10; $año++) {
            $añoActual = 2014 + $año; // Año correspondiente
            echo "  -> Año $añoActual:\n";
            for ($mes = 0; $mes < 12; $mes++) {
                $mesNombre = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
                $esValido = false; // Bandera de validación
                while (!$esValido) {
                    echo "      . Mes {$mesNombre[$mes]}: ";
                    $valTemperatura = trim(fgets(STDIN));
                    if (is_numeric($valTemperatura)) {
                        $matrizManual[$añoActual][$mesNombre[$mes]] = (int)$valTemperatura;
                        $esValido = true; // Se cambia la bandera si el valor es válido
                    } else {
                        echo "  Por favor, ingrese un valor numérico válido.\n";
                    }
                }
            }
        }
        echo "Carga manual completada.\n";
        return $matrizManual;
    }

    //c) Mostrar el contenido de la matriz por filas y columnas.
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
            echo "En $mes del $anio, la temperatura fue de " . $temperaturas[$anio][$mes] . " grados. \n";
        }
    }

    //e) Dado un año, se mostraran las temperaturas de todos los meses
    function mostrarTodasLasTemperaturasAnio($temperaturas, $anio) {
        if (isset($temperaturas[$anio])) {
            echo "Se muestran las temperaturas del año: $anio\n";
            foreach ($temperaturas[$anio] as $mes => $temperatura) {
                echo "  - $mes: $temperatura\n";
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
                echo "  - $anio: $temperatura\n";
                $totalProm += $temperatura;
                $cantTemps++;
            }
        }

        if ($cantTemps > 0) {
            $promedio = $totalProm / $cantTemps;
            echo "El promedio de temperaturas del mes $mes es: $promedio\n";
        }
    }

    //g) Hallar las temperaturas máximas y mínimas, indicando año y mes a los que corresponden. Si el máximo o mínimo se repite, mostrar el primero encontrado.
    function tempsMaxYMin($temperaturas) {
        foreach ($temperaturas as $anio => $meses) {
            $tempMax = 0;
            $tempMin = 1000000;
            $mesMax = "";
            $mesMin = "";

            foreach ($meses as $mes => $temperatura) {
                if ($temperatura > $tempMax) {
                    $tempMax = $temperatura;
                    $mesMax = $mes;
                }
                if ($temperatura < $tempMin) {
                    $tempMin = $temperatura;
                    $mesMin = $mes;
                }
            }
            echo "Año $anio:\n";
            echo "  - Temperatura máxima: $tempMax grados en el mes de $mesMax.\n";
            echo "  - Temperatura mínima: $tempMin grados en el mes de $mesMin.\n";
        }
    }

    //h) Crear y mostrar un arreglo bidimensional con los datos de primavera (oct-nov-dic) de todos los años
    function mostrarPrimavera($temperaturas) {
        $mesesPrimavera = ["octubre", "noviembre", "diciembre"];
        $primavera = [];
    
        foreach ($temperaturas as $anio => $meses) {
            foreach ($mesesPrimavera as $mes) {
                if (isset($meses[$mes])) {
                    $primavera[$anio][$mes] = $meses[$mes];
                }
            }
        }
    
        echo "Temperaturas de primavera (octubre, noviembre, diciembre):\n";
        foreach ($primavera as $anio => $meses) {
            echo "  -> Año $anio:\n";
            foreach ($meses as $mes => $temperatura) {
                echo "      . $mes: $temperatura\n";
            }
        }
    
        return $primavera;
    }

    //i) Crear y mostrar un arreglo bidimensional con los datos de los últimos 5 años de invierno (jul-ago-sep)
    function mostrarInviernoUltimos5Anios($temperaturas) {
        $mesesInvierno = ["julio", "agosto", "septiembre"];
        $aniosInvierno = [2019, 2020, 2021, 2022, 2023];
        $inviernoDatos = [];
        
        foreach ($aniosInvierno as $anio) {
            if (isset($temperaturas[$anio])) {
                foreach ($mesesInvierno as $mes) {
                    if (isset($temperaturas[$anio][$mes])) {
                        $inviernoDatos[$anio][$mes] = $temperaturas[$anio][$mes];
                    } else {
                        $inviernoDatos[$anio][$mes] = "-"; // Si no hay datos, colocamos un guion
                    }
                }
            }
        }
        
        // Mostramos los datos de invierno
        echo "\nDatos de invierno (julio, agosto, septiembre) para los últimos 5 años:\n";
        echo str_pad("Año", 6) . str_pad("Julio", 10) . str_pad("Agosto", 10) . str_pad("Septiembre", 12) . "\n";
        echo str_repeat("-", 40) . "\n";
        
        foreach ($inviernoDatos as $anio => $meses) {
            echo str_pad($anio, 6);
            foreach ($mesesInvierno as $mes) {
                echo str_pad($meses[$mes], 10);
            }
            echo "\n";
        }
    
        return $inviernoDatos;
    }

    //j)Crear un arreglo asociativo que contenga en la primera posición con clave “completa” la matriz completa de temperaturas, en la segunda posición con clave “primavera” la matriz creada en el inciso h., y en la tercera posición con clave “invierno” la matriz creada en el inciso i.
    function crearArregloAsociativo($matrizCompleta, $datosPrimavera, $datosInvierno) {
        $arregloAsociativo = [
            "completa" => $matrizCompleta,
            "primavera" => $datosPrimavera,
            "invierno" => $datosInvierno
        ];
    
        return $arregloAsociativo;
    }

    // Funcion para seleccionar opcion en el menu principal
    function seleccionarOpcion(){
        //INT $opcion
            echo "\n Menú de opciones: 
            1) Realizar una carga automática de la matriz de temperaturas con los datos propuestos por la cátedra 
            2) Realizar una carga manual de la matriz de temperaturas
            3) Mostrar contenido de la matriz por filas y columnas
            4) Mostrar dado un año y un mes, el valor de la temperatura correspondiente
            5) Mostrar para un determinado año, las temperaturas de todos los meses 
            6) Mostrar para un mes determinado, las temperaturas de todos los años y el promedio
            7) Hallar las temperaturas máximas y mínimas, indicando su respectivo mes y año
            8) Mostrar los datos de primavera de todos los años
            9) Mostrar los datos de los últimos 5 años de invierno
            10) Mostrar los datos de la opcion 1 o 2, los datos de la opcion 8 y los datos de la opción 9
            11) salir \n";
            echo"\n";
            echo "*************************************************************************************** \n";
            echo "IMPORTANTE: el programa no funcionará a menos que se cargue una matriz (opciones 1 o 2)\n";
            echo "*************************************************************************************** \n";
            echo"Seleccione alguna opción: ";
            $opcion=intval(trim(fgets(STDIN)));
        return $opcion;
    }
//--------------------------------------------------------------------------------------------------------------------------
    //ALGORTIMO PRINCIPAL
    //Inicialización de variables:
    $llamaMatrizAutomatica=cargaAutomatica();
    $opcion1Seleccionada = false;
    $opcion2Seleccionada = false;

    do {
        $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1: 
                //Realizar una carga automática de la matriz de temperaturas
                echo"La matriz de temperaturas es la siguiente:\n";
                print_r($llamaMatrizAutomatica);
                $opcion1Seleccionada = true;
                break;

            case 2: 
                //Realizar una carga manual de la matriz de temperaturas
                $cargaMatrizManual=cargaManual();
                $opcion2Seleccionada = true;
                break;

            case 3:
                //Muestra el contenido de la matriz por filas y columnas
                if ($opcion1Seleccionada == true){
                    mostrarMatriz($llamaMatrizAutomatica);
                }elseif($opcion2Seleccionada == true){
                    mostrarMatriz($cargaMatrizManual);
                }else{
                    echo"Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;

            case 4:
                //Muestra, dado un año y un mes, el valor de temperatura correspondiente
                echo "Ingrese el año: ";
                $anio = intval(trim(fgets(STDIN)));
                
                echo "Ingrese el mes: ";
                $mes = strtolower(trim(fgets(STDIN))); // Convertir a minúsculas para consistencia
                
                if ($opcion1Seleccionada) {
                    mostrarTemperaturaSegunAnioMes($llamaMatrizAutomatica, $anio, $mes);
                } elseif ($opcion2Seleccionada) {
                    mostrarTemperaturaSegunAnioMes($cargaMatrizManual, $anio, $mes);
                } else {
                    echo "Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;
            
            case 5:
                //Muestra para un determinado año, las temperaturas de todos los meses
                echo "Ingrese el año: ";
                $anio = intval(trim(fgets(STDIN)));
                
                if ($opcion1Seleccionada) {
                    mostrarTodasLasTemperaturasAnio($llamaMatrizAutomatica, $anio);
                } elseif ($opcion2Seleccionada) {
                    mostrarTodasLasTemperaturasAnio($cargaMatrizManual, $anio);
                } else {
                    echo "Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;
            
            case 6:
                //Muestra para un mes determinado, las temperaturas de todos los años y el promedio
                echo "Ingrese el mes: ";
                $mes = strtolower(trim(fgets(STDIN))); // Convertir a minúsculas para consistencia
                
                if ($opcion1Seleccionada) {
                    mostrarTemperaturasPorMes($llamaMatrizAutomatica, $mes);
                } elseif ($opcion2Seleccionada) {
                    mostrarTemperaturasPorMes($cargaMatrizManual, $mes);
                } else {
                    echo "Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;
            
            case 7:
                //Halla las temperaturas máximas y mínimas, indicando año y mes a los que corresponden. Si el máximo o mínimo se repite, muestra el primero encontrado
                if ($opcion1Seleccionada) {
                    tempsMaxYMin($llamaMatrizAutomatica);
                } elseif ($opcion2Seleccionada) {
                    tempsMaxYMin($cargaMatrizManual);
                } else {
                    echo "Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;    

            case 8:
                //Muestra un arreglo bidimensional con los datos de primavera (oct-nov-dic) de todos los años
                if ($opcion1Seleccionada) {
                    $datosPrimavera = mostrarPrimavera($llamaMatrizAutomatica);
                } elseif ($opcion2Seleccionada) {
                    $datosPrimavera = mostrarPrimavera($cargaMatrizManual);
                } else {
                    echo "Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;

            case 9:
                //muestra un arreglo bidimensional con los datos de los últimos 5 años de invierno (jul-ago-sep)
                if ($opcion1Seleccionada) {
                    $datosInvierno = mostrarInviernoUltimos5Anios($llamaMatrizAutomatica);
                } elseif ($opcion2Seleccionada) {
                    $datosInvierno = mostrarInviernoUltimos5Anios($cargaMatrizManual);
                } else {
                    echo "Primero debe cargar la matriz (opción 1 o 2).\n";
                }
                break;
                
            case 10:
                //Crea un arreglo asociativo que contenga en la primera posición con clave “completa” la matriz completa de temperaturas, en la segunda posición con clave “primavera” la matriz creada en el inciso h., y en la tercera posición con clave “invierno” la matriz creada en el inciso i.
                if (($opcion1Seleccionada || $opcion2Seleccionada) && isset($datosPrimavera) && isset($datosInvierno)) {
                    $matrizSeleccionada = $opcion1Seleccionada ? $llamaMatrizAutomatica : $cargaMatrizManual;
                
                    // Crear el arreglo asociativo
                    $arregloAsociativo = crearArregloAsociativo($matrizSeleccionada, $datosPrimavera, $datosInvierno);
                
                    // Mostrar el arreglo asociativo
                    echo "Arreglo Asociativo:\n";
                    echo "Matriz Completa:\n";
                    mostrarMatriz($arregloAsociativo["completa"]);
                    echo "\nDatos de Primavera:\n";
                    print_r($arregloAsociativo["primavera"]);
                    echo "\nDatos de Invierno:\n";
                    print_r($arregloAsociativo["invierno"]);
                } else {
                    echo "Debe cargar los datos de primavera (opción 8) e invierno (opción 9) antes de seleccionar esta opción.\n";
                }
                break; 
        }  
    }while ($opcion!=11);    

?>