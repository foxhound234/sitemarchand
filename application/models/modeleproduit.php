<?php


class modeleproduit extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function ajouterproduit($pDonneesAInserer)
    {
    return $this->db->insert('produit', $pDonneesAInserer);
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
 public function rechercheproduit($nomproduit)
 {
  $this->db->select('libelle,prix ht,nomimage');
  $this->db->from('produit');
  $this->db->like('libelle',$nomproduit);
 }
}

/* End of file ModelName.php */
