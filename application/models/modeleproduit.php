<?php


class modelproduit extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
  public function ajoutproduit($pDonneesAInserer)
  {
    return $this->db->insert(('produit',$pDonnesaInserer));
  }
  public function retournerProduit($pNoProduit = FALSE)

  {
     if ($pNoProduit === FALSE) // pas de n° de produits en paramètre
     {  // on retourne tous les produits
          $requete = $this->db->get('produit');
          return $requete->result_array(); // retour d'un tableau associatif
     }
     $requete = $this->db->get_where('produit', array('Noproduit' => $pNoProduit));
     return $requete->row_array(); // retour d'un tableau associatif
 } 
 
}

/* End of file ModelName.php */
