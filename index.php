<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    
    

    <!-- slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
<!--Get your own code at fontawesome.com-->
    <title>Home Page</title>
  </head>
  <body id="body">

   <?php include_once 'popup.php'; ?> 
   
   	<div class="cover_image">
   	<header class="header_home">
   		
   			<nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid ml-5">
  	<img src="img/fitness.svg" class="logo" alt="fitness_logo">
    <a class="navbar-brand px-2" href="#">Workout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <span class="text-right1 d-flex">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-map-marker" aria-hidden="true"><span class="ml-2">City</span></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" onclick="viewData1()">Delhi</a></li>
            <li><a class="dropdown-item" href="#">Mumbai</a></li>
            <li><a class="dropdown-item" href="#">Noida</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#"><i class="fa fa-user-circle-o"><span class="ml-2">Login</span></i></a> -->
          <div class="d-flex mt-2">
        
        <span class="px-2"><i class='fa fa-user-circle user' ></i></span>
        
        <a type="button" class="logbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          login
        </a>
      </div>  
        </li>
      </span>
      </ul>
    </div>
  </div>
</nav>
</header>
	<div class="" style="text-align: center;position: absolute;top: 30%;left: 50%;transform: translate(-50%, -50%);color: white;">
    <!-- best workougt near you -->
		<h1 class="text-white cover_content">Find the best Workout in your town</h1>
   </div>
   <div class="" style="position: relative;top: 36%;left: 38%;color: white;"> 
   <form>
  <input type="text" class="searchcoverbox" name="homeSearch" onkeyup='check();' placeholder="Search.." style="width: 357px;height: 60px; border-radius: 5px;border:none;outline: none;">
</form>
  
 <div id="searchOption" class="" style="position: absolute;color: black;z-index: 999;border-radius: 5px;">
 
</div>
</div>
<div class="cover-text2">
 <p class="py-3 mt-3">Discover best Workout in Delhi </p>

	</div>
  
 <div class="row" style="position: absolute;bottom: -15%;left: 50%;transform: translate(-50%,-20%);"> 
   <div class="col-sm-4">
     <div class="bg-white py-2 px-2 box_shadow1">
     <!--  <div class="bg-white cardImg"> -->
      <figure class="cardImg">
      <img src="img/weightlifter.png" class="icon_size">  
      </figure>
     <!--  </div> -->
     
      <p class="text-center mt-5">Discover workout nearly</p>
      <p class="text-secondary text-center"> Much More Than Others. 150 Gyms. 95 Cities. 25 States. Personal ... Get access to </p>
      <div class="EXPLORE px-4 py-3"><a href="#" class="EXPLORE_color" id="a"> </a></div>
     
    </div>
   </div>
   <div class="col-sm-4 px-2">
    <div class="bg-white py-2 px-2 box_shadow1">
       <figure class="cardImg">
      <img src="img/weightlifter.png" class="icon_size">  
      </figure>
      <p class="text-center mt-5">Find Best Deals</p>
      <p class="text-secondary text-center">Get the latest and up-to-date coupons & cashback offers on workout.</p>
     <div class="EXPLORE px-4 py-3"><a href="#" class="EXPLORE_color" id="a"> </a></div>
    </div>
   </div>
   <div class="col-sm-4">
  <div class="bg-white py-2 px-2 box_shadow1">
      <figure class="cardImg">
      <img src="img/weightlifter.png" class="icon_size">  
      </figure>
      <p class="text-center mt-5">Offer zone.</p>
      <p class="text-secondary text-center">Workout is a completely free site for latest coupon codes,  offer zone and deals.</p>
      <div class="EXPLORE px-4 py-3"><a href="#" class="EXPLORE_color" id="a"> </a></div>
    </div>
   </div>
 </div>


 
   		</div>
   	
   

