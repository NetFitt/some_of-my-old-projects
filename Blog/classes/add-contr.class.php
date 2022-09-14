<?php 
    class add_contr extends add{
        private $blog;
        
    
        public function __construct($blog){
            $this->blog =$blog;
            
        }

        public function set_blog(){
            if(empty($this->blog)){
                exit();
                header("location: ../add.php?error=empty");
            }
            else {
                $this->add_blog($this->blog);
            }
        }
    
    
    }
