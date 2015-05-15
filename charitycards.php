<?php 

//  if (isset($_POST["submit"])) {
// Get any POSTed variables
    $error = FALSE;
  
    if (isset($_POST["name"])) {
      $name = $_POST["name"];
    } else {
      $name = NULL;
    }
  
    if (isset($_POST["email"])) {
      $email = $_POST["email"];
    } else {
      $email = NULL;
    }

    if (isset($_POST["address1"])) {
      $address1 = $_POST["address1"];
    } else {
      $address1 = NULL;
    }

    if (isset($_POST["address2"])) {
      $address2 = $_POST["address2"];
    } else {
      $address2 = NULL;
    }
            
    if (isset($_POST["phone"])) {
      $phone = $_POST["phone"];
    } else {
      $phone = NULL;
    }
    
    if (isset($_POST["card1"])) {
      $card1 = $_POST["card1"];
    } else {
      $card1 = NULL;
    }
    
    if (isset($_POST["card2"])) {
      $card2 = $_POST["card1"];
    } else {
      $card2 = NULL;
    }
    
    if (isset($_POST["card3"])) {
      $card3 = $_POST["card1"];
    } else {
      $card3 = NULL;
    }
    
    if (isset($_POST["card4"])) {
      $card4 = $_POST["card1"];
    } else {
      $card4 = NULL;
    }
    
    if (isset($_POST["card5"])) {
      $card5 = $_POST["card1"];
    } else {
      $card5 = NULL;
    }
    
    if (isset($_POST["card6"])) {
      $card6 = $_POST["card1"];
    } else {
      $card6 = NULL;
    }
    
    if (isset($_POST["card7"])) {
      $card7 = $_POST["card1"];
    } else {
      $card7 = NULL;
    }
    
    if (isset($_POST["message"])) {
      $message = $_POST["message"];
    } else {
      $message = NULL;
    }
    
/*    if ($name !=  NULL && $email != NULL && $message != NULL) {
      $to = "josie@justpeachee.co.uk";
      $subject = "Query generated from Personal Training side of website";
      $body = "Hi Josie,\n\nYou've been contacted through www.justpeachee.co.uk by someone with a Personal Training enquiry, details below: \n\n---------- Start of message ----------\n\n\nName: ".$name."\nEmail address: ".$email."\nPhone Number: ".$phone."\n\nServices interested in:";
      
      $noServices = TRUE;
   
      if ($service1) {
        $body .= "\n - One to one training";
        $noServices = FALSE;
      }
      
      if ($service2) {
        $body .= "\n - Group session / Bridal package";
        $noServices = FALSE;
      }
      
      if ($service3) {
        $body .= "\n - Pre & Post Natal";
        $noServices = FALSE;
      }
      
      if ($service4) {
        $body .= "\n - Weight management";
        $noServices = FALSE;
      }
      
      if ($service5) {
        $body .= "\n - Buggy class";
        $noServices = FALSE;
      }
      
      if ($service6) {
        $body .= "\n - Weight management class";
        $noServices = FALSE;
      }
      
      if ($service7) {
        $body .= "\n - Sports / Deep tissue massage";
        $noServices = FALSE;
      }
      
      if ($service8) {
        $body .= "\n - Therapeutic massage";
        $noServices = FALSE;
      }
      
      if ($noServices) {
        $body .= "\n - None";
      }
      
      $body .= "\n\nMessage:\n".$message."\n\n\n---------- End of message ----------";
      $header = "From: info@justpeachee.co.uk\r\n"."X-Mailer: php";
      mail($to, $subject, $body, $header);
      
      $thanks = "<p class='thanks'>Thanks for dropping me a line. I'll be in touch as soon as I can.</p>";
      
      $name = NULL;
      $email = NULL;
      $phone = NULL;
      $service1 = FALSE;
      $service2 = FALSE;
      $service3 = FALSE;
      $service4 = FALSE;
      $message = NULL; 
      $error = FALSE;    
    } */
    
    if (isset($_POST["submit"]) && ($name == NULL || $email == NULL || $message == NULL)) {
      $error = TRUE;
    } else {
      $error = FALSE;
    }
