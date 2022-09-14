<?php

class comment_contr extends comment{

    private $id;
    private $comment;
    private $author;


    public function __construct($id , $comment , $author){
        $this->id = $id;
        $this->comment = $comment;
        $this->author = $author;
        
    }

    public function set_comment(){
     
            if(empty($this->comment) || empty($this->author)){
                $error =[false];
                return $error;
                
                exit();
            }
            else {
                return $this->add_comment($this->id , $this->comment , $this->author); 
            }
        
        
         
    }











}