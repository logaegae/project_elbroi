<?php
class UploadedFiles_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function uploadList($option){
        $url = array(
			'url' => $option['url']
        );
  		$this -> db -> insert('UploadedFiles', $url);
  		$result = $this -> db -> insert_id();

        if($option['code']){
            $data = array(
    			'code' => $option['code'],
                'uploadedFileId' => $result,
                'updateId' => 'admin@elbroi.com'
            );
            $this -> db -> insert('SiteImage', $data);
        }

  		return $result;
    }

    function getMainList(){

      return $this -> db -> query("SELECT * FROM UploadedFiles") -> result();

    }
}
