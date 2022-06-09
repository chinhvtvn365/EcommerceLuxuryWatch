<?php
class index extends Dcontroller{

    public function __construct(){
        session::init();
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->homepage();
    }

    public function homepage(){
        
        $this->load->view('index');
    }
    public function notfound(){
        $this->load->view('404');
    }
//     public function sendEmail(){
//         if(isset($_POST['ngocanh'])){
//             $name = $_POST['name'];
//             $email = $_POST['email'];
//             $message = $_POST['message'];
//             echo $name;
            
//     }
// }
}

?>