<?php
include("connect.php");
//$dry_cleaning = '';
//$laundary = '';
//$shoes_cleaning = '';
//$home_cleaning = '';
//$ironing = '';
//$luggage = '';
//$sofa = '';
//$carpet = '';
if (isset($_POST["btn"])) {
        // echo "<pre>";
        // print_r($_POST);
        // die();
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $dry_cleaning = $_POST["dry_cleaning"];
    $laundary = $_POST["laundary"];
    $shoes_cleaning = $_POST["shoes_cleaning"];
    $home_cleaning = $_POST["home_cleaning"];
    $ironing = $_POST["ironing"];
    $luggage = $_POST["luggage"];
    $carpet = $_POST["carpet"];
    $sofa = $_POST["sofa"];



    $sql = "INSERT INTO `laundary` ( `name`, `phone`, `city`, `pincode`, `dry_cleaning`, `laundary`, `shoes_cleaning`, `home_cleaning`, `iron_cleaning`, `luggage`, `carpet`, `sofa`) 
            VALUES ( '$name', '$phone', '$city', '$pincode`', '$dry_cleaning', '$laundary', '$shoes_cleaning','$home_cleaning', '$ironing', '$luggage', '$carpet', '$sofa');";
    if (mysqli_query($conn, $sql)) {
       // $msg = "inserted sucessully";
        // email

       // $to = "santoshkumarbca@gmail.com"; // Recipient's email address
        //$subject = "Subject of the Email";
        //$message = "This is the body of the email.";

       // $headers = "From: shresaonline@gmail.com"; // Sender's email address

        // Send the email
        //$mailSent = mail($to, $subject, $message, $headers);

       // if ($mailSent) {
          // echo "Email sent successfully.";
     //  } else {
          // echo "Email delivery failed.";
      // }
       header("location:http://Washing Mania.com/new/laundary/oder.html");
    }
}
?>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
rel="stylesheet"
/>
<link rel="stylesheet" type="text/css" href="style.css" />
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
<!-- MDB -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link href="css/mdb.min.css" rel="stylesheet" />
<script type="text/javascript" src="js/mdb.min.js"></script>
<link href="plugins/css/multi-carousel.min.css" rel="stylesheet" />
<script type="text/javascript" src="plugins/js/multi-carousel.min.js"></script>
<link type="stylesheet" src="style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script type="text/javascript" src="animation.js"></script>
<script>
  const element = document.getElementById("animationDemo");
const animate = new mdb.Animate(element, {
  animation: "tada",
  animationStart: "onLoad",
  animationDelay: "0",
  animationDuration: "500",
  animationReverse: "false",
  animationRepeat: "false",
  animationInterval: "0",
});</script>
<script>
  $(document).ready(function(){
      $("#myModal").modal('show');
  });
</script>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<body style="" class="b" style="background-color:#1D1F2B;">










  
  <!-- Modal Washing Mania -->
<div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
      <div class="modal-content w-75">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Schedule Pickup</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form action="" method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row g-3 mb-3">
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example1" class="form-control" name="name" />
                          <label class="form-label text-white" for="form10Example1">Name</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example2" class="form-control" name="phone" />
                          <label class="form-label text-white" for="form10Example2">Phone</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example2" class="form-control" name="city" />
                          <label class="form-label text-white" for="form10Example2">City</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example3" class="form-control" name="pincode" />
                          <label class="form-label text-white" for="form10Example3">Pincode</label>
                      </div>
                  </div>
              </div>
              <!-- Submit button -->
              <div class="row">
                  <div class="col-sm-8">

                      <!-----service-->
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dry_cleaning" />
                          <label class="form-check-label" for="inlineCheckbox1">Dry Cleaning</label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="laundary" />
                          <label class="form-check-label" for="inlineCheckbox2">Laundry </label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="shoes_cleaning" />
                          <label class="form-check-label" for="inlineCheckbox3">Shoes Cleaning</label>
                      </div>


                      <!-----service-->
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="home_cleaning" />
                          <label class="form-check-label" for="inlineCheckbox1">Home Cleaning</label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ironing" />
                          <label class="form-check-label" for="inlineCheckbox2">Ironing </label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="luggage" />
                          <label class="form-check-label" for="inlineCheckbox3">Luggage Lundry</label>
                      </div>
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="carpet" />
                          <label class="form-check-label" for="inlineCheckbox2">Carpet Cleaning </label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sofa" />
                          <label class="form-check-label" for="inlineCheckbox3">Sofa Cleaning</label>
                      </div>

                  </div>
                  <div class="col-sm-4 pt-5">
                      <button type="submit" class="btn btn-white bg-white  btn-block mb-4" style="color:#1D1F2B; font-weight: bolder;" name="btn">Place order</button>
                  </div>

              </div>

          </form>
          </div>
      </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal bulk orde -->
