<?php

class Visiteur extends CI_Controller{

    public function __construct()

    {
       parent::__construct();
 
       $this->load->helper('url');
 
       $this->load->helper('assets'); // helper 'assets' ajouté a Application
 
       $this->load->library('pagination');
 
       $this->load->model('modeleclient'); // chargement modèle, obligatoire
 
       $this->load->model('modeleproduit');
    } // __construct

    public function ajouterunclient()
    {
     $this->load->helper('form');
     $this->load->library('form_validation');
     $DonneesInjectees['TitreDeLaPage'] = 'enregistrement';
      $this->form_validation->set_rules('txtnom','nom','required');
      
      $this->form_validation->set_rules('txtprenom','prenom','required');
     
      $this->form_validation->set_rules('txtemail','email','required');

      $this->form_validation->set_rules('txtmdp','mdp','required');
       if($this->form_validation->run()===false)
       {
        $this->load->view('templates/entete');
        $this->load->view('visiteur/creercompte', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
       }
       else
       {
         $client=array(
            'nom' => $this->input->post('txtnom'),

            'prenom' => $this->input->post('txtprenom'),

            'adresse'=>$this->input->post('txtadresse'),

            'ville'=>$this->input->post('txtville'),

            'codePostal'=>$this->input->post('txtcodePostal'),

            'email'=>$this->input->post('txtemail'),

            'motdePasse'=>$this->input->post('txtMdp'),
             'profil'=>'C'
            ); 
        $this->modeleclient->insererUnclient($client);
       }
    }
    public function afficherlesproduits()
    {
     $config=array();
    $config["base_url"] = site_url('visiteur/listerLesproduit');
    $config["total_rows"] =$this->modeleproduit->nombredeproduit();
    $config["per_page"] = 3;
    $config["uri_segment"] = 3; 
    $config['first_link'] = 'Premier';

    $config['last_link'] = 'Dernier';
  
    $config['next_link'] = 'Suivant';
  
    $config['prev_link'] = 'Précédent';
    
    $this->pagination->initialize($config);

    $noPage = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 $DonneesInjectees['TitreDeLaPage'] = 'Les produits';
  $DonneesInjectees["LesArticles"]=$this->modeleproduit-> retournerArticles($config["per_page"],$noPage);
  $DonneesInjectees["lienspagination"]=$this->pagination->create_links();

  $this->load->view('templates/entete');

  $this->load->view('visiteur/listerlesproduit',$DonneesInjectees);

  $this->load->view('templates/piedDePage');
    }
 public function affichelescategorie()
 {
 $DonneesInjectees['lescategories']=$this->modelecategorie->Retournercategorie();
  $DonneesInjectees['TitredelaPage']='les Catégorie';
  $this->load->view('templates/entete');
  $this->load->view('visiteur/listerlesCategorie',$DonneesInjectees);
   $this->load->view('templates/entete');
 }
 public function afficherlesproduitscategorie($nocategorie=null)
 {

 }
 
}

