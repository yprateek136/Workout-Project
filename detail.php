<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Detail Page</title>
  </head>
  <body class="bg_detail_body">
   
    
    <header class="header_detail">
      
        <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid ml-5">
    <img src="img/fitness.svg" class="logo" alt="fitness_logo">
    <a class="navbar-brand px-2" href="index.html">Workout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More  
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
  
<!--   section 1 -->
  <section class="section_1">
   <div class="container">
    <div>
    <small class="secondary">Home <i class="fa fa-angle-right px-1"></i> <span id="city1"></span><i class="fa fa-angle-right px-1"></i> <span id="categoryName1"></span> </small>
    </div>
    <div class="row mt-4">
      <div class="col-sm-4">
        <figure>
          <img id="myimage" *ngIf="" [src]="" class="image_detail">
        </figure>
        <div class="d-flex small_card_detail">
          <div class="bg-white border border-1 text-center py-3 px-1">
          
            <i class="fa fa-star fa-2x"></i>
            <p>754 Reviews</p>
          </div>
          <div class="bg-white border border-1 text-center py-3 px-1">
            <i class="fa fa-image fa-2x"></i>
            <p>21 Gallery</p>
          </div>
          <div class="bg-white border border-1 text-center py-3 px-1">
            <h4>3.5/5</h4>
            <small> Services</small>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="bg-white py-3 px-3">
          <div class="d-flex">
            <small class="bt1" id="category"></small>
              <div class="tableicon_detail text-right-detail dflex">     
             <span class="tdpadding " ><img src="img/owl1.png" class="o_icon" alt=""></span>
             <span class="tdpadding tdpadding1" ><p>4.5/<small>5</small></p></span>
         </div>
          </div>
          <h5 id="categoryName"></h5>
          <p id="address"> <small class="bt1 ml-4">GET DIRECTIONS</small></p>
          <div class="row mt-3">
            <div class="col-sm-4">
              <small class="secondary">OPENING HOURS</small>
              <P>10:30 AM-12:00 PM <small class="text-success">OPEN NOW</small></P>
            </div>
            <div class="col-sm-4">
              <small class="secondary">PHONE</small>
              <P id="phoneNo"></P>
            </div>
            <div class="col-sm-4">
             <!--  <small class="secondary">CUISINES</small>
              <P>Continental,Italian, Salad,Burger, Pizza</P> -->
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <small class="secondary">AVERAGE SPENDING</small>
              <P><span id="averageSpending"></span><small class="bt1">(See more)</small></P>
            </div>
            <div class="col-sm-4">
              <small class="secondary">MATCHING SCORE</small>
              <P>80%<small class="bt1 ml-2">(View Details)</small> </P>
            </div>
            
          </div>
           <div class="row mt-5">
            <div class="col-sm-3">
               <i class="fa fa-heart-o fa-2x px-4 text-secondary"></i>
              <p class="secondary">Add to Wishlist</p>
            </div>
            <div class="col-sm-3">
            <i class="fa fa-pencil-square-o fa-2x px-4 text-secondary"></i>
              <p class="secondary">Write Review</p>
            </div>
            <div class="col-sm-3">
             <i class="fa fa-star-o fa-2x px-3 text-secondary"></i>
              <p class="secondary">Rate Now</p>
            </div>
            <div class="col-sm-3">
              <button class="batn text-right1">Buy A Plan</button>
            </div>
            
          </div>


        </div>
      </div>
    </div>
  </div>   
  </section>

