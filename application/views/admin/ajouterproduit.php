<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo validation_errors(); // mise en place de la validation

/* set_value : en cas de non validation les données déjà

saisies sont réinjectées dans le formulaire */

echo form_open('admin/ajouterproduit');?>
<label for="txtdetail"> détail du produit </label>
<input name="txtlibelle" value="<?php echo set_value('txtlibelle'); ?>"></textarea><br/>
<label for="txtdetail"> détail du produit </label>
<textarea name="txtdetail" value="<?php echo set_value('txtdetail'); ?>"></textarea><br/>

<label for="txtprixht">prixht</label>
<input type="input" name="txtprixht" value="<?php echo set_value('txtprixht'); ?>" /><br/>
<label for="txttva"> tva </label>

<input type="input" name="txtttva" value="<?php echo set_value('txttva'); ?>" /><br/>

<label for="txtimage"> nomdelimage</label>

<input type="input" name="txtttva" value="<?php echo set_value('txttva'); ?>" /><br/>

<label for="txtquantitestock"> quantité dans le stock</label>
<input type="input" name="txtquantitestock" value="<?php echo set_value('txtquantitestock'); ?>" /><br/>

<label for="txtdateajout">  date ajout </label>
<input type="input" name="txtquantitestock" value="<?php echo set_value('txtquantitestock'); ?>" /><br/>
<label for="txtdispo"> disponible </label>
<input type="input" name="txtquantitestock" value="<?php echo set_value('txtquantitestock'); ?>" /><br/>
<?php
foreach ($LesMarques as $UneMarque) {
  $option=$UneMarque['Nom'];
}
echo form_dropdown('marque', $options, 'default');
foreach($LesCategorie as $Unecategorie){
  $choix=$Unecategorie['libelle'];  
}
echo form_dropdown('categorie',$choix, 'default');
?>

</form>