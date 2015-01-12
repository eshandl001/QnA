<?php

class Question extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    
    //question post
      function postquestion($title,$description,$tag1,$tag2,$tag3,$subject)
    {
      
      $data = array('title' => $title,
                     'description' => $description,
                      'tag1' => $tag1,
                        'tag2' => $tag2,
                         'tag3' => $tag3,
                           'subject' => $subject );
                      $this->db->insert('questions',$data);
        return null; 
    }
    
    
  //get question
     function getQuestions(){
//        $data = $this->db->query('SELECT * FROM questions');
////        var_dump($data->result_array());
////        die;

         
         $this->db->select('title,description,tag1,tag2,tag3,subject, questionId, username,qRating');
         $res = $this->db->get('questions');
         $data = array();
         foreach($res->result_array() as $row1){
             $data[] = $row1;
         }
         //var_dump($data);
         return $data;
    }
    
    function getQuestionsById($ques_id){
        $data = $this->db->query("SELECT * FROM questions WHERE ques_id = '".$ques_id."'");
        //var_dump($data->result_array());
        return $data->result_array();
    }
    
   
    
    public function upvotequestion($questionId){
        $this->db->where('questionId', $questionId);
        $this->db->set('qRating', 'qRating+1', FALSE);
        $this->db->update('questions');
    }
    
        public function downvotequestion($questionId) {
        $this->db->where('questionId', $questionId);
        $this->db->set('qRating', 'qRating-1', FALSE);
        $this->db->update('questions');
    }
    
    
//getting matching results from search
      public function search($questionId){
        $this->db->select('title,description,tag1,tag2,tag3,subject, questionId, username,qRating');
        $this->db->where('questionId', $questionId);
         $res = $this->db->get('questions');
         $data = array();
         foreach($res->result_array() as $row1){
             $data[] = $row1;
         }
         
         return $data;
        
        
        
        
        
        
    }
    

}