<!-- featured section -->
<section class="section1 py-5 mt-5">
  <div class="container d-flex">
    <div class="text-left">
      <h4>FEATURED</h4>
      <P>WORKOUT</P>
    </div>
    <div class="tableicon_arrow d-flex featured_right" class="">     
             <span class="" id="prev_btn"><i class="fa fa-long-arrow-left o_icon_arrow"></i></span>
             <span class="tdpadding1_arrow" id="next_btn"><i class="fa fa-long-arrow-right a_style"></i></span>
         </div>
    
      
   
  </div>
  <div class="main">
  <div class="slider" id="sliderImg1">

  </div>
 
</div>

</section>


<!-- Trending section -->
<section class="section1 py-5">
  <div class="container d-flex">
    <div class="text-left">
      <h4>TRENDING</h4>
      <P>NEAR YOU</P>
    </div>
     <div class="tableicon_arrow d-flex featured_right" class="">     
             <span class="" id="prev_btn1"><i class="fa fa-long-arrow-left o_icon_arrow"></i></span>
             <span class="tdpadding1_arrow" id="next_btn1"><i class="fa fa-long-arrow-right a_style"></i></span>
         </div>
  </div>
  <div class="py-3 text-center" id="catid">
        
      
         
    </div>

 
   <!--  bar section -->

  <div class="main main1" id="bar">
 <div class="main">
  <div class="slider1_bar" id="sliderImg">
    
   
   
  </div>
 
</div>
</div>




</section>
<!-- Featured moodes section -->
<section class="section1 py-5">
  <div class="container d-flex">
    <div class="text-left">
      <h4>FEATURED MOODS</h4>
      <P>NEAR YOU</P>
    </div>
    <div class="featured_right">
      <!-- <button class="btn_view">VIEW ALL</button> -->
      
      
    </div>
   
</div>

 <div class="container mt-3">
  <div class="row">
    <div class="col-sm-3">
      <figure class="featured_moods_img">
        <img src="img/pic11.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
    <div class="col-sm-3">
      <figure class="featured_moods_img">
        <img src="img/pic22.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
    <div class="col-sm-3">
     <figure class="featured_moods_img">
        <img src="img/pic33.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
    <div class="col-sm-3">
      <figure class="featured_moods_img">
        <img src="img/pic44.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <figure class="featured_moods_img">
        <img src="img/pic44.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
    <div class="col-sm-3">
      <figure class="featured_moods_img">
        <img src="img/pic33.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
    <div class="col-sm-3">
     <figure class="featured_moods_img">
        <img src="img/pic22.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
    <div class="col-sm-3">
      <figure class="featured_moods_img">
        <img src="img/pic11.jpg" class="smallcard" alt="gym">
      </figure>
      <div class="featured_moods_text">
      <p class="text-white">BARS</p>
      <p class="text-white">(2547)</p>
      </div>
    </div>
  </div>
 
</div>


</section>



<!-- testimonials section -->
<section class="section1 py-5">
  <div class="container d-flex">
    <div class="text-left">
      <h4>TESTIMONIALS</h4>
      <P>FROM OUR USERS</P>
    </div>
    <div class="tableicon_arrow d-flex featured_right" class="">     
             <span class="" id="prev_btn2"><i class="fa fa-long-arrow-left o_icon_arrow"></i></span>
             <span class="tdpadding1_arrow" id="next_btn2"><i class="fa fa-long-arrow-right a_style"></i></span>
         </div>
  </div>
  <div id="single-item">
    
    
      
  <div class="container mt-5 single-item_content">
     <div class="d-flex mt-3 justify-content-center testimonial">
         <figure>
           <img src="img/mun.jpeg" class="testimonial_image">
         </figure>
       <div class="ml-4">
         <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua."</p>
         <p class="mt-3">Prashant Gupta</p>
       </div>
     </div>
   </div>

   <div class="container mt-5 single-item_content">
     <div class="d-flex mt-3 justify-content-center testimonial">
         <figure>
           <img src="img/pra.jpeg" class="testimonial_image">
         </figure>
       <div class="ml-4">
         <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua."</p>
         <p class="mt-3">Prashant Gupta</p>
       </div>
     </div>
   </div>

   <div class="container mt-5 single-item_content">
     <div class="d-flex mt-3 justify-content-center testimonial">
         <figure>
           <img src="img/mun.jpeg" class="testimonial_image">
         </figure>
       <div class="ml-4">
         <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua."</p>
         <p class="mt-3">Prashant Gupta</p>
       </div>
     </div>
   </div>

  </div> 
