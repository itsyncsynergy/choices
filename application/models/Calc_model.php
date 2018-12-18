<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Calc_model extends CI_Model {

	    /* is autoloaded */

	    public static $db_config = array();

	    public function __construct() {
	        parent::__construct();
	    }

	    public function formHandler($value='')
		{
			$_question = $this->input->post('question');
			$_answer = $this->input->post('answer');
			$_ansAmount = 0;	
			if ($_question == 'supply') {
				if ($_answer == 'Food') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'Peace') {
					$_ansAmount = +100000;
				}
				elseif ($_answer == 'Money') {
					$_ansAmount = -20000;
				}
				elseif ($_answer == 'Data') {
					$_ansAmount = +5000;
				}
				elseif ($_answer == 'Happiness') {
					$_ansAmount = +20000;
				}
			}elseif ($_question == 'signature') {
				if ($_answer == 'Zanku') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Shaku') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Azonto') {
					$_ansAmount = +2000;
				}
				elseif ($_answer == 'Yahoozee') {
					$_ansAmount = +5000;
				}
			}elseif ($_question == 'last') {
				if ($_answer == 'Above 50,000') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Less than 20,000') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Singlet and boxers') {
					$_ansAmount = -20000;
				}
				elseif ($_answer == 'I don’t do gifts') {
					$_ansAmount = -50000;
				}
			}elseif ($_question == 'share') {
				if ($_answer == 'Wi-fi') {
					$_ansAmount = -10000;
				}
				elseif ($_answer == 'Food') {
					$_ansAmount = -20000;
				}
				elseif ($_answer == 'My partner') {
					$_ansAmount = 0;
				}
				elseif ($_answer == 'Deepest secrets') {
					$_ansAmount = -40000;
				}
			}elseif ($_question == 'character') {
				if ($_answer == 'Cersei Lannister') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'What is GOT?') {
					$_ansAmount = -40000;
				}
				elseif ($_answer == 'Jamie Lannister') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'The Red witch') {
					$_ansAmount = +40000;
				}
			}elseif ($_question == 'rest') {
				if ($_answer == 'Fufu') {
					$_ansAmount = -10000;
				}
				elseif ($_answer == 'Dodo') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Rice') {
					$_ansAmount = +5000;
				}
				elseif ($_answer == 'Pizza') {
					$_ansAmount = +10000;
				}
			}elseif ($_question == 'survive') {
				if ($_answer == 'Sleep') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Eat') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Travel') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'Make love') {
					$_ansAmount = -5000;
				}
			}elseif ($_question == 'dream') {
				if ($_answer == 'Surgeon') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Pilot') {
					$_ansAmount = +100000;
				}
				elseif ($_answer == 'President') {
					$_ansAmount = -20000;
				}
				elseif ($_answer == 'Sleeping') {
					$_ansAmount = -30000;
				}
				elseif ($_answer == 'Reading') {
					$_ansAmount = -10000;
				}
			}elseif ($_question == 'relation') {
				if ($_answer == 'Father/Mother') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Brother/Sister') {
					$_ansAmount = +40000;
				}
				elseif ($_answer == 'Nephew/Niece') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Father’s brother’s niece’s son') {
					$_ansAmount = +10000;
				}
			}elseif ($_question == 'speak') {
				if ($_answer == 'Yesterday') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Last month') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'Before the war') {
					$_ansAmount = -30000;
				}
				elseif ($_answer == 'Can’t remember') {
					$_ansAmount = -50000;
				}
				elseif ($_answer == 'Today') {
					$_ansAmount = +50000;
				}
			}elseif ($_question == 'given') {
				if ($_answer == 'Every small thing, gift') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Once in a while') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'Never') {
					$_ansAmount = -40000;
				}
				elseif ($_answer == 'On my birthday') {
					$_ansAmount = +20000;
				}
				
			}elseif ($_question == 'show') {
				if ($_answer == 'Prison Break') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Game of Thrones') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Stranger Things') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'I am not sure') {
					$_ansAmount = -10000;
				}
				elseif ($_answer == 'Nnkan nbe') {
					$_ansAmount = +40000;
				}
				
			}elseif ($_question == 'known') {
				if ($_answer == '25 years') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == '27 years') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == '30 years') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == '32 years') {
					$_ansAmount = +40000;
				}
				
				
			}elseif ($_question == 'happiest') {
				if ($_answer == 'Food') {
					$_ansAmount = +5000;
				}
				elseif ($_answer == 'Parties') {
					$_ansAmount = -5000;
				}
				elseif ($_answer == 'Family') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Pets') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Love') {
					$_ansAmount = +40000;
				}
				
				
			}elseif ($_question == 'change') {
				if ($_answer == 'Their relationship with you') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Their behaviour') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Where they live') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'What they do for a living') {
					$_ansAmount = +40000;
				}

				
			}elseif ($_question == 'count') {
				if ($_answer == 'Yes') {
					$_ansAmount = +80000;
				}
				elseif ($_answer == 'No') {
					$_ansAmount = -40000;
				}
				elseif ($_answer == 'Maybe') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Depends') {
					$_ansAmount = +10000;
				}

				
			}elseif ($_question == 'long') {
				if ($_answer == 'Less than 5 years') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'Greater than 5 years') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Greater than 10 years') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Forever') {
					$_ansAmount = +50000;
				}

				
			}elseif ($_question == 'person') {
				if ($_answer == 'This person is an idiot') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'This person is so awesome') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'This person is crazy') {
					$_ansAmount = +80000;
				}
				elseif ($_answer == 'I love this person') {
					$_ansAmount = +20000;
				}

				
			}elseif ($_question == 'trust') {
				if ($_answer == 'Depends on how much') {
					$_ansAmount = -10000;
				}
				elseif ($_answer == 'For sure') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Not sure') {
					$_ansAmount = -20000;
				}
				elseif ($_answer == 'Yes, even if its 1 billion dollars') {
					$_ansAmount = +50000;
				}

				
			}elseif ($_question == 'ever') {
				if ($_answer == 'Just being friends is a gift') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Once in a while') {
					$_ansAmount = +10000;
				}
				elseif ($_answer == 'Just once') {
					$_ansAmount = +5000;
				}
				elseif ($_answer == 'Never') {
					$_ansAmount = -20000;
				}

				
			}elseif ($_question == 'favourite') {
				if ($_answer == 'Prison Break') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Game of Thrones') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Stranger Things') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'I am not sure') {
					$_ansAmount = -10000;
				}
				elseif ($_answer == 'Nnkan nbe') {
					$_ansAmount = +40000;
				}

				elseif ($_answer == 'Power') {
					$_ansAmount = +20000;
				}


				
			}elseif ($_question == 'makes') {
				if ($_answer == 'Food') {
					$_ansAmount = +5000;
				}
				elseif ($_answer == 'Parties') {
					$_ansAmount = -5000;
				}
				elseif ($_answer == 'Family') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'Pets') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Love') {
					$_ansAmount = +40000;
				}
				
			}elseif ($_question == 'thing') {
				if ($_answer == 'Their relationship with you') {
					$_ansAmount = +50000;
				}
				elseif ($_answer == 'Their behaviour') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Where they live') {
					$_ansAmount = +30000;
				}
				elseif ($_answer == 'What they do for a living') {
					$_ansAmount = +40000;
				}
				
				
			}elseif ($_question == 'help') {
				if ($_answer == 'Yes') {
					$_ansAmount = +80000;
				}
				elseif ($_answer == 'No') {
					$_ansAmount = -40000;
				}
				elseif ($_answer == 'Maybe') {
					$_ansAmount = +20000;
				}
				elseif ($_answer == 'Depends') {
					$_ansAmount = +10000;
				}
				
				
			}
			$data = array(
					$_question => $_answer,
					''.$_question.'_amount' => $_ansAmount );

			$this->session->set_userdata($data);
			if ($this->uri->segment(4) == 'edit') {

				if (!empty($this->input->post('question'))) {
					redirect('estimates/results');
				}
				
			}

		}

		public function cBudget()
		{
			$amount = 0;
			$session = $this->session->all_userdata();
			foreach ($session as $key => $value) {
				//echo $key;
				if (substr($key, '-7') == '_amount') {
					$amount += $value;
				}
				//exit();
			}
			return $amount;
		}

		public function getResult()
		{
			
			$session = $this->session->all_userdata();
			$answerData[101] =  array('code' => 101,
								'message' => 'You too much!',
								'body' => 'Na you dey enjoy life pass oh <br> Dey flex dey go!' );
			if ($session['supply'] == 1) {
				$answerData[102] = array('code' => 102,
								'message' => 'Dem no fit buy<br> your type for market!  ',
								'body' => 'Keep pushing <br> We believe in you <br> This your hustle go pay very soon' );
			}
			if ($session['signature'] == 2) {
				$answerData[102] = array('code' => 102,
								'message' => 'Dem no fit buy<br> your type for market!',
								'body' => 'Keep pushing <br> We believe in you <br> This your hustle go pay very soon' );
			}
			if ($session['dress'] == 3) {
				$answerData[102] = array('code' => 102,
								'message' => 'Dem no fit buy<br> your type for market!',
								'body' => 'Keep pushing <br> We believe in you <br> This your hustle go pay very soon' );
			}
			if ($session['wake'] == 4) {
				$answerData[103] = array('code' => 103,
								'message' => 'We dey feel you die!',
								'body' => 'Make this sleep wey you dey sleep <br> no go put you for trouble <br> one day sha.' );
			}
			if ($session['first'] == 3) {
				$answerData[103] = array('code' => 103,
								'message' => 'We dey feel you die!',
								'body' => 'Make this sleep wey you dey sleep <br> no go put you for trouble <br> one day sha.' );
			}
			if ($session['first'] == 4) {
				$answerData[104] = array('code' => 104,
								'message' => 'You be Correct Guy!',
								'body' => 'Hope say dem no dey feed you <br> for dream like this?!' );
			}
			if ($session['first'] == 1) {
				$answerData[105] = array('code' => 105,
								'message' => 'You no get part two!',
								'body' => 'Oshey Twitter Celeb! <br> How many followers you get sef' );
			}
			if ($session['dress'] == 1) {
				$answerData[106] = array('code' => 106,
								'message' => 'Nobody bad pass you!',
								'body' => 'Na your pass dey dress pass celebrant, <br> Take am easy abeg.' );
			}
			if ($session['lunch'] == 4) {
				$answerData[107] = array('code' => 107,
								'message' => 'Twale! We dey hail oh',
								'body' => 'Abeg start to dey chop <br> Food dey necessary for body' );
			}
			if ($session['dinner'] == 4) {
				$answerData[107] = array('code' => 107,
								'message' => 'Twale! We dey hail oh',
								'body' => 'Abeg start to dey chop <br> Food dey necessary for body' );
			}
			if ($session['move']  == 4) {
				$answerData[108] = array('code' => 108,
								'message' => '3 Gbosa for boss like you!',
								'body' => 'Funds! Too much money!! <br> We dey hail oh' );
			}
			if ($session['call']  == 3) {
				$answerData[108] = array('code' => 108,
								'message' => '3 Gbosa for boss like you!',
								'body' => 'Funds! Too much money!! <br> We dey hail oh' );
			}
			if ($session['gender']  == 2 && $session->call == 1) {
				$answerData[110] = array('code' => 110,
								'message' => 'You no get counterfeit!',
								'body' => 'This your boo wey you dey follow talk 24/7 ehn <br> A wise man once said <br> "Even your boo get a boo".' );
			}
			if ($session['gender']  == 1 && $session->call == 1) {
				$answerData[111] = array('code' => 111,
								'message' => 'You no get counterfeit!',
								'body' => 'This your boo wey you dey follow talk 24/7 ehn <br> A wise man once said <br> "Even your boo get a boo".' );
			}
			if ($session['after']  == 2) {
				$answerData[112] = array('code' => 112,
								'message' => 'You get mouth!',
								'body' => 'Fitfam gang! <br> Flat tummy or nothing' );
			}
			if ($session['after']  == 4) {
				$answerData[113] = array('code' => 113,
								'message' => 'After you na you!',
								'body' => 'Ahn Ahn! <br> Better customer! <br> You deserve free subscription' );
			}
			

			//pick answer at random 
			//$result = array_rand($answerData);
			$k = array_rand($answerData);
			$v = $answerData[$k];
			//die(print_r($v));
			return $v;
			
		}

		public function beakdown($value='')
		{
			# code...
		}

		public function saveResult($_cPercent)
		{
			//save user name and email to the user info database
			$userData = array('email' => $_SESSION['email'], 'name' => $_SESSION['name']);
			$qUser = $this->db->select('*')->from('game_players')->where('email', $_SESSION['email'])->get();

			if ($qUser->num_rows() > 0) {
				//update the user info
				$this->db->where('email', $_SESSION['email'])->set('name', $_SESSION['name'])->update('game_players');
				return;
			}else{
				//save the new user details
				$this->db->insert('game_players', $userData);
			}
			//save game session to the database

			//check if the game session is a unique session
			$q = $this->db->select('*')->from('game_sessions')->where('session_id', $_SESSION['session_id'])->get();

			if ($q->num_rows() > 0) {
				return;
			}
			//arrange game data
			$gameData = array(
								'email' => $_SESSION['email'],
								'name' => $_SESSION['name'],
								'session_id' => $_SESSION['session_id'],
								'score' => $_cPercent );

			$this->db->insert('game_sessions', $gameData);
			return;


		}

	}
?>