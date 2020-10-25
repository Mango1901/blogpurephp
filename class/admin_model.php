<?php
include ('../Api/admin_interface.php');
class admin_model extends DB implements tbl_admin,category,brand,Product
{
    //start-login
    public function admin_login($admin_username, $admin_password)
    {
        $sql_query = "SELECT * FROM `tbl_admin` WHERE `admin_username` = ? AND admin_password = ? limit 1";
        $stmt = $this->connect()->prepare($sql_query);
        $result = $stmt->execute([$admin_username, $admin_password]);
        $login_success = $stmt->fetchAll();
        if ($result == true) {
            foreach ($login_success as $key => $name) {
                $_SESSION['admin_id'] = $name['admin_id'];
                $_SESSION['admin_username'] = $name['admin_username'];
                $_SESSION['admin_password'] = $name['admin_password'];
                header('location:homepage.php?id='.$name['admin_id']);
            }
        } else {
            echo '<script>alert("username or password is not correct!")</script>';
        }
    }

    public function logout()
    {
        if (isset($_GET['ac']) && $_GET['ac'] == 'logout') {
            header('location:index.php');
        }
    }
    public function show_admin_details()
    {
       $id = $_GET['id'];
        $show_admin_details = "SELECT * FROM tbl_admin WHERE admin_id = '$id'";
        $stmt = $this->connect()->query($show_admin_details);
        return $stmt;
    }
    public function admin_resetpassword($admin_username,$admin_password,$admin_new_password)
    {
        $id=$_GET['id'];
        $check_login = "SELECT * FROM tbl_admin WHERE admin_username='$admin_username' AND admin_password='$admin_password' AND admin_id ='$id'";
        $stmt_check_login = $this->connect()->prepare($check_login);
        $result = $stmt_check_login->execute([$admin_username, $admin_password]);
//        $result = $stmt_check_login->execute([$admin_username,$admin_password]);
        if($result == true){
            $_SESSION['admin_username'] = $admin_username;
            $_SESSION['admin_password'] = $admin_password;
            $reset_password = "UPDATE tbl_admin SET admin_password = '$admin_new_password' WHERE admin_username='$admin_username'AND admin_password='$admin_password'AND admin_id = '$id'";
            $stmt = $this->connect()->query($reset_password);
            if($stmt == true){
                echo "<script>alert('Reset Password successfully')</script>";
            } else {
                echo "<script>alert('Username or password is not correct!!!')</script>";
            }
        } else {
            echo "<script>alert('Username or password is not correct!!!')</script>";
        }
    }
    //end-login
    //category
    public function add_category($category_name, $category_description, $category_status)
    {
        $add_query = "INSERT INTO `category`(category_name,category_description,category_status) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($add_query);
        $result = $stmt->execute([$category_name, $category_description, $category_status]);
        if ($result == true) {
            echo '<script>alert("Add Category Successfully")</script>';
        }
        return $result;
    }

    public function show_category()
    {
        $show_category = "SELECT * FROM `category`";
        $stmt = $this->connect()->prepare($show_category);
        $stmt->execute();
        return $stmt;
    }

    public function show_category_edit()
    {
        $id = $_GET['id'];
        $show_category = "SELECT * FROM `category` WHERE category_id = '$id'";
        $stmt = $this->connect()->query($show_category);
        return $stmt;
    }

    public function update_category($category_name, $category_description)
    {
        $id = $_GET['id'];
        $update_category = "UPDATE category SET category_name = '$category_name', category_description = '$category_description' WHERE category_id = '$id'";
        $stmt = $this->connect()->prepare($update_category);
        $result = $stmt->execute([$category_name, $category_description]);
        if ($result == true) {
            echo '<script>alert("Edit Category Successfully")</script>';
        }
    }

    public function non_active_category()
    {
        $id = $_GET['id'];
        $non_active_category = "UPDATE category SET category_status = '0' WHERE category_id = '$id'";
        $stmt = $this->connect()->prepare($non_active_category);
        $result = $stmt->execute();
        if($result == true){
            echo '<script>alert("Non Active category")</script>';
        }
    }

    public function active_category()
    {
        $id = $_GET['id'];
        $active_category = "UPDATE category SET category_status = '1' WHERE category_id = '$id'";
        $stmt = $this->connect()->prepare($active_category);
        $result = $stmt->execute();
        if($result == true){
            echo '<script>alert("Active category")</script>';
        }
    }

    public function delete_category()
    {
        $id = $_GET['id'];
        $delete_category = "DELETE FROM category WHERE category_id ='$id'";
        $stmt = $this->connect()->prepare($delete_category);
        $stmt->execute();
    }
    //end-category
    //start-brand
    public function add_brand($brand_name, $brand_description, $brand_status)
    {
        $add_query = "INSERT INTO `brand`(brand_name,brand_description,brand_status) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($add_query);
        $result = $stmt->execute([$brand_name, $brand_description, $brand_status]);
        if ($result == true) {
            echo '<script>alert("Add Brand Successfully")</script>';
        }
        return $result;
    }

