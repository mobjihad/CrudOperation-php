<?php
 class CrudApp{

    private $conn;

    public function __construct(){
 
         $dbhost = "Localhost";
         $dbuser = "root";
         $dbpass = "";
         $dbname = "crud";

         $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

         if(!$this->conn){

            die("Connection Error!!");
         }
               
    }

    public function addInfo($data){

         $pname = $data['Name'];
         $identifier = $data['Identifier'];
         $image = $_FILES['Image']['name'];
         $image_tmp_name = $_FILES['Image']['tmp_name'];

         $query = "INSERT into pandas(Name,identifier,img_source) Value('$pname','$identifier','$image')";

         if(mysqli_query($this->conn, $query)){
            move_uploaded_file($image_tmp_name,'Uploads/'.$image);
            return "Information Added Succesfully";
         }
    }

    public function displayData(){

      $query = "SELECT * from pandas" ; 

      if(mysqli_query($this->conn,$query)){
          
         $rtn_data = mysqli_query($this->conn,$query);
         return $rtn_data; 

      }
       
    }
       

 }





?>
