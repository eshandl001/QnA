<?php

class Answer extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //getting answers
    function getAnswers(){
        $this->db->select('answerId,questionId,answer,answerRating,username');
        $res = $this->db->get('answers');
        $data = array();
        foreach($res->result_array() as $row1){
            $data[] = $row1;
        }
        return $data;
    }
    //vote up
    public function upvoteanswer($answerId){
        $this->db->where('answerId', $answerId);
        $this->db->set('answerRating', 'answerRating+1', FALSE);
        $this->db->update('answers');
    }
    
    
    //vote down
        public function downvoteanswer($answerId){
        $this->db->where('answerId', $answerId);
        $this->db->set('answerRating', 'answerRating-1', FALSE);
        $this->db->update('answers');
    }
    
    
    
    
    //post answer
    public function postanswer($answerDescription,$username,$questionId){
        $this->db->insert('answers', array('answer' => $answerDescription, 'username' => $username, 'questionId' => $questionId));
        
    }
}