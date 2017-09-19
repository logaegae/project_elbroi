<?php
<<<<<<< HEAD
class UploadedFiles extends CI_Model {
=======
class UploadedFiles_model extends CI_Model {
>>>>>>> ef1f9a8fa1f10403dd8895929d90867f42615e8f

    function __construct(){
        parent::__construct();
    }

<<<<<<< HEAD
    public function upload($data){

        $this->db->insert('UploadedFiles', $data);
		$result = $this->db->insert_id();
        return $result;
    }

=======
    function uploadList($option){

  		$this -> db -> insert('UploadedFiles', $memberData);
  		$result = $this -> db -> insert_id();
  		return $result;
    }

    function getMainList(){

      return $this->db->query("SELECT * FROM UploadedFiles")->result();
    }
>>>>>>> ef1f9a8fa1f10403dd8895929d90867f42615e8f
}
