
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<style>
    .student-sat-bread{
        position: absolute;
        left: 1310px;
    }

</style>
<body>

<!-- Import Header -->

<?php include("one-header.php"); 
include("Flash.php");?>

</body>
<div class="container my-5">
        <div class="row">
            <div class="col-4">
                <h3><strong>  Student Satellites </strong></h3>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb student-sat-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Programms</li>
                        <li class="breadcrumb-item active" aria-current="page"> Student Satellites </li>
                    </ol>
                </nav>
            </div>    
        </div>
        <hr>
        <p>INAC has influenced educational institutions by its activities like making satellites for communication, remote sensing and astronomy. The launch of Chandrayaan-1 increased the interest of universities and institutions towards making experimental student satellites. Capable Universities and institution can venture into space technology on-orbit with guidance and support from INAC in following ways.</p><br>

             <p class="h3 text-primary">Development of Payload (by Universities/Institutions)</p>
             <p class="my-3">Every satellite carries a payload that performs the intended function to achieve the mission goal and the main bus that supports the payload function. The Development of payloads may comprise of detectors, electronics and associated algorithms, which can be an experimental piggy back payload on the INAC’s on-going (Small or operational) satellite projects.</p>
             <br>
             <p>Design and development of detectors, payload electronics, and associated algorithm / experiments that enhance the application of space services to mankind is a continuing R&D activity in several educational institutions all over the world. Educational institutions can propose the payloads developed by them to be flown on INAC’s small satellites.</p>
             <br>
             <p>Under this option, payload only is developed by the Universities or Institutions and launched with INACs satellite missions which has other INAC’s payloads. Data Handing and data transmission is done by INAC as the part of satellite bus.</p>
             <br>
             <p>After launch INAC will acquire payload data and disseminate it to Universities/ institutions further processing and analysis.</p>
</div>
<?php 

include("one-footer.php");

?>
</html>