<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        // Dépendance
        $this->load->library('origami', array(
            'entity_autoload' => TRUE,
            'entity_path' => APPPATH.'third_party/origami/models/Entity',
            'binary_enable' => TRUE,
            'encryption_enable' => FALSE,
            'encryption_key' => bin2hex('Origami')
        ));
    }

    public function add($dati)
    {

        \Origami\DB::get('biblio')->trans_start();

        $user = new \Entity\biblio\users();
		foreach (array_keys($dati) as $key) {
			$user->$key=$dati[$key];
		}
        $user->save();
        
        \Origami\DB::get('biblio')->trans_complete();
        
        return \Origami\DB::get('biblio')->trans_status();
    }

    public function update_login()
    {
				
        $users = \Entity\biblio\users::find();
        foreach ($users as $user) {
			$user->last_login = new DateTime();
			try {
				if (!$user->save()) throw new exception("Errore");
			}catch (Exception $e){
				return false;
			}			
		}
		return true;
    }
    
    public function find($username,$id) {
		$user= \Entity\biblio\users::where('username',$username);
		$user=$user->where('id',$id)
				   ->find_one();
		if (!$user) return false;
		
		return $user->toArray();
	}

    public function find_more($login) {
		$login=$login->format('Y-m-d H:i:s');
		$users= \Entity\biblio\users::where("last_login <", $login);
		$users=$users->find();
		
		if (!$users) return false;
		
		$results=[];
		foreach ($users as $val) {
			$results[]=$val->toArray();
		}
		return $results;
	}

		
}
