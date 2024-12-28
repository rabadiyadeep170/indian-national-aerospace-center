
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .db-emergency-bread{
        position: absolute;
        left: 1180px;
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
                <h5><strong>  Database for Emergency Management</strong></h5>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb db-emergency-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Resources</li>
                        <li class="breadcrumb-item active" aria-current="page"> Database for Emergency Management </li>
                    </ol>
                </nav>
            </div>    
        </div>
        <hr>
        <p>National Database for Emergency Management (NDEM) is a national repository of multi-scale geospatial database coupled with decision support system tools. It is a unique and homogenous database served for entire country with essential database elements for addressing emergency/disaster management in the country. NRSC/ISRO established a state-of-art facility with structured framework with multi-institutional participation to assist the disaster managers of all States/UTs for preparedness, hazard/risk zonation, damage assessment, and emergency response under the behest of Ministry of Home Affairs (MHA), Government of India. NDEM services have been operationalised since 2013 providing timely information along with disaster specific products for effective decision making.</p>
        <br>
        <p>NDEM essentially serves as national repository of GIS based data for entire country coupled with set of Decision Support System tools to assist the disaster managers in decision making during emergency situations.</p>
</div>
<?php 

include("one-footer.php");

?>
</html>