<?php 

class Home extends Controller {


    public function index() {
        $data = ['title' => 'Index'];
        $this->view('templates/header',$data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    
}




?>