 <?php
/*
    Class & Object
        - Class is a Blueprint or Design That u Can Create Object From . 
        - Object is a Member in The Main Application .
        - Class Has properties & Methods.
        - Variable Inside Class =[property]
        - Variable out Class =[Variable]
        - Function Inside the class = [Method]
        - Function Inside the class = [Function]
  
  
  
        -[Class]    = Class Keyword 
        -[ new ]    = New Object Keyword
        -[Public , Private , Protected ] = Visibility Markers .   
        -[->]       = Object Operator     
        -[$this]    = Pseudo or fake Variable [Refer To Object properties]
        -[ :: ]     = Scope Resolution Operator ,[Paamayim Nekudotayim] = Double Colon (the Double Colon erorr sentance)
  
        Self vs $This : 
        
        Self :
            - Refer to Current Class
            - Access Static Members (Constant)
            - Not use ($)Because its Not Represent Variable But present Class Construction
  
        $this :    
            - Refer to Current Object
            - Access Non Static Members (Properties $ Methods)
            - Use ($)Because it Represent A Variable
  
    Apple 
        - Class         = Apple Blueprint Design .
        - Object        = iPhones That China Made .
        - Application   = Apple store . 

    Web Application Registration 
        
        - Class         = Code To Add New Member . 
        - Object        = The Members .
        - Application   = Web Application Registration . 

    Blog System
        - Class         = Code To Add New POst , Article , News , Information  . 
        - Object        = POst , Article , News , Information 
        - Application   = Blog System
*/

   
        class AppleDevice {
            
        //properties 
            
            public $ram = '1GB';
            public $inch = '6Inch';
            Var $space = '32GB';             // public =  Var in PHP old version . 
            public $color = 'Black';
            public $OwnerName;
            private $lock;                   // this property used to explain the Encapsulation .


            //Constants
            
            const OWNERNAME = 5 ;
            

            //Methods
            
         public function GetSpecefication(){
             
             echo 'This iphone ram'. $this->ram .'<br>';
             
         }
         
         public function setOwnerName(){
             
            if(strlen($this-> OwnerName) < self::OWNERNAME ){
                
                echo'Owner Name cant be less than '.self::OWNERNAME.' char';
            }else {
                
                echo'your Name has been set';
            }
             
         }
         
         
         
         public function changeRam($r){
             
             $this -> ram = $r;
             
             
             
         }
         public function changeAll($in,$Sp,$col,$owner){
             
             $this -> inch = $in;
             $this -> space = $Sp;
             $this -> color = $col;
             $this -> OwnerName = $owner;
         }
         
         public function Changelock($lo){
             
             $this -> lock = sha1($lo);
             
             
         }
         
        }
        
        Class Sony Extends AppleDevice{
            
            //properties
            
            public $camera = "25 MB";
            
            
        }
        
        $iphone6plus = new AppleDevice();
        $iphone6plus -> ram = '2GB';
        $iphone6plus -> inch = '5 Inch';
        $iphone6plus -> space = '32GB';
        $iphone6plus -> color = 'Gold';
        $iphone6plus -> OwnerName = 'OD';
        $iphone6plus ->setOwnerName();
        
        echo '<pre>';
        
        var_dump($iphone6plus);
        
        echo '</pre>';
        
        $iphone7plus = new AppleDevice();
        $iphone7plus -> ram = '4GB';
        $iphone7plus -> inch = '7 Inch';
        $iphone7plus -> space = '64GB';
        $iphone7plus -> color = 'Silver';
        $iphone7plus -> OwnerName = 'ODayRAFEH';
        $iphone7plus ->GetSpecefication();
        $iphone7plus ->setOwnerName();
        
        echo '<pre>';
        
        print_r($iphone7plus);
        
        echo '</pre>';
        
        $iphone = new AppleDevice();
        
        $iphone ->changeRam("8GB");
        $iphone ->changeAll("9 Inch", "128GB", "Green","Custemer");
        $iphone ->Changelock("Oday123");            // change the lock useing the Method inside the class only !!!
        
        
        echo '<pre>';
        
        print_r($iphone);
        
        echo '</pre>';
        
        // this new Object th show the Inheritance in th OOP  

        $SonyZ = new Sony();
        $SonyZ ->changeRam("12GB");
        $SonyZ ->changeAll("11 Inch", "64GB", "Red","Jojo");
        $SonyZ ->Changelock("Oday123456");                    // change the lock useing the Method inside the class only !!!
        
        
        echo '<pre>';
        
        print_r($SonyZ);
        
        echo '</pre>';
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>

