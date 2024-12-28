<?php

    session_start();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<style>

    body{
        background-color: rgba(255, 255, 255, 0.797);
    }

    .signup-div{
        box-sizing: border-box;
        display: block;
        height: 820px;
        position: relative;
        top: 50px;
        left: 780px;
        width: 20%;
        border-radius: 2%;
    }


    .sub-div{

        width: 100%;
        height: 20%;
        background-color: rgba(42,50,197,255);

    }

    .signup-div,
    .sub-div{
        overflow: hidden;
    }

        .sub-div-head1
        {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 700;
            font-size: 1.20rem;
            position: relative;
            left: 20px;
            top: 30px;
            display: block;
        }

        .sub-div-head2
        {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 700;
            font-size: 1.20rem;
            position: relative;
            left: 105px;
            top: 30px;
            letter-spacing: 1px;
            display: block;
        }

        .image-round{
            border-radius: 50% !important;
            width: 80px;
            height: 80px;
            position: relative;
            left: 150px;
            top: -42px;
        }
        .div-topic{
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            letter-spacing: 2px;
            position: relative;
            top: -30px;
        }

        .input-signup{
            width: 90% !important;
            left: 5% !important;
            position: relative;
        }
        .signup-mybtn{
            left: 5% !important;
            position: relative;
            width: 90%;
            background-color: rgba(42,50,197,255) !important; 
        }
        .signup-mybtn:hover{
            background-color: blue !important;
        }
        .signup-link{
            position: relative;
            text-decoration: none;
            top: 10px !important;
            left: 140px;
        }


</style>

<body>
    <form method="POSt">
        <div class="signup-div shadow bg-white rounded">
            <div class="sub-div">
                <p class="text-light sub-div-head1">INDAIN NATIONAL AEROSPACE CENTER</p>
                <p class="text-light sub-div-head2">→ DOS PORTAL ←</p>
            </div>
            <div class="image-div">
                <img src="inacimage.png" class="image-round shadow bg-white rounded">
            </div>
            <div class="signup-topic">
                <p class="h3 div-topic">SIGN UP</p>
            </div>
            <div class="form-group">
                <input class="form-control input-signup" name="fname" type="text" placeholder="First Name :">
            </div>
            <br>
            <div class="form-group">
                <input class="form-control input-signup" name="lname" type="text" placeholder="Last Name : ">
            </div>
            <br>
            <div class="form-group">
                <input class="form-control input-signup" name="dosid" type="text" placeholder="DOS id : ">
            </div>
            <br>
            <div class="form-group">
                <input class="form-control input-signup" name="email" type="email" placeholder="Email :">
            </div>
            <br>
            <div class="form-group">
                <input class="form-control input-signup" name="creatpass" type="text" placeholder="Create Pass : ">
            </div>
            <br>
            <div class="form-group">
                <input class="form-control input-signup" name="confirmpass" type="text" placeholder="Confirm Pass : ">
            </div>
            <br>
            <button type="submit" name="submitdata" class="btn btn-primary signup-mybtn">Submit </button>

            <div class="signup-create-acc">
                <a href="signin.php" class="link-danger signup-link"> Back To Sign in</a>
                <br><br>
                <p class="text-secondary text-center signup-note">Note : As per Employe You must be Fill<br> All Details Compulsory </p>
            </div>
        </div>    
    </form>
</body>
</html>
<?php 

if(isset($_POST['submitdata']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['dosid'];
    $email = $_POST['email'];
    $crpass = $_POST['creatpass'];
    $cnpass = $_POST['confirmpass'];


    if(!($fname == null))
    {
       if(!($lname == null))
       {
            if(!($id == null)) 
            {
                    if(!($email == null))
                    {
                        if($crpass == $cnpass)
                        {
                            if(strlen($id) == 10)
                            {
                                $passwd = $cnpass;

                                $domain = "cani@";
    
                                $rev = strrev($id);
    
                                $substring = substr($rev , 0 , 5);
    
                                if($substring == $domain)
                                {
                                    
                                    $conn = mysqli_connect("localhost" , "root" , "" , "user");
    
                                    $sql = "INSERT INTO `portal_register_table` VALUES ('$fname' , '$lname' , '$id' , ' $email' , '$passwd')";
                            
                                    $data = mysqli_query($conn , $sql);
                                    
                                        echo "<script>
                                        
                                            alert('Registration sucessfully..!!');
                                            location.href = 'signin.php';
                                        </script>";
                                
                                }
                                else{
                                    die("<script>
                        
                                        alert('please enter your Valid id');
                    
                                    </script>");
                                }

                            }
                            else{
                                die("<script>
                    
                                    alert('Out Of Length Error');
                
                                </script>");
                            }
                            


                        }
                        else{
                            die("<script>
                    
                                    alert('both password are not same');
                
                                </script>
                            ");
                        }

                    }
                else{
                    die("<script>
                
                        alert('Please Enter Your Email');

                    </script>");

                }
            }
            else{
                die("<script>
                
                    alert('Please Enter Your id');

                </script>");
            }
        }
       else{
        
            die("<script>
                    
            alert('Please Enter Your Last Name');

            </script>");
        }

    }
    else{

        die("<script>
                    
            alert('Please Enter Your First Name');

            </script>");

    }

}



?>