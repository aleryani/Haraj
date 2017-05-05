<?php 

    include_once($_SERVER['DOCUMENT_ROOT']."/haraj/config/db.inc.php");    
    
    foreach ($C as $name => $val) {
        define($name, $val);
    }//end foreach

    class db_connect {
        private $connection;
        public function __construct(){
            $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);            
        }//end function
        
        public function execute_select_query($query){        
            if(isset($this->connection) && $this->connection !== false){
                $rows = array();
                $result = $this->connection->query($query) or die($this->connection->error);
                if(isset($result) && $result == true){
                    while($row = $result->fetch_assoc()){
                        $rows[] = $row;
                    }//end while
                    return $rows;
                }//end if
                return false; // execution query error
            }//end if
            return null;
        }//end execute_select_query function
     
        public function execute_query($query){        
            if(isset($this->connection) && $this->connection !== false){
                $result =  $this->connection->query($query) or die ($this->connection->error);
                if(isset($result)){
                    return $result;
                }//end if            
            }//end if
            return null; // database connection is empty
        }//end execute_query function
          
     /*
      * Escape special characters that might used in sql injection attack       
      */
     
        public function escape_string($str){         
            if(isset($this->connection) && $this->connection !== false){
                return $this->connection->real_escape_string($str);
            }//end if         
        }//end escape_string_and_quote funciton
        
    }//end db_connect class    
?>