
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>

    .mission-cont-bread{
        position: absolute;
        left: 1285px;
    }

    .mission-p{
        font-size: 1.20rem;
        font: bold;
    }

    .mission-p-light{
        font-size: 1.20rem;
    }
    .mission-box{
        border: 1px solid black;
        height: 200px;
        width: 400px;
        border-radius: 20px;
    }

    .mission-box-flate{
        display: flex;
    }
    .mission-box-bottom{
        position: relative;
        top: 110px;
    }

    .mission-bg1{
        width: 100%;
        height: 100%;
        position: relative;
        top: -35px;
    
    }
    
    .mission-bg2
    {
        width: 100%;
        height: 100%;
        position: relative;
        top: 1px;
        scale: 1.03;
    }

    .mission-bg3
    {
        width: 100%;
        height: 100%;
        position: relative;
        top: 1px;
        scale: 1.15;
    }

    
    .mission-bg4
    {
        width: 100%;
        height: 200px;
        position: relative;
    }

    
    .mission-bg5
    {
        width: 190px;
        height: 200px;
        position: relative;
       
    }

    
    .mission-bg6
    {
        width: 250px;
        height: 100%;
        right: 20px;
        position: relative;
        
    }

    .mission-bg7
    {
        width: 190px;
        height: 200px;
        position: relative;
        
    }

    .mission-bg1 ,
    .mission-bg2,
    .mission-bg3 ,
    .mission-bg4 ,
    .mission-bg5 ,
    .mission-bg6 ,
    .mission-bg7 ,
    .mission-box{
        overflow: hidden;
    }



    .mission-h1{
        color: orange;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        left: 40px;
        font-weight: 500;
    }
    .mission-h3{
  
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          position: relative;
            font-size: 1.10rem; 
            top: 15px;
            left: 5px;

        }

        .mission-div-2-h1{

            color: orange;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            left: 50px;
            font-weight: 500;

        }

        .mission-h1-div-5{

            color: orange;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            left: 65px;
            font-weight: 500;

        }


        .mission-h3-div-2{

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          position: relative;
            font-size: 0.90rem; 
            top: 15px;
            left: 5px;
 
        }

</style>

<body>

<!-- Import Header -->

<?php include("one-header.php");
include("Flash.php"); ?>

<div class="container my-5">
        <div class="row">
            <div class="col-4">
                <h3><strong>  Missions accomplished </strong></h3>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mission-cont-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Activities</li>
                        <li class="breadcrumb-item active" aria-current="page">  Missions accomplished</li>
                    </ol>
                </nav>
            </div>    
        </div>
        <hr>
        <p>
            <span class="mission-p"> <strong> Department of Space (DOS)</strong> </span>is Government of India department mandated 
            with the execution of Indian Space Programme. The Department of Space has evolved the following programmes with the 
            objective of promoting & developing application of space science and space technology:
        </p>
        <ul class="mx-4 my-4">
            <li>Launch Vehicle programme having indigenous capability for launching satellites.</li>
            <li>INSAT Programme for telecommunications, broadcasting, meteorology, development of education etc.</li>
            <li>Remote Sensing Programme for application of satellite imagery for various developmental purposes.</li>
            <li>Research and Development in Space Sciences and Technology for serving the end of applying them for national development.</li>
        </ul>
        <p class="text-primary mission-p-light">
            <b>
            Department of space, through its agency INAC, accomplishes space missions to fulfil its vision, mission and objectives. Here are the missions, in numbers. 
            </b>
        </p>
        <br><br>
           <!-- First Thred -->

        <div class="mission-box-flate">
            <div class="mission-box mx-3">
                <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/1.jpg" class="mission-bg1">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-h1">124</h1>
                        <h3 class="mission-h3 text-dark"> Spacecraft Missions* </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-danger mx-3">see All updates</button>
                    </div>
                </div>
            </div>

            <div class="mission-box mx-3 my-5">
            <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/mission-img-1.jpg" class="mission-bg2">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-div-2-h1">17</h1>
                        <h3 class="mission-h3-div-2 text-dark"> Satellites realised by <br>private players or <br>students </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-success mx-3">see All updates</button>
                    </div>
                </div>
            </div>
            <div class="mission-box mx-3 mission-box-bottom">
            <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/mission-img-2.jpg" class="mission-bg3">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-h1">432</h1>
                        <h3 class="mission-h3 text-dark"> Foreign satellites launched by INAC </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-primary mx-3">see All updates</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Secound Thred -->

        <div class="mission-box-flate">
            <div class="mission-box mx-3">
            <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/mission-img-3.jpg" class="mission-bg4">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-div-2-h1">96</h1>
                        <h3 class="mission-h3 text-dark"> Launch Missions* </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-danger mx-3">see All updates</button>
                    </div>
                </div>
            </div>
            <div class="mission-box mx-3 my-5">
            <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/mission-img-4.jpg" class="mission-bg5">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-h1-div-5">6</h1>
                        <h3 class="mission-h3 text-dark"> Re-entry Missions & POEMS </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-success mx-3">see All updates</button>
                    </div>
                </div>
            </div>
            <div class="mission-box mx-3 mission-box-bottom">
            <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/mission-img-5.jpg" class="mission-bg6">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-h1-div-5">1</h1>
                        <h3 class="mission-h3 text-dark"> Launch missions facilitated by INAC </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-primary mx-3">see All updates</button>
                    </div>
                </div>
            </div>
        </div>

           <!-- Third Thred -->
        <div class="mission-box-flate">
            <div class="mission-box mx-3">
            <div class="row">
                    <div class="col-6">
                        <img src="/INAC/images/mission-img-6.jpg" class="mission-bg7 ">
                    </div>
                    <div class="col-6">
                        <div class="mission-text"></div>
                        <h1 class="mission-h1-div-5">1</h1>
                        <h3 class="mission-h3 text-dark"> Gaganyaan </h3>
                        <hr class="my-4" width="90%">
                        <button type="submit" class="btn btn-danger mx-3">see All updates</button>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php 
    include("one-footer.php");
?>
</body>

</html>