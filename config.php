<?php

  
// $loginid=$_GET['id'];
// echo $loginid;
// session_start();



   

$connect = mysqli_connect('localhost', "root", "", "taskflow");

if (!$connect) {
    echo "Error: " . mysqli_error($connect);
} else {
    echo "Good connection!";
}

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





//  afichage 



















?>

   
