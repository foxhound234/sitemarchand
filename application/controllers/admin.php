<?php

class Admin extends CI_Controller {
    public function __construct()

    {
       parent::__construct();
       $this->load->model('modeleproduit');
       $this->load->model('modelecategorie');
        $this->load->model('');
        $this->load->model('modelemarque');
         $this->load->library('session');
       if ($this->session->statut=='c') // c : statut visiteur
       {
    $this->load->helper('url'); // pour utiliser redirect
    redirect('/client/connexion.php'); // pas les droits : redirection vers connexion
       }
      
    } // __construct
   public function ajouterunproduit()
   {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $DonneesInjectees['TitreDeLaPage'] = 'Ajouter un produit';
    $this->form_validation->set_rules('txtlibelle', 'libelle', 'required');

    $this->form_validation->set_rules('txtdetail', 'detail', 'required');
    
    $this->form_validation->set_rules('txtprixht', 'prixht', 'required');

    $this->form_validation->set_rules('txttva', 'tauxtva', 'required');
    
    $this->form_validation->set_rules('txtquantitestock', 'quantitestock', 'required');
 
    $this->form_validation->set_rules('txtdateajout', 'dateajout', 'required');

    $this->form_validation->set_rules('txtdisponible', 'disponible', 'required');
    $DonneesInjectees['LesMarques'] = $this->modelemarque->Retournermarques();
    $DonneesInjectees['LesCategorie'] = $this->modelecategorie->Retournercategorie();
      if ($this->form_validation->run()===false)
      {
        $this->load->view('templates/Entete');
        $this->load->view('admin/ajouterproduit', $DonneesInjectees);
        $this->load->view('templates/PiedDePage');
      }
       else
       {

       }

   }
    







}
