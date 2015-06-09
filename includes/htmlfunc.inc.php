<?php
/*
===========================================================================================
|	ID     : HTMLfunc
| Author : Alex Tebbutt
| Date   : 20/10/2010
| Build  : 1.0
| 
| Description 
|  All HTML functions go here
|
| Functions
|   DispHeader  : Output the header
|   DispFooter  : Output the footer
|   DispLogin   : Output the login bar
|   DispAdminOpt: Output the administrator menu options
|   DispUserOpt : Output the user menu options
|
===========================================================================================
*/

function DispHeader() {
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name= "description" content="oasis printing is a print shop based in Hammersmith and Fulham, London. we do lithography, and digital. we print full colour and two colour and single colour. our telephone number is  0800 018 5512 or 020 7386 7755. our email is info@oasisprinting.com we print full colour business cards, leaflets, letterheads, brochures, wedding stationery, personal stationery, copying, compliment slips, invitations, newsletters, postcards, we do design, and typesetting, and have special offers. we are very cheap, and quick.you can order on line. we are very competitive. we take all major credit cards, visa, mastercard, American express. we are based in central London. we can deliver anywhere in the country, and delivery in central london. we can print same day digital business cards. we also print posters up to A0."/>
<meta name="keywords" content="" />
<link rel="stylesheet" title="Oasis default style sheet" type="text/css" href="css/oasisdefault.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/iehacks.css" />
<![endif]-->
<title>Printers in Hammersmith & Fulham | Oasis Printing FTP</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> 
<script type="text/javascript" src="includes/jquery-1.2.2.pack.js"></script>
</head>
<body>
<?php
}

function DispNav($page = NULL)
{
	
	switch($page)
	{
		
		case 'index':
			$title = 'Home';
			break;

		case 'xmascards':
			$title = 'christmas cards';
			break;

		case 'leaflets':
			$title = 'leaflets';
			break;

		case 'copying':
			$title = 'copying / digital printing';
			break;			
					
		case 'businesscards':
			$title = 'business cards';
			break;

		case 'letterheads':
			$title = 'letterheads';
			break;

		case 'complimentslips':
			$title = 'compliment slips';
			break;

		case 'invitations':
			$title = 'invitations';
			break;	
			
		case 'posterprinting':
			$title = 'poster printing';
			break;

		case 'personalstationery':
			$title = 'personal stationery';
			break;

		case 'weddingstationery':
			$title = 'wedding stationery';
			break;

		case 'newslettersbrochures':
			$title = 'newsletters / brochures';
			break;	
			
		case 'postcards':
			$title = 'postcards';
			break;

		case 'designartwork':
			$title = 'design / artwork';
			break;

		case 'aboutus':
			$title = 'about us';
			break;

		case 'howtoorder':
			$title = 'how to order';
			break;						

		case 'contact':
			$title = 'contact';
			break;	

		case 'specialoffer':
			$title = 'special offers';
			break;	
	}
	
?>

	<div id="bluetop"<?php if($page == 'index') echo ' class="homenav"'; ?>>

		<div class="mobile show-hide">

	    <div id="navtop">

	      <ul>

	        <li id="home"><a href="index.php" title="Home">home</a></li>

<!-- 	        <li id="xmascards"><a href="xmascards.php" title="Christmas Cards">christmas cards</a></li> -->

	        <li id="leaflets"><a href="leaflets.php" title="leaflets">leaflets</a></li>

	        <li id="copying"><a href="copying.php" title="Copying">copying</a></li>

	        <li id="businesscards"><a href="businesscards.php" title="Business Cards">business cards</a></li>

	        <li id="letterheads"><a href="letterheads.php" title="Letterheads">letterheads</a></li>

	        <li id="complimentslips"><a href="complimentslips.php" title="Compliment Slips">compliment slips</a></li>

	        <li id="invitations"><a href="invitations.php" title="Invitations">invitations</a></li>

	      </ul>

	    </div>

	    <div id="navmiddle">

	      <ul>

	        <li id="posterprinting"><a href="posterprinting.php" title="Poster Printing">poster printing</a></li>

	        <li id="personalstationery"><a href="personalstationery.php" title="Personal Stationery">personal stationery</a></li>

	        <li id="weddingstationery"><a href="weddingstationery.php" title="Wedding Stationery">wedding stationery</a></li>

	        <li id="newslettersbrochures"><a href="newslettersbrochures.php" title="Newsletters/Brochures">newsletters/brochures</a></li>

	        <li id="postcards"><a href="postcards.php" title="Postcards">postcards</a></li>

	        <li id="designartwork"><a href="designartwork.php" title="Design/Artwork">design/artwork</a></li>

	      </ul>

	    </div>

	    <div id="navbottom">

	      <ul>

	        <li id="aboutus"><a href="aboutus.php" title="About Us">about us</a></li>

	        <li id="howtoorder"><a href="howtoorder.php" title="How To Order">HOW TO ORDER</a></li>

	        <li id="contact"><a href="contact.php" title="Contact">contact</a></li>

	      </ul>

	    </div>

    </div>

    <div id="navtitle"><h1 class="page-title"><?php echo $title; ?></h1><div class="hamburger"><a class="mobile-menu" href="#">Menu</a></div></div>
 
  </div>

<?php

}

/*----------------------------------------------------------------------------------------*/

function DispFooter () {
?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="includes/functions.js"></script>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
  <script type="text/javascript">
    _uacct = "UA-3117415-1";
    urchinTracker();
  </script> 	
</body>
</html>
<?php
}

/*----------------------------------------------------------------------------------------*/

function DispLogin ($parUsername) {
?>
<form id="login" name="login" method="post" action="oasisftp.php">
	<p><label for="Username">User Name:</label><input type="text" name="Username" id="Username" size="15" maxlength="30" value="<?php echo $parUsername; ?>">
	<label for="Password">Password:</label><input type="Password" name="Password" size="15" maxlength="30">
	<input type="submit" name="Login" value="Login"></p>
</form>
<?php
}

/*----------------------------------------------------------------------------------------*/

function DispAdminOpt () {
?>
<nav>
  <ul>
    <li><a href="uploadimage.php">Upload an image</a></li>
    <li><a href="manageusers.php">Manage users</a></li>
    <li><a href="logout.php">logout</a></li>
  </ul>
</nav>
<?php
}


/*----------------------------------------------------------------------------------------*/

function DispUserOpt () {
?>
<nav>
  <ul>
    <li><a href="upload.php">Upload an image</a></li>
    <li><a href="index.php">Home</a></li>  
    <li><a href="logout.php">logout</a></li>
  </ul>
</nav>



<?php
}

/*----------------------------------------------------------------------------------------*/


function DispUserHistory () {
?>
<h2>Recent File Uploads</h2>
<table>
  <tr><td>Username</td><td>Full Name</td><td>File Uploaded On</td><td>File uploaded</td><td>Download File</td><td>Delete File</td></tr>
<?php
  $DB = new DB;
  $varSQL = "select a.FILEID, b.FULLNAME, a.FILEDATE, a.FILENAME from a.CURRENTFILES, b.USER where b.USERID = a.USERID";
  
  while (list($varFileID, $varFullname, $varDateTime, $varFilename) = $DB->frowquery($varSQL)) {
?>  
    <tr><td><?php echo $varUsername; ?></td><td><?php echo $varFullname; ?></td><td><?php echo $varLastLogin; ?></td><td><?php echo $varFilename; ?></td></tr>
<?php  
  }
?>
</table>
<?php
}
?>
