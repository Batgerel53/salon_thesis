<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
     
    
     
   $query=mysqli_query($con, "update  tblappointment set Remark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
    $msg="Бүх тэмдэглэл шинэчлэгдсэн .";
  }
  else
    {
      $msg="Ямар нэг зүйл буруу байна. Та дахин оролдоно уу ";
    }

  
}
  

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>AXE || Захиалга харах </title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/employee.sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/employee.header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Захиалга харах </h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<h4> Захиалга харах:</h4>
						<?php
$cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblappointment where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						<table class="table table-bordered">
							<tr>
    <th> Захиалгын дугаар</th>
    <td><?php  echo $row['AptNumber'];?></td>
  </tr>
  <tr>
<th>Нэр</th>
    <td><?php  echo $row['Name'];?></td>
  </tr>

<tr>
    <th>Имэйл хаяг</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
   <tr>
    <th>Утасны дугаар </th>
    <td><?php  echo $row['PhoneNumber'];?></td>
  </tr>
   <tr>
    <th> Огноо </th>
    <td><?php  echo $row['AptDate'];?></td>
  </tr>
 
<tr>
    <th> Цаг</th>
    <td><?php  echo $row['AptTime'];?></td>
  </tr>
  
  <tr>
    <th> Үйлчилгээ</th>
    <td><?php  echo $row['Services'];?></td>
  </tr>
  <tr>
    <th>Захиалга хийсэн огноо </th>
    <td><?php  echo $row['ApplyDate'];?></td>
  </tr>
  

<tr>
    <th>Төлөв </th>
    <td> <?php  
if($row['Status']=="1")
{
  echo "Selected";
}

if($row['Status']=="2")
{
  echo "Rejected";
}

     ;?></td>
  </tr>
						</table>
						<table class="table table-bordered">
							<?php if($row['Remark']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 

<tr>
    <th> Тэмдэглэл :</th>
    <td>
    <textarea name="remark" placeholder="" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
   </tr>

  <tr>
    <th> Төлөв :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="1" selected="true"> Сонгосон</option>
     <option value="2">Цуцлагдсан</option>
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-az-primary pd-x-20">Оруулах</button></td>
  </tr>
  </form>
<?php } else { ?>
						</table>
						<table class="table table-bordered">
							<tr>
    <th>Тэмдэглэл</th>
    <td><?php echo $row['Remark']; ?></td>
  </tr>


<tr>
<th>Тэмдэглэсэн огноо </th>
<td><?php echo $row['RemarkDate']; ?>  </td></tr>

						</table>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
<?php }  ?>