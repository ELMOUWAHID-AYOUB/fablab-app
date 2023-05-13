
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
<body>
    <?php 
    include_once('navsite.php'); ?>
    <div class="container">
            <div class="row">
             <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                    <img src="image/paper.jpG" class="card-img-top" alt="pc">
                    <div class="card-body">
                    <h5 class="card-title">Pc</h5>
                    <p class="card-text">Vous pouvez ajouter,supprimer,modifier(pc)</p>
                    <a href="index1.php" class="btn btn-primary">Interface Pc</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                <img src="image/Routeur.jpG" class="card-img-top" alt="pc">
                <div class="card-body">
                <h5 class="card-title">Routeur</h5>
                  <p class="card-text">Vous pouvez: ajouter,supprimer,modifier(Ro..)</p>
                  <a href="index2.php" class="btn btn-primary">Interface Routeur</a>
                </div>
            </div>
        </div>
            <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                <img src="image/switch.jpG" class="card-img-top" alt="pc">
                <div class="card-body">
                  <h5 class="card-title">Switch</h5>
                  <p class="card-text">Vous pouvez: ajouter,supprimer,modifier(Switch)</p>
                  <a href="index3.php" class="btn btn-primary">Interface Switch</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">   
       
           <div class="card" style="width: 18rem;">
               <img src="image/serveur.jpG" class="card-img-top" alt="pc">
               <div class="card-body">
                 <h5 class="card-title">serveur</h5>
                 <p class="card-text">Vous pouvez: ajouter,supprimer,modifier(Switch)</p>
                 <a href="index4.php" class="btn btn-primary">Interface Switch</a>
               </div>
           </div>
       </div>
       <div class="col-md-4">   
              
           <div class="card" style="width: 18rem;">
               <img src="image/parfeu.jpG" class="card-img-top" alt="pc">
               <div class="card-body">
                 <h5 class="card-title">pare-feu</h5>
                 <p class="card-text">Vous pouvez ajouter,supprimer,modifier(Serveur)</p>
                 <a href="index5.php" class="btn btn-primary">Interface Serveur</a>
               </div>
           </div>
       </div>
           <div class="col-md-4">   
              
           <div class="card" style="width: 18rem;">
               <img src="image/voiip.jpG" class="card-img-top height: " alt="pc">
               <div class="card-body">
                 <h5 class="card-title">voip</h5>
                 <p class="card-text">Vous pouvez ajouter,supprimer,modifier(Voip)</p>
                 <a href="index6.php" class="btn btn-primary">Interface Voip</a>
               </div>
           </div>
       </div>
    </div>
    <div class="row">
        <div class="col-md-4">   
       <h3>Interfaces</h3>
       <div class="card" style="width: 18rem;">
           <img src="image/Interfaces.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">Interfaces</h5>
             <p class="card-text">Vous pouvez ajouter,supprimer,modifier()</p>
             <a href="index7.php" class="btn btn-primary">Go ToInterfaces page</a>
           </div>
       </div>
   </div>
   <div class="col-md-4">   
           <h3>connectiques</h3>
       <div class="card" style="width: 18rem;">
           <img src="image/connectiques.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">connectiques </h5>
             <p class="card-text">tu peux ajouter supprimer et modiffe les connectiques</p>
             <a href="index8.php" class="btn btn-primary">Go To connectiques page</a>
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
             <a href="index9.php" class="btn btn-primary">Go To Tous page</a>
           </div>
       </div>
   </div>
   </div>
 </div>
</body>
</html>
