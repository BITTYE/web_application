<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
         session_start();
           $this->load->model('homemodel');
        $this->load->model('couponmodel');
    }
    public function index()
    {
        /*$data['category']=$this->couponmodel->getcategories();
        $data['sellers']=$this->couponmodel->getallsellers();
        $data['coupons']=$this->couponmodel->getallcoupons();
        $this->load->view('index-2',$data);*/
        $this->load->view('login');
    }
    public function validate()
   {
     $email=$this->input->post('sys_adminmail');
        $pass=$this->input->post('sys_adminpass');
        $data = $this->homemodel->Validateadmin($email,$pass);
        if($data){
           $level=$data->level;
          $this->session->set_userdata('userlevel',$level);
          redirect('home');
        }
        else {
            redirect('admin');
        }
     }
     public function logout()
     {
         $this->session->unset_userdata('userlevel');
         redirect('admin');
     }
}
?>
