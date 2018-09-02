<?php
    class Post {

        // In order to allow the model to be able to access the database
        // we need to create properties for database;
        
        private $db;

        public function __construct(){
            // Instantiate database class;
            $this->db = new Database;
        }
    }