<?php 
include("../Controller/server.php") ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeliveryGuy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<?php if(isset($_SESSION['username'])&& $_SESSION['type']=="admin"){ ?>
    <nav class="white z-depth-0">
    <div class="container">
    <a href="../Controller/index.php" class="brand-logo blue-text">DeliveryGuy</a>
    </div>
   </nav>
    <h4 class="indigo-text right-align">Hello, <strong><?php echo $_SESSION['username'];?></a></strong></h4>
    
    <button class="btn blue right"><a class="white-text" href="User.php?id=<?php echo $_SESSION['id'];?>">View Profile</a></button>
    
    <button class="btn red right"><a class="white-text" href="../Controller/index.php?logout='1'">Log Out</a></button>
   

<div class="container center">

<div class="container center">
   <div class="row">
   <div class="col s12 m6">
   <div class="card green">
   <div class="card-content white-text">
<?php if($order): ?>
   <h4>Order ID : <?php echo htmlspecialchars($order['orderId']) ?></h4>
   <h4>Sender Email : <?php echo htmlspecialchars($order['email'])?></h4>
   <h4>Pickup Address : <?php echo htmlspecialchars($order['pickup'])?></h4>
   <h4>Receiver Name : <?php echo htmlspecialchars($order['receiverName'])?></h4>
   <h4>Receiver Contact Number : <?php echo htmlspecialchars($order['receiver'])?></h4>
   <h4>Delivery Address : <?php echo htmlspecialchars($order['delivery'])?></h4>
   <h4>Order Date : <?php echo htmlspecialchars($order['created_ad'])?></h4>
   <h4>Order Status : <?php echo htmlspecialchars($order['status'])?></h4>
   
   <form action="Order.php?id=<?php echo $order['orderId']?>" method="POST">
<label for="status">Order Status :</label>
   <select name="status">
      <option value="Confirmed" <?php if($order['status']=="Confirmed"){
         echo "selected";
      }?>>Confirmed</option>
      <option value="Cancelled" <?php if($order['status']=="Cancelled"){
         echo "selected";
      }?>>Cancelled</option>
      <option value="Delivered"<?php if($order['status']=="Delivered"){
         echo "selected";
      }?>>Delivered</option>
      <option value="Not Confirmed"<?php if($order['status']=="Not Confirmed"){
         echo "selected";
      }?>>Not Confirmed</option>
   </select>

   <input class="submit" name="edit" type="submit" value="Update">
   </form>
</div>
</div>
</div>
</div>
<?php else: ?>
  <h5>Page Not Found</h5>
<?php endif; ?> 
<?php } ?>
<?php if(isset($_SESSION['username'])&& $_SESSION['type']=="general"){ ?>
    <nav class="white z-depth-0">
    <div class="container">
    <a href="../Controller/index.php" class="brand-logo blue-text">DeliveryGuy</a>
    </div>
   </nav>
    <h4 class="indigo-text right-align">Hello, <strong><?php echo $_SESSION['username'];?></a></strong></h4>
    
    <button class="btn blue right"><a class="white-text" href="User.php?id=<?php echo $_SESSION['id'];?>">View Profile</a></button>
    
    <button class="btn red right"><a class="white-text" href="../Controller/index.php?logout='1'">Log Out</a></button>
   

<div class="container center">

<div class="row">
   <div class="col s12 m6">
   <div class="card red">
   <div class="card-content white-text">
<?php if($order): ?>
   <h4>Order ID : <?php echo htmlspecialchars($order['orderId']) ?></h4>
   <h4>Sender Email : <?php echo htmlspecialchars($order['email'])?></h4>
   <h4>Pickup Address : <?php echo htmlspecialchars($order['pickup'])?></h4>
   <h4>Receiver Name : <?php echo htmlspecialchars($order['receiverName'])?></h4>
   <h4>Receiver Contact Number : <?php echo htmlspecialchars($order['receiver'])?></h4>
   <h4>Delivery Address : <?php echo htmlspecialchars($order['delivery'])?></h4>
   <h4>Order Date : <?php echo htmlspecialchars($order['created_ad'])?></h4>
   <h4>Order Status : <?php echo htmlspecialchars($order['status'])?></h4>
   </div>
   </div>
   </div>
   </div>
<?php else: ?>
  <h5>Page Not Found</h5>
<?php endif; ?> 

</div>
<?php } ?>
</html>