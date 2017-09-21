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
                'updateId' => $option['updateId']
            );
            $this -> db -> insert('SiteImage', $data);
        }

  		return $result;
    }

    function getMainList(){
        $query = "SELECT s.id, s.priority, s.registrationDate, s.uploadedDate, s.updateId, u.url ";
        $query .= "FROM UploadedFiles AS u INNER JOIN SiteImage AS s ";
        $query .= "ON s.uploadedFileId = u.id ";
        $query .= "WHERE s.delYn = 'N' AND u.delYn = 'N'";
        $query .= "ORDER BY s.priority, s.id DESC";
        return $this -> db -> query($query) -> result();

    }
}
