<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		session_destroy();
		$this->load->view('welcome_message');
	}

	public function formSubmit() {

		$type = $this->input->post('type');

		$session_id = $this->generate_random_str(9,'number');

		$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'session_id' => $session_id,
				'type' => $type);
		$this->session->set_userdata($data);
		// die(print_r($this->session->all_userdata()));
		if ($type == 1) {

			$result = array('code' => 200,
							'data' => $this->session->all_userdata(),
							'type' => 1,
					);
			echo json_encode($result);
			exit();

		} else if ($type == 2) {

			$result = array('code' => 200,
							'data' => $this->session->all_userdata(),
							'type' => 2,
					);
			echo json_encode($result);

			exit();

		}

		else if ($type == 3) {
			
			$result = array('code' => 200,
							'data' => $this->session->all_userdata(),
							'type' => 3,
					);
			echo json_encode($result);

			exit();

		}

	}

	public function qsupply()
	{
		

		$_currentStage = 'supply';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/signature';
		$data['question'] = 'If you could have an unlimited supply of one thing, what would it be?';
		$data['question_'] = 'supply';
		//set the options
		$options[] = array('text' => 'Food',
							'value' => '+10,000' );
		$options[] = array('text' => 'Peace',
							'value' => '+100,000' );
		$options[] = array('text' => 'Money',
							'value' => '-20,000' );
		$options[] = array('text' => 'Data',
							'value' => '+5,000' );
		$options[] = array('text' => 'Happiness',
							'value' => '+20,000' );
		$data['options'] = $options;
		//die(print_r($data));
		
		$this->load->view('second-page',$data);
	}

	public function qsignature()
	{
		//add the gender to the session data
		$sesData = array('supply' => $this->input->post('supply'));
		$this->session->set_userdata($sesData);

		$_currentStage = 'signature';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		// $data['headerPic'] = '2-min.png';
		$data['formSubmitLink'] = 'question/last';
		$data['question'] = 'Which of these is your signature dance steps? ';
		$data['question_'] = 'signature';
		//set the options
		$options[] = array('text' => 'Zanku',
							'value' => '+50,000' );
		$options[] = array('text' => 'Shaku',
							'value' => '+20,000' );
		$options[] = array('text' => 'Azonto',
							'value' => '+2000' );
		$options[] = array('text' => 'Yahoozee',
							'value' => '+5,000' );

		$data['options'] = $options;

		$this->load->view('second-page',$data);

	}

	public function qlast()
	{
		$_currentStage = 'last';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/share';
		$data['question'] = 'How much was the last gift you bought for a friend?';
		$data['question_'] = 'last';
		//set the options
		$options[] = array('text' => 'Above 50,000',
							'value' => '+50,000' );
		$options[] = array('text' => 'Less than 20,000',
							'value' => '+20,000' );
		$options[] = array('text' => 'Singlet and boxers',
							'value' => '-20,000' );
		$options[] = array('text' => 'I don’t do gifts',
							'value' => '-50,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qshare()
	{
		$_currentStage = 'share';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/character';
		$data['question'] = 'What is one thing you cannot share?';
		$data['question_'] = 'share';
		//set the options
		$options[] = array('text' => 'Wi-fi',
							'value' => '-10,000' );
		$options[] = array('text' => 'Food',
							'value' => '-20,000' );
		$options[] = array('text' => 'My partner',
							'value' => '-0' );
		$options[] = array('text' => 'Deepest secrets',
							'value' => '-40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qcharacter()
	{
		$_currentStage = 'character';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		// $data['headerPic'] = '5-min.png';
		$data['formSubmitLink'] = 'question/rest';
		$data['question'] = 'If you could kill off one GOT character, who would it be?';
		$data['question_'] = 'character';
		//set the options
		$options[] = array('text' => 'Cersei Lannister',
							'value' => '+20,000' );
		$options[] = array('text' => 'What is GOT?',
							'value' => '-40,000' );
		$options[] = array('text' => 'Jamie Lannister',
							'value' => '+20,000' );
		$options[] = array('text' => 'The Red witch',
							'value' => '+40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qrest()
	{
		$_currentStage = 'rest';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		// $data['headerPic'] = '6-min.png';
		$data['formSubmitLink'] = 'question/survive';
		$data['question'] = 'If you could eat one food for the rest of your life, what would it be?';
		$data['question_'] = 'rest';
		//set the options
		$options[] = array('text' => 'Fufu',
							'value' => '-10,000' );
		$options[] = array('text' => 'Dodo',
							'value' => '+30,000' );
		$options[] = array('text' => 'Rice',
							'value' => '+5,000' );
		$options[] = array('text' => 'Pizza',
							'value' => '+10,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qsurvive()
	{
		$_currentStage = 'survive';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/dream';
		$data['question'] = 'If you survive the end of the world, what would you do first?';
		$data['question_'] = 'survive';
		//set the options
		$options[] = array('text' => 'Sleep',
							'value' => '+30,000' );
		$options[] = array('text' => 'Eat',
							'value' => '+20,000' );
		$options[] = array('text' => 'Travel',
							'value' => '+10,000' );
		$options[] = array('text' => 'Make love',
							'value' => '-5,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qdream()
	{
		$_currentStage = 'dream';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'loading-page';
		$data['question'] = 'What is your dream job?';
		$data['question_'] = 'dream';
		//set the options
		$options[] = array('text' => 'Surgeon',
							'value' => '+50,000' );
		$options[] = array('text' => 'Pilot',
							'value' => '+100,000' );
		$options[] = array('text' => 'President',
							'value' => '-20,000' );
		$options[] = array('text' => 'Sleeping',
							'value' => '-30,000' );
		$options[] = array('text' => 'Reading',
							'value' => '-10,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qrelation()
	{
		$_currentStage = 'relation';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/speak';
		$data['question'] = 'What is your relationship with this person?';
		$data['question_'] = 'relation';
		//set the options
		$options[] = array('text' => 'Father/Mother',
							'value' => '+50,000' );
		$options[] = array('text' => 'Brother/Sister',
							'value' => '+40,000' );
		$options[] = array('text' => 'Nephew/Niece',
							'value' => '+30,000' );
		$options[] = array('text' => 'Father’s brother’s niece’s son',
							'value' => '+10,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qspeak()
	{
		$_currentStage = 'speak';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/given';
		$data['question'] = 'When did you last speak with this person?';
		$data['question_'] = 'speak';
		//set the options
		$options[] = array('text' => 'Yesterday',
							'value' => '+30,000' );
		$options[] = array('text' => 'Last month',
							'value' => '+10,000' );
		$options[] = array('text' => 'Before the war',
							'value' => '-30,000' );
		$options[] = array('text' => 'Can’t remember',
							'value' => '-50,000' );
		$options[] = array('text' => 'Today',
							'value' => '+50,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qgiven()
	{
		$_currentStage = 'given';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/show';
		$data['question'] = 'Has the person ever given you a gift?';
		$data['question_'] = 'given';
		//set the options
		$options[] = array('text' => 'Every small thing, gift',
							'value' => '+50,000' );
		$options[] = array('text' => 'Once in a while',
							'value' => '+10,000' );
		$options[] = array('text' => 'Never',
							'value' => '-40,000' );
		$options[] = array('text' => 'On my birthday',
							'value' => '+20,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qshow()
	{
		$_currentStage = 'show';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/known';
		$data['question'] = 'What is this person’s favourite TV show?';
		$data['question_'] = 'show';
		//set the options
		$options[] = array('text' => 'Prison Break',
							'value' => '+20,000' );
		$options[] = array('text' => 'Game of Thrones',
							'value' => '+20,000' );
		$options[] = array('text' => 'Stranger Things',
							'value' => '+20,000' );
		$options[] = array('text' => 'I am not sure',
							'value' => '-10,000' );
		$options[] = array('text' => 'Nnkan nbe',
							'value' => '+40,000' );
		
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qknown()
	{
		$_currentStage = 'known';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/happiest';
		$data['question'] = 'How long have you known this person?';
		$data['question_'] = 'known';
		//set the options
		$options[] = array('text' => '25 years',
							'value' => '+10,000' );
		$options[] = array('text' => '27 years',
							'value' => '+20,000' );
		$options[] = array('text' => '30 years',
							'value' => '+30,000' );
		$options[] = array('text' => '32 years',
							'value' => '+40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qhappiest()
	{
		$_currentStage = 'happiest';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['headerPic'] = '14-min.png';
		$data['formSubmitLink'] = 'question/change';
		$data['question'] = 'What makes this person happiest?';
		$data['question_'] = 'happiest';
		//set the options
		$options[] = array('text' => 'Food',
							'value' => '+5,000' );
		$options[] = array('text' => 'Parties',
							'value' => '-5,000' );
		$options[] = array('text' => 'Family',
							'value' => '+30,000' );
		$options[] = array('text' => 'Pets',
							'value' => '+20,000' );
		$options[] = array('text' => 'Love',
							'value' => '+40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qchange()
	{
		$_currentStage = 'change';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/count';
		$data['question'] = 'If you could change one thing about this person, what would it be?';
		$data['question_'] = 'change';
		//set the options
		$options[] = array('text' => 'Their relationship with you',
							'value' => '+50,000' );
		$options[] = array('text' => 'Their behaviour',
							'value' => '+20,000' );
		$options[] = array('text' => 'Where they live',
							'value' => '+30,000' );
		$options[] = array('text' => 'What they do for a living',
							'value' => '+40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qcount()
	{
		$_currentStage = 'count';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'loading-page';
		$data['question'] = 'Can you count on this person if you need help?';
		$data['question_'] = 'count';
		//set the options
		$options[] = array('text' => 'Yes',
							'value' => '+80,000' );
		$options[] = array('text' => 'No',
							'value' => '-40,000' );
		$options[] = array('text' => 'Maybe',
							'value' => '+20,000' );
		$options[] = array('text' => 'Depends',
							'value' => '+10,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qlong()
	{
		$_currentStage = 'long';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/person';
		$data['question'] = 'How long have you been friends with this person?';
		$data['question_'] = 'long';
		//set the options
		$options[] = array('text' => 'Less than 5 years',
							'value' => '+10,000' );
		$options[] = array('text' => 'Greater than 5 years',
							'value' => '+20,000' );
		$options[] = array('text' => 'Greater than 10 years',
							'value' => '+30,000' );
		$options[] = array('text' => 'Forever',
							'value' => '+50,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qperson()
	{
		$_currentStage = 'person';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/trust';
		$data['question'] = 'Why is this person your friend?';
		$data['question_'] = 'person';
		//set the options
		$options[] = array('text' => 'This person is an idiot',
							'value' => '+50,000' );
		$options[] = array('text' => 'This person is so awesome',
							'value' => '+10,000' );
		$options[] = array('text' => 'This person is crazy',
							'value' => '+80,000' );
		$options[] = array('text' => 'I love this person',
							'value' => '+20,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qtrust()
	{
		$_currentStage = 'trust';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/ever';
		$data['question'] = 'Can you trust this person with your money?';
		$data['question_'] = 'trust';
		//set the options
		$options[] = array('text' => 'Depends on how much',
							'value' => '-10,000' );
		$options[] = array('text' => 'For sure',
							'value' => '+30,000' );
		$options[] = array('text' => 'Not sure',
							'value' => '-20,000' );
		$options[] = array('text' => 'Yes, even if its 1 billion dollars',
							'value' => '+50,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}


	public function qever()
	{
		$_currentStage = 'ever';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/favourite';
		$data['question'] = ' Has this person ever given you a gift?';
		$data['question_'] = 'ever';
		//set the options
		$options[] = array('text' => 'Just being friends is a gift',
							'value' => '+50,000' );
		$options[] = array('text' => 'Once in a while',
							'value' => '+10,000' );
		$options[] = array('text' => 'Just once',
							'value' => '+5,000' );
		$options[] = array('text' => 'Never',
							'value' => '-20,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}


	public function qfav()
	{
		$_currentStage = 'favourite';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/makes';
		$data['question'] = 'What is this person’s favourite TV show?';
		$data['question_'] = 'favourite';
		//set the options
		$options[] = array('text' => 'Prison Break',
							'value' => '+20,000' );
		$options[] = array('text' => 'Game of Thrones',
							'value' => '+20,000' );
		$options[] = array('text' => 'Stranger Things',
							'value' => '+20,000' );
		$options[] = array('text' => 'I am not sure',
							'value' => '-10,000' );
		$options[] = array('text' => 'Nnkan nbe',
							'value' => '+40,000' );
		$options[] = array('text' => 'Power',
							'value' => '+20,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function qmakes()
	{
		$_currentStage = 'makes';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/thing';
		$data['question'] = 'What makes this person happiest?';
		$data['question_'] = 'makes';
		//set the options
		$options[] = array('text' => 'Food',
							'value' => '+5,000' );
		$options[] = array('text' => 'Parties',
							'value' => '-5,000' );
		$options[] = array('text' => 'Family',
							'value' => '+30,000' );
		$options[] = array('text' => 'Pets',
							'value' => '+20,000' );
		$options[] = array('text' => 'Love',
							'value' => '+40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}


	public function qthing()
	{
		$_currentStage = 'thing';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'question/help';
		$data['question'] = 'If you could change one thing about this person, what would it be?';
		$data['question_'] = 'thing';
		//set the options
		$options[] = array('text' => 'Their relationship with you',
							'value' => '+50,000' );
		$options[] = array('text' => 'Their behaviour',
							'value' => '+20,000' );
		$options[] = array('text' => 'Where they live',
							'value' => '+30,000' );
		$options[] = array('text' => 'What they do for a living',
							'value' => '+40,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}


	public function qhelp()
	{
		$_currentStage = 'help';
		$_sesdata = array( $_currentStage, $_currentStage.'_amount' );
		//$this->session->unset_userdata($_sesdata);
		$this->Calc_model->formHandler();
		$data['_camount'] = $this->Calc_model->cBudget();
		$data['formSubmitLink'] = 'loading-page';
		$data['question'] = 'Can you count on this person if you need help?';
		$data['question_'] = 'help';
		//set the options
		$options[] = array('text' => 'Yes',
							'value' => '+80,000' );
		$options[] = array('text' => 'No',
							'value' => '-40,000' );
		$options[] = array('text' => 'Maybe',
							'value' => '+20,000' );
		$options[] = array('text' => 'Depends',
							'value' => '+10,000' );
		$data['options'] = $options;
		$this->load->view('second-page',$data);
	}

	public function loadingpage()
	{
		
		$this->load->view('loading-page');
	}


	public function results()
	{
		$this->Calc_model->formHandler();
		$cAmount = $this->Calc_model->cBudget();
		$data['_camount'] = $cAmount;
		if ($data['_camount'] == 0) {
			//redirect('');
		}
		//get the result in percentage
		$_cPercent = ($cAmount/100) * 100;
		$data['_cPercent'] = 0;
		if ($_cPercent < 20) {
			$data['_cPercent'] = 0;
		}elseif ($_cPercent < 40) {
			$data['_cPercent'] = 20;
		}elseif ($_cPercent < 60) {
			$data['_cPercent'] = 40;
		}elseif ($_cPercent < 80) {
			$data['_cPercent'] = 60;
		}elseif ($_cPercent < 100) {
			$data['_cPercent'] = 80;
		}else{
			$data['_cPercent'] = 100;
		}

		//get the result
		// $data['result'] = $this->Calc_model->getResult();

		//save the result to the database
		$this->Calc_model->saveResult($_cPercent);
		$this->load->view('result1',$data);
	}

	

	public function errors()
	{
		$this->load->view('404errors');
	}

	public function generate_random_str($length, $type = 'alphanumeric', $combination = array()) 
	{
		if (!is_numeric($length) || $length < 0) {
		    return '';
		}

		$str = '';
		$uppercase = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		$lowercase = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
		$special = array('~', '!', '@', '#', '$', '%', '^' . '&amp;amp;', '*', '+', '=', '.', '-', '_', '(', ')', '{', '}', '[', ']');
		$stock = array();
		$stockMinIndex = 0;

		if ($combination) {
		    foreach ($combination as $element) {
		        if (isset($$element)) {
		            $stock[] = $$element;
		        }
		    }
		}
		else
		{
		    switch ($type) {
		        case 'uppercase' :
		            $stock = array($uppercase);
		            break;
		        case 'lowercase' :
		            $stock = array($lowercase);
		            break;
		        case 'letter' :
		            $stock = array($uppercase, $lowercase);
		            break;
		        case 'number' :
		            $stock = array($number);
		            break;
		        case 'special' :
		            $stock = array($special);
		            break;
		        case 'alphanumeric' :
		            $stock = array($uppercase, $lowercase, $number);
		            break;
		        case 'password' :
		        case 'all' :
		            $stock = array($uppercase, $lowercase, $number, $special);
		            break;
		        default :
		            $stock = array($uppercase, $lowercase, $number);
		            break;
		    }
		}

		if (empty($stock)) {
		    return '';
		}

		$stockMaxIndex = count($stock) - 1;

		$i = 0;
		while ($i < $length) {
		    $stockIndex = mt_rand($stockMinIndex, $stockMaxIndex);
		    $str .= $stock[$stockIndex][mt_rand(0, count($stock[$stockIndex]) - 1)];
		    $i++;
		}
		return $str;
		}

		public function return_checked_str($length, $type = 'alphanumeric', $combination = array()) {
		$str = $this->generate_random_str($length, $type , $combination);
		///for checking the database for exitence of reference number
		    $this->db->select('ref');
		    $this->db->from('reference');
		    $this->db->where('ref', $str);


		    $query = $this->db->get();

		    if($query->num_rows() == 1) {
		        $str = $this->generateRandomStr($length, $type , $combination);
		        $data = array
		        (
		            'ref' =>$str
		        );
		        $this->db->insert('reference',$data);

		    }
		    else
		    {
		        $data = array
		        (
		            'ref' =>$str,
		            'used' =>0
		        );
		        $this->db->insert('reference',$data);
		    }

		    return $str;


		}
		public function return_ref_val() {

		    $ref="";
		    $this->db->select('used,ref');
		    $this->db->from('reference');
		   // $this->db->where('ref', $ref);


		    $query = $this->db->get();


		    if($query->num_rows() != 0)
		    {
		             $row = $query->row();
		             $used = $row->used;
		        if($used == 0)
		        {
		            $ref = $row->ref;
		        }

		    }


		    return $ref;


		}


}
