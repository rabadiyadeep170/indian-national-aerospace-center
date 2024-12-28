<?php 

session_start();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<style>

    body{
        background-color: rgba(255, 255, 255, 0.797);
    }

    .signin-div{
        box-sizing: border-box;
        display: block;
        height: 650px;
        position: relative;
        top: 120px;
        left: 780px;
        width: 20%;
        border-radius: 2%;
    }


    .sub-div{

        width: 100%;
        height: 25%;
        background-color: rgba(42,50,197,255);

    }

    .signin-div,
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

        .input-signin{
            width: 90% !important;
            left: 5% !important;
            position: relative;
        }
        .signin-mybtn{
            left: 5% !important;
            position: relative;
            width: 90%;
            background-color: rgba(42,50,197,255) !important; 
        }
        .signin-mybtn:hover{
            background-color: blue !important;
        }
        .signin-link{
            position: relative;
            text-decoration: none;
            top: 10px !important;
            left: 130px;
        }
        .signin-note{
            position: relative;
            left: 20px;
        }

</style>

<body>
    <form method="POST">

            <div class="signin-div shadow bg-white rounded">
                <div class="sub-div">
                    <p class="text-light sub-div-head1">INDAIN NATIONAL AEROSPACE CENTER</p>
                    <p class="text-light sub-div-head2">→ DOS PORTAL ←</p>
                </div>
                <div class="image-div">
                    <img src="inacimage.png" class="image-round shadow bg-white rounded">
                </div>
               
                <div class="signin-topic">
                    <p class="h3 div-topic">SIGN IN</p>
                </div>
                <div class="form-group">
                    <input class="form-control input-signin" type="text" name="ldosid" placeholder="Enter Dos id">
                </div>
                <br>
                <div class="form-group">
                    <input class="form-control input-signin" type="text" name="lpasswd" placeholder="Enter Id pass">
                </div>
                <br>
                <button type="submit" name="signin_set" class="btn btn-primary signin-mybtn" onclick="fun_exicute()">Login </button>

                <div class="signin-create-acc">
                    <a href="signup.php" class="link-danger signin-link"> Create an account </a>
                    <br><br>
                    <p class="text-secondary signin-note">Note : each and every staff who have already <br>
                        registerd Then can use the same username and password to login to this portal.</p>
                    <p class="h4 text-dark text-center">FAQs</p>
                </div>
            </div>
    </form>    
</body>
</html>
<?php 

    if(isset($_POST['signin_set']))
    {

        $login_id = $_POST['ldosid'];
        $login_pass = $_POST['lpasswd'];

        $make_con = mysqli_connect("localhost" , "root" , "" , "user");


        $domain = "cani@";

        $rev = strrev($login_id);

        $substring = substr($rev , 0 , 5);

        if($substring == $domain)
        {
            $login_q = "SELECT * FROM `portal_register_table` WHERE dos_id = '$login_id' && passwd = '$login_pass'";

            $data = mysqli_query($make_con , $login_q);
    
            $count = mysqli_num_rows($data);

            if($count == 1)
            {

               $_SESSION["sessionid"] = $login_id;
            
                echo "<script>
                
                    alert('login sucessfully..!!');
                    location.href = 'portal.php';
                </script>";
            }
            else{
                echo "<script>
                
                    alert('Try again..!!');
                
                </script>";
            }
        }
        else{

            die("<script>
                
                    alert('Please Enter Your Valid Id..!!');
            </script>");
        }
       
    }

?>
