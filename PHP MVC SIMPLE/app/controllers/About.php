<?php 



class About extends Controller{


    public function index() {
        $data = ['nama' => 'wahyu', 'title' => 'about'];
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        
        $data= ['title' => 'page'];
        $this->view('templates/header',$data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }


}




?>