</section>

<!-- footer section -->
<footer class="bg_footer py-5 px-4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
	       <p><i class="fa fa-copyright"></i><span class="ml-1"> Copyright 2020 Cybernauts.in. All Right Reserved</span></p>
      </div>

	<div class="col-sm-6 footer_meadia text-right">
    <img src="img/facebook.png" class="footer_meadia_icon">
    <img src="img/twitter.png" class="footer_meadia_icon">
    <img src="img/google-plus.png" class="footer_meadia_icon">
    <img src="img/linkedin.png" class="footer_meadia_icon">
    <img src="img/youtube.png" class="footer_meadia_icon">
  </div>
  </div>
</footer>
<!-- //footer section -->



<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script type="text/javascript"> 
  

  $('.slider1').slick({
  dots: false,
   prevArrow: $('#prev_btn1'),
   nextArrow: $('#next_btn1'),
  centerMode: true,
  centerPadding: '90px',
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        centerMode: true,
        centerPadding: '40px',
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerMode: true,
  centerPadding: '40px',
       
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerMode: true,
  centerPadding: '20px',
        
      }
    }
   
  ]
});



$('#single-item').slick({
 dots: true,
   prevArrow: $('#prev_btn2'),
   nextArrow: $('#next_btn2'),
 /*centerMode: true,*/
  centerPadding: '90px',
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  
  
});
</script>
  <script>
    $(document).ready(function(){
    $('.main1').hide();
      $("#btn1").css({"background-color":"#f55183","padding":"7px","border":"none","border-radius":"30px","width":"90px","color":"#fff"});
      $("#btn2").css({"background":"transparent","border":"none","color":"gray"});
      $("#btn3").css({"background":"transparent","border":"none","color":"gray"});
      $('#bar').show();
      $("#btn1").click(function(){

        $('.main1').hide();
        $('#bar').show();
        $("#btn1").css({"background-color":"#f55183","padding":"7px","border":"none","border-radius":"30px","width":"90px","color":"#fff"});
      $("#btn2").css({"background":"transparent","border":"none","color":"gray"});
      $("#btn3").css({"background":"transparent","border":"none","color":"gray"});

      });
      $("#btn2").click(function(){
        $('.main1').hide();
        $('#clubs').show();
        $("#btn2").css({"background-color":"#f55183","padding":"7px","border":"none","border-radius":"30px","width":"90px","color":"#fff"});
      $("#btn1").css({"background":"transparent","border":"none","color":"gray"});
      $("#btn3").css({"background":"transparent","border":"none","color":"gray"});
      });
      $("#btn3").click(function(){
        $('.main1').hide();
        $('#lounges').show();
        $("#btn3").css({"background-color":"#f55183","padding":"7px","border":"none","border-radius":"30px","width":"90px","color":"#fff"});
      $("#btn1").css({"background":"transparent","border":"none","color":"gray"});
      $("#btn2").css({"background":"transparent","border":"none","color":"gray"});
      });
     
    });


  </script>

<!-- //featured section -->




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!--  <script src="js/bootstrap.bundle.min.js"></script> -->

    <script type="text/javascript">
      function viewData1(){
    window.location.href = "card.php?city="+"Delhi";
}



   function showCategory(id){

     $.ajax({
                type: 'POST',  
                url: 'Admin Panel/html/api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudUser",
                request:"129",
                id: id,
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                   var res = data.data;
                    if(status=="success"){
                        if (data.status=="N200") {          
            var student = '';
            // ITERATING THROUGH OBJECTS
            res.forEach((obj)=>{
              student += `<button onclick="viewCardData(${obj.id})" id="btn${obj.id}" data-cat-id="${obj.id}" type="button" class="btn btn-warning rounded-pill px-4 py-2 m-3">${obj.category}</button>`;
            });

              //CONSTRUCTION OF ROWS HAVING
              // DATA FROM JSON OBJECT
              
            //INSERTING ROWS INTO TABLE
            $('#catid').html(student);
                        
                        }else{
                            alert("Error, Please Rerty!");
                            console.log(data.log);
                        }
                    }else{
                        alert("Upload Failed");
                    }
                },
                error:function (jqXhr, textStatus, errorMessage) {
                       console.log('Error' + errorMessage);
                    }
            }); 
     
}
showCategory();

