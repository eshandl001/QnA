<?php

class answerController extends CI_Controller {

function __construct()
    {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
        $this->ci = &get_instance();
        $this->ci->load->model('answer');
        //$this->ci->load->model('answer');
        //$data['records']=$this->question->getQuestion();
       
    }
   
    
    //getting answers
    public function getAnswers()
    {
        $dataArray = $this->answer->getAnswers();
        echo json_encode($dataArray);

    }
    
    //vote up answer
    public function upvoteanswer(){
        $answerId = $this->input->post('answerId');
        //var_dump($questionId);
        $dataArray = $this->answer->upvoteanswer($answerId);
    }
    
    //vote down answer
        public function downvoteanswer(){
        $answerId = $this->input->post('answerId');
        //var_dump($questionId);
        $dataArray = $this->answer->upvoteanswer($answerId);
    }
    
    
    
 // post answer
    public function postanswer(){
        $answerDescription = $this->input->post('answerDescription');
        $username = $this->input->post('username');
        $questionId = $this->input->post('questionId');
        $dataArray = $this->answer->postanswer($answerDescription,$username,$questionId);
        
    }
    
   
}

?>
