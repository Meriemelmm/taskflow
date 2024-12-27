<?php
//  $loginid=$_GET['id'];
session_start();
 class  taskmang{
     public function newuser(){
         if (isset($_POST['email'])) {
  $newUser = new User();

  $newUser->connexion($_POST['email']);
 }
     }
     function typetask(){
        if (isset($_POST['submit'])){

            if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['status']) && !empty($_POST['type'])) {
                echo "Tous les champs sont remplis.";
                $titre=$_POST['titre'] ;
               $description=$_POST['description'] ;
                $Statut= $_POST['status'];
               
            $Type= $_POST['type'] ;
            if($Type==="simple"){
                echo"very simple";
                $newtask=new task($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type']);
                $newtask->addtask($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type']);


        
            }
            elseif($Type==="bug"){
                echo"very bug";
                $newtask=new bug("nice","hello","hdhe","hdhhd","ghdhhd");
                echo $newtask->getPriority();

            }
            elseif($Type==="feature"){
        echo" very feature";
        $newtask=new feature("nice","hello","hdhe","hdhhd","version");
        echo $newtask->getversion();

            } 
            }
            else{
                echo " NON s les champs.";
            }
        
        
        
        
        
 
        }
     }



 }



//  ---------------- instance objet :

 $newtaskmange= new taskmang();
$newtaskmange->newuser();
$newtaskmange->typetask();

// ------------------  class database:
class newdata {
    private $connect;

   
    protected function connect() {
      
        $this->connect = mysqli_connect('localhost', 'root', '', 'taskflow');
        
     
        if (!$this->connect) {
            echo "Error: " . mysqli_connect_error();
        } else {
            echo "Good connection!";
        }
        return $this->connect;
    }
}

// ------------ class user
class User extends newdata {
    private $email;
 

    public function connexion($emai) {
        $this->email = $emai;
        if (isset($_POST['button'])) {  
            echo "Hello";

            $connect = $this->connect(); 

           
            $afiche = mysqli_query($connect, "SELECT id, email FROM users WHERE email = '$emai'");
            echo "parfait";

            if (mysqli_num_rows($afiche) > 0) {
                $afichefetch = mysqli_fetch_assoc($afiche);
                $afichefetchid = $afichefetch['id'];
                $_SESSION['id']=$afichefetchid;
             
           
                header("Location: hello.php?id=$afichefetchid");
                exit();
            } else {
                
                $sql = "INSERT INTO users (email) VALUES ('$emai')";
                $query = mysqli_query($connect, $sql);
                echo " nice";

                $afichefetchid = mysqli_insert_id($connect);
                echo  $afichefetchid;
               $_SESSION['id']= $afichefetchid;
               
                header("Location: hello.php?id=$afichefetchid");
                exit();
            }
           return      $this->id= $afichefetchid; 
        }
    }
    protected function getid(){
        if(isset($_GET['id'])){
            return $this->id=$_GET['id'];
        }
    }
}



// ------------------ class task:
class Task extends newdata{
    private $titre;
    private $description;
    private $status;
    private $type;
  
  

    public function __construct($titre, $description, $status, $type) {
        $this->titre = $titre;
        $this->description = $description;
        $this->status = $status;
        $this->type = $type;
     
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getType() {
        return $this->type;
    }
   
  public function addtask($titre,$description,$Statut,$Type){
       
        $this->titre = $titre;
        $this->description = $description;
        $this->status = $Statut;
        $this->type = $Type;
        $ide= $_SESSION['id'];
       

        $addtask="INSERT INTO  task (titre, description, status,type,id )   VALUES (' $titre', '$description', '$Statut',' $Type',' $ide')";
    
        $addtaskquery=mysqli_query($this->connect(),$addtask);
        if($addtaskquery){
            echo"good job";
        }
        else{
            echo mysqli_error();
        }
    
    
    
    
    
    
    }
        
      
    }
   
 
      
   





// ---------------------------- bug class
class Bug extends Task {
    private $priority;

    public function __construct($titre, $description, $status, $type, $priority) {
        parent::__construct($titre, $description, $status, $type);
        $this->priority = $priority;
    }

    public function getPriority() {
        return $this->priority;
    }
}

// ---------------------------- feature class
class Feature extends Task {
    private $version;

    public function __construct($titre, $description, $status, $type, $version) {
        parent::__construct($titre, $description, $status, $type);
        $this->version = $version;
    }

    public function getVersion() {
        return $this->version;
    }
}

















?>


