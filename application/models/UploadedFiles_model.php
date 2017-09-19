<?php
class UploadedFiles extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function upload($data){

        $this->db->insert('UploadedFiles', $data);
		$result = $this->db->insert_id();
        return $result;
    }

}