viewCardData(0);
    function viewCardData(id)
    {
         
                
        

                /*alert(id);*/
      $.ajax({
        
                type: 'POST',
                url: 'Admin Panel/html/api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:"133",                
               
                categoryid:id,
                
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                   var res = data.data;
                    if(status=="success")
                    {
                        if (data.status=="N208") 
                        {          
                          var student = '';
                                          
                         
                          
                         res.forEach((obj)=>{
                            img_url=obj.gallery;
                          
                          var array=img_url.split(",");
                            
                              student += ` <div class="slider-image2">
                                            <div class="box_shadow">
                                              <img src="Admin Panel/html/api/dropzone/images/${array[0]}" alt="seaimager" class="slider-image22">
                                              <div class="lastrel">
                                                <div class="tableicon dflex">     
                                                   <span class="tdpadding " ><img src="img/owl1.png" class="o_icon" alt=""></span>
                                                   <span class="tdpadding tdpadding1" ><p>4.5/<small>5</small></p></span>
                                               </div>
                                                <div class="figure22">
                                                  <figure class="figure_h_icon1">
                                                  <img src="img/heart11.svg" class="h_icon1" alt="">
                                                  </figure>
                                                  <figure class="figure_s_icon1">
                                                  <img src="img/share1.svg" class="s_icon1" alt="">
                                                  </figure>
                                                </div>
                                                 <div class="sliderlast">
                                                 <p class="bt1">${obj.catName}</p>
                                                <h5 class="">${obj.categoryName}</h5>
                                                 <small class="secondary ">${obj.address}</small>
                                                 <small class="secondary">10:30 AM-12:00 PM<span class="ggreen "> (OPEN NOW)</span></small>
                                                  <div>
                                                  <a class="mt btn_view_info" id="a" onclick="viewData(${obj.id})">View info<i class="fa fa-angle-right ml-1"></i></a>
                                                  <a class="bt11 mt" id="a">Buy A Plan</a>
                                                  </div>
                                                 </div> 
                                            </div>     
                                          </div>
                                        </div>`;

                          });
                          $('#sliderImg').html(student).promise().done(function () {

                          initSlider();
                          });



                        }
                        else{
                            alert("Error, Please Rerty!");
                            console.log(data.log);
                        }
                  }
                  else
                  {
                        alert("Upload Failed");
                  }
                },
                error:function (jqXhr, textStatus, errorMessage) {
                       console.log('Error' + errorMessage);
                    }
            }); 
}

