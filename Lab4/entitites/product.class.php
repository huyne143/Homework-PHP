<?php
require_once("config/db.class.php");

class Product
{
    public $productID;
    public $productName;
    public $cateID;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    // Constructor to initialize object properties
    public function __construct($pro_name, $cate_id, $price, $quantity, $desc, $picture)
    {
        $this->productName = $pro_name;
        $this->cateID = $cate_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $desc;
        $this->picture = $picture;
    }

    // Method to save product information into the database
    public function save()
    {
        // Initialize $db object with class Db from file db.class.php
        $db = new Db();
        
        // Create SQL query to insert product information into the database
        $sql = "INSERT INTO product (ProductName, CateID, Price, Quantity, Description, Picture) VALUES ('$this->productName', '$this->cateID', '$this->price', '$this->quantity', '$this->description', '$this->picture')";
        
        // Execute the SQL query using query_execute method from class Db
        $result = $db->query_execute($sql);
        
        // Return the result of the query execution
        return $result;
    }

    // Method to retrieve a list of all products from the database
    public static function list_product()
    {
        // Initialize $db object with class Db from file db.class.php
        $db = new DB();
        
        // Create SQL query to select all products from the database
        $sql = "SELECT * FROM product";
        
        // Execute the SQL query using select_to_array method from class Db
        $rs = $db->select_to_array($sql);
        
        // Return the result set
        return $rs;
    }
}
?>
