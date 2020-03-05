<?php
class Database {
  public $con;
  public $rows;
  public $result;
  
  public $host;
  public $username;
  public $pass;
  public $db_name;

  public function Database() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->pass = '';
        $this->db_name = 'crud';
  }

  public function Connect() {
      $this->con = mysqli_connect($this->host,$this->username,$this->pass) or die('Error connectiion...');
      mysqli_select_db($this->con,$this->db_name) or die("Database does not exists....");
  }

//   public function Result() {

//   }

  public function Query($qry){
    $this->Connect();
    $this->result = mysqli_query($this->con,$qry);

    return $this->result;
    echo "sucess";

    // if(strpos($qry, 'select') !== false){


    //     //$res = [];
    //     //$rows = mysqli_fetch_object($this->result);
    //    //return $rows;
    //     //$res =  $this->result;
    //     $this->rows = $this->result;
    //     // for($i=0;$i<$res->num_rows; $i++) {
            
    //     // }
    //     // while( ){
    //     //     $obj = new stdClass();
    //     //     $obj->id = $rows->user_id;
    //     //     $obj->name = $rows->name;

    //     //     array_push($res,$obj);
    //     // }

    //      return $this->rows;
    // } else {
    //     return $this->result;
    // }

  }
}
?>