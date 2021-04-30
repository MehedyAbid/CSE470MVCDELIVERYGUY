<?php 
include("../Controller/server.php") ;
if(isset($_GET['id'])){
   $id=mysqli_real_escape_string($db,$_GET['id']);
   $sql="SELECT * from users where id=$id";
   $result=mysqli_query($db,$sql);
   $user=mysqli_fetch_assoc($result);
   mysqli_free_result($result);
   mysqli_close($db);
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeliveryGuy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
  form{
  max-width:460px;
  margin:20px auto;
  padding:20px;
  }</style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<?php if($_SESSION['type']=="general"){ ?>
    <nav class="white z-depth-0">
    <div class="container">
    <a href="../Controller/index.php" class="brand-logo blue-text">DeliveryGuy</a>
    </div>
   </nav>
    <h4 class="indigo-text right-align">Hello, <strong><a href="../Model/User.php?id=<?php echo $_SESSION['id'];?>"><?php echo $_SESSION['username'];?></a></strong></h4>
    <button class="btn red right"><a class="white-text" href="../Controller/index.php?logout='1'">Log Out</a></button>
   
   <div class="container center">
   
<div class="row">
   <div class="col s12 m6">
   <div class="card green">
   <div class="card-content white-text">
   <?php if($user): ?>
     <h4>User ID : <?php echo htmlspecialchars($user['id']) ?></h4>
     <h4>User Name : <?php echo htmlspecialchars($user['username'])?></h4>
     <h4>User Email : <?php echo htmlspecialchars($user['email'])?></h4>
     <h4>User Type : <?php echo htmlspecialchars($user['user_type'])?></h4>
</div>
</div>
</div>
</div>
   <?php else: ?>
    <h5>Page Not Found</h5>
   <?php endif; ?> 
<?php } ?>
<?php if($_SESSION['type']=="admin"){ ?>
    <nav class="white z-depth-0">
    <div class="container">
    <a href="../Controller/index.php" class="brand-logo blue-text">DeliveryGuy</a>
    </div>
   </nav>
    <h4 class="indigo-text right-align">Hello, <strong><a href="../Model/User.php?id=<?php echo $_SESSION['id'];?>"><?php echo $_SESSION['username'];?></a></strong></h4>
    <button class="btn red right"><a class="white-text" href="../Controller/index.php?logout='1'">Log Out</a></button>
   
   <div class="container center">
   <div class="row">
   <div class="col s12 m6">
   <div class="card green">
   <div class="card-content white-text">
   
   <?php if($user): ?>
   <h4>User ID : <?php echo htmlspecialchars($user['id']) ?></h4>
   <h4>User Name : <?php echo htmlspecialchars($user['username'])?></h4>
   <h4>User Email : <?php echo htmlspecialchars($user['email'])?></h4>
   <h4>User Type : <?php echo htmlspecialchars($user['user_type'])?></h4>
   </div>
   </div>
   </div></div>
  


   
<?php else: ?>
  <h5>Page Not Found</h5>
<?php endif; ?> 
<?php } ?>

</div>
</html>