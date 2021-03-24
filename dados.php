<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset = "utf-8">
    <title>Dados</title>

    <style>
        body{
            background-color: gray;
            
        }
    </style>
</head>
<body>
<table id="table">
<?php
    if(isset($_POST["local"])){

        $local = $_POST["local"];

        $f = fopen("violencia-domestica-df.csv", "r");
        $dados=fgetcsv($f);

        echo "<tr><td>$dados[0]</td><td>$dados[1]</td><td>$dados[2]</td><td>$dados[3]</td>
                <td>$dados[4]</td><td>$dados[5]</td><td>$dados[6]</td><td>Somatorio</td><tr>";
        while($dados)
        {
            if($local == $dados[0]){
                
                $soma = $dados[1] +$dados[2] +$dados[3] +$dados[4] +$dados[5] +$dados[6];
                echo "<tr><td>$dados[0]</td><td>$dados[1]</td><td>$dados[2]</td><td>$dados[3]</td>
                <td>$dados[4]</td><td>$dados[5]</td><td>$dados[6]</td><td>$soma</td><tr>";
                break;
            }
            $dados=fgetcsv($f);
        }
        fclose($f);
    }
    