<?php

class Auth extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
        $this->ci = &get_instance();
        $this->ci->load->model('question');
     //   $data['records']=$this->question->getQuestion();
       
    }
    
    //homepage
    
      public function home()
    {
        $this->load->view('homepage');
    }
    
    
    
    //direct to a view
    
     public function askQuestion()
    {
        $this->load->view('askQuestion');
    }
    
    //direct to a view
         public function viewQuestions()
    {
        $this->load->view('questionView');
    }
    
    //direct to a view
         public function viewTags()
    {
        $this->load->view('tagsView');
    }
    //direct to a view
         public function viewtop()
    {
        $this->load->view('topView');
    }
    
    
  
    public function index()
    {
        redirect('/auth/login'); // url helper function
    }

    
    public function register()
    {
        $this->load->view('register_view',array('errmsg' => ''));
    }

    //creare an account
    public function createaccount()
    {
      
        $name = $this->input->post('name');
       // $email = $this->input->post('email');
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $conf_password = $this->input->post('conf_pword');

        if (!($errmsg = $this->authlib->register($name,$username,$password,$conf_password))) {
            redirect('/auth/login');
        }
        else {
            $data['errmsg'] = $errmsg;
            $this->load->view('register_view',$data);
        }

    }
 
    public function login()
    {
        $data['errmsg'] = '';
        $this->load->view('login_view',$data);
    }
//authentication
    public function authenticate()
    {
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $user = $this->authlib->login($username,$password);
        if ($user !== false) {
            $this->load->view('homepage',array('name' => $user['name']));
        }
        else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('login_view',$data);
        }

    }
    
       //logut
   public function logout(){
       $this->session->sess_destroy();
       $this->load->view("homepage");
       
   }
    
    
    
   

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
     