viewCardData1();
    function viewCardData1()
    {
      $.ajax({
        
                type: 'POST',
                url: 'Admin Panel/html/api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:"134",                     
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                   var res = data.data;
                    if(status=="success")
                    {
                        if (data.status=="N208") 
                        {          
                          var student = '';
                         
                          
                         res.forEach((obj)=>{
                            img_url=obj.gallery;
                          
                          var array=img_url.split(",");
                            
                              student += ` <div class="slider-image2">
                                            <div class="box_shadow">
                                              <img src="Admin Panel/html/api/dropzone/images/${array[0]}" alt="seaimager" class="slider-image22">
                                              <div class="lastrel">
                                                <div class="tableicon dflex">     
                                                   <span class="tdpadding " ><img src="img/owl1.png" class="o_icon" alt=""></span>
                                                   <span class="tdpadding tdpadding1" ><p>4.5/<small>5</small></p></span>
                                               </div>
                                                <div class="figure22">
                                                  <figure class="figure_h_icon1">
                                                  <img src="img/heart11.svg" class="h_icon1" alt="">
                                                  </figure>
                                                  <figure class="figure_s_icon1">
                                                  <img src="img/share1.svg" class="s_icon1" alt="">
                                                  </figure>
                                                </div>
                                                 <div class="sliderlast">
                                                 <p class="bt1">${obj.catName}</p>
                                                <h5 class="">${obj.categoryName}</h5>
                                                 <small class="secondary ">${obj.address}</small>
                                                 <small class="secondary">10:30 AM-12:00 PM<span class="ggreen "> (OPEN NOW)</span></small>
                                                  <div>
                                                  <a class="mt btn_view_info" onclick="viewData(${obj.id})" id="a">View info<i class="fa fa-angle-right ml-1"></i></a>
                                                  <a class="bt11 mt" id="a">Buy A Plan</a>
                                                  </div>
                                                 </div> 
                                            </div>     
                                          </div>
                                        </div>`;

                          });
                          $('#sliderImg1').html(student).promise().done(function () {

                          initSlider1();
                          });

                        }
                        else{
                            alert("Error, Please Rerty!");
                            console.log(data.log);
                        }
                  }
                  else
                  {
                        alert("Upload Failed");
                  }
                },
                error:function (jqXhr, textStatus, errorMessage) {
                       console.log('Error' + errorMessage);
                    }
            }); 
}


    </script>


    <!-- pop up login form -->

  <script>
    $(document).ready(function(){
      $('#signupform').hide();
      $('#loginform').hide();
      $("#signupbtn").click(function(){
        $('.scont').hide();
        $('#signupbtn').hide();
        $('#popup').hide();
        $('#signupform').show();

      });
      $("#loginbtn").click(function(){
        $('.scont').hide();
        $('#loginbtn').hide();
        $('#popup').hide();
        $('#loginform').show();
      });
      $("#loginbtn1").click(function(){
        $('.scont').hide();
        $('#loginbtn').hide();
        $('#popup').hide();
        $('#signupform').show();
        
      });
      $("#signupbtn1").click(function(){
        $('.scont').hide();
        $('#loginbtn').hide();
        $('#popup').hide();
        $('#loginform').show();
      });
    });
  </script> 
<!-- pop up login form -->

 <script type="text/javascript">


   function initSlider1() {
   $('#sliderImg1').slick({
  dots: false,
   prevArrow: $('#prev_btn'),
   nextArrow: $('#next_btn'),
  centerMode: true,
  centerPadding: '90px',
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        centerMode: true,
        centerPadding: '40px',
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerMode: true,
  centerPadding: '40px',
       
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerMode: true,
  centerPadding: '20px',
        
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}


   function initSlider() {
  $('#sliderImg').slick({
  dots: false,
   prevArrow: $('#prev_btn1'),
   nextArrow: $('#next_btn1'),
  centerMode: true,
  centerPadding: '90px',
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        centerMode: true,
        centerPadding: '40px',
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerMode: true,
  centerPadding: '40px',
       
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerMode: true,
  centerPadding: '20px',
        
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});  

}


 function check(){
    let hs = $("input[name='homeSearch']").val().trim();
  if(hs){
     $.ajax({
                type: 'POST',  
                url: 'Admin Panel/html/api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:"135",
                homeSearch: hs,
               
              
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                   var res = data.data;
                    if(status=="success")
                    {
                        if (data.status=="N300")
                        {
                          
                          var student = '';
                          
                          res.forEach((obj)=>{
                            student += `<p style="background-color:white;color: black;width: 180%;height: 50px;padding: 10px 20px 0px 20px;z-index: 99999;border-radius:5px;" onclick="viewData(${obj.id})">${obj.categoryName}</p>`;

                            
                          });
                          $('#searchOption').html(student);
                         
                        }
                    }
                    else
                    {
                        alert("Upload Failed");
                    }
                },
                error:function (jqXhr, textStatus, errorMessage) {
                       console.log('Error' + errorMessage);
                    }
            }); 
            }else{
               $('#searchOption').html("");
            }     
}
function viewData(id){
    window.location.href = "detail.php?id="+id;
}

 </script>
  </body>
</html>