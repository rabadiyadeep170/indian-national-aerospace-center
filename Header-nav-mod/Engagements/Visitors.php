<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


</head>

<style>
    .visitors-bread {
        position: absolute;
        left: 1350px;
    }

    /* Import Google font - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .container1 {
        padding: 20px;
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container1 .header {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
    }

    .container1 .form1 {
        margin-top: 30px;
    }

    .form1 .input-box {
        width: 100%;
        margin-top: 20px;
    }

    .input-box .label1 {
        color: #333;
    }

    .form1 :where(.input-box .input1, .select-box) {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
    }

    .input-box .input1:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form1 .column {
        display: flex;
        column-gap: 15px;
    }

    .form1 .gender-box {
        margin-top: 20px;
    }

    .gender-box .register-h3 {
        color: #333;
        font-size: 1rem;
        font-weight: 400;
        margin-bottom: 8px;
    }

    .gender .input1 {
        accent-color: rgb(130, 106, 251);
    }

    .gender .label {
        color: #707070;
    }

    .address :where(.input1, .select-box) {
        margin-top: 15px;
    }

    .select-box .select {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        color: #707070;
        font-size: 1rem;
    }

    .form1 .mybtn {
        height: 55px;
        width: 100%;
        color: #fff;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        background: rgb(130, 106, 251);
    }

    .form1 .mybtn:hover {
        background: rgb(88, 56, 250);
    }

    /*Responsive*/
    @media screen and (max-width: 500px) {
        .form1 .column {
            flex-wrap: wrap;
        }

        .form1 :where(.gender-option, .gender) {
            row-gap: 15px;
        }
    }

    .regi-form-center-div {
        position: relative;
        top: 100px;
        left: 280px;
    }

    .objext-space-visitors {
        margin-top: 10%;
    }
</style>

<body>

    <!-- Import Header -->

    <?php include ("one-header.php");
    include ("Flash.php"); ?>


    <div class="container my-5">
        <div class="row">
            <div class="col-4">
                <h3><strong> Visitors </strong></h3>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb visitors-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Engage with Us</li>
                        <li class="breadcrumb-item active" aria-current="page"> Visitors </li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <p class="h4"> <u> <i class="text-danger">
                    Note:</i></u> <span>When you come to visit our Space Center , you need to register
                compulsory.</span></p>
        <br><br>
        <p>Institute permits the visit of students in science, engineering and allied specialities to the Institute so
            that they get an exposure to the various
            facilities. The students are given opportunity to visit the labs of the Institute as a single day
            program.The following may be strictly followed
            to get approval for a student visit at the Institute.</p>

        <div class="regi-form-center-div">
            <section class="container1">
                <header class="header">Registration form</header>
                <form class="form1" method="POST">
                    <div class="input-box">
                        <label class="label1">College Name</label>
                        <input type="text" class="input1" placeholder="Enter college name" name="clg_name" required />
                    </div>
                    <div class="input-box">
                        <label class="label1">College Code</label>
                        <input type="number" class="input1" placeholder="Enter college code " name="clg_code"
                            required />
                    </div>
                    <div class="input-box">
                        <label class="label1">Which Branch</label>
                        <input type="text" class="input1" placeholder="Enter Your Branch" name="clg_branch" required />
                    </div>
                    <div class="input-box">
                        <label class="label1">Email Address</label>
                        <input type="text" class="input1" placeholder="Enter email address" name="email_add" required />
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label class="label1">Phone Number</label>
                            <input type="number" class="input1" placeholder="Enter phone number" name="clg_no"
                                required />
                        </div>
                        <div class="input-box">
                            <label class="label1">When to come </label>
                            <input type="date" class="input1" placeholder="Enter birth date" name="wel_date" required />
                        </div>
                    </div>
                    <div class="input-box address">
                        <label class="label1">College Address</label>
                        <input type="text" class="input1" placeholder="Enter street address" name="clg_add" required />

                        <div class="column">
                            <div class="select-box">
                                <select class="select" name="clg_state">
                                    <option hidden>State</option>
                                    <option>Assam</option>
                                    <option>Bihar</option>
                                    <option>Chhattisgarh</option>
                                    <option>Jharkhand</option>
                                    <option>Karnataka</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                    <option>Gujrat</option>
                                    <option>Himachal Pradesh</option>
                                    <option>Maharashtra</option>
                                    <option>Goa</option>
                                    <option>Kerala</option>
                                    <option>Odisha</option>
                                    <option>Haryana</option>
                                    <option>Mizoram</option>
                                    <option>Nagaland</option>
                                    <option>Panjab</option>
                                    <option>Manipur</option>
                                    <option>Meghalaya</option>
                                    <option>Ladakh</option>
                                    <option>Chandigarh</option>
                                    <option>Jammu and Kashmir</option>
                                    <option>Andaman and Nicobar Islands</option>
                                </select>

                            </div>
                            <input type="text" class="input1" placeholder="Enter your city" name="clg_city" required />
                        </div>
                        <div class="column">
                            <input type="text" class="input1" placeholder="Enter Number of Student" name="clg_student"
                                required />
                            <input type="text" class="input1" placeholder="Enter designation" name="clg_des" required />
                        </div>
                    </div>
                    <input class="mybtn" name="true" type="submit" value="Submit" />
                </form>
            </section>
        </div>
    </div>
    <div class="objext-space-visitors"></div>

    <?php
    include ("one-footer.php");
    ?>


</body>

</html>

<?php

if (isset($_POST['true'])) {

    $con = mysqli_connect("localhost", "root", "", "user");

    if (!$con) {
        echo "
                
                <script>
                    alert('not succesfully connection');
                </script>";

    }

    $clg_name = $_POST['clg_name'];
    $clg_code = $_POST['clg_code'];
    $clg_branch = $_POST['clg_branch'];
    $email_add = $_POST['email_add'];
    $clg_no = $_POST['clg_no'];
    $wel_date = $_POST['wel_date'];
    $clg_add = $_POST['clg_add'];
    $clg_state = $_POST['clg_state'];
    $clg_city = $_POST['clg_city'];
    $clg_student = $_POST['clg_student'];
    $clg_des = $_POST['clg_des']; 


    $sql = "INSERT INTO `navic_table` VALUES  ('$clg_name' , '$clg_code', '$clg_branch' ,'$email_add' , '$clg_no', '$wel_date' ,
            '$clg_add', '$clg_state', '$clg_city' ,'$clg_student' ,'$clg_des')";

    $rel = mysqli_query($con, $sql);


    echo "          
            <script>
                alert('Register Successfully 🎉');
            </script>";

}
?>