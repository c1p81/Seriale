<?php
$stringa = $_GET['stringa'];

if (strlen($stringa) > 4)
    {
    $fp = fopen('sensore2.txt', 'a');
    fwrite($fp, date("Y/m/d H:i:s").";".$stringa.PHP_EOL);
    //print $stringa;
    fclose($fp);
    }
?>
