
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../../sanscode/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../../sansphp/style/style.css">
</head>
<body style="background-color:rgba(218, 206, 206, 0.3)">
<?php include("../../../acces/entrer/session.php"); ?>
  <? //include('../../../composent/nav/navsitep.php'); ?> 
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="indexp.php">ACCUEIL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=PC">PC</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=routeur">ROUTEUR</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=switch">SWITCH</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=serveur">SERVEUR</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=pare-feu">PARE-FEU</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=voip">VOIP</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=interface">INTERFACE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../../prof/consulter/indexp8.php?genre=connecteur">CONNECTIQUE</a>
          </li>
          <li class="nav-item active">
            <!-- style="BODY TEXT=#ff0000" -->
            <a class="nav-link" href="../demande/demande.php">DEMANDE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../../../acces/sortie/deconnecter.php">SE DECONNECTER</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <div class="container">
            <div class="row">
             <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                    <img src="../..../../../../../sanscode/image/pc.jpg" class="card-img-top" alt="pc">
                    <div class="card-body">
                    <h5 class="card-title">Pc</h5>
                    <p class="card-text">Vous pouvez ajouter,supprimer,modifier(pc)</p>
                    <a href="indexp8.php?genre=pc" class="btn btn-primary">Interface Pc</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                <img src="../..../../../../../sanscode/image/routeur.jpG" class="card-img-top" alt="pc">
                <div class="card-body">
                <h5 class="card-title">Routeur</h5>
                  <p class="card-text">Vous pouvez: ajouter,supprimer,modifier(Ro..)</p>
                  <a href="indexp8.php?genre=routeur" class="btn btn-primary">Interface Routeur</a>
                </div>
            </div>
        </div>
            <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                <img src="../..../../../../../sanscode/image/switch.jpG" class="card-img-top" alt="pc">
                <div class="card-body">
                  <h5 class="card-title">Switch</h5>
                  <p class="card-text">Vous pouvez: ajouter,supprimer,modifier(Switch)</p>
                  <a href="indexp8.php?genre=switch" class="btn btn-primary">Interface Switch</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">   
       
           <div class="card" style="width: 18rem;">
               <img src="../..../../../../../sanscode/image/serveur.jpG" class="card-img-top" alt="pc">
               <div class="card-body">
                 <h5 class="card-title">serveur</h5>
                 <p class="card-text">Vous pouvez: ajouter,supprimer,modifier(Switch)</p>
                 <a href="indexp8.php?genre=serveur" class="btn btn-primary">Interface Switch</a>
               </div>
           </div>
       </div>
       <div class="col-md-4">   
              
           <div class="card" style="width: 18rem;">
               <img src="../..../../../../../sanscode/image/pare-feu.jpG" class="card-img-top" alt="pc">
               <div class="card-body">
                 <h5 class="card-title">pare-feu</h5>
                 <p class="card-text">Vous pouvez ajouter,supprimer,modifier(Serveur)</p>
                 <a href="indexp8.php?genre=pare-feu" class="btn btn-primary">Interface Serveur</a>
               </div>
           </div>
       </div>
           <div class="col-md-4">   
              
           <div class="card" style="width: 18rem;">
               <img src="../..../../../../../sanscode/image/voip.jpG" class="card-img-top height: " alt="pc">
               <div class="card-body">
                 <h5 class="card-title">voip</h5>
                 <p class="card-text">Vous pouvez ajouter,supprimer,modifier(Voip)</p>
                 <a href="indexp8.php?genre=voiip" class="btn btn-primary">Interface Voip</a>
               </div>
           </div>
       </div>
    </div>
    <div class="row">
        <div class="col-md-4">   
       <h3>Interfaces</h3>
       <div class="card" style="width: 18rem;">
           <img src="../..../../../../../sanscode/image/Interface.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">Interfaces</h5>
             <p class="card-text">Vous pouvez ajouter,supprimer,modifier()</p>
             <a href="indexp8.php?genre=interface" class="btn btn-primary">Go ToInterfaces page</a>
           </div>
       </div>
   </div>
   <div class="col-md-4">   
           <h3>connectiques</h3>
       <div class="card" style="width: 18rem;">
           <img src="../..../../../../../sanscode/image/connecteur.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">connectiques </h5>
             <p class="card-text">tu peux ajouter supprimer et modiffe les connectiques</p>
             <a href="indexp8.php?genre=connecteur" class="btn btn-primary">Go To connectiques page</a>
           </div>
       </div>
   </div>
       <div class="col-md-4">   
           <h3>Tous</h3>
       <div class="card" style="width: 18rem;">
           <img src="../..../../../../../sanscode/image/tous.jpG" class="card-img-top" alt="pc">
           <div class="card-body">
             <h5 class="card-title">Tous</h5>
             <p class="card-text">tu peux ajouter supprimer et modiffe Tous</p>
             <a href="indexp8.php?genre=not null" class="btn btn-primary">Go To Tous page</a>
           </div>
       </div>
   </div>
   </div>
 </div>
</body>
</html>
