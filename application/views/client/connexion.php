<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo validation_errors(); // mise en place de la validation

/* set_value : en cas de non validation les données déjà

saisies sont réinjectées dans le formulaire */

echo form_open('client/connexion');

echo form_label('email','txtEmail'); // creation d'un label devant la zone de saisie

echo form_input('txtEmail', set_value('txtEmail'));

echo form_label('Mot de passe','txtMotDePasse');

echo form_password('txtMotDePasse', set_value('txtMotDePasse'));

echo form_submit('submit', 'Se connecter');

echo form_close();
?>