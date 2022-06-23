<?php 


class Orang extends Controller {


    public function index() {
        $data = [
            'title' => 'Orang',
            'orang' => $this->model('Orang_model')->getAllUser(),
            
        ];
        $this->view('templates/header',$data);
        $this->view('orang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data = [
            'title' => 'Orang detail',
            'orang' => $this->model('Orang_model')->getUserbyId($id),
            
        ];
        $this->view('templates/header',$data);
        $this->view('orang/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if($this->model('Orang_model')->tambahData($_POST) > 0){
            header('Location: ' . DASARURL . '/orang');
        }
    }

}


?>