<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $conn;
    private $stmt;

    private $bindParams = [];
    private $bindTypes = [];

    public function __construct()
    {
        // Create connection
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($query)
    {
        $this->stmt = $this->conn->prepare($query);
        if ($this->stmt === false) {
            die('Error preparing statement: ' . $this->conn->error);
        }
    }

    public function bind($paramIndex, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = 'i'; // Integer
                    break;
                case is_bool($value):
                    $type = 'i'; // Boolean as integer (1 or 0)
                    $value = $value ? 1 : 0;
                    break;
                case is_null($value):
                    $type = 's'; // Strings can handle null values in SQL
                    $value = null;
                    break;
                default:
                    $type = 's'; // String
            }
        }

        // Store the parameter in an array for binding
        $this->bindParams[] = $value;
        $this->bindTypes[] = $type;
    }

    // Call this method before execute
    public function prepareParams()
    {
        // Check if bindParams is not empty
        if (!empty($this->bindParams)) {
            // Convert bindTypes and bindParams to a format that bind_param can use
            $bindTypes = implode('', $this->bindTypes);
            $params = array_merge([$bindTypes], $this->bindParams);

            // Call call_user_func_array to bind the parameters dynamically
            call_user_func_array([$this->stmt, 'bind_param'], $this->refValues($params));
        }
    }

    // Helper function to create reference array for bind_param
    private function refValues($arr)
    {
        $refs = [];
        foreach ($arr as $key => $value) {
            $refs[$key] = &$arr[$key];
        }
        return $refs;
    }


    public function execute()
    {
        if ($this->stmt->execute()) {
            return 1;
        } else {
            die('Error executing statement: ' . $this->stmt->error);
            return 0;
        }
    }

    public function resultSet()
    {
        $this->prepareParams(); // Prepare parameters for the query
        $this->execute(); // Execute the query
        return $this->stmt->get_result()->fetch_all(MYSQLI_ASSOC); // Fetch all results as an associative array
    }


    public function single()
    {
        $this->prepareParams(); // Prepare parameters for the query
        $this->execute(); // Execute the query
        return $this->stmt->get_result()->fetch_assoc(); // Fetch a single result as an associative array
    }


    public function close()
    {
        $this->stmt->close();
        $this->conn->close();
    }
}



//ini guna stmt
// class Database
// {

//     private $host = DB_HOST;
//     private $user = DB_USER;
//     private $pass = DB_PASS;
//     private $db_name = DB_NAME;

//     private $dbh;
//     private $stmt;

//     public function __construct()
//     {
//         $dsn = 'mysql:host=' . $this->host . 'dbname=' . $this->db_name;

//         $option = [
//             PDO::ATTR_PERSISTENT => true,
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//         ];

//         try {
//             $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
//         } catch (PDOException $e) {
//             die($e->getMessage());
//         }
//     }

//     public function query($query)
//     {
//         $this->stmt = $this->dbh->prepare($query);
//     }

//     public function bind($param, $value, $type = NULL)
//     {
//         if (is_null($type)) {
//             switch (true) {
//                 case is_int($value):
//                     $type = PDO::PARAM_INT;
//                     break;
//                 case is_bool($value):
//                     $type = PDO::PARAM_BOOL;
//                     break;
//                 case is_null($value) :
//                     $type = PDO::PARAM_NULL;
//                     break;
//                 default :
//                     $type = PDO :: PARAM_STR;
//             }
//         }

//         $this->stmt->bindValue($param, $value, $type);
//     }

//     public function execute()
//     {
//         $this->stmt->execute();
//     }    

//     public function resultSet()
//     {
//         $this->execute();
//         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
//     }

//     public function single()
//     {
//         $this->execute();
//         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

//     }
// }
