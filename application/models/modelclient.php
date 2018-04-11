<?php
class Modeleclient extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function insereunclient($pDonnesaInserer)
{
    return $this->db->insert(('client',$pDonnesaInserer));
}









}