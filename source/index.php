<?php include './partial/_header.html';?>
<title>GFAOP</title>
<meta name="title" content="Gfaop">
<meta name="description" content="Accueil du groupe franco-africain d'oncologie pédiatrique : soigner le cancer de l'enfant en Afrique">
<meta name="keywords" content="formation, recherche clinique, médicaments, cancer de l'enfant, oncologie, Afrique">
<?php include 'partial/_navbar.html';?>
<div class="wrapper wrapper-1 py-5">
  <h1 class="mt-5 pt-5">Guérir le cancer des enfants en Afrique</h1>
  <h3 class="py-3" style="font-family: Lato; font-style: italic">11000 enfants déjà traités, plus de 450 médecins et infirmiers formés</h3>
  <a class="btn btncrowd ml-auto my-5 p-2 mr-1" href="https://www.helloasso.com/don/associations/gfaop" role="button" target="_blank" >Je fais un don</a>
  <a class="btn btncrowd my-5 p-2 ml-1" href="https://www.helloasso.com/associations/gfaop/adhesions/devenez-ami-du-gfaop-soutenez-les-enfants-atteints-de-cancer-en-afrique" role="button" target="_blank" >Je deviens ami</a>
</div>
<div class="grey hidden-sm-down">
  <div class="container py-3">
    <div class="row text-center">
      <div class="col-12">
        <h2>NOS ACTIONS</h2>
      </div>
      <div class="col-sm-3">
        <a href="./formation.php"><img src="images/formation.png" width="60" alt="les formations" ></a>
      </div>
      <div class="col-sm-3">
        <a href="./recherche-clinique.php"><img src="images/recherche.png" width="50" alt="la recherche"></a>
      </div>
      <div class="col-sm-3">
        <a href="./medicaments-et-materiel.php"><img src="images/envoi.png" width="50" alt="l'envoi de médicaments" ></a>
      </div>
      <div class="col-sm-3">
        <a href="./accompagnement.php"><img src="images/maison2x.png" width="50" alt="l'accompagnement des familles" ></a>
      </div>
    </div>
    <div class="row text-center py-1">
      <div class="col-sm-3">Formations</div>
      <div class="col-sm-3">Recherche Clinique</div>
      <div class="col-sm-3">Envoi de Médicaments</div>
      <div class="col-sm-3">Accompagnement</div>
    </div>
  </div>
</div>
<div class="container">
  <h2 class="text-center py-4" style="color: #f96634;">PRESENTATION</h2>
  <div class="embed-responsive embed-responsive-16by9 mx-auto">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TIfCGArJZdM"></iframe>
  </div>
</div>
<div class="container">
  <h2 class="text-center py-4" style="color: #f96634;">ACTUALITES</h2>
  <div class="row">
<?php
// Redirection depuis un proxy aux us hébérgé chez heroku pour contourner la RGPD
$xml = simplexml_load_file('https://fast-anchorage-35484.herokuapp.com/');
if ($xml) {
    $posts = $xml->xpath("//item/link");
    for ($i = 0; $i <= 2; $i++) {
        echo '<div class="col-12 col-md-4">
          <div class="tumblr-post"
            data-href="https://embed.tumblr.com/embed/post/PiEi8e18EEZ1NgV7HbprPg/' . str_replace("https://gfaopcorinnecd.tumblr.com/post/", "", $posts[$i]) . '"
            data-did="e91a187a3d1cef870e50ba664655f80802e0403d">
          </div>
        </div>';
    }
}
?>
  <script async src="https://assets.tumblr.com/post.js"></script>
  </div>
  <div class="text-center py-2">
    <a class="btn btn-social-icon btn-lg btn-facebook" href="https://www.facebook.com/gfaopgroupe"><span class="fa fa-facebook"></span></a>
    <a class="btn btn-social-icon btn-lg btn-tumblr" href="https://gfaopcorinnecd.tumblr.com"><span class="fa fa-tumblr"></span></a>
    <a class="btn btn-social-icon btn-lg btn-twitter" href="https://twitter.com/assogfaop"><span class="fa fa-twitter"></span></a>
    <a class="btn btn-social-icon btn-lg btn-linkedin" href="https://fr.linkedin.com/in/gfaop-groupe-965096132"><span class="fa fa-linkedin"></span></a>
  </div>
</div>
<div class="wrapper wrapper-1">
  <div class="container">
    <div class="row">
      <div class="mx-auto font-italic white text-center py-3">
          <h4>"Le GFAOP, fort de son expérience et de son savoir-faire, doit continuer à œuvrer à sa manière pour un monde plus équitable".</h4>
          <h5>Pr Mhamed Harif, Président du GFAOP</h5>
      </div>
    </div>
  </div>
</div>

<?php include 'partial/_footer.html';?>
