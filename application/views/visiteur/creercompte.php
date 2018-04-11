<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo validation_errors(); // mise en place de la validation

/* set_value : en cas de non validation les données déjà

saisies sont réinjectées dans le formulaire */

echo form_open('visiteur/creercompte');

echo form_label('Nom','txtNom'); // creation d'un label devant la zone de saisie

echo form_input('txtNom', set_value('txtNom'));

echo form_label('prenom','txtPrenom');

echo form_input('txtPrenom', set_value('txtPrenom'));

echo form_label('adresse', 'txtadresse');

echo form_input(txtadresse,set_value('txtadresse'));

echo form_label('ville', 'txtVille');

echo form_input(txtVille,set_value('txtVille'));

echo form_label('codepostal','txtcodePostal');

echo form_input('txtcodePostal',set_value('txtcodePostal'));

echo form_label('email', 'txtemail');

echo form_input('txtemail',set_value('txtemail'));

echo form_label('Mot de passe','txtMdp');

echo form_password('txtMdp', set_value('txtMdp'));

echo form_submit('submit', 'enregistrement');

echo form_close();
?>