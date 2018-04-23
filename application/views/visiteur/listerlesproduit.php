<h2> <?php echo $TitreDeLaPage?> </h2>


<?php foreach($Lesproduits as $unProduit):
echo '<tr>
<td> <img width="25%" src="'.img_url($unProduit['NOMIMAGE']).'"/><h4>'.anchor('visiteur/voirunproduit/'.$unProduit['NOPRODUIT']).'</h4>
<td>' .$unProduit['LIBELLE'].'</td>
<td>' .$unProduit['PRIXHT'].'</td>
<td>' .$unProduit['QUANTITEENSTOCK'].'</td>
</tr>';
endforeach?>

<p> pour avoir le détail d'un produit clique sur l'image </p>

<p> <?php echo $lienspagination;  ?> </p>
