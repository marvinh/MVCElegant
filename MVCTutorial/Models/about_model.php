<?php

    /**
    * The about page model
    */
    class AboutModel extends Model
    {

        public $message;

        public function __construct()
        {
            $this->table_name = 'j1';
            parent::__construct($this);
            $this->message = "Welcome to the of PHP MVC framework official site.";
        }

        public function nowADays()
        {

            var_dump($this->all());
            
            
        }
    }