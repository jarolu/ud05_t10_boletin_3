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

            $dataConsultada = mktime(0,0,0,intval($mes),intval($dia));

            $calendarioHoroscopo = array(
                mktime(0,0,0,1,20) => "Capricornio",
                mktime(0,0,0,2,19) => "Acuario",
                mktime(0,0,0,3,21) => "Piscis",
                mktime(0,0,0,4,20) => "Aries",
                mktime(0,0,0,5,22) => "Tauro",
                mktime(0,0,0,6,22) => "Géminis",
                mktime(0,0,0,7,23) => "Cáncer",
                mktime(0,0,0,8,24) => "Leo",
                mktime(0,0,0,9,23) => "Virgo",
                mktime(0,0,0,10,23) => "Libra",
                mktime(0,0,0,11,21) => "Escorpio",
                mktime(0,0,0,12,22) => "Sagitario",
            );

            $horoscopo = "";
            
            foreach ($calendarioHoroscopo as $marcaTempo => $signoHoroscopo) {
                if($dataConsultada<$marcaTempo && $horoscopo == ""){
                    $horoscopo = $signoHoroscopo;
                }
            }

            if($horoscopo == ""){
                $horoscopo = "Capricornio";
            }

            echo "<p>O teu horoscopo segundo varias fontes consultadas, mais ou menos é: $horoscopo</p>";

        }
    ?>
    
</body>
</html>