    public function show_brand()
    {
        $show_brand = "SELECT * FROM `brand`";
        $stmt = $this->connect()->query($show_brand);
        return $stmt;
    }

    public function show_brand_edit()
    {
        $id = $_GET['id'];
        $show_brand = "SELECT * FROM `brand` WHERE brand_id = '$id'";
        $stmt = $this->connect()->query($show_brand);
        return $stmt;
    }

    public function update_brand($brand_name, $brand_description)
    {
        $id = $_GET['id'];
        $update_brand = "UPDATE brand SET brand_name = '$brand_name', brand_description = '$brand_description' WHERE brand_id = '$id'";
        $stmt = $this->connect()->prepare($update_brand);
        $result = $stmt->execute([$brand_name, $brand_description]);
        if ($result == true) {
            echo '<script>alert("Edit Brand Successfully")</script>';
        }
    }

    public function non_active_brand()
    {
        $id = $_GET['id'];
        $non_active_brand = "UPDATE brand SET brand_status = '0' WHERE brand_id = '$id'";
        $stmt = $this->connect()->prepare($non_active_brand);
        $result = $stmt->execute();
        if($result == true){
            echo '<script>alert("Non Active brand")</script>';
        }
    }

    public function active_brand()
    {
        $id = $_GET['id'];
        $active_brand = "UPDATE brand SET brand_status = '1' WHERE brand_id = '$id'";
        $stmt = $this->connect()->prepare($active_brand);
        $result = $stmt->execute();
        if($result == true){
            echo '<script>alert("Active brand")</script>';
        }
    }

    public function delete_brand()
    {
        $id = $_GET['id'];
        $delete_brand = "DELETE FROM brand WHERE brand_id ='$id'";
        $stmt = $this->connect()->prepare($delete_brand);
        $stmt->execute();
    }
    //end-brand
    //start-product
    public function add_product($product_name, $product_price, $product_image, $product_description, $product_content, $category_id, $brand_id, $product_status)
    {
        $add_product = "INSERT INTO `Product`(product_name,product_price,product_image,product_description,product_content,category_id,brand_id,product_status) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($add_product);
        $result = $stmt->execute([$product_name, $product_price, $product_image, $product_description, $product_content, $category_id, $brand_id, $product_status]);
        if ($result == true) {
            echo "<script>alert('Add product successfully')</script>";
        }
    }
    public function show_product()
    {
        $show_product = "SELECT * FROM Product JOIN category,brand WHERE Product.category_id = category.category_id AND Product.brand_id = brand.brand_id ";
        $stmt = $this->connect()->query($show_product);
        return $stmt;
    }
    public function non_active_product()
    {
        $id = $_GET['id'];
        $non_active_product = "UPDATE Product SET product_status = '0' WHERE product_id = '$id'";
        $stmt = $this->connect()->prepare($non_active_product);
        $result = $stmt->execute();
        if($result){
            echo "<script>alert('Non Active Product')</script>";
        }
    }
    public function active_product()
    {
        $id = $_GET['id'];
        $active_product = "UPDATE Product SET product_status = '1' WHERE product_id = '$id'";
        $stmt = $this->connect()->prepare($active_product);
        $result = $stmt->execute();
        if($result){
            echo "<script>alert('Active Product')</script>";
        }
    }
    public function show_edit_product()
    {
        $id = $_GET['id'];
        $show_product = "SELECT * FROM Product JOIN category,brand WHERE Product.category_id = category.category_id AND Product.brand_id = brand.brand_id AND product_id = '$id'";
        $stmt = $this->connect()->query($show_product);
        return $stmt;
    }
    public function update_product($product_name,$product_price,$product_description,$product_content,$category_id,$brand_id,$product_image)
    {
        $id = $_GET['id'];
        if($product_image == "") {
            $update_product = "UPDATE Product SET product_name = ?, product_price=?, product_description=?, product_content=?, category_id=?, brand_id=? WHERE product_id='$id'";
            $stmt = $this->connect()->prepare($update_product);
            $result = $stmt->execute([$product_name, $product_price, $product_description, $product_content, $category_id, $brand_id]);
            if ($result == true) {
                echo "<script>alert('Edit Product successfully')</script>";
            }
        }else {
            $update_product = "UPDATE Product SET product_name = ?, product_price=?, product_description=?, product_content=?, category_id=?, brand_id=?, product_image=? WHERE product_id='$id'";
            $stmt = $this->connect()->prepare($update_product);
            $result = $stmt->execute([$product_name, $product_price, $product_description, $product_content, $category_id, $brand_id,$product_image]);
            if ($result == true) {
                echo "<script>alert('Edit Product successfully')</script>";
            }
        }
    }
    public function delete_product()
    {
        $id = $_GET['id'];
        $delete_product = "DELETE FROM Product WHERE product_id = '$id'";
        $stmt = $this->connect()->prepare($delete_product);
        $result = $stmt->execute();
       return $result;
    }
}