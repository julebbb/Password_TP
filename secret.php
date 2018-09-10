
 <!doctype html>
 <html class="no-js" lang="fr">

 <head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Secret</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="manifest" href="site.webmanifest">
   <link rel="apple-touch-icon" href="icon.png">
   <!-- Place favicon.ico in the root directory -->
   <!--32x32 le favicon -->

   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/main.css">

   <?php

   $correct_password = "kangourou";

   if (isset($_POST['password']) AND $_POST['password'] == $correct_password) {

     echo "Les chats conquerront le monde !" . '<img src="img/eyes-cat.png" alt="Yeux de chat"> ' . "</br>";

   } else {

     header('Location: http://localhost/tpMotdepasse/index.html');
     exit;
   }

    ?>
 </head>

 <body class="secret">
   <!--[if lte IE 9]>
     <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
   <![endif]-->

   <!-- Add your site or application content here -->
   <a href="index.html">Retour à l'accueil</a>

   <script src="js/vendor/modernizr-3.6.0.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

   <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
   <script>
     window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
     ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
   </script>
   <script src="https://www.google-analytics.com/analytics.js" async defer></script>
 </body>

 </html>
