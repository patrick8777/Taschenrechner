<table border=3>
<?php

if(isset($_GET['zahl1'])){
    $result = "unglütig";

if ($_GET['rechenart'] == 'Mal'){
$result = $_GET['zahl1'] * $_GET['zahl2'];
echo"<tr>";
echo"<td>".$result."</td>";
echo"</tr>";
}

if ($_GET['rechenart'] == 'Plus'){
    $result = $_GET['zahl1'] + $_GET['zahl2'];
    echo"<tr>";
    echo"<td>".$result."</td>";
    echo"</tr>";
    }

    if ($_GET['rechenart'] == 'Minus'){
        $result = $_GET['zahl1'] - $_GET['zahl2'];
        echo"<tr>";
        echo"<td>".$result."</td>";
        echo"</tr>";
        }
        
        if ($_GET['rechenart'] == 'Geteilt'){
            $result = $_GET['zahl1'] / $_GET['zahl2'];
            echo"<tr>";
            echo"<td>".$result."</td>";
            echo"</tr>";
          
            } 
        }
    ?>
 </table>