<div class="modal fade" id="bulkorder" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
      <div class="modal-content w-75">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Schedule Pickup For Bulk  </h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form action="" method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row g-3 mb-3">
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example1" class="form-control" name="name" />
                          <label class="form-label text-white" for="form10Example1">Name</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example2" class="form-control" name="phone" />
                          <label class="form-label text-white" for="form10Example2">Phone</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example2" class="form-control" name="city" />
                          <label class="form-label text-white" for="form10Example2">City</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-outline">
                          <input required type="text" id="form10Example3" class="form-control" name="pincode" />
                          <label class="form-label text-white" for="form10Example3">Pincode</label>
                      </div>
                  </div>
              </div>
              <!-- Submit button -->
              <div class="row">
                  <div class="col-sm-8">

                      <!-----service-->
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dry_cleaning" />
                          <label class="form-check-label" for="inlineCheckbox1">Dry Cleaning</label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="laundary" />
                          <label class="form-check-label" for="inlineCheckbox2">Laundry </label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="shoes_cleaning" />
                          <label class="form-check-label" for="inlineCheckbox3">Shoes Cleaning</label>
                      </div>


                      <!-----service-->
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="home_cleaning" />
                          <label class="form-check-label" for="inlineCheckbox1">Home Cleaning</label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ironing" />
                          <label class="form-check-label" for="inlineCheckbox2">Ironing </label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="luggage" />
                          <label class="form-check-label" for="inlineCheckbox3">Luggage Lundry</label>
                      </div>
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="carpet" />
                          <label class="form-check-label" for="inlineCheckbox2">Carpet Cleaning </label>
                      </div>

                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sofa" />
                          <label class="form-check-label" for="inlineCheckbox3">Sofa Cleaning</label>
                      </div>
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sofa" />
                          <label class="form-check-label" for="inlineCheckbox3">Sofa Cleaning</label>
                      </div>
                      <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sofa" />
                          <label class="form-check-label" for="inlineCheckbox3">Curtain Cleaning</label>
                      </div>

                  </div>
                  <div class="col-sm-4 pt-5">
                      <button type="submit" class="btn btn-white bg-white  btn-block mb-4" style="color:#1D1F2B; font-weight: bolder;" name="btn">Place order</button>
                  </div>

              </div>

          </form>
          </div>
      </div>
  </div>
</div>
<!-- Modal -->










<nav class="navbar navbar- bg-li " style="background-color:#1D1F2B;" >
  <div class="container-fluid">
    
     <!-- Navbar brand -->
   <a class="navbar-brand me-2" href="#">
    <img
   
      src="img/logo.png"
      height="130"
      alt="MDB Logo"
      loading="lazy"
      style="margin-top:px; margin-left: -1.5rem; "
    />
  </a>
  
  
  <ul class="navbar-nav mr-auto ">
    <li class="nav-item active ">
        
    </li>
    <li class="nav-item">
       
    </li>
    <li class="nav-item">
       
    </li>
     
   <!----<li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">More</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Franchise</a>
            <a class="dropdown-item" href="#">Track Order</a>
            <a class="dropdown-item" href="#">Bulk Order</a>
            <a class="dropdown-item" href="#">About</a>
        </div>
    </li>--->
</ul>
    <button class="navbar-toggler btn-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" style="background-color: #ffff; color:#1D1F2B;">
      <i class="fas fa-align-justify"></i>
    </button>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background-color:#1D1F2B ;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="background-color:#1D1F2B;">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link text-white" href="franchise.html" tabindex="-1" style="; font-size: 1.5rem;"> <i class="fas fa-handshake"></i> Franchise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tracker.php" tabindex="-1" style="color:black; font-size: 1.5rem;"> <i class="fab fa-searchengin"></i> Track Order</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="bulkorder.php"  style="color:black; font-size: 1.5rem;"> <i class="fas fa-align-center"></i> Bulk Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="About.html" tabindex="-1" style="color:black; font-size: 1.5rem;"> <i class="fas fa-circle-info"></i> About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="Contact.html" tabindex="-1" style="color:black; font-size: 1.5rem;"> <i class="fas fa-circle-info"></i> Contact Us</a>
