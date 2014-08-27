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
        $data['coupons']=$this->couponmodel->getallcoupons();
      //  print_r($data);
        $this->load->view('index',$data);
    }
    public function validate(){
       // echo 1;
     $email=$this->input->post('sys_email');
        $pass=$this->input->post('sys_pass');
        $data = $this->homemodel->Validateadmin($email,$pass);
        if($data){
           $level=$data->level;
          $this->session->set_userdata('userlevel',$level);
         //  set_cookie('userlevel',$level);
            echo 'success';
        }
        else {
            echo 'failure';
        }
     }
    public function homeview()
    {
       $this->session->unset_userdata('userlevel');
       // unset($_COOKIE['userlevel']);
         $this->load->view('index-2');
    }
    public function coupons()
    {
      $this->load->view('coupon');
    }
    public function coupondetail($couponid)
    {
        $data['coupons']=$this->couponmodel->geteachcoupon($couponid);
        $this->load->view('coupon-detail',$data);
    }
    public function couponcode()
    {
        $this->load->view('coupon-code');
    }
    public function brandlist()
    {
        $this->load->view('brand_list');
    }
    public function blog()
    {
        $this->load->view('blog');
    }
    public function mycoupon()
    {
        $this->load->view('my_coupon');
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function registerbuyer()
    {
        $this->homemodel->registerbuyer();
        redirect('home');
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
      // echo $id;
      redirect('home');
    }
}
?>
