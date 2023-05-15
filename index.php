<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username'])) {
    header('location: page.php');
} ?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .bd {
            background-color: #97B2DE;
            display: flex;
            align-items: center;
            justify-content: space-between; 
            flex-direction: column;
        }

        .pannel {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
            margin-top: 2%;
            margin-bottom: 2%;
        }

        .cb {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .ct {
            text-align: center;
        }

        .card-title {
            font-weight: bolder;
            font-size: larger;
            text-transform: uppercase;
        }
    </style>
</head>

<body class="bd">
    <?php
    include_once('./NAV/navsitei.php'); ?>
    <div class="container">
        <div class="row pannel">
            <div class="col-md-4 item">
                <div class="card" style="width: 18rem;">
                    <img src="image/Pc.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">Pc</h5>
                        <p class="card-text ct">Vous pouvez ajouter,supprimer,modifier(pc)</p>
                        <a href="index8.php?genre=pc" class="btn btn-primary">Interface Pc</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="card" style="width: 18rem;">
                    <img src="image/Routeur.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">Routeur</h5>
                        <p class="card-text ct">Vous pouvez: ajouter,supprimer,modifier(Ro..)</p>
                        <a href="index8.php?genre=routeur" class="btn btn-primary">Interface Routeur</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="card" style="width: 18rem;">
                    <img src="image/switch.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">Switch</h5>
                        <p class="card-text ct">Vous pouvez: ajouter,supprimer,modifier(Switch)</p>
                        <a href="index8.php?genre=switch" class="btn btn-primary">Interface Switch</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">

                <div class="card" style="width: 18rem;">
                    <img src="image/serveur.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">serveur</h5>
                        <p class="card-text ct">Vous pouvez: ajouter,supprimer,modifier(Switch)</p>
                        <a href="index8.php?genre=serveur" class="btn btn-primary">Interface Switch</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">

                <div class="card" style="width: 18rem;">
                    <img src="image/pare-feu.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">pare-feu</h5>
                        <p class="card-text ct">Vous pouvez ajouter,supprimer,modifier(Serveur)</p>
                        <a href="index8.php?genre=pare-feu" class="btn btn-primary">Interface Serveur</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">

                <div class="card" style="width: 18rem;">
                    <img src="image/voip.jpG" class="card-img-top height: " alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">voip</h5>
                        <p class="card-text ct">Vous pouvez ajouter,supprimer,modifier(Voip)</p>
                        <a href="index8.php?genre=voiip" class="btn btn-primary">Interface Voip</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">
                <div class="card" style="width: 18rem;">
                    <img src="image/interface.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">Interfaces</h5>
                        <p class="card-text ct">Vous pouvez ajouter,supprimer,modifier()</p>
                        <a href="index8.php?genre=interface" class="btn btn-primary">Go ToInterfaces page</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="card" style="width: 18rem;">
                    <img src="image/connecteur.jpG" class="card-img-top" alt="pc">
                    <div class="card-body cb">
                        <h5 class="card-title">connectiques </h5>
                        <p class="card-text ct">tu peux ajouter supprimer et modiffe les connectiques</p>
                        <a href="index8.php?genre=connecteur" class="btn btn-primary">Go To connectiques page</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>