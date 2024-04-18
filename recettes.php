<?php 
  require_once('templates/header.php');
  require_once('lib/recipe.php');
?>



    
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <h1>Liste des Recettes</h1>
       </div>
    
  
  

  <div class="row">
        <?php foreach ($recipes as $key => $recipe) { 
          include('templates/recipes_partial.php');
       } ?>


  </div>  

<?php
require('templates/footer.php');
?>  


    