<?php

namespace Libs\Database;

use PDOException;

class ProductsTable
{   
    // CONNECT TO MySQL.php

    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    // CREATE PRODUCTS
    public function insertProducts($data)
    {
        try {
            $query = 
                "INSERT INTO products (
                    product_name,product_description, product_photo
                ) VALUES (
                    :product_name, :product_description, :product_photo
                )";

            $statement = $this->db->prepare($query);
            $statement->execute($data);

        return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage() ();
        }
    }

    // READ PRODUCTS
    public function getAllProducts()
    {
        $statement = $this->db->query(
            "SELECT product_id, product_name, product_description,
            product_photo FROM products"
        );
        return $statement->fetchALL();
    }

    // DELETE PRODUCTS
    public function delete($product_id)
    {
     $statement = $this->db->prepare(
        "DELETE FROM products WHERE product_id = :product_id"
     );

        $statement->execute([ ':product_id' => $product_id ]);

        return $statement->rowCount();
    }
}