</li>
        </ul>
       
      </div>
    </div>
  </div>
</nav>











<!-----
  <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-mdb-interval="10000">
        <img src="img/About-us-page-baner-1.png" class="d-block w-100" alt="Wild Landscape"/>
        <div class="carousel-caption d-none d-md-block">
          <div class="p-5 slot-end" style="background-color: transparent;">
            <h1 class="mb-3">Heading</h1>
            <h4 class="mb-3">Subheading</h4>
            <a class="btn btn-primary" href="" role="button">Call to action</a>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-mdb-interval="2000">
        <img src="img/About-us-page-baner-1.png" class="d-block w-100" alt="Camera"/>
        <div class="carousel-caption d-none d-md-block">
          <div class="p-5 text-center" style="background-color: transparent;">
            <h1 class="mb-3">Heading</h1>
            <h4 class="mb-3">Subheading</h4>
            <a class="btn btn-primary" href="" role="button">Call to action</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/About-us-page-baner-1.png" class="d-block w-100" alt="Exotic Fruits"/>
        <div class="carousel-caption d-none d-md-block">
          <div class="p-5 text-center" style="background-color: transparent;">
            <h1 class="mb-3">Heading</h1>
            <h4 class="mb-3">Subheading</h4>
            <a class="btn btn-primary" href="" role="button">Call to action</a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>---->
<div class="container-flude bg-home-banner" style="
  background: url(img/banner-1.png);
    background-repeat: no-repeat;
    background-size: 100% 350px;
 
 ">
  <div class="row" style="background-color:#1D1F2B; opacity:0.5; height: 300px " >
    <div class="text-center " style=" color:#ffff;">
      <h1 class=" fs-1  mt-5 " style="; ">
       Elevate Your Style <br>   
      </h1>
      <h2 class=""style="" >
       With Premium Lundry Care
      </h2>
      <p></p>
    </div>
  
  </div>
</div>


  <section class="section-services" style="background-color:#1D1F2B; ">
<div class="container-flude mb- ">
  <div class="container">
    <div class="row">
      <div class="card shadow-5 p" style="border-radius: 15px; border: 2px solid whitesmoke; box-shadow: 2px; background-color: transparent; ">
       <div class="row">
         <div class="col-sm-12 col-lg-12 p-3">
           <h2 class="mt-3 text-white">Schedule  Pickup</h2>
           <form action="" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row g-3 mb-3">
                <div class="col-sm-3">
                    <div class="form-outline">
                        <input required type="text" id="form10Example1" class="form-control" name="name" />
                        <label class="form-label text-white" for="form10Example1">Name</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-outline">
                        <input required type="text" id="form10Example2" class="form-control" name="phone" />
                        <label class="form-label text-white" for="form10Example2">Phone</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-outline">
                        <input required type="text" id="form10Example2" class="form-control" name="city" />
                        <label class="form-label text-white" for="form10Example2">City</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-outline">
                        <input required type="text" id="form10Example3" class="form-control" name="pincode" />
                        <label class="form-label text-white" for="form10Example3">Pincode</label>
                    </div>
                </div>
            </div>
            <!-- Submit button -->
            <div class="row">
                <div class="col-sm-8">

                    <!-----service-->
                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dry_cleaning" />
                        <label class="form-check-label" for="inlineCheckbox1">Dry Cleaning</label>
                    </div>

                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="laundary" />
                        <label class="form-check-label" for="inlineCheckbox2">Laundry </label>
                    </div>

                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="shoes_cleaning" />
                        <label class="form-check-label" for="inlineCheckbox3">Shoes Cleaning</label>
                    </div>


                    <!-----service-->
                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="home_cleaning" />
                        <label class="form-check-label" for="inlineCheckbox1">Home Cleaning</label>
                    </div>

                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ironing" />
                        <label class="form-check-label" for="inlineCheckbox2">Ironing </label>
                    </div>

                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="luggage" />
                        <label class="form-check-label" for="inlineCheckbox3">Luggage Lundry</label>
                    </div>
                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="carpet" />
                        <label class="form-check-label" for="inlineCheckbox2">Carpet Cleaning </label>
                    </div>

                    <div class="form-check form-check-inline text-white">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sofa" />
                        <label class="form-check-label" for="inlineCheckbox3">Sofa Cleaning</label>
                    </div>
                    <div class="form-check form-check-inline text-white">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sofa" />
                          <label class="form-check-label" for="inlineCheckbox3">Curtain Cleaning</label>
                      </div>

                </div>
                <div class="col-sm-4 pt-5">
                    <button type="submit" class="btn btn-white   btn-block mb-4" style="color:#ffff; font-weight: bolder; background-color:#FE8400;" name="btn">Place order</button>
                </div>

            </div>

        </form>
         </div>
       <!----- <div class="col-sm-12 col-lg-4" style="background-color: #63C5DA;">
           <div class="row">
               <div class="col-4">
                 <div class="mt-5 pt-3">
                   <h1><i class="fas fa-bullhorn text-white"  id="animationDemo"></i></h1> 
                  </div>
               </div>
     
               <div class="col-8">
                 <div class="mt-5">
                   <h2 class="text-white">Special Offer</h2>
                 </div>
                 <div>
                   <p class="text-white">Download our App and Get up to 20% Off on your first Order.</p>
                 </div>
               </div>
           </div>
           
           
         </div>---->
       </div>
      </div>
      
     </div>
  </div>

