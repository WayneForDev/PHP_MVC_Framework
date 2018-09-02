<?php 
    class Pages extends Controller {
        public function __construct(){
            // setup a property called the postModel, we assign our post model to it.
            $this->postModel = $this->model('Post');
        }

        public function index(){
            // $data is a associative array where you assign a key-value pair
            // in this way, you can access the value just by $data['title']
            $data = [
                'title' => 'Welcome'
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $this->view('pages/about');
        }
    }