<html>
<head>
<title>#include<></title>
<meta charset="utf-8">
	<meta name="viewport" content="width:device-width,initial-scale:1">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
         <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link href="css/particle.css" rel="stylesheet">



 <style>
 .w-100 {
            width: 100%;
        }

        .h-100 {
            height: 100%;
        }

        .p-0 {
            padding: 0;
        }

        .m-0 {
            margin: 0;
        }

        .nav {
            
            font-size: 20px;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }

        .nav-container {
            padding-top: 1% !important;

        }

        .max-100 {
            max-width: 100%;
        }

        .nav-element {
            text-align: center;
            padding: 1% !important;
        }

        a
        {
            color:white;
        }
        div.nav-element:hover
        {
            border:2px solid white;
        }
        div.active
        {
            border:2px solid white;
        }

  
 	.include{

 		font-weight: bold;
 		font-family: 'Montserrat', sans-serif;
 		font-size: 45pt;
 		color: white;	

 }
.head{
	color: white;
	font-weight: bold;
 	font-family: 'Montserrat', sans-serif;
 	font-size: 30pt;
 	border: 5px solid white;


}
.font
{
	color: white;
	font-weight: bold;
 	font-family: 'Montserrat', sans-serif;
 	font-size: 12pt;
 	padding-top: 25px;


 
}
.page-footer
{
background-color: 000032;
height: 70px;
margin-top: 71px;
color: white;
font-weight: bold;
font-family: 'Montserrat', sans-serif;
font-size: 20px;
margin-bottom: 0px;

}
.max-100 {
            max-width: 100%;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
}

/*.nm:hover .uppar{
display:block;
opacity:90%;
}*/


</style>
</head>


<body>
<?php
$hostname="localhost";
$username="root";
$password="";
$mysql_database="club_images";
$db=mysqli_connect($hostname,$username,$password,$mysql_database);
$sql="SELECT images,Name,link FROM images LIMIT 6";
$result = mysqli_query($db, $sql);?>

    <div id="particles-js" class="max-100"></div>
      <div class="container w-100 h-100 p-0 ">

        <div class="row w-100 p-0">
            <div class="col m6 offset-m6 nav-container">
                <div class="row nav">
                    <div class="col m3 nav-element"><a>HOME</a></div>
                    <div class="col m3 nav-element"><a>ABOUT</a></div>
                    <div class="col m3 nav-element active"><a>TEAM</a></div>
                    <div class="col m3 nav-element"><a>CONTACT US</a></div>
                </div>
            </div>
<div class="row">
	<div class="col-s12" style="padding-top:120px;">
		<center><span><img src="logo2.png"  class="responsive-img" style="height:50px;width:50px;"></span>
		<span class="include">include<> Team</span></center>
</div>
</div>

</div>
<div class="row">
	<div class="col s4 ">
<hr  color="white">
</div>
<div class="col s4">
<center class="head">IT 4th YEAR</center></div>
<div class="col s4">
<hr color="white">
</div>
</div>


<div class="container">
	
<?php
if(mysqli_num_rows($result)>0){
    $row= " ";
    $i=0;
    while($row && $i<6){
    $i=$i+3;
       
   ?>
    
   <div class="row" style="margin-top:50px;">
    <?php $row=mysqli_fetch_assoc($result);?>

    <div class="col s4 image">
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'"  
    class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
    </a>

<div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                </div>
   </div>
    <div class="col s4 image">
        <?php $row=mysqli_fetch_assoc($result);?>
     <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'" class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
    </a>
<div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                              </div>
    </div>

    <div class="col s4 image">
        <?php  $row=mysqli_fetch_assoc($result);?>
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'" class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
      </a>
       <div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                </div>
</div>
     
    
<?php
}}
mysqli_close($db);
?>
</div>
</div>

<div class="row" style="margin-top:110px;">
    <div class="col s4 ">
<hr  color="white">
</div>
<div class="col s4">
<center class="head">IT 3rd YEAR</center></div>
<div class="col s4">
<hr color="white">
</div>
</div>

<?php
$hostname="localhost";
$username="root";
$password="";
$mysql_database="club_images";
$db=mysqli_connect($hostname,$username,$password,$mysql_database);
$sql="SELECT images,Name,link FROM third_year";
$result = mysqli_query($db, $sql);?>

<?php
if(mysqli_num_rows($result)>0){
    $row=" ";
    $i=0;
    while($row && $i<=12){
    
        $i=$i+4;
   ?>
    
   <div class="row" style="margin-top:75px;">
    <?php $row=mysqli_fetch_assoc($result);?>

    <div class="col s3 image">
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'"  
    class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
    </a>

<div class="row">
                <div class="col s12 font" style="margin-top:25px;">
                 <?php echo $row["Name"]?></div>
                </div>
   </div>
    <div class="col s3 image">
        <?php $row=mysqli_fetch_assoc($result);?>
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'" class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
    </a>
<div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                              </div>
    </div>

    <div class="col s3 image">
        <?php  $row=mysqli_fetch_assoc($result);?>
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'" class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
      </a>
       <div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                </div>
</div>
     
    
<?php
}}
mysqli_close($db);
?>
</div>
</div>

<?php
$hostname="localhost";
$username="root";
$password="";
$mysql_database="club_images";
$db=mysqli_connect($hostname,$username,$password,$mysql_database);
$sql="SELECT images,Name,link FROM third_year_left";
$result = mysqli_query($db, $sql);?>

<?php
if(mysqli_num_rows($result)>0){
    $row=" ";
    $i=0;
    
    while($row && $i<2){
    $i=$i+2;
        
   ?>
    
   <div class="row" style="margin-top:75px;">
    <div class="col s1">
    </div>
    <?php $row=mysqli_fetch_assoc($result);?>

    <div class="col s5 image"  >
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'"  
    class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
    </a>

<div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                </div>
   </div>
    <div class="col s5 image">
        <?php $row=mysqli_fetch_assoc($result);?>
    <a href="<?php print($row['link']); ?>"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row["images"] ).'" class="responsive-img circle" style="width:180px; height:180px;border:white solid 2px;"/>';?>
    </a>
<div class="row">
                <div class="col s12 font" style="margin-top:25px;margin-left:25px;">
                 <?php echo $row["Name"]?></div>
                              </div></div>
                              <?php
}}
mysqli_close($db);
?>
<div class="col s1"></div>
</div>
</div>





<div class="row">
	<div class="col s12">
<div class="page-footer">
	<div class="col s4">
Microsoft Campus Club</div>

<div class="col s4">
	<div class="row">
	<div class="col s3"><i class="fab fa-instagram"style="font-size:30px;margin-left:0px;"></i></div>
	<div class="col s3"><i class="fab fa-twitter"style="font-size:30px;margin-left:0px;"></i></div>
	<div class="col s3"><i class="fab fa-facebook" style="font-size:30px;margin-left:0px;"></i></div>
	<div class="col s3"><i class="fab fa-linkedin"style="font-size:30px;margin-left:0px;"></i></div>
</div>
</div>
<div class="col s4 right-align">
	Mozilla Campus Club
</div>
    
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
   
    
	</body>
	</html>
