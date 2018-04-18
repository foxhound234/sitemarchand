<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo validation_errors(); // mise en place de la validation

/* set_value : en cas de non validation les données déjà

saisies sont réinjectées dans le formulaire */

echo form_open('admin/ajouterproduit');
 echo form_label('nom du produit', 'lbllibelle');

 echo  form_input('txtlibelle','',array('pattern'=>'^[a-zA-Z][a-zA-Z0-9]*','title'=>'le produit  doit commencer par une lettre', 'required'=>'required')).'<BR>';

 echo form_label('détail du produit', 'lbldétail');

 echo  form_textarea('txtdetail', '',array('required'=>'required')).'<BR>';


 
  echo  form_label('prixht','lblprixht');
  echo  form_input('txtprixht', '',array('pattern'=>'[0-9]','title'=>'le prix doit est uniquement composé de chiffres','required'=>'required')).'<BR>';

  echo  form_label('tauxtva', 'lbltva');

  echo  form_input('txttva', '',array('pattern'=>'[0-9]' ,'title'=>'la tva doit est uniquement composé de chiffres','required'=>'required')).'<BR>';

   echo form_label('image', 'lblimage');
 
   echo form_input('txtimage', '',array('pattern'=>'^[a-zA-Z][a-zA-Z0-9]*','title'=>'Un nom de fichier doit commencer par une lettre', 'required'=>'required')).'<BR>';
   
   echo form_label('quantité dans le stock', 'lblquantitestock');

   echo form_input(array( 'name'=>'txtquantitestock','type'=>'number', 'min'=>'0','max'=>'120','step'=>'1')).'<BR>';
  
  echo form_label('dateajout', 'lbldateajout');
  
  echo form_input('txtdateajout', '',array('pattern'=>'(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])[\/](19|20)\d\d','title'=>'la date doit etre au format jj/mm/aaaa')).'<BR>';
  
  echo form_label('disponibilité', 'lbldispo');
  $liste=array(
     'TRUE'=> 'VRAI',
     'FALSE'=> 'FAUX'
  );
  echo form_dropdown('txtdispo',$liste,'default');
?>
<?php
foreach ($LesMarques as $UneMarque) {
  $option=array($UneMarque['noMarque']=>$UneMarque['Nom']);
}
echo form_dropdown('marque', $options, 'default');
?>
<?php
foreach($LesCategorie as $Unecategorie){
  $categorie=array($Unecategorie['noCategorie']=>$Unecategorie['libelle']);  
}
echo form_dropdown('categorie',$categorie, 'default');
?>

</form>