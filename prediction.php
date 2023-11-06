<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    <style>
        body, html {
            width: 100%;
            height: 100%;
        }
        .hero-section {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body id="top">
    
<main class="hero-section d-flex align-items-center">
    <div class="container"> 
                
        <div class="row"> 
           <div class="col-lg-8 col-12 mx-auto">
               <div class="estimate-form">
                        <h1 class="text-white text-center">Which city do you want to travel?</h1>
                        <h6 class="text-center">Choose a city to find out the travel cost</h6>
                        <form method="post" action ="" >
                            
                            <div class="mb-3">
                                <label class="form-label text-white">City</label>
                                
                                <select class="form-control" name="city" id="city">
                                    <!-- <option value="male">Male</option>
                                    <option value="female">Female</option> -->
                                    <?php  include 'cityoption.php';
                                    ?>
                                    
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                    
                        </form>
                </div>
              
           </div>

       </div> 
   </div> 
   
</main>



<!-- JAVASCRIPT FILES -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>