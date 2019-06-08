<?php
  class Post {
    // DB stuff
    private $conn;
    private $table = 'anime_table';

    // Post Properties
    public $id_anime;
    public $img_link;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT DISTINCT id_anime, img_link FROM ' . $this->table . '';
      // Prepare statement
      $stmt = $this->conn->prepare($query);
      // Execute query
      $stmt->execute();
      return $stmt;
    }

    public function read1() {
      // Create query
      $query1 = 'SELECT DISTINCT * FROM ganre_table';
      // Prepare statement
      $stmt1 = $this->conn->prepare($query1);
      // Execute query

      $stmt1->execute();

      return $stmt1;

    }
    public function read2() {
      // Create query
      $query2 = 'SELECT DISTINCT * FROM anime_type_table';
      // Prepare statement
      $stmt2 = $this->conn->prepare($query2);
      // Execute query

      $stmt2->execute();

      return $stmt2;

    }
    public function read3() {
      // Create query
      $query3 = 'SELECT DISTINCT * FROM exit_status_table';
      // Prepare statement
      $stmt3 = $this->conn->prepare($query3);
      // Execute query
      $stmt3->execute();

      return $stmt3;

    }
    public function read4() {
      // Create query
      $query4 = 'SELECT DISTINCT * FROM age_limitations_table';
      // Prepare statement
      $stmt4 = $this->conn->prepare($query4);
      // Execute query
      $stmt4->execute();

      return $stmt4;

    }

    public function readt() {
      // Create query
      $query = 'SELECT * FROM ' . $this->table . '';
      // Prepare statement
      $stmt = $this->conn->prepare($query);
      // Execute query
      $stmt->execute();
      return $stmt;
    }

#    public function read_user() {
      // Create query
#      $query = 'SELECT * FROM ' . $this->tableuser . ' WHERE ID LIKE ?';
      // Prepare statement
#      $stm = $this->conn->prepare($query);
#      $stm->bindParam(1,$this->_id);
      // Execute query
#      $stm->execute();
#
#      return $stm;
#    }

}
?>
