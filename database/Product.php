<?php

// Use to fetch product data, ürün verisini almak için
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method, ürün verisini getirme yöntemi
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one, ürün verilerini tek tek getirme yöntemi
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id, ürün id sini kullanarak ürünü get et
    public function getProduct($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one, ürün verilerini tek tek getir
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}