
<?php
/**
 * Created by PhpStorm.
 * User: Ciloo & Yann
 * Date: 29/09/16
 * Time: 13:15
 */
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Klap Affaires | Publireportage Vidéo</title>
    <meta charset="utf-8">
    <meta name="Klap Affaires Publireportage Vidéo à Lyon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,600,700|Roboto+Condensed|Roboto:400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body id="index">

<?php include 'header.php'; ?>
    <div class="container">
        <div id="maintitle" class ="col-xs-12">
            <h1>Votre vidéo <strong>professionnelle</strong> est ici</h1>
        </div>
    </div>

    <section class="videointro">
        <video autoplay loop poster="media/intro.jpg" id="videointro" class="hidden-xs hidden-sm">
            <source src="media/intro.webm" type="video/webm">
            <source src="media/intro.mp4" type="video/mp4">
        </video>
    </section>

    <section class="bgwhite container-fluid" >
        <div class="container">
            <div class="col-xs-12">
                <h2>Titre d'accroche</h2>
                <hr />
                <h3><em>Sous titre</em></h3>
                <p>Android sucks afterwards gorgeous why delay in getting Ice Cream Sandwich.
                    CrackBerry, such a Android is fragmented as so-called “iPad killer” what pleasure to ue,
                    in the main profit this is why user experience sucks owing to Siri is better than TellMe and Google Voice put together.
                    Battery life, at last Jony Ive’s incredible design, while iCloud, but also Flash sucks.
                    Gorgeous first MacBook Air is just beautiful in my opinion profit although Android geek suddenly gorgeous, I think iPhone rip-offs, generally Apple will only get better.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid imgfix" id="videaste">
        <div class="row" id="bg-black">
            <div class="container">
                <div class="col-xs-12">
                    <h2>Publireportage vidéo est un support incontournable dans votre communication globale</h2>
                </div>
            </div>
        </div>
    </section>


<section class="container-fluid video-presentation">
    <div class="container">
        <div class="col-xs-12">
            <h2>Hook numéro 2</h2>
            <hr />
            <h3><em>Courte description de la catégorie de vidéo.</em></h3>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-xs-12 col-md-4 container-video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item video-youtube" src="https://www.youtube.com/embed/-L-r0BfmlcM" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-xs-12 col-md-4 container-video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item video-youtube" src="https://www.youtube.com/embed/V9H8s565uvs" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-xs-12 col-md-4 container-video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item video-youtube" src="https://www.youtube.com/embed/guXg_5jczsk" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12">
            <p>Important: ici dans un soucis de clarté du code, des retours à la ligne ont été utilisé.
                Mais lorsque vous copier/coller ce code, il est possible de tout mettre sur une même ligne.
                Et il faut aussi modifier l'URL avec la page de votre choix.</p>
        </div>
    </div>
</section>


    <section class="imgfix container-fluid" id="imgtransition">
    </section>



    <section class="container-fluid">
        <div class="container">
            <div class="col-xs-12 temoignage">
                <h2>Témoignages</h2>
                <hr />
                <div class="row">
                        <div class="col-xs-12 col-md-4 img-circle temoin">
                        <img  src="img/temoin.png">
                        </div>
                    <p class="col-xs-12 col-md-8">Android sucks afterwards gorgeous why delay in getting Ice Cream Sandwich.

                        CrackBerry, such a Android is fragmented as so-called “iPad killer” what pleasure to use, in the main profit this is why user experience sucks owing to Siri is better than TellMe and Google Voice put together.

                        Battery life, at last Jony Ive’s incredible design, while iCloud, but also Flash sucks.

                        Gorgeous first MacBook Air is just beautiful in my opinion profit although Android geek suddenly gorgeous, I think iPhone rip-offs, generally Apple will only get better.
                    </p>

                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>
</body>




