<?php
    include_once 'db_config.php';
class Database {
    public $dbConnect;
    
    protected function __construct(){
        $this->dbConnect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        if(mysqli_connect_errno()){
            echo 'Error'. mysqli_connect_errno();
        }
        $this->dbConnect->set_charset('utf8');
        date_default_timezone_set('Asia/Kabul');
        $this->dbConnect->autocommit(FALSE);
    }
    protected function execute($query) {
       
        $log = $this->dbConnect->query($query);
        
        if (!$log) {
            $this->dbConnect->rollback();
            return FALSE;
        }
        $this->dbConnect->commit();
        return TRUE;
    }
    protected function result_query($query){
        $result = $this->dbConnect->query($query);
        if(!is_null($result)){
            return $result;
        }
        return FALSE;
    }
    protected function result_query_object($query){
        $result = $this->dbConnect->query($query);
        return $result;
    }
    //check inputs
    public function safe_input($input){
        if(is_string($input)){
            return $input = $this->dbConnect->real_escape_string(strip_tags($input));
        }elseif(is_int($input)){
            return $input;
        }
        else{
            return "not a string";
        }
    }
    public function __destruct() {
        mysqli_close($this->dbConnect);
    }
}

?>