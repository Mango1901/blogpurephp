<?php
class frontend_controller extends frontend_model
{
    public function show_category_frontend_controller()
    {
        $this->show_category_frontend();
    }
    public function show_brand_frontend_controller()
    {
        $this->show_category_frontend();
    }
    public function show_product_frontend_controller()
    {
        $this->show_product_frontend();
    }
    public function show_product_category_controller()
    {
        $this->show_product_category();
    }
    public function show_product_brand_controller()
    {
        $this->show_product_brand();
    }
    public function show_product_details_controller()
    {
        $this->show_product_details();
    }
}