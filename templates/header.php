<?php 

    session_start();

    // $_SESSION['name'] = 'MILLI';

    if($_SERVER['QUERY_STRING'] == 'noname'){
        unset($_SESSION['name']);
         session_unset();
    };

    $name = $_SESSION['name'] ?? 'Guest';

    //get cookie
    $gender = $_COOKIE['gender'] ?? 'Unknown';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crespy pizza</title>
       <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       <link rel="stylesheet" href="style.css">

</head>
<body class="dark orange lighten-4">
    <nav class="white z-depth-0">
        <div class="container-nav">
            <a href="index.php" class="brand-logo brand-text padding-right">Crespy Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <div class="width">
                  <li><a href="add.php">Add a Pizza</a></li> 
                  <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
                </div>
                
            </ul>
        </div>
    </nav>