<!-- section 2 -->
  <section class="section_2">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          
          <div class="table2">
            <ul>
              <li class="" id="overview_btn">OVERVIEW</li>
              <li class="" id="menu_btn">MENU</li>
              <li class="" id="review_btn">REVIEWS</li>
              <li class="" id="book_a_table_btn">Buy A Plan</li>
            </ul>        
          </div>
           <div class="bg-white px-2 py-2 cont_main" id="overview">
             <div class="row">
                <p class="secondary col-sm-3">Description</p>
                <div class="col-sm-9">
          
                    <p id="description"><span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                    <button class="bt1 read_more" onclick="myFunction()" id="myBtn" >Read more<i class='fa fa-arrow-circle-down ml-1'></i></button>

                </div>
             </div>
             <hr>
              <div class="row">
                <p class="secondary col-sm-3">Address</p>
                <div class="col-sm-9">
                 <p id="address"></p>
                  <a href="#" class="bt1" id="a"><i class="fa fa-map"></i><span class="ml-1">Get directions</span></a>
                </div>
             </div>
             <hr>
             <div class="row">
                <p class="secondary col-sm-3">Timing</p>
                <div class="col-sm-9">
                  <div class="row">
                    <p class="col-sm-2">Mon</p>
                    <p class="col-sm-10">10am-12am <span href="#" class="open_now_color ml-3">Open Now</span></p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2">Tue</p>
                    <p class="col-sm-10">10am-12am</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2">Wed</p>
                    <p class="col-sm-10">10am-12am</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2">Thu</p>
                    <p class="col-sm-10">10am-12am</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2">Fri</p>
                    <p class="col-sm-10">10am-12am</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2">Sat</p>
                    <p class="col-sm-10">10am-12am</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2">Sun</p>
                    <p class="col-sm-10">10am-12am</p>
                  </div>
                  
                  
                </div>
             </div>
             <hr>
              <div class="row">
                <p class="secondary col-sm-3">Average Spending</p>
                <div class="col-sm-9">
                  <p id="averageSpendingD"></p>
                  
                </div>
             </div>
             <hr>
              <div class="row">
                <p class="secondary col-sm-3">Crowd Density</p>
                <div class="col-sm-9">
                  <p id="crowdDensity"></p>
                  
                </div>
             </div>
             <hr>
              <div class="row">
                <p class="secondary col-sm-3">Facilities</p>
                <div class="col-sm-9">
                  <p id="facilities"></p>
                  
                </div>
             </div>
           </div>
           <div class="bg-white px-2 py-2 cont_main" id="menu">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           </p>
           </div> 
           <div class="bg-white px-2 py-2 cont_main" id="review">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div> 
           <div class="bg-white px-2 py-2 cont_main" id="book_a_table">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div> 

           <div class="bg-white mt-4">
            <div class="d-flex px-3 py-2">
              <p>Photos <small class="ml-1">[3248]</small></p>
              <div class="d-flex text-right px-3">
                <button class="mr-2 bg-transparent border-0">View All</button>
                <button class="mr-3 add_photos_btn">Add Photos</button>
              </div>
            </div>  
              <hr>
              <div class="py-2 px-2">
          <div class="responsive" id="sliderImg">
           
            </div>
              
            </div>
           </div>

           <div class="bg-white mt-4">
            <div class="px-3 py-3">
              <p>Tell us your experience</p>
              <input type="text" placeholder="Your review will help other users" class="your_review">
              <button class="Submit_Review mt-4">Submit Review</button>
            </div>
           </div>

           <div class="bg-white mt-4">
            <div class="px-3 py-3">
              <div class="row">
                <div class="col-sm-2">
                  <div class="border border-1">
                  <p class="rating text-center"><i class="fa fa-star"></i>4.5/5</p>
                  <p class="text-center py-2 px-2">115 Reviews</p>
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="row">

                  <p class="col-sm-1 text-center">5<i class="fa fa-star ml-1"></i></p>
                  <div class="col-sm-9 mt-2">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  </div>
                  <p class="col-sm-2"></p>
                </div>
                  <div class="row py-3">

                  <p class="col-sm-1 text-center">4<i class="fa fa-star ml-1"></i></p>
                  <div class="col-sm-9 mt-2">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  </div>
                  <p class="col-sm-2">Service</p>
                </div>
                <div class="row">

                  <p class="col-sm-1 text-center">3<i class="fa fa-star ml-1"></i></p>
                  <div class="col-sm-9 mt-2">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  </div>
                  <p class="col-sm-2">Look & Feel</p>
                </div>
                </div>
              </div>
              <div class="table_review mt-3">
            <ul>
              <li class="td1">Most Popular</li>
              <li class="">Positive</li>
              <li class="">Negative</li>
             
            </ul>        
          </div>
          <hr class="mt-5">
          <div class="d-flex">
          <div class="d-flex">
            <figure>
            <img src="img/gym.jpg" class="review_user_img">
            </figure>
            <div class="ml-3">
              <p>Arun Kumar</p>
              <p>27 Reviews, 120 Followers</p>
              <p class="bb1">FOLLOW</p>
            </div>
          </div>
          <div class="text-right mr-5">
             <div class="tableicon_detail text-right-detail dflex">     
             <span class="tdpadding " ><img src="img/owl1.png" class="o_icon" alt=""></span>
             <span class="tdpadding tdpadding1" ><p>4.5/<small>5</small></p></span>
         </div>
          </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
          <div class="d-flex">
            <small class="text-secondary">15 sep, 2020</small>
            <small class="text-secondary ml-5">5 comments</small>
            <small class="text-secondary ml-5">67</small>
          </div>
          <hr>

          <div class="d-flex">
          <div class="d-flex">
            <figure>
            <img src="img/swimming.jpg" class="review_user_img">
            </figure>
            <div class="ml-3">
              <p>Arun Kumar</p>
              <p>27 Reviews, 120 Followers</p>
              <p class="bb1">FOLLOW</p>
            </div>
          </div>
          <div class="text-right mr-5">
             <div class="tableicon_detail text-right-detail dflex">     
             <span class="tdpadding " ><img src="img/owl1.png" class="o_icon" alt=""></span>
             <span class="tdpadding tdpadding1" ><p>4.5/<small>5</small></p></span>
         </div>
          </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
          <div class="d-flex">
            <small class="text-secondary">15 sep, 2020</small>
            <small class="text-secondary ml-5">5 comments</small>
            <small class="text-secondary ml-5">67</small>
          </div>
          <hr>

          <p class="bt1">View all 115 reviews</p>
            </div>
           </div>


        </div>
        <div class="col-sm-3">
          <div class="py-4 px-4 mt-5 bg-white">
            <h5>Trending workout</h5>
            <div class="d-flex">
              <figure>
                <img src="img/kickboxing.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <p>Confused Desi Concert 2020</p>
                <small class="text-secondary">5 Aug, 20</small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/gym.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <p>Confused Desi Concert 2020</p>
                <small class="text-secondary">5 Aug, 20</small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/swimming.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <p>Confused Desi Concert 2020</p>
                <small class="text-secondary">5 Aug, 20</small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/kickboxing.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <p>Confused Desi 2020</p>
                <small class="text-secondary">5 Aug, 20</small>
              </div>
            </div>
          <p class="bt1">View All Events</p>  
            
          </div>

            <div class="py-4 px-4 mt-5 bg-white">
              <h5>Connect Social Profiles</h5>
              <button class="fac"><i class="fa fa-facebook"></i> FACEBOOK</button>
              <div class="d-flex my-2">
              <button class="gg"><i class="fa fa-google-plus"></i></button>
              <button class="inst ml-3"><i class="fa fa-instagram"></i></button>
              </div>
            </div>

            <div class="py-4 px-4 mt-5 bg-white">
            <h5>Related workout</h5>
            <div class="d-flex">
              <figure>
                <img src="img/gym.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused DesiConcert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/swimming.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/kickboxing.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
