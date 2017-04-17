<html>
<head>
    <title>MeuSite.com</title>
    <link rel="stylesheet" type="text/css" 
          href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/novocss.css">
</head>
<body>
    <div >
        <?php
            include_once("topo.php");
            include_once("menu.php");

            if(empty($_SERVER["QUERY_STRING"])){
                $var = "conteudo.php";
                include_once("$var");
            }else{
                $pg = $_GET['pg'];
                include_once("$pg.php");
            }

            include_once("rodape.php");
        ?>
    </div>
</body>
</html>