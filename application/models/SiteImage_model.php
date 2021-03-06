<?php
class SiteImage_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function uploadList($option){

        $this -> db -> trans_start();

        $data = array(
            'url' => $option['url'],
			'code' => $option['code'],
            'updateId' => $option['updateId'],
            'priority' => '1'
        );
        if(!empty($option['goodsId'])){
            $data['goodsId'] = $option['goodsId'];
        }

        $this -> db -> insert('SiteImage', $data);

        $result = $this -> db -> insert_id();

        $this -> db -> trans_complete();

  		return $result;
    }

    function getMainList(){

        // $query = "SELECT s.id, s.priority, s.registrationDate, s.uploadedDate, s.updateId, u.url ";
        // $query .= "FROM UploadedFiles AS u INNER JOIN SiteImage AS s ";
        // $query .= "ON s.uploadedFileId = u.id ";
        // $query .= "WHERE s.delYn = 'N' AND u.delYn = 'N'";
        // $query .= "ORDER BY s.priority, s.id DESC";

        $this -> db -> select('id, priority, registrationDate, uploadedDate, updateId, url');
        $this -> db -> from('SiteImage');
        // $this -> db -> join('UploadedFiles', 'UploadedFiles.id = SiteImage.uploadedFileId');
        $this -> db -> where(array('delYn' => 'N','code' => 'SITE_MAIN_IMAGE'));
        $this -> db -> order_by('priority ASC', 'uploadedDate DESC', 'registrationDate DESC');
        $query = $this -> db -> get() -> result_array();

        return $query;

    }

    function deleteMainItem($index){

        $this -> load -> helper('date');
        $this -> db -> trans_start();

        $data = array('delYn' => 'Y', 'deletedDate' => now());
        $where = "id = ".$index['id'];
        $this -> db -> update('SiteImage', $data, $where);

        if($this -> db -> affected_rows() > 0){
            $data = array('delYn' => 'Y', 'deletedDate' => now());
            $where = "id = ".$index["uploadedFileId"];
            $this -> db -> update('UploadedFiles', $data, $where);

            if($this -> db -> affected_rows() > 0){

                $this -> db -> trans_complete();
                return array('message' => '삭제되었습니다.');

            }
        }
    }

    function saveOrder($list){

        foreach ($list as $item){

            $data = array('priority' => $item['priority']);
            $where = "id = ".$item['id'];
            $this -> db -> update('SiteImage', $data, $where);

        }

            return array('message' => '순서를 저장했습니다.');

    }
}