<div class="d-flex">
              <figure>
                <img src="img/pic44.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
          <p class="bt1">View All Workout</p> 
            
          </div>

            <div class="py-4 px-4 mt-5 bg-white">
              <h5>Trending Moods</h5>
              <div class="d-flex my-2">
              <button class="gg">Rooftop bars</button>
              <button class="inst ml-3">Sports & drinks</button>
              </div>
              <div class="d-flex my-2">
              <button class="inst">Dance floor</button> 
              <button class="gg ml-3">Live Music</button>
              
              </div>
              <div class="d-flex my-2">
              <button class="gg">Dance floor</button>
              <button class="inst ml-3">Events</button>
              </div>
            </div>

            <div class="py-4 px-4 mt-5 bg-white">
            <h5>Lounges Near you</h5>
            <div class="d-flex">
              <figure>
                <img src="img/pic33.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/pic22.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
            <div class="d-flex">
              <figure>
                <img src="img/pic11.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
<div class="d-flex">
              <figure>
                <img src="img/pic44.jpg" class="review_trendingEvent_img">
              </figure>
              <div class="ml-3">
                <strong>Diggin</strong>
                <p class="text-secondary">Confused Desi Concert 2020</p>
                <small class="text-secondary">4.4<i class="fa fa-star"></i></small>
              </div>
            </div>
          <p class="bt1">View All</p> 
            
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


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>




