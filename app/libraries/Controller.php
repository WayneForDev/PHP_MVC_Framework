<?php
    /* this is our base controller
    * loads the models and views
    * every other controller wil extend this base controller
    * 
    */
    class Controller {
        // load model
        public function model($model){
            // require model file
            require_once '../app/models/' . $model . '.php';

            // instantiate the model
            return new $model();

        }

        // load view
        // we want to be able to pass data into the view to make the view show what we want.
        public function view($view, $data = []){
            // Check for view file
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else {
                // view does not exist
                die('View does not exist');
            }
        }
    }