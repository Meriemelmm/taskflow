<?php

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
                // $newtask=new task($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type']);
                    $newtask=new task();
                $newtask->addtask($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type']);


        
            }
            elseif($Type==="bug"){
                echo"very bug";
                
                // $newtask=new bug ($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type'],$_POST['priority']);
                $newtask=new bug();
                $newtask->addtask($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type'],$_POST['priority']);
              

            }
            elseif($Type==="feature"){
        echo" very feature";

        // $newtask=new feature ($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type'],null,$_POST['version']);
        $newtask=new feature();
                $newtask-> addtask($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type'],null,$_POST['version']);
        

            } 
            }
            else{
                echo " NON s les champs.";
            }
        
        
        
        
        
 
        }
     }
     function afichage(){
        // $task=new task($_POST['titre'],$_POST['description'],$_POST['status'],$_POST['type']);
        $task= new task();

    $task->affiche();
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
             
           
                header("Location: form.php?id=$afichefetchid");
                exit();
            } else {
                
                $sql = "INSERT INTO users (email) VALUES ('$emai')";
                $query = mysqli_query($connect, $sql);
                echo " nice";

                $afichefetchid = mysqli_insert_id($connect);
                echo  $afichefetchid;
               $_SESSION['id']= $afichefetchid;
               
                header("Location: form.php?id=$afichefetchid");
                exit();
            }
        //    return      $this->id= $afichefetchid; 
        }
    }

    }




// ------------------ class task:
class Task extends newdata{
    private $titre;
    private $description;
    private $status;
    private $type;
  
  

    // public function __construct($titre, $description, $status, $type) {
    //     $this->titre = $titre;
    //     $this->description = $description;
    //     $this->status = $status;
    //     $this->type = $type;
     
    // }

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
   
    public function addtask($titre, $description, $Statut, $Type, $prio = null, $vers = null) {
        $ide = $_SESSION['id'];  
    
      
        if ($prio !== null ) {
            $addtask = "INSERT INTO task (titre, description, status, type, id, priority) 
                        VALUES ('$titre', '$description', '$Statut', '$Type', '$ide', '$prio')";
        }
    
       
        elseif ($vers !== null ) {
            $addtask = "INSERT INTO task (titre, description, status, type, id, version) 
                        VALUES ('$titre', '$description', '$Statut', '$Type', '$ide', '$vers')";
        }
    
      
       
   
        else {
            $addtask = "INSERT INTO task (titre, description, status, type, id) 
                        VALUES ('$titre', '$description', '$Statut', '$Type', '$ide')";
        }
    
      
        $addtaskquery = mysqli_query($this->connect(), $addtask);
        if ($addtaskquery) {
            echo "La tâche a été ajoutée avec succès !";
        } else {
            echo "Erreur : " . mysqli_error($this->connect());
        }
    }
   
    function affiche(){
        // Limiter la quantité de données récupérées
        $afichetask = "SELECT task.id_task, task.titre, task.description, task.status, task.type, task.priority, task.version, users.id 
                       FROM task 
                       JOIN users ON users.id = task.id 
                       WHERE users.id = '{$_SESSION['id']}'
                       LIMIT 100";  // Limiter le nombre de résultats à récupérer
    
        // Exécuter la requête
        $afichetaskQuery = mysqli_query($this->connect(), $afichetask);
    
       if ($afichetaskQuery) {
    while ($fetched = mysqli_fetch_assoc($afichetaskQuery)) {
        echo "
            <tr>
                <td>" . $fetched['titre'] . "</td>
                <td>" . $fetched['description'] . "</td>
                <td>" . $fetched['status'] .  "   
 <button style='background: #45a049'><a href='change' style> change</a></button></a>
                </td>
                <td>" . $fetched['type'] . "</td>
              
            </tr>";
    }
} else {
    echo "Erreur de requête: " . mysqli_error($this->connect());
}
    }
     
    

    }
   
    
    
        
      
    
   
 
      
   





// ---------------------------- bug class
class Bug extends Task {
    private $priority;

    // public function __construct($titre, $description, $status, $type, $priority) {
    //     parent::__construct($titre, $description, $status, $type);
    //     $this->priority = $priority;
    // }

    public function getPriority() {
        return $this->priority;
    }


 }

// ---------------------------- feature class
class Feature extends Task {
    private $version;

    // public function __construct($titre, $description, $status, $type, $version) {
    //     parent::__construct($titre, $description, $status, $type);
    //     $this->version = $version;
    // }

    public function getVersion() {
        return $this->version;
    }
    

}

















    
  





?>

