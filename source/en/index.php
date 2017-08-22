<?php include '../partial/_en_header.html';?>
<title></title>
<meta name="title" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<?php include '../partial/_en_navbar.html';?>

<div class="wrapper wrapper-1 py-5">
  <h1 class="pt-5">Curing childhood cancer in Africa</h1>
  <h3 class="py-3" style="font-family: Lato; font-style: italic">8,000 children already treated, more than 240 doctors and nurses trained</h3>
  <a class="btn btncrowd mx-auto m-5 p-3" href="http://www.helloasso.com/don/associations/gfaop" role="button" target="_blank" >I donate</a>    
</div>
<div class="grey hidden-sm-down">
  <div class="container py-3">
    <div class="row text-center">
      <div class="col-12">
        <h2>OUR ACTIONS</h2>
      </div>
      <div class="col-sm-3">
        <a href="./en/training.php"><img src="../images/formation.png" width="60px" alt="Training" ></a>
      </div>
      <div class="col-sm-3">
        <a href="./en/clinical-research.php"><img src="../images/recherche.png" width="50px" alt="Clinical Research" ></a>       
      </div>
      <div class="col-sm-3">
        <a href="./en/drug-and-supply-delivery.php"><img src="../images/envoi.png" width="50px" alt="medicine delivery" ></a>
      </div>
      <div class="col-sm-3">
        <a href="./en/support.php"><img src="../images/maison2x.png" width="50px" alt="support" ></a>
      </div>
    </div>
    <div class="row text-center py-1">
      <div class="col-sm-3">Training</div>
      <div class="col-sm-3">Clinical Research</div>
      <div class="col-sm-3">Drug and supply delivery</div>
      <div class="col-sm-3">Family support</div>
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
$xml = simplexml_load_file('https://gfaopcorinnecd.tumblr.com/rss#_=_');
$posts = $xml->xpath("//item/link");
for ($i = 0; $i <= 2; $i++) { 
    echo '<div class="col-12 col-md-4">
      <div class="tumblr-post"
        data-href="https://embed.tumblr.com/embed/post/PiEi8e18EEZ1NgV7HbprPg/' . str_replace("https://gfaopcorinnecd.tumblr.com/post/", "", $posts[$i]['text']) .'"
        data-did="e91a187a3d1cef870e50ba664655f80802e0403d">
        <a href="' . $posts[$i]['text'] . '">' . $posts[$i]['text'] . '</a>
      </div>
    </div>';
} ?>
  <script async src="https://assets.tumblr.com/post.js"></script>      
  </div>
  <div class="text-center py-2">
    <a class="btn btn-social-icon btn-lg btn-facebook" href="https://www.facebook.com/gfaopgroupe"><span class="fa fa-facebook"></span></a>
    <a class="btn btn-social-icon btn-lg btn-tumblr" href="https://gfaopcorinnecd.tumblr.com"><span class="fa fa-tumblr"></span></a>
    <a class="btn btn-social-icon btn-lg btn-twitter" href="https://twitter.com/assogfaop"><span class="fa fa-twitter"></span></a>
  </div>
</div>
<div class="wrapper wrapper-1">
  <div class="container">
    <div class="row">
      <div class="mx-auto font-italic white text-center py-3">
          <h4>"GFAOP, with its experience and know-how, must continue to work in its own way for a more equitable world."</h4>
          <h5>Pr Mhamed Harif, GFAOP President</h5>                    
      </div>
    </div>
  </div>
</div>

<?php include '../partial/_en_footer.html';?>
