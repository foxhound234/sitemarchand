<?php

class visiteur extends CI_Controller{

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
        $this->load->view('templates/Entete');
        $this->load->view('visiteur/creercompte', $DonneesInjectees);
        $this->load->view('templates/PiedDePage');
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










}