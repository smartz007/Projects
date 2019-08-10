<?php 
    
    session_start();
    //echo "<h2>Hello!!!!</h2>";
    
    $db = mysqli_connect('localhost', 'id7092079_root', 'jntu@123', 'id7092079_inquizitive');
    
    $id = $_SESSION['id'];
    
    echo "<h2>Your id :  ".$id."</h2>";
if(isset($_POST['score1'])){
    $score = (int)$_POST['score1'];
    echo $score;
    echo "<h2>".$score."</h2>";
    $queryscore = "UPDATE quiz_participants SET score = '$score' WHERE id = '$id'";
    mysqli_query($db, $queryscore);
} ?>
