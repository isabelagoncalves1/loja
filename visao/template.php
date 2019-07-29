<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Antic" rel="stylesheet">
        <link rel="stylesheet" href="./publico/css/inicial.css">
         <link rel="shortcut icon" href="./publico/FOTOS/90s.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
    </head>
    <body class="">
        <?php require "cabecalho.php" ?>
        
        
        <main class="">
            <?php require $viewFilePath; ?>
        </main>
        
        <?php require "rodape.php" ?>
        
        
            
    </body>
</html>
