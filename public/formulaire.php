<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 05/10/16
 * Time: 16:48
 */?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Klap Affaires | Formulaire de contact</title>
    <meta charset="utf-8">
    <meta name="Klap Affaires Formulaire de contact">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,600,700|Roboto+Condensed|Roboto:400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body>

<?php include "header.php"; ?>

        <div>
        <img src="http://www.blog-amicalementvin.com/wp-content/uploads/2012/06/coffret-vin-au-pif.jpg" id="imgform" class="col-md-12">
        </div>
        <div id="formulaire" class="container">
            <h1>Un projet de film?</h1>
            <div class="col-xs-12 col-md-4 col-md-offset-4">
'            <form method="post" action="../src/form.php">
                <div class="form-group">
                    <label for="Nom">Votre Nom</label>
                    <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Votre Nom">
                </div>
                <div class="form-group">
                    <label for="Prenom">Votre Prénom</label>
                    <input type="text" class="form-control" name="Prenom" id="Prenom" placeholder="Votre Prenom">
                </div>

                <div class="form-group">
                    <label for="Email">Votre Mail</label>
                    <input type="email" class="form-control" name="Email" id="Email" placeholder="Votre Email">
                </div>

                <div class="form-group">
                    <label for="Societe">Votre Société</label>
                    <input type="text" class="form-control" name="Societe" id="Societe" placeholder="Votre Societe">
                </div>

                <div class="form-group">
                    <label for="Message">Votre Message</label>
                    <textarea class="form-control" name="Message" id="Message" placeholder="Votre Message" rows="10"></textarea>
                </div>


                <button type="submit" class="btn btn-default">Submit</button>
            </form>
                </div>
        </div>


<?php include "footer.php"; ?>
</body>
</html>
