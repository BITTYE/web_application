<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('homemodel');
        $this->load->model('couponmodel');
    }
    public function index()
    {
        $data['category']=$this->couponmodel->getcategories();
        $data['sellers']=$this->couponmodel->getallsellers();
      //  print_r($data);
        $this->load->view('index',$data);
    }
    public function validate(){
        $email=$this->input->post('sys_email');
        $pass=$this->input->post('sys_pass');
        $data = $this->homemodel->Validateadmin($email,$pass);
        if($data){
           $level=$data->level;
           $this->session->set_userdata('userlevel',$level);
            echo 'success';
        }
        else {
            echo 'failure';
        }
     }
    public function homeview()
    {
        $this->session->unset_userdata('userlevel');
         $this->load->view('index-2');
    }
    public function coupon()
    {
      $this->load->view('coupon');
    }
    public function couponcode()
    {
        $this->load->view('coupon-code');
    }
    public function brand_list()
    {
        $this->load->view('brand_list');
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function loginfacebook()
    {
        $this->load->view('validatefb');
    }
     public function logintwitter()
    {
        $this->load->view('login-twitter');
    }
     public function getTwitterData(){
         $this->load->view('getTwitterData');
         
    }
    public function twitvalues()
    {
        $id=$this->homemodel->inserttwitterdata();
        echo $id;
    }
    public function addcoupons()
    {
       $id= $this->couponmodel->addcoupontodb();
      /* print_r('hai');
       print_r($id);*/
       echo $id;
    }
}
?>
