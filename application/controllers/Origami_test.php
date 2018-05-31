<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Origami_test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        // Dépendances
        $this->load->library('unit_test');
        
        $this->load->add_package_path(APPPATH.'third_party/origami');
        $this->load->model('users_model');
        $this->load->remove_package_path(APPPATH.'third_party/origami');
        
        // Activation du profiler
        $this->output->enable_profiler();
    }
    
    public function index() {
		
		$data=[];
		$this->load->view('common/open');
		//$this->load->view('common/navigation');
		$this->load->view('index',$data);
		$this->load->view('common/scripts');
		$this->load->view('index_scripts');
		$this->load->view('common/close');
		
	}

    public function add() {
			
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]',
			array(
                'required'      => '%s obbligatorio.',
                'is_unique'     => '%s esistente.'
			)
		);
		$this->form_validation->set_rules('password', 'Password', 'required',
			array(
                'required'      => '%s obbligatoria.'
			)
		);
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('not_added',str_replace(array("\n", "\r"), ' ', strip_tags(validation_errors())));
		}else{
			$user=$this->input->post();
			$user['created'] = new DateTime();
			if ($this->users_model->add($user)) {
				$this->session->set_flashdata('added',1);				
			}else{
				$this->session->set_flashdata('not_added',"Errore DB");	
			}
		}
		
		redirect('origami_test');
    }
    
    public function find($username,$id) {
		$user=$this->users_model->find($username,$id);
		var_dump ($user);
	}
	
    public function find_more() {
		$users=$this->users_model->find_more(new Datetime());
		var_dump ($users);
	}
    

}
