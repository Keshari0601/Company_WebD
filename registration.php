<!DOCTYPE html>
<html lang="en">
	<head>
         <title>Project Web Development</title>
        <link rel="icon" type="image/png" href="file:///C:/wamp/www/webd%20project/contents/icon.png">
		<!-- Bootstrap -->
		<link href="file:///C:/wamp/www/webd%20project/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="file:///C:/wamp/www/webd%20project/style.css">
    </head>
<body>
	<div class="container mobile_container">            
      <div class="row">
          <div class="col-xs-12 text-center">
                  <div class="logo">
                      <div class="inner">
						<img src="file:///C:/wamp/www/webd%20project/contents/page.png" 
						class="img-responsive" style="margin-top:20px;" ></a>
					</div>
                  </div>  
          </div>         
      </div>
	</div>   
    <nav>
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" collapse navbar-collapse mobile_navbar-collapse " style="margin-top:30px;" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav mobile_navbar-nav mobile_nav  ">
                 <li><a href="file:///C:/wamp/www/webd%20project/home.php">Home</a></li>
                <li><a href="file:///C:/wamp/www/webd%20project/registration.php">Registration</a></li>
                <li><a href="file:///C:/wamp/www/webd%20project/about%20us.php">About us</a></li>
                <li><a href="file:///C:/wamp/www/webd%20project/login.php">Log in</a></li>
                <li><a href="file:///C:/wamp/www/webd%20project/admin.php">Admin</a></li>
             </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
    </nav>
	<hr>
	<div class="container-height">
        <div class="container">
         <div class="row">
          <div class="col-md-0">
             <div class="row text-center">
					<h2><span class="yellow">Register Here</span></h2>
					<div style="display: block;margin: 0 10px; clear: both;zoom: 1;"><hr class="style-six"></div>
					<h4 class="orange">MNNIT Allahabad</h4>
          </div><!-- end of inner row -->
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal" role="form" action="file:///C:/wamp/www/webd%20project/payment.php" 
					method="POST" onsubmit="return formvalidation()">
                <h4 class="blue register-text">About Yourself</h4>
                                <input type="hidden" name="Program_id" value="74">
                                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">First Name<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input" name="f_name" id="inputPassword3" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle name" class="col-sm-4 control-label">Middle Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input" id="inputPassword3" name="m_name"  placeholder="Middle Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Last Name<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input" name="l_name" id="inputPassword3" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="camp" class="col-sm-4 control-label">Sex<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <select class="form-control custom-input" id="gender" name="gender">
                        <option value="Select">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="camp" class="col-sm-4 control-label">Date of Birth<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control custom-input" name="dob" placeholder="dob" required="required">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Father's Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input" name="Father_name" id="inputPassword3" placeholder="Father's Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Address Line1<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <textarea class="form-control custom-input" rows="4"  name="Addr1"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Address Line2</label>
                  <div class="col-sm-6">
                    <textarea class="form-control custom-input" rows="4" name="Addr2"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Email Id<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input"  name="email1" id="email1" placeholder="Enter Your E-Mail Id">
                  </div><span style="color:red;margin-left:40px;font-size:15px;" id="message_email"></span><br>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Confirm Email Id<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input"  name="email2" id="email2" placeholder="Enter Your E-Mail Id Again">
                  </div><span style="color:red;font-size:15px;" id="message1"></span>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Mobile Number<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input"  name="Mobile" id="txtMobile" placeholder="Enter Your Mobile Number">
                  </div><span style="color:red;margin-left:40px;font-size:15px;" id="message"></span><br>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Alternative Number</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input"  id="txtPhone" name="contact_no" placeholder="Any other Number You Have?">
                  </div>
                </div>
                <h4 class="blue register-text">College Details</h4>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">College Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input" id="inputPassword3" name="College" placeholder="Your College Name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Department</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control custom-input" id="inputPassword3" name="department" placeholder="Enter Department Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Semester</label>
                  <div class="col-sm-6">
                    <select class="form-control custom-input" name="sem">
                        <option>1</opdtion>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                  </div>
                </div>
                <h4 class="blue register-text">Login Information</h4>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Password<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control custom-input"  name="pwd1" id="pwd1" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Retype Password<span class="star">*</span></label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control custom-input"  name="pwd2" id="pwd2" placeholder="Re-enter Password">
                  </div><span style="color:red;font-size:15px;" id="message2"></span>
                </div>
                <div class="form-group">
				<div class="col-md-12">
                  <div class="row text-center">
                    <input type="submit" class="blue-button" name="Register" value="Register">
                  </div>
                  <div class="row text-center" >
                    <button type="reset" class="blue-button" >Reset</button>
                  </div>
				  </div>
				</div>
            </form>
            </div>
           </div>
          </div><!-- end of col-md-0 -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    $('#email1').blur(function(){
              var email=$('#email1').val();
              $.get("http://www.netcamp.in/website/emailcheck_1",{email:email},function(result){
                if (result != 0) 
              {
                 $('#message_email').css("display","initial").html("Email already exists");
              }
              else return false;
              //$('#message_email').html(result);
              });
            });
    </script>
    <script type="text/javascript">
            function formvalidation()
            {

              var phone=document.getElementById("txtPhone").value;
              var mobile=document.getElementById("txtMobile").value;

              var captchaword = document.getElementById("captcha").value;
              var captchadata=document.getElementById("captcha1").value;

              if ((phone=="" || phone==null) && (mobile=="" || mobile==null)) 
              {
                 $('#message').css("display","initial").html("Fill out phone number or mobile number");
                return false;
              }
              else if ((phone=="" || phone==null) && (mobile!="" || mobile!=null)) 
              {
                var mobile=document.getElementById("txtMobile").value;
                if(isNaN(mobile))
                {
                  $('#message').css("display","initial").html("Not a valid mobile number");
                  return false;
                }
                else
                {
                  $('#message').css("display","none").html('');
                }
              }
              else if ((phone!="" || phone!=null) && (mobile=="" || mobile==null)) 
              {
              var phone=document.getElementById("txtPhone").value;
              if(isNaN(phone))
              {
                $('#message').css("display","initial").html("Not a valid phone number");
                return false;
              }
              else
              {
                  $('#message').css("display","none").html('');
              }
              }
              else if ((phone!="" || phone!=null) && (mobile!="" || mobile!=null)) 
              {
                if(captchaword != captchadata) {
                  $('#message3').css("display","initial").html("Invalid image text");
                  return false;
                }
                var mobile=document.getElementById("txtMobile").value;
                if(isNaN(mobile))
                {
                  $('#message').css("display","initial").html("Not a valid mobile number");
                  return false;
                }
                else
                {
                  $('#message').css("display","none").html('');
                }

                var phone=document.getElementById("txtPhone").value;
              if(isNaN(phone))
              {
                $('#message').css("display","initial").html("Not a valid phone number");
                return false;
              }
              else
              {
                  $('#message').css("display","none").html('');
              }
              }
              else if ((phone!="" || phone!=null) && (mobile!="" || mobile!=null)) {
                $('#message3').css("display","initial").html("Enter image text");
                
              }

              var p1=document.getElementById("pwd1").value;
              var p2=document.getElementById("pwd2").value;
              if(p1 != p2)
              {
                $('#message2').css("display","initial").html("Password Dont Match");
                $('#pwd2').val("");
                return false;
              }
              else
              {
                $('#message2').css("display","none").html('');
              }
              var e1=document.getElementById("email1").value;
              var e2=document.getElementById("email2").value;
              if(e1 != e2)
              {
                $('#message1').css("display","initialinitial").html("Email should be same");
                return false;
              }
              else
              {
                $('#message1').css("display","none").html('');
              }
              var captchaword = document.getElementById("captcha").value;
              var captchadata=document.getElementById("captcha1").value;
              if(captchadata == "" || captchadata == null)
              {
                $('#message3').css("display","initial").html("Enter Image Text");
                return false; 
              }
              else if(captchaword != captchadata)
              {
                $('#message3').css("display","initial").html("Image text Didn't match");
                return false;
              }
              else
              {
                $('#message1').css("display","none").html('');
              }
            }
        </script>           
		 </div><!-- end of container height -->  <a href="#" class="scrollToTop"><i class="fa fa-2x fa-chevron-up uparrow"></i></a>


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://www.netcamp.in/application/assets/js/bootstrap.js"></script><!-- 
    <script src="http://www.netcamp.in/application/assets/js/jquery.min.js"></script>  -->
    <script src="http://www.netcamp.in/application/assets/js/jquery.tools.min.js"></script>  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.netcamp.in/application/assets/js/jquery.slicebox.js"></script>
    <script type="text/javascript" src="http://www.netcamp.in/application/assets/js/jquery.bxSlider.min.js"></script>
    <script>
        $(document).ready(function(){
  
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  
});
     </script>
    <script type="text/javascript">
      $(function() {
        
        var Page = (function() {

          var $navArrows = $( '#nav-arrows' ).hide(),
            $shadow = $( '#shadow' ).hide(),
            slicebox = $( '#sb-slider' ).slicebox( {
              onReady : function() {

                $navArrows.show();
                $shadow.show();

              },
              orientation : 'r',
              cuboidsRandom : true,
              autoplay : true
            } ),
            
            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              // add navigation events
              $navArrows.children( ':first' ).on( 'click', function() {

                slicebox.next();
                return false;

              } );

              $navArrows.children( ':last' ).on( 'click', function() {
                
                slicebox.previous();
                return false;

              } );

            };

            return { init : init };

        })();

        Page.init();

      });
    </script> 
     <script type="text/javascript">
        $(function(){
        $('#slider1').bxSlider({
          displaySlideQty: 3,
        
          moveSlideQty: 1,
        
        auto:false
        });

        $('#slider2').bxSlider({
          displaySlideQty: 3,
        
          moveSlideQty: 1,
        
        auto:false
        });
      });
    </script>
    <script>
        $(document).ready(function(){
          var height=$(window).height();
          $('.container-height').css('min-height', height-250);
        });
        $(function() {

      $(".slidetabs").tabs(".images > div", {
        // enable "cross-fading" effect
        effect: 'fade',
        fadeOutSpeed: "slow",
        // start from the beginning after the last tab
        rotate: true
      // use the slideshow plugin. It accepts its own configuration
      }).slideshow();
      });
    </script> 
    <script type="text/javascript">
      /*$('#course1 a').attr("href","#");*/
      //$('#course2 a').attr("href","#");
      /*$('#course5 a').attr("href","#");*/

      /*$('.dropdown-menu li#1').hide();
      $('.dropdown-menu li#2').hide();*/
      //$('.dropdown-menu li#3').hide();

      //$('.dropdown-menu li#regn6').hide();
      //$('.dropdown-menu li#regn8').hide();
      //$('.dropdown-menu li#regn10').hide();

      //$('.foot_ul li#hot5').hide()
      /*$('.foot_ul li#hot1 a').attr('href','#') 
      $('.foot_ul li#hot2 a').attr('href','#')*/

      //$('.dropdown-menu li#4 a').attr('href','#')
      //$('.dropdown-menu li#5 a').attr('href','#')

    </script>
    <script type="text/javascript">
    if($('.foot_ul ul li').length == 0)
    {
      $(this).remove();
    }
    $('#tabmenu li').click(function(){
      $('#tabmenu li').removeClass('active');
    })
    </script>

    <script type="text/javascript">
    $('#hide4').attr('href','#');
    $('#hide5').attr('href','#')
    $('#hide6').attr('href','#')
    </script>
  </body>
</html>