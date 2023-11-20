
        <!-- Fonction Include pour ajouter le contenu de ces fichiers au header et au tableau avec les 15 oeuvres-->
        <?php 
        require('requires/header.php'); 
        require('requires/oeuvres.php'); 
        ?>
    
            <!-- Pour afficher la liste des œuvres en flexbox-->
            <div id="liste-oeuvres">
             
            <!-- Boucle Foreach pour parcourir le tableau oeuvres.php-->
            <?php 
            foreach ($oeuvres as $oeuvre) :?>
           
                  <!-- Un article pour afficher les détails de l'œuvre, tels que l'image, le titre et l'artiste.-->
                  <article class="oeuvre">
                   <a href="oeuvre.php?id=<?php echo $oeuvre['id'] ?>" > <!-- lien vers la page oeuvre.php, en ajoutant l'ID de l'œuvre à l'URL en tant que paramètre.-->
                   <img src=" <?php echo $oeuvre ['image']  ?>" />
                   <h2> <?php echo $oeuvre ['titre'] ?> </h2>
                   <p class="description"><?php echo $oeuvre ['artiste']?> </p>
                   </a>
                   </article>

            <!-- Fin de la boucle-->      
            <?php endforeach;?>   

            </div>

         <!-- Fonction Include pour connecter le footer avec l'index-->
         <?php require('requires/footer.php'); ?>
        
