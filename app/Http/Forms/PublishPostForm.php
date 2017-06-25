<?php

    namespace App\Http\Forms;

    use Post;

    class PublishPostForm extends Form
    {
        protected $rules = [
            'body' => 'required'
        ];

        public function persist(){

            var_dump($this->fields());
        }
    }