<!-- //featured section -->

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

<script>
    $(document).ready(function(){
    $('.cont_main').hide();
      $("#overview_btn").css({"border-bottom":"4px solid #f94083","cursor":"pointer"});
      $("#photos_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#menu_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#review_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#book_a_table_btn").css({"border-bottom":"0px","cursor":"pointer"});

      $('#overview').show();
      $("#overview_btn").click(function(){
        $('.cont_main').hide();
        $('#overview').show();
        $("#overview_btn").css({"border-bottom":"4px solid #f94083","cursor":"pointer"});
      $("#photos_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#menu_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#review_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#book_a_table_btn").css({"border-bottom":"0px","cursor":"pointer"});
      });
       $("#photos_btn").click(function(){
        $('.cont_main').hide();
        $('#photos').show();
         $("#overview_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#photos_btn").css({"border-bottom":"4px solid #f94083","cursor":"pointer"});
      $("#menu_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#review_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#book_a_table_btn").css({"border-bottom":"0px","cursor":"pointer"});
      });
       $("#menu_btn").click(function(){
        $('.cont_main').hide();
        $('#menu').show();
       $("#overview_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#photos_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#menu_btn").css({"border-bottom":"4px solid #f94083","cursor":"pointer"});
      $("#review_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#book_a_table_btn").css({"border-bottom":"0px","cursor":"pointer"});
      });
        $("#review_btn").click(function(){
        $('.cont_main').hide();
        $('#review').show();
        $("#overview_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#photos_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#menu_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#review_btn").css({"border-bottom":"4px solid #f94083","cursor":"pointer"});
      $("#book_a_table_btn").css({"border-bottom":"0px","cursor":"pointer"});
      });
         $("#book_a_table_btn").click(function(){
        $('.cont_main').hide();
        $('#book_a_table').show();
        $("#overview_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#photos_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#menu_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#review_btn").css({"border-bottom":"0px","cursor":"pointer"});
      $("#book_a_table_btn").css({"border-bottom":"4px solid #f94083","cursor":"pointer"});
      });
     
    });


  </script>
  <script type="text/javascript">
      function showCategory(){
                let id = "<?=isset($_GET['id'])?$_GET['id']:'1'?>";
                /*alert(id);*/
      $.ajax({
        
                type: 'POST',
                url: 'Admin Panel/html/api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:"105",
                id: id,
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                   var res = data.data;
                    if(status=="success")
                    {
                        if (data.status=="N200") 
                        {          
                          var student = '';
                                          
                          category = res.catName;
                          categoryName = res.categoryName;
                          address = res.address;
                          city = res.city;
                          phoneNo = res.phoneNo;
                          averageSpending = res.averageSpending;
                          description = res.description;
                          averageSpendingD = res.averageSpendingD;
                          crowdDensity = res.crowdDensity;
                          facilities = res.facilities;
                          
                          img_url=res.gallery;
                          
                          var array=img_url.split(",");
                          $.each(array,function(i){
                             /*alert(array[i]);*/
                             student += `<div class="slider2">
                                            <img src="Admin Panel/html/api/dropzone/images/${array[i]}" alt="seaimager" class="slider22">
                                        </div>`;
                          });
                          $('#sliderImg').html(student).promise().done(function () {

                          initSlider();
                          });


                          $("#myimage").attr("src","Admin Panel/html/api/dropzone/images/"+array[0]);

                          $('#category').html(category);
                          $('#categoryName').html(categoryName);
                          $('#categoryName1').html(categoryName);
                          $('#city1').html(city);
                          $('#address').html(address);
                          $('#phoneNo').html(phoneNo);
                          $('#averageSpending').html(averageSpending);
                          $('#description').html(description);
                          $('#averageSpendingD').html(averageSpendingD);
                          $('#crowdDensity').html(crowdDensity);
                          $('#facilities').html(facilities);


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
showCategory();


function initSlider() {
 $('#sliderImg').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
});
}
</script>


  </body>
</html>