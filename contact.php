<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Prudence</title>
    <link rel="stylesheet"type="text/css"href="prustyle.css">
</head>
<body>


    <div class="navbar"id="navbar">
        
        <a href="index.html">HOME</a>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>



</div>


<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="about prudence.html">About</a>
     
      <a href="agencies.html">Agencies</a>
      <a href="contact.html">Contact</a>
      <br><br>
     
      <marquee  behavior="alternate"> <a><font color="RED">Coming Soon!!!:</font>STOP THE RED SPOT CAMPAIGN</a></marquee>
    </div>
  </div>

<div class="icon-bar">
    <a href="#" class="facebook">@facebook</a> 
    <a href="#" class="twitter">@twitter</a> 
    <a href="mailto:prudence@gmail.com" class="google">@gmail.com</a> 
    <a href="#" class="linkedin">@linkedin</a>
    <a href="#" class="youtube">@youtube</a> 
</div>
  
  
<br />
<br /><br /><br />
<?php
include 'connect.php';
?>
<?php
			$Names=$Email=$Subjects="";
		if(isset($_REQUEST['submit']))
{
			$Names=$_REQUEST['name'];
      			$Email=$_REQUEST['email'];
            $Subjects=$_REQUEST['subject'];
			
			
		   $insert=account("insert into account values('','$Names', '$Email', '$Subjects',1)") or die ("Error:".mysql_error());
		if($insert)
	{
	
		echo "Comment Sent successfuly";
    }
	       
				// insert user options
		
		
			//echo $Firstname.$Lastname.$Username.$Email.$Password.$passhash;
			
}
?>			





<form action="<?php $_PHP_SELF;?>" method="post" class="container">
<label> <span>Enter Names:</span>
<input type="text" name="name" value="<?php echo $Names;?>" required/>
</label>
<label> <span>Email:</span>
<input type="text"  name="email" value="<?php echo $Email;?>" required />
</label>
<label> <span>Subject:</span>
<input type="text"  name="subject" value="<?php echo $Subjects;?>" height="200px"required />
</label>
<input type="submit" name="submit" class="button" value="submit" />
</div>
</form>













































<div id="prufooter">
  
    
  <table cellspacing="30px">
      <tr>
          <th><a href="index.html">Home</a></th>
          <th>@Facebook</th>
          <th>@Twitter</th>
          <th>@Email</th>
          <th>Gaba.org</th>
  
          
      </tr>
      
      <tr>
          
          <th>@linkedin</th>
          <th>@youtube</th>
          <th><a href="cuea.edu">Cuea.edu</a></th>
          <th><a href="contact.html">Contact</a></th>
          
  
      </tr>
      <tr>
        <th><a href="about prudence.html">About</a>
          
        </th>
        <th><a href="agencies.html">Agencies</a></th>
        
      </tr>
  
  </table>
  
  
  </div>
  
  
<script src="slides.js">


</script>
<script src="prudence.js"></script>
<script src="curtain.js"></script>


    
</body>
</html>