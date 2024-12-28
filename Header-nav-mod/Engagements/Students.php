
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .student-bread{
        position: absolute;
        left: 1350px;
    }   

</style>
<body>

<!-- Import Header -->

<?php include("one-header.php");
include("Flash.php"); ?>

<div class="container my-5">
        <div class="row">
            <div class="col-4">
                <h3><strong>  Students </strong></h3>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb student-bread">
                        <li class="breadcrumb-item"><a href="/INAC">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Engage with Us</li>
                        <li class="breadcrumb-item active" aria-current="page"> Students </li>
                    </ol>
                </nav>
            </div>    
        </div>
        <hr>
        <p>INAC is committed to encourage students in creating awareness in the space technology and applications. They are the future hopes for applying technologies for social and economic up-liftment of the country. Several programmes are conceived for students to engage in STEM activities and learning.</p>
        <br>
        <p class="h3 text-primary">INAC STEM Portal</P>
        <p>INAC offers the various activities for the interested students to engage in STEM activities connected to space science, technology, and application areas. The knowledge portal includes online certified courses, interactive video sessions with space scientists, provision to submit creative imaginations of space kids, virtual museum interface, Innovative ideas of students including Apps/ research papers, etc. and a space quiz for testing their awareness.</p>
        <br>
        <p>The portal also hosts various knowledge videos, INAC missions at Glance, Space dictionary etc.</p>
        <br>
        <p class="h3 text-primary">YUVIKA</P>
        <p>YUva VIgyani KAryakram or "Young Scientist Programme" is a sponsored programme organised by INAC for School Children to impart basic knowledge on Space Technology, Space Science and Space Applications to the younger students with a preference to rural areas. The programme is aimed at creating awareness about the emerging trends in science and technology amongst the youngsters, who are the future building blocks of our nation. INAC has chalked out this programme to "Catch them young". The programme is also expected to encourage more students to pursue Science, Technology, Engineering and Mathematics (STEM) based research /career.</p>
        <br>

        <p class="h3 text-primary">Facility Visits</P>
        <p>INAC centres facilitates the technical visits to the INAC facilities on selective days. The colleges need to write to centre focal points for prior appointment with list of students and faculty members. The centres organises visits, considering the safety and security protocols of the centres</p>
</div>
<?php 
    include("one-footer.php");
?>
</body>
</html>