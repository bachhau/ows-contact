<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Contact extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_model');
		$this->load->helper('url');
	}

	public function index()
	{

		$data['contacts'] = $this->Contact_model->getContacts();
		$this->load->view('contact_list',$data);
	}

	//add data to table contact in database
	public function add()
	{
		$this->load->view('contact_add');
	} 

	//edit data to table contact in database
	public function edit($id)
	{
		$data['contact_item'] = $this->Contact_model->getContact($id);
		$this->load->view('contact_edit', $data);
	}

	public function delete($id)
	{
		$this->Contact_model->deleteContact($id);
		echo "success";
	}

	public function save($id = 0)
	{
		$postData = array(
			'name' => $this->input->post('name'),
			'phone1' => $this->input->post('phone1'),
			'phone2' => $this->input->post('phone2'),
			'email' => $this->input->post('email'),
			'facebook' => $this->input->post('fb'),
			'company' => $this->input->post('company'),
		);

		if ($id ==0)
            $this->Contact_model->addContact($postData);
        else 
            $this->Contact_model->updateContact($postData, $id);
        redirect(base_url('/'));
	}
}
 ?>