</div>


 <!--- Servicess section started -->

  <div class="container-fluid mt-4 p- services-cont" >
    
<hr  style="height: 6px; font-size: 4rem; width:100%; background-color: white; margin-top: 3rem;" class="mt-3" />
    <h1 class="services-h p- text-white text-center text-decoration-underline">Our Services</h1>
  <!----dmo section start card -->
<section class="card-prod" style="background-color:#1D1F2B">
  <div class="pro-container ">
        
      <div class="card-pro ">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/drycleaning.jpg">
                  <h3>Dry Cleaning</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>Dry cleaning employs chemical solvents for cleaning, ideal for garments and fabrics unsuitable for water wash,
                     effectively eliminating stains and odors.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/washandiron.webp">
                  <h3>Wash and Iron</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>For the time-strapped, wash and iron services provide a convenience blend, granting clean, fresh,
                     and wrinkle-free garments, liberating time.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
      
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/wash_fold.jpg">
                  <h3>Wash & Fold</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>"Fluff and fold" or drop-off laundry services, known as wash and fold, offer a hassle-free solution
                     for outsourcing laundry, saving time and effort.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
  </div>
</section>




<!-- Jumbotron -->
<div class="p-4 Services-midel" style="margin-top: -1rem; margin-bottom: -1rem; border: #ffff solid rem; background-image: url('img/ads/Ads.png');  background-repeat: no-repeat;
background-size: 100% 100%;">
 
  <div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-12 about-home-cont">
      <h2 class=" text-center home-about-ban-hed text-white" >OTHER CLEANING SOLUTIONS <!---- <span class="letter">A</span>
        <span class="letter">b</span>
        <span class="letter">o</span>
        <span class="letter">u</span>
        <span class="letter">t</span>
        <div></div>
        <span class="letter">L</span>
        <span class="letter">a</span>
  
        <span class="letter">u</span>
        <span class="letter">n</span>
        <span class="letter">d</span>
        <span class="letter">r</span>
        <span class="letter">y</span>---> </h2>
      <p class="fs-5 text-justify home-about-ban-p pt-5 text-white text-center ">
        LEATHER CLEANING  |  STAIN REMOVAL  |  COLLAR CUFF CLEANING
FABRIC SOFTNER  |  FABRIC PERFUME  |  HANGER DELIVERY  |  STARCHING
       </p>
         <div class="row pb-5">
          <div class="col-md-5 col-4"></div>
          <div class="col-md-7 col-8">
            <button type="button" class="btn btn-primary bg-white pl-3 ml-4 " style="float: center;color:#1D1F2B; font-weight: bolder;" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">
              Read More
            </button>
          </div>
         </div>
    </div>
    <div class="col-md-2 col-12">
     <!---- <img src="img/laundry-about.jpg"
        style="width: 100%; height: 100%; background-color: transparent;"
      >--->
    </div>
  </div>
</div>
<!-- Jumbotron -->
<hr  style="height: 6px; font-size: 4rem; width:100%; background-color: #FE8400;" />

