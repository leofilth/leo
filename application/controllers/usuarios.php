<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    private $session_id;
    public function __construct()
    {
        parent:: __construct();
        $this->layout->setLayout('template');
        $this->session_id=$this->session->userdata('login');
    }

    public function index()
    {
        if(!empty($this->session_id))
        {
            $this->layout->view('usuarios');
        }
        else
        {
            redirect(base_url().'usuarios/login',301);
        }
    }
    public function saludo()
    {
        $session_id=$this->session_id;
        if (!empty($this->session_id)) {
            $this->layout->view('saludo',compact("session_id"));
        } else {
            redirect(base_url() . 'usuarios/login', 301);
        }
    }

        public function login()
    {
        if($this->input->post())
        {
            //die(sha1($this->input->post("pass",true)));
            $datos=$this->usuarios_model->logueo($this->input->post('user',true),sha1($this->input->post('pass',true)));
            //echo $datos;exit;
            if($datos==1)
            {
                $this->session->set_userdata("taller_ci");
                $this->session->set_userdata('login',$this->input->post('user',true));
                //$session_id=$this->session->userdata("login");
                redirect(base_url().'usuarios',301);

            }
            else
            {
                $this->session->set_flashdata('ControllerMessage','Usuario y/o clave invalida.');
                redirect(base_url().'usuarios/login',301);
            }
        }
        $this->layout->view('login');
    }
    public function logout()
    {
        $this->session->unset_userdata(array('login'=>''));
        $this->session->sess_destroy("taller_ci");
        redirect(base_url().'usuarios/login',301);
    }
}