//  }
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name= "description" content="oasis printing is a print shop based in Hammersmith and Fulham, W6, London. we do lithography, and digital. we print full colour and two colour and single colour. our telephone number is  0800 018 5512 or 020 7386 7755. our email is info@oasisprinting.com we print full colour business cards, leaflets, letterheads, brochures, wedding stationery, personal stationery, copying, photocopying, compliment slips, invitations, newsletters, postcards, we do design, and typesetting, and have special offers. we are very cheap, and quick.you can order on line. we are very competitive. we take all major credit cards, visa, mastercard, American express. we are based in central London. we can deliver anywhere in the country, and delivery in central london. we can print same day digital business cards. we also print posters up to A0. We do photocopyin in Hammersmith, photocopying London, photocopying Fulham, photocopying w6"/>
<meta name="keywords" content="" />
<link rel="stylesheet" title="Oasis default style sheet" type="text/css" href="css/oasisdefault.css" />
<title>Printers in Hammersmith & Fulham | Oasis Printing | Charity Greetings Cards</title>
</head>
<body>
	<div id="holder">
    <div id="bluetop">
      <div id="navtop">
        <ul>
          <li id="home"><a href="index.php" title="Home">home</a></li>
          <li id="xmascards"><a href="xmascards.php" title="Christmas Cards">christmas cards</a></li>
          <li id="leaflets"><a href="leaflets.php" title="leaflets">leaflets</a></li>
          <li id="copying"><a href="copying.php" title="Copying">copying</a></li>
          <li id="businesscards"><a href="businesscards.php" title="Business Cards">business cards</a></li>
          <li id="letterheads"><a href="letterheads.php" title="Letterheads">letterheads</a></li>
          <li id="complimentslips"><a href="complimentslips.php" title="Compliment Slips">compliment slips</a></li>
          <li id="invitations"><a href="invitations.php" title="Invitations">invitations</a></li>
        </ul>
      </div>
      <div class="clear"></div>
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
      <div class="clear"></div>
      <div id="navbottom">
        <ul>
          <li id="aboutus"><a href="aboutus.php" title="About Us">about us</a></li>
          <li id="howtoorder"><a href="howtoorder.php" title="How To Order">HOW TO ORDER</a></li>
          <li id="contact"><a href="contact.php" title="Contact">contact</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div id="navtitle"><h1 class="page-title">charity greetings cards</h1></div>
    </div>

    <div id="main">

      <form id="order" method="post" action="charitycards.php">

        <fieldset>

          <ul id="customerdetails">

            <li>
              <label class="general competition-bold" for="name">Customer Name <?php if ($error) echo '<strong>'; ?>*<?php if ($error) echo '</strong>'; ?></label>
              <input class="underline" id="name" name="name" type="text" placeholder="First and last name" required size="95" value="<?php echo $name; ?>">
            </li>
            
            <li>
              <label class="general competition-bold" for="address">Address <?php if ($error) echo '<strong>'; ?>*<?php if ($error) echo '</strong>'; ?></label>
              <input class="underline" id="address" name="address" type="text" placeholder="Delivery Address" required size="95" value="<?php echo $address1; ?>">
              <label class="general competition-bold" for="address2">&nbsp;</label>
              <input class="underline" id="address2" name="address2" type="text" placeholder="Delivery Address" required size="95" value="<?php echo $address2; ?>">
            </li>

            <li class="fltleft">
              <label class="general competition-bold" for="phone">Phone</label>
              <input class="underline" id="phone" name="phone" type="tel" placeholder="Eg. +447500000000" size="27" value="<?php echo $phone; ?>">
            </li>
            
            <li class="fltleft">
              <label class="email competition-bold" for="email">Email Address <?php if ($error) echo '<strong>'; ?>*<?php if ($error) echo '</strong>'; ?></label>
              <input class="underline" id="email" name="email" type="email" placeholder="name@hotmail.com" required size="38" value="<?php echo $email; ?>">
            </li>

            <li>
          
          </ul>
          
          <div class="clear"></div>
          
          <p class="competition-bold">All cards come blank and with their own envelopes.</p>
          
          <ul id="carddetails">
                     
            <li>
              <p class="">Late in the day, Croyde Bay</p>
              <div class="cardimage"><img src="../images/charitycards/lateInTheDaySmall.jpg" alt="lateInTheDaySmall" width="200" height="123" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card1" name="card1" type="text" size="3" value="<?php echo $card1; ?>">
            </li>
            
            <li>
              <p class="" for="card2">Majestic Putsborough</p>
              <div class="cardimage"><img src="../images/charitycards/majesticPutsboroughSmall.jpg" alt="majesticPutsboroughSmall" width="200" height="135" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card2" name="card2" type="text" size="3" value="<?php echo $card2; ?>">
            </li>            
          
            <li>
              <p class="" for="card3">Otto</p>
              <div class="cardimage"><img src="../images/charitycards/ottoJumpSmall.jpg" alt="ottoJumpSmall" width="154" height="200" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card3" name="card3" type="text" size="3" value="<?php echo $card3; ?>">
            </li>
            
            <li>
              <p class="" for="card4">Kelly</p>
              <div class="cardimage"><img src="../images/charitycards/kellySmall.jpg" alt="kellySmall" width="141" height="200" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card4" name="card4" type="text" size="3" value="<?php echo $card4; ?>">
            </li>
            
            <li>
              <p class="" for="card5">Laka Lundy</p>
              <div class="cardimage"><img src="../images/charitycards/lakaLundySmall.jpg" alt="lakaLundySmall" width="200" height="150" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card5" name="card5" type="text" size="3" value="<?php echo $card5; ?>">
            </li>
            
            <li>
              <p class="" for="card6">Mack at Croyde</p>
              <div class="cardimage"><img src="../images/charitycards/macSmall.jpg" alt="macSmall" width="200" height="118" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card6" name="card6" type="text" size="3" value="<?php echo $card6; ?>">
            </li>
            
            <li>
              <p class="" for="card7">Croyde Bay</p>
              <div class="cardimage"><img src="../images/charitycards/croydeBaySmall.jpg" alt="croydeBaySmall" width="136" height="200" /></div>
              <div class="clear"></div>
              <label class="">Quantity</label>
              <input class="underline" id="card7" name="card7" type="text" size="3" value="<?php echo $card7; ?>">
            </li>  
              
          </ul>
          
          <div class="clear"></div>
                        
          <input class="" type="submit" name="submit">

        </fieldset>      

      </form>

    </div>
    
  </div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
  <script type="text/javascript">
    _uacct = "UA-3117415-1";
    urchinTracker();
  </script>   
</body>
</html>