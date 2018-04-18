<h2> <?php echo $TitreDeLaPage?> </h2>


<?php foreach($LesProduits as $unProduit):
echo '<h3>'.anchor('visiteur/voirUnArticle'.$unProduit->noProduit,$unProduit->nomImage,$unProduit->libelle,$unProduit->prixht);
endforeach?>

<p> pour avoir le détail d'un produit clique sur l'image </p>

<p> <?php echo $lienspagination;  ?> </p>
