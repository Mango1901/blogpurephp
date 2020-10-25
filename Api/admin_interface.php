<?php
interface tbl_admin
{
    public function admin_login($admin_username, $admin_password);
    public function logout();
    public function show_admin_details();
    public function admin_resetpassword($admin_username,$admin_password,$admin_new_password);
}
interface category
{
    public function add_category($category_name, $category_description, $category_status);
    public function show_category();
    public function show_category_edit();
    public function update_category($category_name, $category_description);
    public function non_active_category();
    public function active_category();
    public function delete_category();
}
interface brand
{
    public function add_brand($brand_name, $brand_description, $brand_status);
    public function show_brand();
    public function show_brand_edit();
    public function update_brand($brand_name, $brand_description);
    public function non_active_brand();
    public function active_brand();
    public function delete_brand();
}
interface Product
{
    public function add_product($product_name, $product_price, $product_image, $product_description, $product_content, $category_id, $brand_id, $product_status);
    public function show_product();
    public function non_active_product();
    public function active_product();
    public function show_edit_product();
    public function update_product($product_name,$product_price,$product_description,$product_content,$category_id,$brand_id,$product_image);
    public function delete_product();
}