<?php

  
// $loginid=$_GET['id'];
// echo $loginid;
// session_start();



   

// $connect = mysqli_connect('localhost', "root", "", "taskflow");

// if (!$connect) {
//     echo "Error: " . mysqli_error($connect);
// } else {
//     echo "Good connection!";
// }

// $email = "";
// if (isset($_POST['button'])) {
//     $email = $_POST['email'];
//     echo "Hello";

//     $afiche = mysqli_query($connect, "SELECT id, email FROM users WHERE email = '$email'");

 
//     echo"parfait";
//     if (mysqli_num_rows($afiche) > 0) {
//         $afichefetch = mysqli_fetch_assoc($afiche);
//         $afichefetchid = $afichefetch['id'];
//         echo  $afichefetchid;
//         $_SESSION['id']=$afichefetchid;
//         header("Location: hello.php?id=$afichefetchid");
//         exit();
//     } else {
       
//         $sql = "INSERT INTO users (email) VALUES ('$email')";
//         $query = mysqli_query($connect, $sql);
//        echo" nice";
           
//             $afichefetchid = mysqli_insert_id($connect);
//             echo  $afichefetchid;
//            $_SESSION['id']=$afichefetchid;
//             header("Location: hello.php?id=$afichefetchid");
//             exit();
        
//     }
  
// }
// ----------------------ajouter une tache 


if (isset($_POST['submit'])) {
   
    if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['status']) && !empty($_POST['type'])) {
        echo "Tous les champs sont remplis.";
        $titre=$_POST['titre'] ;
       $description=$_POST['description'] ;
        $Statut= $_POST['status'];
        $loginid =$_SESSION['id'];
    $Type= $_POST['type'] ;
        $addtask="INSERT INTO  task (titre, description, status,type ,id)   VALUES (' $titre', '$description', '$Statut',' $Type','$loginid')";
    
        $addtaskquery=mysqli_query($connect,$addtask);
        if($addtaskquery){
            echo"good job";
        }
        else{
            echo mysqli_error();
        }
    
    
    
    
    
    
    }
        
        else{echo " NON s les champs.";
     
    }
}






















?>