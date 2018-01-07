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
            public $name;

            //Constants
            
            const OWNERNAME = 5 ;
            

            //Methods
            
         public function GetSpecefication(){
             
             echo 'This iphone ram'. $this->ram .'<br>';
             
         }
         
         public function setOwnerName(){
             
            if(strlen($this-> OwnerName) < self::OWNERNAME ){
                
                echo'Owner Name cant be less than '.self::OWNERNAME.' char'.'<br>';
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
         
         /*
        this Method is to explain the inheritance override .
        
         we can use also the Final Keyword to make constant method and you cant edit after that from any where in the code .
         like this (Final public function sayHello)
         and we can add the final word to the class to dont allow the extends from new class .
          
           
          */
         public function SayHello($n){
             
             $this -> name = $n;   
             echo 'welcome To'. $n .'<br>';
         }
         
        }
        
        Class Sony Extends AppleDevice{
            
            //properties
            
            public $camera = "25 MB";
            
            
            //this Method is to explain the inheritance override
            
            public function SayHello($n){
             
             $this -> name = $n;   
             echo 'welcome To '. $n .'and this phone is perfect'.'<br>';
         }
        }
        
        // this part is very important
        abstract class MakeDevice {
            
            /*
             -Class Abstraction :
                - Cannot Be Instantiated [Cannot Create Object from it ]
                - Made for Other classes To inherit Properties & Methods from it .
                - Can Have Methods & Properties
                - Can have abstract methods (Functions)or Non abstract methods.
                - Abstract Methods [Contain No body Code ] But[ the can take an arrgument]
                - Rules To Go on 
                - Force Developers To follow your Methods 
              
               
             */
            
            public $ram ;
            
            public function sayHello(){
                
                echo'Hi this is abstract class';
            }
            abstract public function Testperformance();  
            abstract public function VerfiyOwner(); 
            abstract public function SayWelcome($n);
        }
        
        Class Samsung extends MakeDevice{
            
            // Here you should use all the Abstract Methods !!!!
            
            public $Owner;
            public function Testperformance() {
                echo 'the performance is very good ';
            }
            public function VerfiyOwner() {
                echo 'Owner is verfiyed';
            }
            public function SayWelcome($n) {
                $this -> Owner = $n;
                echo 'Welcom User '.$n;
            }
            
        }

        $iphone6plus = new AppleDevice();
        $iphone6plus -> ram = '2GB';
        $iphone6plus -> inch = '5 Inch';
        $iphone6plus -> space = '32GB';
        $iphone6plus -> color = 'Gold';
        $iphone6plus -> OwnerName = 'OD';
        $iphone6plus ->setOwnerName();
        $iphone6plus ->GetSpecefication();
        $iphone6plus ->SayHello('Iphone6plus');
        
        echo '<pre>';
        
        print_r($iphone6plus);
        
        echo '</pre>';
        
        $iphone = new AppleDevice();
        $iphone ->changeRam("8GB");
        $iphone ->changeAll("9 Inch", "128GB", "Green","Custemer");
        $iphone ->Changelock("Oday123");            // change the lock useing the Method inside the class only !!!
        
        
        echo '<pre>';
        
        print_r($iphone);
        
        echo '</pre>';
        
        // this new Object to show the Inheritance in th OOP  

        $SonyZ = new Sony();
        $SonyZ ->changeRam("12GB");
        $SonyZ ->changeAll("11 Inch", "64GB", "Red","Jojo");
        $SonyZ ->Changelock("Oday123456");                    // change the lock useing the Method inside the class only !!!
        $SonyZ ->SayHello('SonyZ');

        
        echo '<pre>';
        
        print_r($SonyZ);
        
        echo '</pre>';
        
        
        // this to try explain the abstraction (abstract class)  

        $samsung = new Samsung();
        $samsung -> sayHello();
        $samsung -> SayWelcome('Oday');
        
        echo '<pre>';
        
        print_r($samsung);
        
        echo '</pre>';
  
        
        ?>

