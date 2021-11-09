<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index() {
		$data['userdata'] 		= $this->userdata;
		
		$data['page'] 			= "Account";
		$data['judul'] 			= "Account";
		$data['deskripsi'] 		= "Account Settings";
		$this->template->views('account', $data);
	}

	public function update() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		$id = $this->userdata->id;
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {

			$result = $this->M_user->update($data, $id);
			if ($result > 0) {
				$this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Account Information Successfully Changed'));
				redirect('Account');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Account Information Failed To Change'));
				redirect('Account');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Account');
		}
	}

	public function ubah_password() {
		$this->form_validation->set_rules('passLama', 'Old Password', 'trim|required|callback_oldpassword_check');
		$this->form_validation->set_rules('passBaru', 'New Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passKonf', 'Confirmation Password', 'trim|required|min_length[8]|matches[passBaru]', ['matches' => "Password doesn't match."]);

		$id = $this->userdata->id;
		if ($this->form_validation->run() == TRUE) {
			
			$data = [
				'password' => password_hash($this->input->post('passBaru'), PASSWORD_BCRYPT)
			];

			$result = $this->M_user->update($data, $id);
			if ($result > 0) {
				$this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Password Successfully Changed'));
				redirect('Account');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Password Failed To Change'));
				redirect('Account');
			}
				
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Account');
		}
	}

	public function oldpassword_check($old_password)
	{
		
		if(password_verify($old_password, $this->userdata->password)){
			return TRUE;
		} else {
			$this->form_validation->set_message('oldpassword_check', 'Old password not match');
			return FALSE;
		}
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */