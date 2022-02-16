<?php
    header('Content-Type: text/html; charset=UTF-8'); 

    $horario = array(
        '8:50 - 9:40' => array('IAW','SAD','ASX','ASX','IAW'),
        '9:40 - 10:30' => array('IAW','SAD','EIEA','ASX','SRI'),
        '10:30 - 11:20' => array('SRI','SAD','EIEA','ASX','SRI'),
        '11:20 - 12:00' => array('Recreo'),
        '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
        '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
        '13:40 - 14:30' => array('ASX','ASO','IAW','SRI','SAD'),
        '14:30 - 16:00' => array('Mediodía'),
        '16:00 - 16:50' => array('','SRI','','ASO',''),
        '16:50 - 17:40' => array('','SRI','','ASO',''),
        '17:40 - 18:30' => array('','SRI','','ASO','')
    );
   

    $dia = isset($_REQUEST["dia"])?$_REQUEST["dia"]:"";
    $hora = isset($_REQUEST["hora"])?$_REQUEST["hora"]:"";

    if($dia=="" || $hora==""){
        echo "<p>Tes que escoller o día e a hora.</p>";
    }else if($dia<5 && $dia>=0 && $hora!=""){        
        echo "<p>A hora escollida é $hora.</p>";
        echo "<p>O día escollido é $dia.</p>";
        $horarioDaHoraEscollida = $horario[$hora];
        echo "<p>Nese horario a clase é: ".$horarioDaHoraEscollida[$dia]."</p>";
    }else{
        echo "<p>O formato da hora ou do día non é correcto.</p>";
    }





?>