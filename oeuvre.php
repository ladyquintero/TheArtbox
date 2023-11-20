          <!-- Fonction Include pour ajouter le contenu de ces fichiers au header et au tableau avec les 15 oeuvres-->
          <?php 
          require('requires/header.php'); 
          require('requires/oeuvres.php'); 
          ?>
    
<?php
    // Variable boolean crée a false - sera utilisée plus tard pour vérifier si l'œuvre avec l'id transmis dans l'URL est trouvée dans le tableau d'œuvres.
    $oeuvreTrouve = false;

    // Boucle Foreach pour parcourir le tableau oeuvres.php
    foreach ($oeuvres as $oeuvre) :

            /* Pour chaque œuvre, on vérifie si elle a une clé 'id' et si l'identifiant transmis dans l'URL correspond à cette clé 'id'. 
            Si c'est le cas, la variable $oeuvreTrouve est mise à true et les détails de l'œuvre sont affichés 
            dans une section HTML.*/

        //array_key_exists() est utilisée pour vérifier si le clé 'id' existe dans le tableau et isset() pour vérifier si une variable est définie et n'a pas la valeur NULL
        if (array_key_exists('id', $oeuvre) && isset($_GET['id']) && $oeuvre['id'] == $_GET['id']):
            $oeuvreTrouve = true;
            ?>

            <!-- Un article pour afficher les détails de l'œuvre, tels que l'image, le titre, l'artiste et la description.-->
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="<?php echo $oeuvre['image'] ?>" />
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $oeuvre['titre'] ?></h1>
                    <p class="description"><?php echo $oeuvre['artiste'] ?></p>
                    <p class="description-complete"><?php echo $oeuvre['description'] ?></p>
                </div>
            </article>

<!-- Fin de la condition et de la boucle--> 
<?php
        endif;
    endforeach;
    
    /*Si aucune œuvre correspondant à l'identifiant transmis dans l'URL n'est trouvée, 
    la variable $oeuvreTrouve reste false et un message "Oeuvre introuvable" 
    est affiché à la place des détails de l'œuvre.*/
    if (!$oeuvreTrouve) {
        echo '<p><center>Oeuvre introuvable.</p></center>';
    }
?>    
     
        <?php require('requires/footer.php'); ?>