<!---section 2 -->
<section class="card-prod" style="background-color:#1D1F2B">
  <div class="pro-container">
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/steam-irons.webp">
                  <h3>Steam Ironing</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>Modern steam ironing, a favored wrinkle-removing method, supersedes traditional dry 
                    ironing by blending steam and heat for improved efficiency.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/shoelondary.jpg">
                  <h3>Shoe Laundry</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>Shoes serve both function and style, necessitating meticulous cleaning for longevity,
                     aesthetic upkeep, and a memorable impression.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/sofacleaning.webp">
                  <h3>Sofa Cleaning</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>"The living room's focal point, the sofa, offers comfort and togetherness. 
                    To preserve a welcoming space, regular cleaning is vital.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
  </div>
</section>
<!----dmo section start card end -->
  </div>

  <hr  style="height: 6px; font-size: 4rem; width:100%; background-color: #ffff;" />

<!---section 3 -->
<section class="card-prod" style="background-color:#1D1F2B">
  <div class="pro-container">
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/carpetclining.avif">
                  <h3>Carpet Cleaning</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>Carpet's aesthetic and warmth enhance homes, yet it collects dust and allergens. 
                    Regular cleaning is vital for cleanliness, health, and comfort.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/luggagelaund.jpg">
                  <h3>Luggage Laundry</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>Luggage is a travel essential, enduring wear and tear. Adequate cleaning is imperative to preserve its 
                    condition, utility, and hygiene.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
      <div class="card-pro">
          <div class="face face1">
              <div class="content">
                  <img src="../wp-content/uploads/2023/08/services/curtain-laundry.jpg">
                  <h3>Curtain Cleaning</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>"The living room's focal point, the sofa, offers comfort and togetherness. 
                    To preserve a welcoming space, regular cleaning is vital.</p>
                      <a href="#">Read More</a>
              </div>
          </div>
      </div>
  </div>
</section>
<!----dmo section start card end -->
</div>


<!-- Jumbotron -->
<div class="p-4 mt-5 " style="margin-top: -1rem; margin-bottom: -1rem; border: #ffff solid rem; background-color:#FFEBD6;">
 
  <div class="row ">
    <div class="col-md-6" style="padding-left:-2rem">
      <img src="img/about-home-sec-1.png" alt="" >
    </div>
    <div class="col-md-6 col-12 about-home-cont">
      <h2 class=" text-center home-about-ban-hed text-black" >About Washing Mania <!---- <span class="letter">A</span>
        <span class="letter">b</span>
        <span class="letter">o</span>
        <span class="letter">u</span>
        <span class="letter">t</span>
        <div></div>
        <span class="letter">L</span>
        <span class="letter">a</span>
  
        <span class="letter">u</span>
        <span class="letter">n</span>
        <span class="letter">d</span>
        <span class="letter">r</span>
        <span class="letter">y</span>---> </h2>
      <p class="fs-5 text-justify home-about-ban-p pt-5 text-muted text-center ">
        Washing Mania, a renowned franchise chain, excels in high-quality laundry and dry cleaning. Our proficient team meticulously tends to your garments, ensuring they emerge clean, fresh, and impeccably pressed. We've made laundry and dry cleaning accessible to all, never compromising on quality while emphasizing swiftness and affordability.
       </p>
     
     
       <p class="fs-5 te text-justify home-about-ban-p text-muted text-center ">
        We value your time and prioritize your convenience, offering swift, dependable, and personalized services. Whether you require "wash and fold," "dry cleaning," or "specialty laundry" solutions, Washing Mania delivers skill and dependability. Experience the transformative power of exceptional care and service at our establishment.
       </p>
         <div class="row pb-5">
          <div class="col-md-5 col-4"></div>
          <div class="col-md-7 col-8">
            <a href="About.html">
            <button type="button" class="btn   pl-3 ml-4 " style="float: center;color:white; font-weight: bolder; background-color:#fe8400"  data-mdb-target="About.html">
              Read More
            </button></a>
          </div>
         </div>
    </div>
    <div class="col-md-2 col-12">
     <!---- <img src="img/laundry-about.jpg"
        style="width: 100%; height: 100%; background-color: transparent;"
      >--->
    </div>
  </div>
</div>
<!-- Jumbotron -->





</section>




<!--- servicess section End -->















<!-----
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Our Services</h3>
    </div>
    <div class="col-md-6"></div>
  </div>
  <div class="row">
     
  </div>
</div>------>



 <!-- Carousel wrapper -->
