<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {
		
	public function __construct()
    {
    	parent::__construct();
		
		if (!$this->ion_auth->logged_in()){
    		$this->session->set_flashdata('message', "Please login first!!");
    		redirect('login', 'refresh');
    	}

    	$this->load->helper('CID/nav');
		$this->load->library('form_validation');
		$this->load->model('Review_model');
		$this->load->model('Protective_Marking_Model');

		$remaining_review = $this->Review_model->count_final_review_data($_SESSION['record_id']);
		$total_text       = $this->Review_model->total_text($_SESSION['record_id']);

		if($remaining_review==$total_text){
			redirect('review_protective_mark/','refresh');
		}
    }

    public function index()
	{
		$data['user']           = $this->ion_auth->user()->row();
		$record_id              = $_SESSION['record_id'];
		$data['info']           = $this->Review_model->get_details($record_id);
		$data['total_text']     = $this->Review_model->total_text($record_id);

		$get_remaining_text     = $this->Review_model->count_final_review_data($record_id);
		$data['remaining_text'] = $get_remaining_text + 1;

		$this->load->view('dashboard/review-main', $data);
	}

	public function reviewProcess(){
		if (!$this->input->is_ajax_request()){
		   show_404();
		}else{
			$data            = array();			
			$data['text_id'] = $this->input->post('textid');

			$this->Review_model->finalReview($data);

			$review               = $this->Review_model->get_details($_SESSION['record_id']);
			$remaining_text       = $this->Review_model->count_final_review_data($_SESSION['record_id']);  
			$remaining_text_count = $remaining_text + 1;

			if(is_null($review)){
				$finalOutput = array(
					'summaryInfo'    => "none"
				);
				echo json_encode($finalOutput);
			}else{
				$finalOutput = array(
					'summaryInfo'   => $review->summary,
					'src_eval'      => $review->src_eval,
					'inf_int_eval'  => $review->inf_int_eval,
					'codeInfo'      => $review->code,
					'instruction'   => $review->instruction,
					'txtID'         => $review->txtID,
					'remainingText' => $remaining_text_count
				);
				echo json_encode($finalOutput);
			}
		}
	}

	public function get_eval(){
		if (!$this->input->is_ajax_request()){
			show_404();
		}else{
			$tid  = $this->input->post('txtID');
			$eval = $this->Review_model->get_txt_eval($tid);
			echo json_encode($eval);
		}
	}

	public function update_eval(){
		if (!$this->input->is_ajax_request()){
			show_404();
		}else{
			$tid = $this->input->post('txtID');
			$src = $this->input->post('src');
			$inf = $this->input->post('inf');

			$this->Review_model->update_txt_eval($tid, $src, $inf);
			$eval = $this->Review_model->get_txt_eval($tid);

			echo json_encode($eval);
		}
	}
}