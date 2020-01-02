<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="./css/bootstrap.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="./css/bootstrap-theme.css">
        <link rel="stylesheet" href="./css/almox.css">
        <script src="js/funcoes.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $(function() {
            $("#data").datepicker({ dateFormat: 'yy-mm-dd' }).val();;
        });

        function teste(){
            console.log($("#data").val());
        }
        </script>
		<title>Página Inicial</title>
    </head>
	<body>
    <br><br>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Página Inicial</a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            
                            <li><a href="lista_produto.php">Produtos</a></li>
                            <li><a href="">Relatório</a></li>
                       </ul>
                    </div>
                </div>
            </div>

		<div class="container">
			<div class="principal">

                            