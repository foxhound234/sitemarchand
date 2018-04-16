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
 public function rechercheproduit($nomproduit)
 {
  $this->db->select('libelle,prix ht,nomimage');
  $this->db->from('produit');
  $this->db->like('libelle',$nomproduit);
 }
public function retournerArticlescatego($nocategorie,$nombreDeLignesARetourner, $noPremiereLigneARetourner)
{
    $this->db->limit($nombreDeLignesARetourner, $noPremiereLigneARetourner);
  
    $requete=$this->db->get_where('produit',array('NOCATEGORIE'=>$nocategorie));

  if($requete->num_rows() > 0) {
    foreach($requete->result() as $ligne){
        $jeuDEnregsitrements[]=$ligne;
                         }
         return $jeuDEnregsitrements;    
                        }
 return false;
}

public function nombredeproduitcatego($nocategorie)
{


    
}


 public function nombredeproduit()
 {
    return $this->db->count_all("produit");
 }
 public function retournerArticles($nombreDeLignesARetourner, $noPremiereLigneARetourner)
{// Nota Bene : surcharge non supportée par PHP
$this->db->limit($nombreDeLignesARetourner, $noPremiereLigneARetourner);

$requete = $this->db->get("tabarticle");

if ($requete->num_rows() > 0) { // si nombre de lignes > 0

foreach ($requete->result() as $ligne) {

$jeuDEnregsitrements[] = $ligne;

}
return $jeuDEnregsitrements;
} // fin if
return false;
} // retournerArticlesLimite




}

/* End of file ModelName.php */
