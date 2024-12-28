
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
        left: 1390px;
    }

    .sat-p{
        font-size: 1.25rem;
        line-height: 1.80rem;
    }
    
    .Satellite-f-div{
        position: relative;
        left: 25px;
    }
    

</style>
<body>

<!-- Import Header -->

<?php include("one-header.php");
include("Flash.php"); ?>

<div class="container my-5">
        <div class="row">
            <div class="col-4">
                <h3><strong> Satellites </strong></h3>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mission-cont-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Activities</li>
                        <li class="breadcrumb-item active" aria-current="page"> Satellites </li>
                    </ol>
                </nav>
            </div>    
        </div>
        <hr>
        <p class="sat-p">In order to fulfil vision and service goals, the Department of space has been developing
             mainly the satellites for communication, earth observation, scientific, navigation and meteorological purposes.</p>


        <div class="row my-5 Satellite-f-div">
            <div class="col-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="/INAC/images/communication-sat1.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-primary text-center">Communication Satellites</h4>
                        <p class="card-text my-4">Supports telecommunication, television broadcasting, satellite news gathering, societal applications, weather forecasting, disaster warning and Search and Rescue operation services.</p>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="/INAC/images/observation-sat2.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="text-primary text-center">Earth Observation Satellites</h4>
                        <p class="card-text my-4">The largest civilian remote sensing satellite constellation in the world - thematic series of satellites supporting multitude of applications in the areas of land and water resources.</p>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="/INAC/images/Scientific-sat3.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="text-primary text-center">Scientific Spacecraft</h4>
                        <p class="card-text my-4">Spacecraft for research in areas like astronomy, astrophysics, Balloons, sounding rockets , planetary and earth sciences, atmospheric sciences and theoretical physics.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- part 2 -->

        <div class="row">
            <div class="col-3">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/INAC/images/navigation-sat4.jpg" alt="Card image cap" style="height: 210px !important;"> 
                    <div class="card-body">
                    <h4 class="text-primary text-center">Navigation Satellites</h4>
                        <p class="card-text my-4">Satellites for navigation services to meet the emerging demands of the Civil Aviation requirements and to meet the user requirements of the positioning, navigation and timing based on the independent satellite navigation system</p>
                    </div>
                </div>
            </div>


            <div class="col-3">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/INAC/images/sat5.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="text-primary text-center">Experimental Satellites</h4>
                        <p class="card-text my-4">A host of small satellites mainly for the experimental purposes. These experiments include Remote Sensing, Atmospheric Studies, Payload Development, Orbit Controls, recovery technology etc.</p>
                        <br>
                    </div>
                </div>
            </div>


            <div class="col-3">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/INAC/images/sat6.webp" alt="Card image cap">
    
                    <div class="card-body">
                    <h4 class="text-primary text-center">Small Satellites</h4>
                        <p class="card-text my-4">Sub 500 kg class satellites - a platform for stand-alone payloads for earth imaging and science missions within a quick turn around time.</p>
                        <br><br>    
                    </div>
                </div>
            </div>


            <div class="col-3">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/INAC/images/sat7.webp" alt="Card image cap" style="height: 210px !important;">
                    <div class="card-body">
                    <h4 class="text-primary text-center">Student Satellites</h4>
                        <p class="card-text my-4">INAC's Student Satellite programme is envisaged to encourage various Universities and Institutions for the development of Nano/Pico Satellites.</p>
                        <br><br>
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