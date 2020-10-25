<?php
class admin_controller extends admin_model
{
    //start-login
     public function admin_controller_login()
     {
         if(isset($_POST['submit_login'])){
             $admin_username = $_POST['admin_username'];
             $admin_password = ($_POST['admin_password']);
             $this->admin_login($admin_username,$admin_password);
         }
     }
     public function admin_controller_logout()
     {
         $this->logout();
     }
     public function admin_resetpassword_controller()
     {
         if(isset($_POST['submit_resetpassword'])){
             $admin_username = $_POST['admin_username'];
             $admin_password = $_POST['admin_password'];
             $admin_new_password = $_POST['admin_new_password'];
             $this->admin_resetpassword($admin_username,$admin_password,$admin_new_password);
         }
     }
     //end-login
    //start-category
     public function add_category_controller()
     {
         if(isset($_POST['add_category'])){
             $category_name = $_POST['category_name'];
             $category_description = $_POST['category_description'];
             $category_status = $_POST['category_status'];
             $this->add_category($category_name,$category_description,$category_status);
         }
     }
     public function update_category_controller()
     {
         if(isset($_POST['edit_category'])){
             $category_name = $_POST['category_name'];
             $category_description = $_POST['category_description'];
             $this->update_category($category_name, $category_description);
         }
     }
     public function non_active_category_controller()
     {
         if(isset($_GET['status']) && $_GET['status'] == 'Onl'){
         $this->non_active_category();
         }
     }
     public function active_category_controller()
     {
         if(isset($_GET['status']) && $_GET['status'] == 'Off') {
             $this->active_category();
         }
     }
     public function delete_category_controller()
     {
         if(isset($_GET['action']) && $_GET['action'] == 'delete'){
             $this->delete_category();
         }
     }
     //end-category
    //start-brand
    public function add_brand_controller()
    {
        if(isset($_POST['add_brand'])){
            $brand_name = $_POST['brand_name'];
            $brand_description = $_POST['brand_description'];
            $brand_status = $_POST['brand_status'];
            $this->add_brand($brand_name,$brand_description,$brand_status);
        }
    }
    public function update_brand_controller()
    {
        if(isset($_POST['edit_brand'])){
            $brand_name = $_POST['brand_name'];
            $brand_description = $_POST['brand_description'];
            $this->update_brand($brand_name, $brand_description);
        }
    }
    public function non_active_brand_controller()
    {
        if(isset($_GET['status']) && $_GET['status'] == 'Onl'){
            $this->non_active_brand();
        }
    }
    public function active_brand_controller()
    {
        if(isset($_GET['status']) && $_GET['status'] == 'Off') {
            $this->active_brand();
        }
    }
    public function delete_brand_controller()
    {
        if(isset($_GET['action']) && $_GET['action'] == 'delete'){
            $this->delete_brand();
        }
    }
    //end-brand
    //start-product
    public function add_product_controller()
    {
        if(isset($_POST['add_product'])){
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_description = $_POST['product_description'];
            $product_content = $_POST['product_content'];
            $category_id = $_POST['category_id'];
            $brand_id = $_POST['brand_id'];
            $product_status = $_POST['product_status'];

            $product_image = $_FILES['product_image']['name'];
            $product_image_tmp=$_FILES['product_image']['tmp_name'];
            move_uploaded_file($product_image_tmp,'adminModules/Product/uploads/'.$product_image);

            $this->add_product($product_name,$product_price,$product_image,$product_description,$product_content,$category_id,$brand_id,$product_status);
        }
    }
    public function non_active_product_controller()
    {
        if(isset($_GET['status']) && $_GET['status'] == 'Onl'){
            $this->non_active_product();
        }
    }
    public function active_product_controller()
    {
        if(isset($_GET['status']) && $_GET['status'] == 'Off'){
            $this->active_product();
        }
    }
    public function update_product_controller()
    {
        if(isset($_POST['edit_product'])){
            $product_name = $_POST['product_name'];
            $product_price=$_POST['product_price'];
            $product_description = $_POST['product_description'];
            $product_content = $_POST['product_content'];
            $category_id = $_POST['category_id'];
            $brand_id = $_POST['brand_id'];

            $product_image = $_FILES['product_image']['name'];
            $product_image_tmp=$_FILES['product_image']['tmp_name'];
            move_uploaded_file($product_image_tmp,'adminModules/Product/uploads/'.$product_image);
            $this->update_product($product_name,$product_price,$product_description,$product_content,$category_id,$brand_id,$product_image);
        }
    }
    public function delete_product_controller()
    {
        if(isset($_GET['action']) && $_GET['action'] == 'delete'){
            $this->delete_product();
        }
    }
}
