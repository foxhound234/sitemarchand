<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo validation_errors(); // mise en place de la validation

/* set_value : en cas de non validation les données déjà

saisies sont réinjectées dans le formulaire */

echo form_open('admin/ajouterproduit');

<label for="txtlibelle"> le nom du produit</label> // creation d'un label devant la zone de saisie

echo form_input('txtlibelle', set_value('txtlibelle'));

<label for="txtdetail"> détail du produit </label>
<textarea name="txtdetail" value="<?php echo set_value('txtdetail'); ?>"></textarea><br/>

<label for="txtprixht">prixht</label>

echo form_input('txtprixht',set_value('txtprixht'));*

<label for="txttva"> tva </label>

echo form_input(txttauxtva,set_value('txttva'));

<label for="txtimage"> nomdelimage</label>

echo form_input('txtimage',set_value('txtimage'));

<label for="txtquantitestock"> quantité dans le stock</label>

echo form_input('txtquantitestock',set_value('txtquantitestock'));

<label for="txtdateajout">  date ajout </label>

echo form_input('txtdateajout', set_value('txtdateajout'));

<label for="txtdispo"> disponible </label>

echo form_input('txtdispo', set_value('txtdispo'));

foreach ($Lesmarques as $UneMarque) {
    $option['$UneMarque['Nom']']
}
echo form_submit('submit', 'enregistrement');

echo form_close();
?>