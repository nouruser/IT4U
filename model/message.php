<?php 

class Message{
    private $id,$contenu,$emetteur;

    public function __construct($id,$contenu,$emetteur) {
        $this->id = $id;
        $this->contenu = $contenu;
        $this->emetteur = $emetteur;
      }

    //Les getters
    public function getId() {
        return $this->id;
      }
    public  function getContenu() {
        return $this->contenu;
      }
    public function getEmetteur() {
          return $this->emetteur;
      }
    
    //Les setters
    public function setId($id) {
          $this->id = $id;
      }
    public function setContenu($contenu) {
          $this->contenu = $contenu;
      }
    public function setEmetteur($emetteur) {
          $this->emetteur = $emetteur;   
      }
    
}
?>