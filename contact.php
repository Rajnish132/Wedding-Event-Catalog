<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Contact Us</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
</head>
<body style="background-color: #f0ad4e">
    <?php require 'utils/navbar.php'; ?><!--header content. file found in utils folder-->
    <div class="container-fluid">
        <img src="images/Contactus.jpg" alt="Contactus" style="width:100%;  height: 300px;">
    </div>
    <br><br>

    <div class="row">
      <center><font style="font-size: 20px; color: brown">GET IN TOUCH</font></center><br>
        <div class="col-md-12">
            <center><i class="fa fa-envelope" style="font-size: 60px;color: grey"></i></center>
            <center><font style="font-size: 20px;color: black"><b>We want to hear from you!</b></font></center><br>
            <center><font style="font-size: 20px;color: grey">If you have any questions about the site or need support, please fill out the form below, and we will respond to<br> your request as quickly as possible.</font></center>
        </div>
    </div><br><br><br>

    <div class = "content"><!--body content holder-->
        <div class = "container">
            <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                <h1>Contact Us</h1><!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="col-md-6 contacts">
                <h1><span class="glyphicon glyphicon-user"></span> RPO</h1>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> Email: rajnishrajan7890@gmail.com<br>
                    <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/kumarrajnish7162<br>
                    <span class="glyphicon glyphicon-phone"></span> Mobile: 07050460619
                </p>
            </div>
            <div class="col-md-6">
                <form action="cont.php" class ="form-group" method="POST">
                    <div class="form-group">
                        <label for="Title">Title:</label>
                        <input type="text" name="title" id="Title" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="Email" name="Email" id="Email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="Comment">Message:</label>
                        <textarea id="Comment" name="Comment" rows="10" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </div>


</div><!--body content div-->
<?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
</body>
</html>
