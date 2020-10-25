<?php
class frontend_model extends DB
{
    public function show_category_frontend()
    {
        $show_category = "SELECT * FROM category WHERE category_status = '1' ORDER BY category_id DESC ";
        $stmt = $this->connect()->query($show_category);
        return $stmt;
    }
    public function show_brand_frontend()
    {
        $show_brand = "SELECT * FROM brand WHERE brand_status = '1' ORDER BY brand_id DESC ";
        $stmt = $this->connect()->query($show_brand);
        return $stmt;
    }
    public function show_product_frontend()
    {
        $show_product = "SELECT * FROM Product JOIN category,brand  WHERE Product.category_id = category.category_id AND Product.brand_id = brand.brand_id AND product_status = '1' ORDER BY product_id DESC";
        $stmt = $this->connect()->query($show_product);
        return $stmt;
    }
    public function show_product_category()
    {
        $category_id = $_GET['category_id'];
        $show_product =  "SELECT * FROM Product JOIN category,brand  WHERE Product.category_id = category.category_id AND Product.brand_id = brand.brand_id AND Product.category_id = '$category_id' AND product_status = '1'";
        $stmt = $this->connect()->query($show_product);
        return $stmt;
    }
    public function show_product_brand()
    {
        $brand_id = $_GET['brand_id'];
        $show_product =  "SELECT * FROM Product JOIN category,brand  WHERE Product.category_id = category.category_id AND Product.brand_id = brand.brand_id AND Product.brand_id = '$brand_id' AND product_status = '1'";
        $stmt = $this->connect()->query($show_product);
        return $stmt;
    }
    public function show_product_details()
    {
        $product_id = $_GET['product_id'];
        $show_product_details =  "SELECT * FROM Product JOIN category,brand  WHERE Product.category_id = category.category_id AND Product.brand_id = brand.brand_id AND Product.product_id = '$product_id' AND product_status = '1'";
        $stmt = $this->connect()->query($show_product_details);
        return $stmt;
    }
}