<?php

    session_start();

?>  
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INAC - PORTAL</title>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<style>
    tr,th, td{
        border: 1px solid black;
    }
    *{
        padding: 5px;
        margin: 2px;
    }
    .btn-l-r{
        position: relative;
        left: 15%;
        top: 5%;
    }



</style>

<body>
    
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">INAC</a>
    <form class="d-flex" role="search">
      <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success me-3" type="submit">Search</button>
    </form>
  </div>
</nav>

<h1 class="text-center my-5">Your Details </h1>
<br><br>


<table class="text-center container">
    <tr>
        <th>First Name </th>
        <th>Lzast Name </th>
        <th>Dos id </th>
        <th>Passswd</th>
        <th>Email id </th>
    </tr>
    <tr>
        <td>
            <?php 
                    
                    $conn = mysqli_connect("localhost" , "root" , "" , "user");
                        
                    $sessionid = $_SESSION["sessionid"];
                    $show_date = "SELECT * FROM `portal_register_table` WHERE dos_id = '$sessionid'"; 

                    $res = mysqli_query($conn , $show_date);  

                    if($row = mysqli_fetch_assoc($res))
                    {
                        echo $row['First_Name'];
                        
            ?>
        </td>
        <td>
            <?php 
                     echo $row['Last_name'];
            ?>
        </td>
        <td>
            <?php 
                
                     echo $row['dos_id'];
            ?>
        </td>
        <td>
            <?php 

                    $encpass = $row['passwd'];

                    $enctype_pass = password_hash($encpass , PASSWORD_DEFAULT);
                    echo $enctype_pass; 
            
            ?>
        </td>
        <td>
            <?php 
                
                     echo $row['email'];
                }
                
    
            ?>
        </td>

    </tr>
    
</table>

<button type="submit" class="btn btn-danger btn-l-r" onclick="portal_to_web()">Redirect Web</button>

</body>
<script>

function portal_to_web()
{
    location.href = "/INAC";
}