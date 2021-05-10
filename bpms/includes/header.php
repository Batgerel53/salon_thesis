
 <header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
        <a class="navbar-brand" href="index.php">Үсчин гоо сайхны салоны веб систем</a>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Мэйл хаяг : </p>
              <a href="mailto:info@example.com">batgerelphone@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text"> Холбоо барих дугаар: </p>
              <a href="tel:61-1234-5678-09">+9761580000</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>


   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Нэвтрэх /Бүртгүүлэх</a> </div>
<?php }
else{

echo " Автомашин түрээсийн системд тавтай морил";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>



 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
      <div class="container">
      
       
        <div class="collapse navbar-collapse" id="ftco-nav">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Нүүр хуудас</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Үйлчилгээ</a></li>
            <li class="nav-item"><a href="employee.php" class="nav-link">Ажилтан</a></li>

            <li class="nav-item"><a href="branch.php" class="nav-link">Салбар</a></li>

            <li class="nav-item"><a href="about.php" class="nav-link">Бидний тухай</a></li>
           
            <li class="nav-item"><a href="contact.php" class="nav-link">Холбоо барих</a></li>
            
            <li class="nav-item"><a href="admin/index.php" class="nav-link">Админ</a></li>
          </ul>
        </div>
      </div>
    </nav>
