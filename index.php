<?php 
  require('templates/header.php');
  require_once('lib/recipe.php');
?>



    
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Grand logo" width="700" loading="lazy">
           </div>
           <div class="col-lg-6">
             <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea Recette de cuisine</h1>
             <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, possimus molestias omnis nulla quidem officia blanditiis a facere sint tempore ullam quo corporis corrupti illo reprehenderit nisi ad? Blanditiis, placeat.</p>
             <div class="d-grid gap-2 d-md-flex justify-content-md-start">
             <a href="recettes.php" class="btn btn-primary">Voir nos recettes</a>
             </div>
           </div>
       </div>
    
  
  

  <div class="row">
        <?php foreach ($recipes as $key => $recipe) { 
          include('templates/recipes_partial.php');
       } ?>


  </div>  

<?php
require('templates/footer.php');
?>  


    