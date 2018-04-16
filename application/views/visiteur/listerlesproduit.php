<h2> <?php echo $TitreDeLaPage?> </h2>


<?php foreach($LesArticles as $unArticle):
echo '<h3>'.anchor('visiteur/voirUnArticle'.$unArticle->noProduit,$unArticle->nomImage,$unArticle->libelle);
endforeach?>

<p> pour avoir le détail d'un produit clique sur l'image </p>

<p> <?php echo $lienspagination;  ?> </p>
