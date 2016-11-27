<html>
     <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" type="text/css" href="./views/css/header.scss"/>
       <link rel="stylesheet" type="text/css" href="./views/css/main.scss">
       <link rel="stylesheet" type="text/css" href="./views/css/footer.scss">
       <link rel="stylesheet" type="text/css" href="./views/css/wrapper.scss">
     </head>
     <body>
     <div class="header">
        <?php require_once('layout/header.php'); ?>
     </div>
     <div class="main">
         <?php require_once('routes.php'); ?>
     </div>
     <div class="footer">
         <?php require_once('layout/footer.php'); ?>
     </div>
    </body>

</html>