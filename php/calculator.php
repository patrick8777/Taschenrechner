<table border=1>
<?php
/* $result = "unglütig";

switch ($_GET["op"]){
    case "add": $result = (int) $_GET["x1"] + (int)$_GET["x2"];
    break;
    echo $result;
} */

$ausgabe = null;


if ( isset($_POST['operator']) ) {

    $a = (integer)$_POST['zahl1'];
    $b = (integer)$_POST['zahl2'];
    $op = $_POST['operator'];
    $bcMethod = 'bc' . $op;
    
    $aOperatoren = array(
            'add' => '+',
            'sub' => '-',
            'div' => '/',
            'mul' => '*'
        );
    
    echo $a . ' ' . $aOperatoren[$op] . ' ' . $b . ' = ' . $bcMethod( $a, $b );
    exit;
}

echo 'Keine oder falsche Daten empfangen!'; 
    
    foreach ($_GET as $key => $value){
        echo"<tr>";
        echo"<td>".$key."</td>";
        echo"<td>".$value."</td>";
        echo"</tr>";
    }
   
if(isset($_GET['1zahl'])){
 

if ($_GET['rechenart'] == 'Mal'){
    $ergebnis = $_GET['1zahl'] * $_GET['2zahl'];
    echo"<tr>";
    echo"<td>".$ergebnis."</td>";
    echo"</tr>";
    }
	
    if ($_GET['rechenart'] == 'Plus'){
        $ergebnis = $_GET['1zahl'] + $_GET['2zahl'];
        echo"<tr>";
        echo"<td>".$ergebnis."</td>";
        echo"</tr>";
        }

        if ($_GET['rechenart'] == 'Minus'){
            $ergebnis = $_GET['1zahl'] - $_GET['2zahl'];
            echo"<tr>";
            echo"<td>".$ergebnis."</td>";
            echo"</tr>";
            }
            
            if ($_GET['rechenart'] == 'Geteilt'){
                $ergebnis = $_GET['1zahl'] / $_GET['2zahl'];
                echo"<tr>";
                echo"<td>".$ergebnis."</td>";
                echo"</tr>";
              
                } 
            }
?>
</table>