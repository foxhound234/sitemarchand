<?php

class client extends CI_Controller{

 public function _construct()
 {
  parent::_construct();
  $this->load->helper('url');

  $this->load->helper('assets');

  $this->load->model('modeleclient');

  $this->load->model('modeleproduit');

  $this->load->model('modelecategorie');
 }
 
public function connexion()
{
$this->load->helper('form');
$this->load->library('form_validation');
$DonneesInjectees['TitreDeLaPage'] = 'Se connecter';
$this->form_validation->set_rules('txtEmail', 'email', 'required');

$this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');

if ($this->form_validation->run()===FALSE)
{

    $this->load->view('templates/Entete');

    $this->load->view('client/connexion', $DonneesInjectees); // on renvoie le formulaire

    $this->load->view('templates/PiedDePage');
    
}

else
{
 $Utilisateur= array(
    'email'=>$this->input->post('txtEmail'),
    'motsDePasse'=>$this->input->post('txtMotDePasse'),
 );
$Utilisateurretourner = $this->modeleclient->retournerUtilisateur($Utilisateur);



if(!($Utilisateurretourner==null))
{
$this->load->library('session');
$this->session->identifiant=$Utilisateurretourner->nom;
$this->session->profil=$Utilisateurretourner->profil;
$DonneesInjectees['identifiant']=$Utilisateur['identifiant'];

$this->load->view('templates/Entete');

$this->load->view('visiteur/connexionReussie', $DonneesInjectees);

$this->load->view('templates/PiedDePage');

}
else
{
    $this->load->view('templates/Entete');

    $this->load->view('visiteur/seConnecter', $DonneesInjectees);

    $this->load->view('templates/PiedDePage');
}

}


}


public function seDeconnecter()
{
    $this->session->sess_destroy();
}



}