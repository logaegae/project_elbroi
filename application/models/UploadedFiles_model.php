<?php
class UploadedFiles_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function uploadList($option){

  		$this -> db -> insert('UploadedFiles', $memberData);
  		$result = $this -> db -> insert_id();
  		return $result;
    }

    function getMainList(){

      return $this->db->query("SELECT * FROM UploadedFiles")->result();
    }
}
