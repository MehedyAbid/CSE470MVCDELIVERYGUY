<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeliveryGuy</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
  <style>
  form{
  max-width:460px;
  margin:20px auto;
  padding:20px;
  }</style>
 </head>
 <body class="yellow lighten-4">
   

<?php if(!isset($_SESSION['success'])){ ?>
<div class="container">

  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container-fluid">
    <a class="navbar-brand fs-3" href="index.php">DeliveryGuy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        
        <li class=" nav-item">
          <a class="nav-link fs-5" href="../View/register.php">Register</a>
        </li>
        <li class=" nav-item ">
          <a class="nav-link fs-5" href="../View/login.php">Log In</a>
        </li>
        <li class=" nav-item">
          <a class="nav-link fs-5" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h5 class="fs-1 p-3 mb-2 bg-danger text-white text-center">Welcome to DeliveryGuy </h3>
</div>
<div class="container">
<div class="row">
  <div class="col-md-4">
   <div class="card text-center">
     <div class="card-header">
        Featured
      </div>
    <div class="card-body">
      <h5 class="card-title">Register</h5>
      <p class="card-text">Register our website and make delivery everwhere in Bangladesh as fast as possible</p>
      <a href="../View/register.php" class="btn btn-primary">Register DeliveryGuy</a>
    </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
  </div>
  <div class="card text-center">
     <div class="card-header">
        Featured
      </div>
    <div class="card-body">
      <h5 class="card-title">Log in</h5>
      <p class="card-text">Log in and create a order and see order status</p>
      <a href="../View/login.php" class="btn btn-primary">Login DeliveryGuy</a>
    </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
  </div>
  </div>
  <div class="col-md-8">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="../View/images/Capture.PNG" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../View/images/some2.png"  class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../View/images/some3.PNG" class="d-block w-100 img-fluid" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
<br>
  <br>
  <div class="container">
  <h5 class="fs-1 p-3 mb-2 bg-danger text-white text-center">Our Services :</h5>
  <div class="card-group">
  <div class="card">
    <img src="../View/images/next.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="../View/images/cod.jpg" class="card-img-top" alt="...">
    <br>
    <br>
    <br>
    
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="../View/images/express.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>
    
  
  <?php }?>

