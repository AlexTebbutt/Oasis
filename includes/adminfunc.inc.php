<?php
/*
===========================================================================================
|	ID     : adminfunc
| Author : Alex Tebbutt
| Date   : 05/02/2007
| Build  : 1.0
| 
| Description 
|  Admin and core site functions
|
| Functions
|  VerifyLogin : Validate the usename/password against that in the DB
|  UserLoggedIn: Check the user is logegd in, if not kick them back to the main page.
|  AdminLoggedIn: Check the user is an administrator, if not kick them back to the main page.
|
===========================================================================================
*/

function VerifyUser ($parUsername, $parPassword) {

  $DB = new DB;
  $varSQL = "select USERID, USERNAME, PASSWORD, ADMINISTRATOR, ENABLED from USER where USERNAME='$parUsername' AND password='$parPassword'";
  echo $varSQL."<br />";
  if (list($_SESSION["UserID"], $_SESSION["Username"], $_SESSION["Password"], $_SESSION["Administrator"], $varEnabled) = $DB->frowquery($varSQL)) {
    if ($varEnabled) {
      $_SESSION["Loggedin"] = TRUE;
      $varSQL = "update USER set LASTLOGIN='".date("Y.m.d")."' where USERID='".$_SESSION["UserID"]."'";
      $DB->query($varSQL);
      return(TRUE);
    } else {
      return(FALSE);
    }    
  }
}

/*----------------------------------------------------------------------------------------*/

function UserLoggedIn () {
 
  if ($_SESSION["Loggedin"] == FALSE) {
    echo "<meta http-equiv=\"Refresh\" content=\"0;url=oasisftp.php\">";
  } else {
    return TRUE;
  }
}

/*----------------------------------------------------------------------------------------*/

function AdminLoggedIn () {
 
  if (($_SESSION["Loggedin"] == FALSE)||($_SESSION["Administrator"] == FALSE)) {
    echo "<meta http-equiv=\"Refresh\" content=\"0;url=oasisftp.php\">";
  } else {
    return TRUE;
  }
}

/*----------------------------------------------------------------------------------------*/
  