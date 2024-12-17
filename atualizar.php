<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio</title>

    <style>
            #conteudo{
text-align: center;
background-color: black;
color: white;

            }



    </style>
</head>
<body>
    
<div id="conteudo">

<script>

function atualizarPagina(){

        fetch('atualizar.php')
        .then(response =>response.text())
        .then(data =>{document.getElementById('conteudo').innerHTML = data;});
}

setInterval(atualizarPagina, 1000);


</script>


<?php

date_default_timezone_set('America/Sao_Paulo');

$dataatual = date('H:i:s');
echo "<h1>".$dataatual."</h1>";
?>

</div>

</body>
</html>