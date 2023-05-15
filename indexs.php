
<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
if(empty($_SESSION['username'])){
    header('location: page.php');
} ?>
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
<body style="background-color:rgba(218, 206, 206, 0.3)">
    <?php include_once('./NAV/navsites.php'); ?>
    <div> 
    </div>
    <div class="container">
            <div class="row">
             <div class="col-md-4">   
            <h3>PC</h3>
            <div class="card" style="width: 18rem;">
                    <img src="image/Pc.jpG" class="card-img-top" alt="pc">
                    <div class="card-body">
                    <h5 class="card-title">Pc hp</h5>
                    <p class="card-text">tu peux ajouter supprimer et modiffe les pc portables</p>
                    <a href="indexs8.php?genre=pc" class="btn btn-primary">Go To Computer page</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">   
                <h3>Retour</h3>
            <div class="card" style="width: 18rem;">
                <img src="image/Routeur.jpG" class="card-img-top" alt="pc">
                <div class="card-body">
                  <h5 class="card-title">Retour cisco</h5>
                  <p class="card-text">tu peux ajouter supprimer et modiffe les Retours</p>
                  <a href="indexs8.php?genre=routeur" class="btn btn-primary">Go To Retour  page</a>
                </div>
            </div>
        </div>
            <div class="col-md-4">   
                <h3>Switch</h3>
            <div class="card" style="width: 18rem;">
                <img src="image/switch.jpG" class="card-img-top" alt="pc">
                <div class="card-body">
                  <h5 class="card-title">Switch</h5>
                  <p class="card-text">tu peux ajouter supprimer et modiffe les pc switch</p>
                  <a href="indexs8.php?genre=switch" class="btn btn-primary">Go To switch page</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">   
           <h3>serveur</h3>
           <div class="card" style="width: 18rem;">
               <img src="image/serveur.jpG" class="card-img-top" alt="pc">
               <div class="card-body">
                 <h5 class="card-title">serveur</h5>
                 <p class="card-text">tu peux ajouter supprimer et modiffe lesserveur</p>
                 <a href="indexs8.php?genre=serveur" class="btn btn-primary">Go To serveur page</a>
               </div>
           </div>
       </div>
       <div class="col-md-4">   
               <h3>parfeu</h3>
           <div class="card" style="width: 18rem;">
               <img src="image/pare-feu.jpG" class="card-img-top" alt="pc">
               <div class="card-body">
                 <h5 class="card-title">parfeu</h5>
                 <p class="card-text">tu peux ajouter supprimer et modiffe parfeu </p>
                 <a href="indexs8.php?genre=pare-feu" class="btn btn-primary">Go parfeu  page</a>
               </div>
           </div>
       </div>
           <div class="col-md-4">   
               <h3>voiip</h3>
           <div class="card" style="width: 18rem;">
               <img src="image/voip.jpG" class="card-img-top height: " alt="pc">
               <div class="card-body">
                 <h5 class="card-title">voiip</h5>
                 <p class="card-text">tu peux ajouter supprimer et modiffe les voiip</p>
                 <a href="indexs8.php?genre=voiip" class="btn btn-primary">Go To voiip page</a>
               </div>
           </div>
       </div>
    </div>
    <div class="row">
        <div class="col-md-4">   
       <h3>Interfaces</h3>
       <div class="card" style="width: 18rem;">
           <img src="image/Interface.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">Interfaces</h5>
             <p class="card-text">tu peux ajouter supprimer et modiffe lesInterfaces</p>
             <a href="indexs8.php?genre=interface" class="btn btn-primary">Go ToInterfaces page</a>
           </div>
       </div>
   </div>
   <div class="col-md-4">   
           <h3>connectiques</h3>
       <div class="card" style="width: 18rem;">
           <img src="image/connecteur.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">connectiques </h5>
             <p class="card-text">tu peux ajouter supprimer et modiffe les connectiques</p>
             <a href="indexs8.php?genre=connecteur" class="btn btn-primary">Go To connectiques page</a>
           </div>
       </div>
   </div>
       <div class="col-md-4">   
           <h3>Tous</h3>
       <div class="card" style="width: 18rem;">
           <img src="image/tous.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">Tous</h5>
             <p class="card-text">tu peux ajouter supprimer et modiffe Tous</p>
             <a href="indexs8.php?genre=not null" class="btn btn-primary">Go To Tous page</a>
           </div>
       </div>
   </div>
   </div>
 </div>
</body>
</html>