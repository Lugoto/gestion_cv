<?php
if(isset($_SESSION['id_user'])){$isConnecte=true;}else{$isConnecte=false;}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script type="text/javascript" src="./js/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="./css/foundation.min.css" />
        <link rel="stylesheet" href="./css/foundation.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <script type="text/javascript" src="./js/app.js"></script>
        <script type="text/javascript" src="./js/appelJq.js"></script>
        <script type="text/javascript" src="./js/foundation.js"></script>
        <script type="text/javascript" src="./js/foundation.min.js"></script>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <style scoped>

        .button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }

    </style>
        <title>Gestionnaire CV</title>
    </head>

    <body>

<header>
<!-- <a href="./" class="titrelien">Gestionnaire de CV</a> -->
<?php
if($isConnecte){
    echo "<p>Salut " . $_SESSION['identifiant'] . " !</p> ";
    echo '<a href="index.php?uc=user&action=toDisconnect"><button type="button" class="button-error pure-button">Deconnexion</button></a>';
}else{
    include('user/v_formConnection.html');
}
?>

</header>
