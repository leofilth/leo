<?php
class usuarios_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function logueo($login,$pass)
    {
        $query=$this->db
            ->select("id,login,password")
            ->from("usuarios")
            ->where(array("login"=>$login,"password"=>$pass))
            ->count_all_results();
        return $query;
    }
}