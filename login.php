-<?php
include "config1.php";

if(isset($_POST['but_submit'])){

$email = mysqli_real_escape_string($con,$_POST['email']);
$pwd =  mysqli_real_escape_string($con,$_POST['pwd']);
$pwd = md5($pwd);
if ($email != "" && $pwd != "" ){

    $sql_query = "select * from registration where email='".$email."' and pwd='".$pwd."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);


    if( $row['usertype1']=="1" ){
        $_SESSION['username'] = $email;
        header('Location: admin.php');
    }
     elseif( $row['usertype1']=="0" && $row['status']=="0" ){
      echo "Vous etes bloqué(e) par l'adminstrateur de notre site";
     }
     elseif( $row['usertype1']=="0" && $row['status']=="1" && $row['metier']=="1" ){
      $_SESSION['username'] = $email;
        header('Location: homeprof.php');
     }
     elseif( $row['usertype1']=="0" && $row['status']=="1" && $row['metier']=="0" ){
      $_SESSION['username'] = $email;
        header('Location: homestudent.php');
     }
     else { echo "Mot de passe ou email invalide ";
    } }
}
      ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="styling.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="../styling.css">
<link rel="stylesheet" href="../stylingform.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<title>Talos</title>
<nav class="navbar">

  <a href="index.html"><img src="logo.png" alt="logo de Thalos" class="logo"></a>
  <div class="navbar-nav">
    <a href="">home</a>
    <a href="">Cours</a>
    <a href="">blog</a>
    <a href="">about</a>
    <a href="">Inscription</a>
   <div> <a href="#">login</a> </div>
  </div>
   
</nav> 
</head>
<body>

  <h2>connectez-vous</h2>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="email" required>

      <label for="pwd"><b>Mot De Passe </b></label>
      <input type="pwd" placeholder="Enter pwd" name="pwd" required>
        
      <button type="submit" name="but_submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Rappelle-toi de moi
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Mot De Passe <a href="enter_email.php">oublié?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<footer>
  <div class = "social-links">
    <a href = "#"><i class = "fab fa-facebook-f"></i></a>
    <a href = "#"><i class = "fab fa-twitter"></i></a>
    <a href = "#"><i class = "fab fa-instagram"></i></a>
    <a href = "#"><i class = "fab fa-pinterest"></i></a>
  </div>
  <span><b>Thalos</b> all Copyrights©2021</span>
</footer>
</body>
</html>