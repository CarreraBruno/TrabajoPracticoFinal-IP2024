<?php
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

    
    function tempsMaxYMin($temperaturas) {
        $tempMax = 0;
        $tempMin = 1000000;
        $anioMax = 0;
        $anioMin = 0;
        $mesMax = "";
        $mesMin = "";

        foreach ($temperaturas as $anio => $tempsMes) {
            foreach ($tempsMes as $mes => $temperatura) {
                if ($temperatura > $tempMax) {
                    $tempMax = $temperatura;
                    $anioMax = $anio;
                    $mesMax = $mes;
                }
                if ($temperatura < $tempMin) {
                    $tempMin = $temperatura;
                    $anioMin = $anio;
                    $mesMin = $mes;
                }
            }
        }

        echo "Temperatura máxima: $tempMax (Año: $anioMax, Mes: $mesMax)\n";
        echo "Temperatura mínima: $tempMin (Año: $anioMin, Mes: $mesMin)\n";
    }
?>