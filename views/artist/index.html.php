<?php
// Inclure le fichier contenant la définition de la classe UnsplashImageService
// require 'controllers/UnsplashImageService.php';
require '../controllers/UnsplashImageService.php';
?>

<!-- Votre code HTML et PHP existant -->
<br>
<div class="my-5 d-flex justify-content-center">  
  <div class="card-container row">
    <?php foreach ($artists as $artist) { ?>
      <div class="col-md-4 mb-4">
        <div class="card">
            <?php 
            // Créer une instance de la classe UnsplashImageService avec la clé d'accès
            $unsplashService = new UnsplashImageService($access_key);

            // Appel à la méthode getRandomImage() pour récupérer une image aléatoire
            $imageUrl = $unsplashService->getRandomImage('minimal');
          ?>
          <img class="card-img-top img-fluid" src="<?= $imageUrl ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($artist['name']) ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- http://mvc/?controller=artist -->