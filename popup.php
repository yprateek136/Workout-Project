<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>


<!-- pop up login form start -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-lg">
  <div class="modal-content">
    <div class="modal-header">
    <h1 class="m-auto" id="exampleModalLabel">Welcome to Workout</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     
    <!-- logim modal start-->

    <div class="scont" id="popup">
      <div class="text-center">
        <h2>Healthy mind in a healthy body</h2>
      </div>
      
      <figure class="ml-5">
        <img src="css/committofit.png" alt="committofit">
      </figure>
      <div class="d-flex justify-content-center">
        <div class="m-auto">
          <button class="button3 mr-3" id="signupbtn" >Sign up</button>
          <span class="br"></span>
          <button class="button3 ml-3"  id="loginbtn" >login</button>
        </div> 
      </div>
    </div>
       <!-- login -->
    <div class="scont" id="loginform">   
      <form>
        <div class="mb-3">
           <input class="form-control" type="email" placeholder="email" id="email1" name="email1" maxlength="30"/>           
        </div>
        <div class="mb-3">          
           <input class="form-control" type="password" placeholder="password" id="password1" name="password1" maxlength="30"/>
        </div>
        <div class="d-flex justify-content-center">
          <div class="m-auto">
            <div class="mb-3">
               <a class="button2" id="proceed" onclick="sendData(1)">Proceed</a><br>
               <a id="loginbtn1" class="or-sign-up"><span>Or</span>signup</a>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- signup form -->
    
      <div class="scont" id="signupform">
        <form class="">
          <div class="mb-3">
            <input class="form-control" type="text" placeholder="Name" id="name" name="name" maxlength="20" minlength="3">
          </div>
          <div class="mb-3">
            <input class="form-control" type="tel" placeholder="Mobile No." id="mobileNo" name="mobileNo" maxlength="10" minlength="10">
          </div>
          <div class="mb-3">
            <input class="form-control" type="email" placeholder="Email" id="email" name="email" maxlength="30" >
          </div>
          <div class="mb-3">
            <input class="form-control" type="password" placeholder="Enter password" id="password" name="password">
          </div>
          <div class=" d-flex justify-content-center">
            <div class="m-auto">
              <div class="mb-3">
               <a onclick="sendData(0)" class="button2" id="proceed" >Proceed</a><br>
               <a id="signupbtn1" class="or-sign-up"><span>Or</span>login</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    

    <!-- login modal end -->

    </div>
    
  </div>
  </div>
</div>
<!-- pop up login form -->
<script type="text/javascript">
  function sendData(id) {

      /*login/signup form validation start*/
      

      
          /*signup form validation start*/
          var username = $('input#name').val();  
          var mobileNo = $('input#mobileNo').val();
          var email = $('input#email').val();
          var email1 = $('input#email1').val();
          var password = $('input#password').val();
          var password1= $('input#password1').val();
          var a =/^[A-Za-z ]+$/;
      if(id==0)
      {

           if(username == "")
           {
            
             alert("Please enter a Username");
             $('#username').focus();
             return false;
            }
          if (username.match(a))
          {
              true; 
          }
          else
          {
              alert("only alphabet character are allowed");
              return flase;
          }           
          if (username.length<=2)
          {
              alert("** user name must be 3 character");
              return false;
          }
          if (username.length>20)
          {
              alert("** user name less than 20 character");
              return false;
          }

          if(mobileNo == ""){
             alert("Please enter mobileNo");
             $('#username').focus();
             return false;
          }
          if (mobileNo.length<10){
              alert("** mobile number must be 10 digit");
              return false;
            }

            if(email.length==""){
              alert("Email is required");
              email.focus();
              return false;
            }
            function isValidEmail(email)
            {

              return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
            }
            if (!isValidEmail(email)) 
            {
              alert("Please enter a  valid email id");
              return false;
            }

          if(password == ""){
             alert("Please enter a Password");
             $('#password').focus();
             return false;
          }
            /*signup form validation end*/
      }
      else{

        if(email1.length==""){
              alert("Email is required");
              email1.focus();
              return false;
            }
            function isValidEmail(email1)
            {

              return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email1);
            }
            if (!isValidEmail(email1)) 
            {
              alert("Please enter a  valid email id");
              return false;
            }

          if(password1 == ""){
             alert("Please enter a Password");
             $('#password1').focus();
             return false;
          }
      }

              /* login form start*/

              /*login form start*/

     /*signup/login form validation end*/

     $.ajax({
                type: 'POST', 
                url: 'Admin Panel/html/api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:id==0?"131":"132",                 
                Name: $("input[name='name']").val(),
                MobileNo: $("input[name='mobileNo']").val(),
                Email: $("input[name='email']").val(),
                Password: $("input[name='password']").val(),
                Email1: $("input[name='email1']").val(),
                Password1: $("input[name='password1']").val(),
            },
                dataType: 'json',
                success: function (data, status, xhr) {

                    if(status=="success"){
                        if (data.status=="N201") {
                          alert(data.message);
                            $('.scont').hide();
                            $('#loginbtn').hide();
                            $('#popup').hide();
                            $('#loginform').show();
                                               /*  window.location.href = "showDetail.php";*/
                        }else{
                      
                         /* alert(data.message);*/
                            console.log(data.log);
                        }
                        if (data.status=="N409") {    
                             window.location.href = "index.php";
                             alert(data.message);
                        }
                        if(data.status=="N403"){
                            
                          alert(data.message);
                            console.log(data.log);
                        }
                    }
                    else{
                      alert("status not success");
                    }
                },
              
            });
    

        }

</script>
</body>
</html>