<!--- <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel"> -------->
  <!-- Controls -->
 <!----- <div class="d-flex justify-content-center mb-4"> ---->
 <!---- <button class="carousel-control-prev position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>---->
  <!--</div> --->
  <!-- Inner -->
  <!--<div class="carousel-inner py-4"> -->
    <!-- Single item -->
   <!----- <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Dry Cleaning</h5>
              <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Schedule Pickup</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Wash & Iron</h5>
              <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Schedule Pickup</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Wash & Fold</h5>
              <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Schedule Pickup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
  <!-----  <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Steam Ironing</h5>
              <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Schedule Pickup</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Shoe Laundry</h5>
              <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Schedule Pickup</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Sofa Cleaning</h5>
              <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Schedule Pickup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> ---->

    <!-- Single item end -->
    
  <!-- Inner -->
<!--</div> 
<!-- Carousel wrapper -->
<section class="section-workflow">


<!--- servicess section End -->
<hr  style="height: 6px; font-size: 4rem; width:100%; background-color: grey;" />
<!--- customer review -->
<div class=" shadow-4 rounded-3 mt-3 container" style="background-color: transparent;">
  <div class="row  " >
    <div class="col-md-6 "> 
      <h3 style="color: #237d90; text-justify: auto;" class="mt-5 pt-5">Top-notch Laundry and Dry Cleaning Services Available in India.</h3>
      <p style="text-justify: auto;">Washing Mania is your comprehensive answer for all your laundry requirements. Explore why we stand as India's premier laundry service provider and why customers place their trust in us for their laundry needs.</p>
      <p style="text-justify: auto;">Whether you're a student or a working professional leading a busy life away from home, our laundry services assure you more free time and the delivery of impeccably clean garments. Your laundry is handled with utmost care.</p>
      
    </div>
    <div class="col-md-6 mt-3 ">
     <div>  <i class="fas fa-arrow-down-short-wide fa-2x text-Success  " style="margin-left: rem; display: inline-block; float: left;" ></i>
       <h6 style="display: inline-block; float:left;"> 01. Sorting</h6> 
    </div><br>
    <div class="" style="margin-left: 3rem; display: inline-block; text-justify: auto;">
      <p > We categorize your laundry by its color and fabric type to ensure the best possible cleaning outcome.</p>
    </div>
      <div class="vr bg-Success" style="height: 50px; font-size: 2rem; width:3px; margin-top:-3rem; display: inline-block; float: left;">
      
      </div>

      <div>  <i class="fas fa-viruses fa-2x text-Success p-2" style="margin-top: rem;  display: inline-block; float: left;"></i> 
        <h6 style="display: inline-block; float:left;">02. Stain Treatment</h6></div>
      <div class="" style="margin-left: 3rem; display: inline-block; text-justify: auto;">
        <p >To enhance the likelihood of successfully removing tough stains, we apply pre-treatment measures.</p>
      </div>
      <div class="vr bg-Success" style="height: 50px; font-size: 2rem; width:3px; margin-top:-3rem; display: inline-block; float: left;">
      
      </div>

      <div>  <i class="fas fa-hot-tub-person fa-2x text-Success p-2" style="margin-left: rem; display: inline-block; float: left;" ></i>
         <h6 style="display: inline-block; float:left;">03. Washing</h6></div>
      <div class="" style="margin-left: 3rem; display: inline-block; text-justify: auto;">
        <p >We employ top-notch detergents and state-of-the-art machinery to ensure the effective cleaning of your laundry.</p>
      </div>
      <div class="vr bg-Success" style="height: 50px; font-size: 2rem; width:3px; margin-top:-3rem; display: inline-block; float: left;">
      
      </div>

      <div>  <i class="fas fa-person-booth fa-2x text-Success p-2" style="margin-left: rem; display: inline-block; float: left;" ></i> 
        <h6 style="display: inline-block; float:left;">04. Drying</h6></div>
      <div class="" style="margin-left: 3rem; display: inline-block; text-justify: auto;">
        <p >We employ gentle and efficient methods to carefully dry your laundry.</p>
      </div>
      <div class="vr bg-Success" style="height: 50px; font-size: 2rem; width:3px; margin-top:-3rem; display: inline-block; float: left;">
      
      </div>

      <div>  <i class="fas fa-box-open fa-2x text-Success p-2" style="margin-left: rem; display: inline-block; float: left;" ></i> 
        <h6 style="display: inline-block; float:left;">05. Folding & Packaging</h6></div>
      <div class="" style="margin-left: 3rem; display: inline-block; text-justify: auto;">
        <p >Your laundry is neatly folded and packaged with convenience in mind for effortless delivery.</p>
      </div>
      <div class="vr bg-Success" style="height: 50px; font-size: 2rem; width:3px; margin-top:-3rem; display: inline-block; float: left;">
      
      </div>

      <div>  <i class="fas fa-truck-fast fa-2x text-Success p-2" style="margin-left: rem; display: inline-block; float: left;" ></i>
         <h6 style="display: inline-block; float:left;"> 06. Ready For delivery</h6></div>
      <div class="" style="margin-left: 3rem; display: inline-block; text-justify: auto;">
        <p >Your laundered clothing, fresh and spotless, is prepared for prompt delivery.</p>
      </div>


    </div>
  </div>
