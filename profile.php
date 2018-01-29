<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <style type="text/css">
    body{margin-top:20px;
          background: #f5f8fa;
    }

.profile {
  width: 100%;
  position: relative;
  background: #FFF;
  border: 1px solid #D5D5D5;
  padding-bottom: 5px;
  margin-bottom: 20px;
}

.profile .image {
  display: block;
  position: relative;
  z-index: 1;
  overflow: hidden;
  text-align: center;
  border: 5px solid #FFF;
}

.profile .user {
  position: relative;
  padding: 0px 5px 5px;
}

.profile .user .avatar {
  position: absolute;
  left: 20px;
  top: -75px;
  z-index: 2;
}

.profile .user h2 {
  font-size: 16px;
  line-height: 20px;
  display: block;
  float: left;
  margin: 4px 10px 10px 135px;
  font-weight: bold;
}

.profile .user .description {
  float: right;
  color: #666666;
}

.profile .user .actions {
  float: right;

}

.profile .user .actions .btn {
  margin-bottom: 0px;
}

.profile .info {
    width: 100%;
    float: left;
    padding-left: 20px;
}

.img-profile{
    height:100px;
    width:100px;
}

.img-cover{
    width:800px;
    height:300px;
}

.container-fluid {
    padding-right: 0px;
  }

@media (max-width: 768px) {
  .btn-responsive {
    padding:2px 4px;
    font-size:80%;
    line-height: 1;
    border-radius:3px;
  }

  .container-fluid {
    padding-right: 15px;
  }
}

@media (min-width: 769px) and (max-width: 992px) {
  .btn-responsive {
    padding:4px 9px;
    font-size:90%;
    line-height: 1.2;
  }
}

    ul.menu {
      /*border: 1px solid red;*/
    }

    ul.menu li {
      display: inline-block;
    }

    ul.menu li i{
      color: #f5f8fa;
    }

    ul.menu li:hover i{
      color: #007bff;
    }

    ul.menu li.active i{
      color: #007bff;
    }

    </style>

</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div><i class="zmdi zmdi-font" style="font-size: 40px;"></i></div>
          <div style="color:#cccccc;">Your slogan here</div>
        </div>
        <div class="col-md-7 text-left">

          <ul class="menu">
            <li class="active"><a href="#" class="btn btn-primary">Home <br /> <i class="fa fa-sort-desc" aria-hidden="true"></i> </a></li>
            <li><a href="#" class="btn btn-default">Find Freelancers <br /> <i class="fa fa-sort-desc" aria-hidden="true"></i></a></li>
            <li><a href="#" class="btn btn-default">Find Work <br /> <i class="fa fa-sort-desc" aria-hidden="true"></i></a></li>
            <li><a href="#" class="btn btn-default">How to? <br /> <i class="fa fa-sort-desc" aria-hidden="true"></i></a></li>
          </ul>
          
        </div>
        <div class="col-md-1 text-right" style="text-align:right;">
          <a href="#">
            <img src="https://bootdey.com/img/Content/user-453533-fdadfd.png" style="width:40px;" class="img-thumbnail">
          </a>
        </div>
        <div class="col-md-2">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" style="height:39px;">
              Post a Project
            </button>
          </div>
        </div> 
      </div>
    </div>
    <br />
    <div class="clearfix"></div>
    <div class="row" style="margin-left:0px; margin-right:0px;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="profile clearfix">                            
                <div class="image">
                    <img src="https://lorempixel.com/700/300/nature/2/" style="width:100%;" class="img-cover">
                </div>                            
                <div class="user clearfix">
                  <div class="avatar">
                      <img src="https://bootdey.com/img/Content/user-453533-fdadfd.png" class="img-thumbnail img-profile">
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Martin maoth</h2>
                      <div class="info">
                        <p><span class="title"><i class="fa fa-book" aria-hidden="true"></i> Skills :</span>  Photoshop, Illustrator, PHP, Javascript</p>                                    
                        <p><span class="title"><i class="zmdi zmdi-phone-forwarded"></i> Contact:</span> 010922393 | Email : </p>
                      </div>
                    </div>
                  </div>
                  
                                              
                                                                                                                  
                </div>                       
                <!-- <div class="info">
                    <p><span class="glyphicon glyphicon-globe"></span> <span class="title">Address:</span>  St. Revutskogo, Kiev, Ukraine</p>                                    
                    <p><span class="glyphicon glyphicon-gift"></span> <span class="title">Date of birth:</span> 14.02.1989</p>                                
                </div>  -->                             
            </div>
            <div class="clearfix" style="margin-top:-20px; background: #fff; height: 500px; border:1px solid #cccccc;">
              <nav class="navbar navbar-inverse" style="border-radius:0px;">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-btn fa-home"></i></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <ul class="nav navbar-nav navbar-right">
                      <li class="active li-frofile-menu" id="overview"><a href="#" class="profile-menu" data-menu="overview">Overview</a></li>
                      <li class="li-frofile-menu" id="project"><a href="#" class="profile-menu" data-menu="project">Project</a></li>
                      <li class="li-frofile-menu" id="bid"><a href="#" class="profile-menu" data-menu="bid">Bid</a></li>
                      <li class="li-frofile-menu" id="about"><a href="#" class="profile-menu" data-menu="about">About</a></li>
                      <li class="li-frofile-menu" id="image"><a href="#" class="profile-menu" data-menu="image">Image</a></li>
                      <li class="li-frofile-menu" id="message"><a href="#" class="profile-menu" data-menu="message">Message</a></li>
                      <li class="li-frofile-menu" id="subscribe"><a href="#" class="profile-menu" data-menu="subscribe">Subscribe</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" class="profile-menu" data-menu="skill">Update Skill</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#" class="profile-menu" data-menu="education">Update Education</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#" class="profile-menu" data-menu="change_account_password">Change Account Password</a></li>
                        </ul>
                      </li>
                      <li class=""><a href="#">Sign Out</a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>

              <div id="load-image" class="text-center">
                <?php include_once('images/loading.php'); ?>
              </div>
              <div id="load-page" style="padding: 20px;">
                <?php include_once('component/overview.php'); ?>
              </div>         
                                    
            </div>
            <br /><br />
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#load-image').hide();
      $(document).on('click', '.profile-menu', function(e) {
        e.preventDefault();
        var menu = $(this).data('menu');

        $.ajax({
            type: "GET",
            url: 'component/'+menu+'.php',
            data: {"menu":menu},
            cache: false,
            beforeSend: function () {
              $('.li-frofile-menu').removeClass( "active" );
              $('#'+menu).addClass( "active" );
              $('#load-image').show();
              $('#load-page').html('').show();
            },
            complete: function () {
              $('#load-image').hide();
            },
            success: function (html) {
              $('#load-page').html(html).show();
            },
            error: function (request, status, error) {
                var msg = '';
                msg += '<div class="alert alert-warning" id="warning">';
                msg += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    msg += '<b><i class="fa fa-info-circle"></i> '+error+' </b><br />';
                msg += '</div>';
                $('#load-page').html(msg).show();
            }
        });

      });

    })
  </script>

</body>
</html>