<?php if(isset($_SESSION['username']) && $_SESSION['type']=="general"){ ?>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">DeliveryGuy</a>
  </div>
</nav>
   <h4 class="indigo-text right-align">Hello, <strong class=" text-green"><?php echo $_SESSION['username'];?></strong></h4>
   <<a class="btn btn-success" href="../Model/User.php?id=<?php echo $_SESSION['id'];?>">View Profile</a></button>
   <a class="btn btn-danger" href="index.php?logout='1'">Log Out</a>
   <li><a href="../View/add.php" class="btn btn-danger brand z-depth-0">Create Order</a></li>
   
     <?php 
    $userId=$_SESSION['id'];
    $data="SELECT orderId,email,pickup,receiverName,receiver,delivery,created_ad from orders WHERE id='$userId' ORDER BY created_ad";
    $query2=mysqli_query($db,$data);
    $orders=mysqli_fetch_all($query2,MYSQLI_ASSOC);
    ?> 
    <div class="container">

<h5 class="fs-1 p-3 mb-2 bg-danger text-white text-center">Order history </h5>
</div>

    <div class="container">
    <div class="row">
    <?php foreach($orders as $order){ ?>
     <div class="col-md-3">
      <div class="card">
       <div class="card-body">
        <h6 class="card-title">Order ID: <?php echo htmlspecialchars($order['orderId']) ?></h6>
       <div>
       <p class="card-text">Sender Email: <?php echo htmlspecialchars($order['email']) ?></p> 
       <p class="card-text">Pickup Address : <?php echo htmlspecialchars($order['pickup']) ?></p>
       <p class="card-text">Receiver Name : <?php echo htmlspecialchars($order['receiverName']) ?></p>
       <p class="card-text">Receiver Contact : <?php echo htmlspecialchars($order['receiver']) ?></p>
       <p class="card-text">Delivery Address: <?php echo htmlspecialchars($order['delivery']) ?></p>
       <p class="card-text">Order Time : <?php echo htmlspecialchars($order['created_ad']) ?></p>
       <div class="card-action right-align">
       <a class="brand-text btn btn-primary" href="../Model/Order.php?id=<?php echo $order['orderId']?>">More Info </a>
       </div>
       </div>
       </div>
      </div>
     
     </div>  
     
    
  <?php } ?>
  </div>
  </div>
  <?php } ?>
  <?php if(isset($_SESSION['username']) && $_SESSION['type']=="admin"){ ?>
    <nav class="navbar navbar-dark bg-dark">
     <div class="container-fluid">
      <a class="navbar-brand" href="index.php">DeliveryGuy</a>
     </div>
    </nav>
    <h4 class="d-block float-right indigo-text right-align">Hello, <strong class=" text-green"><?php echo $_SESSION['username'];?></strong></h4>
    <button class="d-block  btn blue right"><a class="btn btn-success" href="../Model/User.php?id=<?php echo $_SESSION['id'];?>">View Profile</a></button>
    <button class="d-block float-right btn red right"><a class="btn btn-danger" href="index.php?logout='1'">Log Out</a></button>
    
  <?php 
    $userId=$_SESSION['id'];
    $data="SELECT orderId,id,email,pickup,receiverName,receiver,delivery,created_ad,status from orders  ORDER BY created_ad";
    $query2=mysqli_query($db,$data);
    $orders=mysqli_fetch_all($query2,MYSQLI_ASSOC);
  ?> 

  <h4 class="d-block center-align green-text text-darken-1">Orders History : </h4>
  <div class="container">
    <div class="row">
      <?php foreach($orders as $order){ ?>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Order ID: <?php echo htmlspecialchars($order['orderId']) ?></h6>
              <p class="card-text">Pickup Address : <?php echo htmlspecialchars($order['pickup']) ?></p>
              <p class="card-text" >Receiver Name : <?php echo htmlspecialchars($order['receiverName']) ?></p>
              <p class="card-text">Receiver Contact : <?php echo htmlspecialchars($order['receiver']) ?></p>
              <p class="card-text">Delivery Address: <?php echo htmlspecialchars($order['delivery']) ?></p>
              <p class="card-text">Order Time : <?php echo htmlspecialchars($order['created_ad']) ?></p>
              <p class="card-text">Order Status : <?php echo htmlspecialchars($order['status']) ?></p>        
              <form action="../Model/Order.php?id=<?php echo $order['orderId']?>" method="POST">
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
                <input class="submit btn btn-danger" name="edit" type="submit" value="Update">
              </form>
                <div class="card-action right-align">
                  <a class="btn btn-primary" href="../Model/Order.php?id=<?php echo $order['orderId']?>">More Info </a>
                </div>
           </div>
          </div>
        </div>
      <?php } ?>
    </div>  
  </div>
     
    
  
  </div>
  </div>
  <?php } ?>
  
<div class="container mt-4">
  <div class="bg-dark text-white">
      <div class="row align-items-center ps-4 pt-4">
        
        
        <div class="col-md-4  ">
          
          <h3>Features</h3>
          <p>Fast Delivery</p>
          <p>Easy tracking</p>
          <p>Low price</p>
          <p>24/7 Customer Service</p>

        </div>
        
        <div class="col-md-4 padding-left-right">
          <h3>Important Links</h3>
          <p>Home</p>
          <p>Register</p>
          <p>Log In</p>
          <p>Pricing</p>


        </div>
        <div class="col-md-3 ">

        <h3>Office Adress:</h3>
        <p >Dakhin Gaon,Road No.3,Basabo,Sabujbag,Dhaka-1214</p>
        <p>Contact No. : 01521428937</p>
        </div>
      
      </div>
      <br>
     <p class="text-center">
       Copyright © 2021 Md.Mehedy Hasan Abid
     </p>
    </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  

</html>