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
    $DonneesInjectees['TitreDeLaPage'] = 'Ajouter un produit';
    $DonneesInjectees['LesMarques'] = $this->modelemarque->Retournermarques();
    $DonneesInjectees['LesCategorie'] = $this->modelecategorie->Retournercategorie();
      if ($this->input->post('btnajouter'))
      {
        $donneesAInserer =array(
          'libelle' =>$this->input->post('txtlibelle'),
          'detail' =>$this->input->post('txtdetail'),
          'prixHT' =>$this->input->post('txtprixht'),
          'tauxTVA' =>$this->input->post('txttva'),
          'nomimage'=>$this->input->post('txtimage'),
          'quantiteenStock'=>$this->input->post('txtquantitestock'),
          'dateajout'=>$this->input->post('txtdateajout'),
          'disponible'=>$this->input->post('txtdispo'),
          'noMarque'=>$this->input->post('txtmarque'),
          'noCategorie'=>$this->input->post('txtcategorie'),
        );
        $this->modeleproduit->ajouterproduit($donneesAInserer);
        $this->load->helper('url'); // helper chargé pour utilisation de site_url (dans la vue)
        $this->load->view('visiteur/insertionReussie');
      }
       else
       {
        $this->load->view('templates/Entete');
        $this->load->view('admin/ajouterproduit', $DonneesInjectees);
        $this->load->view('templates/PiedDePage');
       }

   }
    







}
