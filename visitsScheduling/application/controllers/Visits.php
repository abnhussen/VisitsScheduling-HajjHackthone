<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('bookVisit');
	}

	public function bookVisit(){
		$this->load->view('bookVisit');
	}

	public function saveBookingVisit()
	{
		//$this->load->view('welcome_message');
		// DB fields <- Form fields
		$data = array(
			'fullName'		=>	$_POST['fullname'],
			'sex' 			=>	$_POST['sex'] ,
			'nationality'	=>	$_POST['nationality'],
			'passportId'	=>	$_POST['passportid'],
			'visitPlace' 	=>	$_POST['visitplace'] ,
		    'visitDate' 	=>	$_POST['visitdate'],
		    'visithour' 	=>	$_POST['visithour'] ,
		    'visitminute' 	=>	$_POST['visitminute'] 
		);
		
		// Save to DB
		$this->db->insert('visits', $data);
		// Load thankyou message
		$this->load->view('thankyou',$data);
	}

	//not ready yet
	public function show_all_visits()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('visits');
			$crud->set_subject('visits');
			$crud->columns('fullname','nationality','sex','visitdate');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('showAllVisits');
	}


}