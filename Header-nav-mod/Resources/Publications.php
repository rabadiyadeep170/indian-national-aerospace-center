
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .pub-bread{
        position: absolute;
        left: 1360px;
    }   
    
    .pub-img1{
        height: 400px;
    }
    .pub-img{
        height: 50px;
    }
    .pub-sub-img1{
        height: 90%;
    }
    .pub-sub-img2{
        height: 40%;
    }

    .pub-sub-img3{
        height: 80%;
    }
    .pub-sub-img3{
        height: 74%;
    }

    .pub-sub-img4{
        height: 70%;
    }
    .pub-sub-img4{
        height: 74%;
    }

</style>
<body>

<!-- Import Header -->

<?php include("one-header.php"); 
include("Flash.php");?>



<div class="container my-5">
        <div class="row">
            <div class="col-4">
                <h3><strong>  Publications </strong></h3>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pub-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Resources</li>
                        <li class="breadcrumb-item active" aria-current="page"> Publications </li>
                    </ol>
                </nav>
            </div>    
        </div>
        <hr>

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="pub-img1">
                        <img src="/INAC/images/pub1.webp" class="pub-sub-img1">
                      
                    </div>
                </div>
                <div class="col-3">
                    <div class="pub-img1">
                        <img src="/INAC/images/pub1.webp" class="pub-sub-img1">
                    </div>
                </div>
                <div class="col-3">
                    <div class="pub-img3"></div>
                        <img src="/INAC/images/pub2.webp" class="pub-sub-img3">
                </div>
                <div class="col-3">
                    <div class="pub-img4"></div>
                        <img src="/INAC/images/pub3.webp" class="pub-sub-img4">
                </div>
               

            </div>
        </div>
        <!-- Part 2 -->

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="pub-img1">
                        <img src="/INAC/images/pub4.webp" class="pub-sub-img1">
                    </div>
                </div>
                <div class="col-3">
                    <div class="pub-img1">
                        <img src="/INAC/images/pub5.webp" class="pub-sub-img1">
                    </div>
                </div>
                <div class="col-3">
                    <div class="pub-img3"></div>
                        <img src="/INAC/images/pub6.webp" class="pub-sub-img3">
                </div>
                <div class="col-3">
                    <div class="pub-img4"></div>
                        <img src="/INAC/images/pub7.webp" class="pub-sub-img4">
                </div>
               

            </div>
        </div>
</div>

   
</body>
<?php 
    include("one-footer.php");
?>

</html>