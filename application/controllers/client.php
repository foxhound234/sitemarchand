<?php

class client extends CI_Controller{

 public function _construct()
 {
  parent::_construct();
 }
 
public function seDeconnecter()
{
    $this->session->sess_destroy();
}

 
public function connexion()
{
$DonneesInjectees['TitreDeLaPage']='connexion';
if($this->input->post('btnconnect')===null)
{

    $this->load->view('templates/entete');

    $this->load->view('Client/connexion', $DonneesInjectees); // on renvoie le formulaire

    $this->load->view('templates/PiedDePage');
    
}

else
{
 $Utilisateur= array(
    'EMAIL'=>$this->input->post('txtEmail'),
    'MOTDEPASSE'=>$this->input->post('txtMotDePasse'),
 );
$Utilisateurretourner = $this->modeleclient->retournerUtilisateur($Utilisateur);


if($Utilisateurretourner===null)
{

    $this->load->view('templates/Entete');

    $this->load->view('Client/connexion', $DonneesInjectees);

    $this->load->view('templates/PiedDePage');
}
else
{
    $this->load->view('templates/Entete');

    $this->load->view('Client/connexion', $DonneesInjectees);

    $this->load->view('templates/PiedDePage');

$this->session->identifiant=$Utilisateurretourner->PRENOM;
$this->session->profil=$Utilisateurretourner->PROFIL;
$DonneesInjectees['identifiant']=$Utilisateur['identifiant'];

$this->load->view('templates/Entete');

$this->load->view('visiteur/connexionReussie', $DonneesInjectees);

$this->load->view('templates/PiedDePage');
}

}


}



}