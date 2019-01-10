<!DOCTYPE html>
<html lang="en">
	<head>
         <title>Project Web Development</title>
        <link rel="icon" type="image/png" href="contents/icon.png">
		<!-- Bootstrap -->
		<link href="bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
	<div class="container mobile_container">            
      <div class="row">
          <div class="col-xs-12 text-center">
                  <div class="logo">
                      <div class="inner">
						<img src="contents/page.png" 
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
                 <li><a href="home.php">Home</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="about%20us.php">About us</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="admin.php">Admin</a></li>
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
              <form class="form-horizontal" role="form" action="test2.php" 
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
    