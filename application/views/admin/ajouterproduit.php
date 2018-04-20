<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo validation_errors(); // mise en place de la validation

/* set_value : en cas de non validation les données déjà

saisies sont réinjectées dans le formulaire */

echo form_open('admin/ajouterproduit');
 echo form_label('nom du produit :', 'lbllibelle');

 echo  form_input('txtlibelle','',array('pattern'=>'^[a-zA-Z][a-zA-Z0-9]*','title'=>'le produit  doit commencer par une lettre', 'required'=>'required')).'<BR>';

 echo form_label('détail du produit :', 'lbldétail');

 echo  form_textarea('txtdetail', '',array('required'=>'required')).'<BR>';


 
  echo  form_label('prixht :','lblprixht');
  echo  form_input('txtprixht', '',array('pattern'=>".{0,}",'title'=>'le prix doit est uniquement composé de chiffres','required'=>'required')).'<BR>';

  echo  form_label('tauxtva :', 'lbltva');

  echo  form_input('txttva', '',array('pattern'=>".{0,10}" ,'title'=>'la tva doit est uniquement composé de chiffres','required'=>'required')).'<BR>';

   echo form_label('image :', 'lblimage');
 
   echo form_input(array('type'=>'file','name'=>'txtimage')).'<BR>';
   
   echo form_label('quantité dans le stock', 'lblquantitestock');

   echo form_input(array( 'name'=>'txtquantitestock','type'=>'number', 'min'=>'0','max'=>'1000','step'=>'1')).'<BR>';
  
  echo form_label('dateajout', 'lbldateajout');
  
  echo form_input('txtdateajout', '',array('type'=>'date','name'=>'txtdateajout')).'<BR>';
  
  echo form_label('disponibilité', 'lbldispo');
  $liste=array(
     '1'=> 'VRAI',
     '0'=> 'FAUX'
  );
  echo form_dropdown('txtdispo',$liste,'default').'<BR>';
?>
<?php echo form_label('Numero de marque :','lblnomarque');
?>
<?php
foreach ($LesMarques as $UneMarque) {
  $option='<option value="'.$UneMarque['NOMARQUE'].'">'.$UneMarque['NOM'].'</option>';
}
echo form_dropdown('nomarque',$option, 'default');
?>
<?php echo form_label('Numero de categorie:','lblnocategorie');
?>
<?php
foreach($LesCategorie as $Unecategorie){
  $categorie='<option value="'.$Unecategorie['NOCATEGORIE'].'">'.$Unecategorie['LIBELLE'].'</option>';
}
echo form_dropdown('nocategorie',$categorie, 'default');
?>
 <BR>
<?php
echo form_submit('boutonAjouter', 'ajouter').'<BR>';
echo form_close();
?>