</div>
<!---end customer review -->
<hr  style="height: 6px; font-size: 4rem; width:100%; background-color: blue;" />
</section>



<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-3 container-fluid" style="background-color:#1D1F2B;">
 
  <section class="text-center">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
        <i class="fas fa-person fa-3x text-white mb-4" ></i>
        <h5 class="text-white fw-bold mb-3">5000+</h5>
        <h6 class="fw-normal text-white">Happy Customer</h6>
        <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
        <i class="fas fa-map-location-dot fa-3x text-white mb-4"></i>
        <h5 class="text-white fw-bold mb-3 text-white">4+</h5>
        <h6 class="fw-normal text-white mb-0 text-white">Cites</h6>
        <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative">
        <i class="fas fa-shop fa-3x text-white mb-4"></i>
        <h5 class="text-white fw-bold mb-3">10+</h5>
        <h6 class="fw-normal text-white mb-0 text-center">Stores</h6>
        <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative">
        <i class="fas fa-shirt fa-3x text-white mb-4"></i>
        <h5 class="text-white fw-bold mb-3">2800</h5>
        <h6 class="fw-normal text-white mb-0">GARMENTS WASHED</h6>
      </div>
    </div>
  </section>
</div>
<!-- Jumbotron -->

<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-3 container-fluid" style="background-color: white;">
  <h3 class="text-center">Why choose Us</h3>
  <p class="text-center">Discover why investing in a laundry franchise is a lucrative and sustainable business decision.</p>
 <div class="row">
  <div class="col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="img/Affordable Pricing.jpg"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start"
            style="height: 100%; width: 100%;"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Affordable Pricing</h5>
            <p class="card-text">
              Our competitive pricing is a key feature, designed to cater to your budget. 
             
            </p>
          
          </div>
        </div>
      </div>
    </div>
    <!---card end-->
  </div> <!--- div end-->
  <div class="col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="img/High Quality.jpg"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start"
            style="height: 100%; width: 100%;"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">High Quality</h5>
            <p class="card-text --text-align">
              Optimal products ensure your cherished clothes are consistently ready for wear.
            </p>
    
          </div>
        </div>
      </div>
    </div>
     <!---card end-->
  </div> <!--- div end-->
  <div class="col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="img/Personalized Experience.jpg"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start"
            style="height: 100%; width: 100%;"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Personalized Experience</h5>
            <p class="card-text">
               We meticulously sort it by fabric type and provide you with instantly stylish attire to make a statement.
            </p>
            
          </div>
        </div>
      </div> <!---card end-->
    </div> <!---div end-->
  </div>
 </div> <!----row 1 end-->
  
 <div class="row">
  <div class="col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="img/Instant Order Update.jpg"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start"
            style="height: 100%; width: 100%;"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Instant Order Update</h5>
            <p class="card-text">
              Frequent order updates aid laundry tracking and better planning for you. 
             
            </p>
          
          </div>
        </div>
      </div>
    </div>
    <!---card end-->
  </div> <!--- div end-->
  <div class="col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="img/Convenience.jpg"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start"
            style="height: 100%; width: 100%;"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Convenience</h5>
            <p class="card-text --text-align">
              Conveniently save time and effort by booking online or at our nearby store.
            </p>
    
          </div>
        </div>
      </div>
    </div>
     <!---card end-->
  </div> <!--- div end-->
  <div class="col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="img/Express Delivery.jpg"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start"
            style="height: 100%; width: 100%;"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Express Delivery</h5>
            <p class="card-text">
              No worries about last-minute laundry for interviews or meetings. Super-quick delivery in under 8 hours.
            </p>
            
          </div>
        </div>
      </div> <!---card end-->
    </div> <!---div end-->
  </div>
 </div> <!--row two end-->

