<?php

   include("function.php");

   $connobj= new CrudApp();
   if(isset($_POST['btn1'])){

     $rtn_msg =  $connobj->addInfo($_POST);
   }
   $pdata= $connobj->displayData();

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  
    <title>Pandas Database</title>

   
    
  </head>
  <body>
 
    <div class="my-4 p-4 shadow">

    <h2><a href="index.php">Three Depressed CS !Fans Database</a></h2>
     <?php if(isset($rtn_msg)){ echo $rtn_msg ;}?>
    <form class="form"action="" method = "POST" enctype = "multipart/form-data">
      
    <input class="form-control mb-2" type="text" name="Name" placeholder="Enter Your Name"><br>
    <input class="form-control mb-2" type="text" name="Identifier" placeholder="Enter Your Unique Identifier"><br>
    <input class="form-control mb-2" type="FILE" name="Image"><br>
    <input class="form-control bg-warning" type="submit" name="btn1" value= "Add Information"><br>
    
    </form>
    
</div>
<div class="my-4 p-4 shadow">

<table class="table table-responsive">
 <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Identifier</th>
        <th>Image</th>
        <th>Action</th>
</tr>

</thead>

<tbody>
    <?php while($pdatas=mysqli_fetch_assoc($pdata)){ ?>
    <tr>
    <td><?php echo $pdatas['ID'] ?></td>
    <td><?php echo $pdatas['Name'] ?></td>
    <td><?php echo $pdatas['identifier'] ?></td>
    <td><img style="Height:100px" src="Uploads/<?php echo $pdatas['img_source'] ?> "> </td>
    <td>
        <a class="btn btn-success" href="#" >EDIT</a>
        <a class="btn btn-warning" href="" >DELETE</a>



    </td>
</tr> <?php } ?> 
</tbody>
</table>

</div>
      
  </body>
</html>

  

