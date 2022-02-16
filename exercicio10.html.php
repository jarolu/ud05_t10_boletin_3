<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo (by MARCA)</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="dia">Día:</label>
        <input type="number" min="1" max="31" name="dia" 
            value="<?php echo (isset($_REQUEST['dia'])?$_REQUEST['dia']:'')?>"
        ><br>
        <label for="mes">Mes:</label>        
        <select name="mes">
            <option value="01" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="01"){
                        echo "selected";
                    }
                ?>            
            >Xaneiro</option>
            <option value="02" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="02"){
                        echo "selected";
                    }
                ?>
            >Febreiro</option>
            <option value="03" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="03"){
                        echo "selected";
                    }
                ?>
            >Marzo</option>
            <option value="04" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="04"){
                        echo "selected";
                    }
                ?>
            >Abril</option>
            <option value="05" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="05"){
                        echo "selected";
                    }
                ?>
            >Maio</option>
            <option value="06" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="06"){
                        echo "selected";
                    }
                ?>
            >Xuño</option>
            <option value="07" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="07"){
                        echo "selected";
                    }
                ?>
            >Xullo</option>
            <option value="08" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="08"){
                        echo "selected";
                    }
                ?>
            >Agosto</option>
            <option value="09" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="09"){
                        echo "selected";
                    }
                ?>
            >Setembro</option>
            <option value="10" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="10"){
                        echo "selected";
                    }
                ?>
            >Outubro</option>
            <option value="11" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="11"){
                        echo "selected";
                    }
                ?>
            >Novembro</option>
            <option value="12" 
                <?php 
                    if(isset($_REQUEST['dia']) && $_REQUEST['dia']=="12"){
                        echo "selected";
                    }
                ?>
            >Decembro</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(!isset($_REQUEST['dia']) || !isset($_REQUEST['mes'])){
            echo "<p>Tes que escoller o día e o mes.</p>";
        }else{
            $mes = $_REQUEST['mes'];
            $dia = $_REQUEST['dia'];
            $horoscopo = "";
            switch ($mes) {
                case '01':
                    if($dia<20){
                        $horoscopo = "Capricornio";
                    }else{
                        $horoscopo = "Acuario";
                    }
                    break;

                case '02':
                    if($dia<19){
                        $horoscopo = "Acuario";
                    }else{
                        $horoscopo = "Piscis";
                    }
                    break;
                case '03':
                    if($dia<21){
                        $horoscopo = "Piscis";
                    }else{
                        $horoscopo = "Aries";
                    }
                    break;
                case '04':
                    if($dia<20){
                        $horoscopo = "Aries";
                    }else{
                        $horoscopo = "Tauro";
                    }
                    break;
                case '05':
                    if($dia<22){
                        $horoscopo = "Tauro";
                    }else{
                        $horoscopo = "Géminis";
                    }
                    break;
                case '06':
                    if($dia<22){
                        $horoscopo = "Géminis";
                    }else{
                        $horoscopo = "Cáncer";
                    }
                    break;
                case '07':
                    if($dia<23){
                        $horoscopo = "Cáncer";
                    }else{
                        $horoscopo = "Leo";
                    }
                    break;
                case '08':
                    if($dia<24){
                        $horoscopo = "Leo";
                    }else{
                        $horoscopo = "Virgo";
                    }
                    break;
                case '09':
                    if($dia<23){
                        $horoscopo = "Virgo";
                    }else{
                        $horoscopo = "Libra";
                    }
                    break;
                case '10':
                    if($dia<23){
                        $horoscopo = "Libra";
                    }else{
                        $horoscopo = "Escorpio";
                    }
                    break;
                case '11':
                    if($dia<21){
                        $horoscopo = "Escorpio";
                    }else{
                        $horoscopo = "Sagitario";
                    }
                    break;
                case '12':
                    if($dia<22){
                        $horoscopo = "Sagitario";
                    }else{
                        $horoscopo = "Capricornio";
                    }
                    break;
                
                
            }
            echo "<p>O teu horoscopo segundo varias fontes consultadas, mais ou menos é: $horoscopo</p>";

        }
    ?>
    
</body>
</html>