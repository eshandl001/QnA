<?php

class Questioncontroller extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
        $this->ci = &get_instance();
        $this->ci->load->model('question');
        //$this->ci->load->model('answer');
        //$data['records']=$this->question->getQuestion();
       
    }
    
    public function loadQuestion(){
        
        $this->load->view("questionView");
    }

    //submit question
    public function submitQuestion()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $tag1 = $this->input->post('tag1');
        $tag2 = $this->input->post('tag2');
        $tag3 = $this->input->post('tag3');
        $subject = $this->input->post('subject');

        return $this->ci->question->postquestion($title,$description,$tag1,$tag2,$tag3,$subject);
              redirect('/auth/login');
    }
    
     //getting question
        public function getQuestion(){
//            $data['questionArr'] =  $this->question->getQuestions();
//             $this->load->view('questionView',$data);
            $dataArray = $this->question->getQuestions();
            //var_dump($this->uri->segment(4)) ;
            //var_dump($dataArray);
            echo json_encode($dataArray);
        }
        
        public function getQuestionById(){
            $ques_id = trim(strip_tags($_POST['quesId']));
           // echo $ques_id;
//            alert($ques_id);
            $data['questionArrId'] =  $this->question->getQuestionsById($ques_id);
             $this->load->view('qView',$data);
        }
    
    
        public function viewQuestion() {
            $question = $this->uri->uri_to_assoc(1);
//            $questionid = $question['questionid'];
//            $question['username'] = $this->session->userdata('username');
//            var_dump($question); 
            
            
            
            $this->load->library('authlib');
            $loggedin = $this->authlib->is_loggedin();
            $data['username'] = $loggedin;
            $arguments = $this->uri->uri_to_assoc(1);
            $questionId = $arguments['question'];
            $arguments['username'] = $loggedin;
            
            $this->load->view('questiondetails',$arguments);
        }
            
    
    //question vote up
    public function upvotequestion(){
        $questionId = $this->input->post('questionId');
        //var_dump($questionId);
        $dataArray = $this->question->upvotequestion($questionId);
    }
    
    public function downvotequestion(){
        $questionId = $this->input->post('questionId');
        //var_dump($questionId);
        $dataArray = $this->question->downvotequestion($questionId);
    }    
   
       // search by title
      public function search(){
        $questionId = $this->input->post('questionId');
        //var_dump($questionId);
        $dataArray = $this->question->search($questionId);
    }
    
    
    
    
    
}
?>
