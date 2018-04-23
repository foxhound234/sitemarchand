<h2> <?php echo $TitreDeLaPage?> </h2>


<?php foreach($Lesproduits as $unProduit):?>
<tr>
<td><?php echo $unProduit->LIBELLE;?></td>
<td><img src=<?php echo $unProduit->NOMIMAGE;?>/></td>
<td><?php echo $unProduit->PRIXHT;?></td>
</tr>
<?php endforeach; ?>

<p> pour avoir le détail d'un produit clique sur l'image </p>

<p> <?php echo $lienspagination;  ?> </p>