</div>
<!-- Jumbotron -->




<!----footer started-->


<!-- Footer -->
<footer class=" text-white" style="background-color:#1D1F2B">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Social media -->
  
    <!-- Section: Social media -->


    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
            
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
          

          <!--Grid column-->
          <div class="col-auto">

           
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->


    <!-- Section: Text -->
    <!--<section class="mb-4">
      <p>
        At Washing Mania, we're not just in the business of cleaning clothes; we're in the business of making your life easier.
         We understand that in today's fast-paced world, laundry can often become a burden.
         That's where we step in with our passion for clean and our commitment to convenience.
      </p>
    </section>-->
    <!-- Section: Text -->


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Usefull Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-white">Home</a>
            </li>
            <li>
              <a href="About.html" class="text-white">About Us</a>
            </li>
            <li>
              <a href="Contact.html" class="text-white">Contact Us</a>
            </li>
            <li>
              <a href="#!" class="text-white">Career</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Quick Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="franchise.html" class="text-white">Franchise</a>
            </li>
            <li>
              <a href="#!" class="text-white">Store Locator</a>
            </li>
            <li>
              <a href="privacy-policy.html" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms & Conditions</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Services</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Laundry Service</a>
            </li>
            <li>
              <a href="#!" class="text-white">Dry Cleaning</a>
            </li>
            <li>
              <a href="#!" class="text-white">Shoe Cleaning</a>
            </li>
            <li>
              <a href="#!" class="text-white">Home Cleaning</a>
            </li>
            <li>
              <a href="#!" class="text-white">Ironing</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0" >
          <section class="mb-4">
            <!-- Facebook -->
             <!-- Facebook -->
             <a
             class="btn text-white  "
             style="background-color: transparent;"
             href="https://www.facebook.com/profile.php?id=61552302774175"
             role="button"
             ><i class="fab fa-facebook-f" style="background-color: transparent;"></i
           ></a>
      
           <!-- Twitter -->
           <a
             class="btn text-white  m-1"
             style="background-color: #55acee;"
             href="https://www.x.com/Washing Mania"
             role="button"
             ><i class="fab fa-twitter"></i
           ></a>
      
           <!-- Google -->
          
      
           <!-- Instagram -->
           <a
             class="btn text-white  m-1"
             style="background-color: #ac2bac;"
             href="https://www.instagram.com/Washing Mania"
             role="button"
             ><i class="fab fa-instagram"></i
           ></a>
      
           <!-- Linkedin -->
           <a
             class="btn text-white  m-1"
             style="background-color: #0082ca;"
             href="#!"
             role="button"
             ><i class="fab fa-linkedin-in"></i
           ></a>
          </section>
          <h5 class="text-uppercase">Contact us</h5>
       
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white"><span class="elementor-icon-list-icon">
                <i aria-hidden="true" class="far fa-envelope"></i>						</span>
                <span class="elementor-icon-list-text">info@washingmania.com</span></a>
            </li>
            <li>
              <a href="#!" class="text-white"><span class="elementor-icon-list-icon">
                <i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
                <span class="elementor-icon-list-text">8877989800</span></a>
            </li>
            <li>
              <a href="#!" class="text-white"> <span class="elementor-icon-list-icon">
                <i aria-hidden="true" class="far fa-building"></i>						</span>
                 <span class="elementor-icon-list-text"> Registered Office: New Jaganpura, Near Tridev Mandir, Patna-27</span> </a>
            </li>
            <li>
              <a href="#!" class="text-white"> <span class="elementor-icon-list-icon">
                <i aria-hidden="true" class="far fa-building"></i>						</span>
                   <span class="elementor-icon-list-text">Corporate Office: New Jaganpura, Near Tridev Mandir, Patna-27</span></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2023 Copyright:
    <a class="text-white" href="http://cybuss.com/">Designed By : CYBUSS </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<!----footer end -->
</body>

<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
<script>

<script>
  initCarousel: function(dotnetHelper) {
    let instance = new MultiCarousel(document.getElementById('my-carousel'));
    instance.init();
}
</script>
<script>
  const element = document.getElementById("animationDemo");
const animate = new mdb.Animate(element, {
  animation: "tada",
  animationStart: "onLoad",
  animationDelay: "0",
  animationDuration: "500",
  animationReverse: "false",
  animationRepeat: "false",
  animationInterval: "0",
});
animate.init();
</script>
</html>