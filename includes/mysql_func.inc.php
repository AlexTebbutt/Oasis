<?php
/*
 ===========================================================================================
|	ID     : DB_MySQL
| Author : Alex Tebbutt
| Date   : 30/08/2002
| Build  : 1.0
| 
| Description: 
|				Simple MySQL database class. Contains all functions required to connect to and query a 
|       MySQL database.
|
| Functions:
|				connect_db	- Connect to the specified DB using the given Host, Username and password.
|											Switch to the given database instance.
|
|				switch_db		- Switch to a different database instance.
|
|				kill				- Kill the current session on error
|
|				query				- Execute the passed query. No return. Used for INSERT and UPDATE.
|
|				numquery		- Return number of rows retrieved from passed query.
|
|				frowquery		- Return an array, indexed by number, of current retrieved row.
|
|				fobjquery		- Return current retrieved row as object.
|
|				fassocquery - Return an associated array (indexed by both number and column
|											name) of current row.
|
|				farrquery		- Return an array, indexed by column name, of current row. 
|
|				getid				- Return the value of the index of the last created row in a table
|											if that table has an autoincrement column.
|
| License Stuff:
|				This program is free software; you can redistribute it and/or modify
|				it under the terms of the GNU General Public License as published by
|				the Free Software Foundation; either version 2, or (at your option)
|				any later version.
|
|				This program is distributed in the hope that it will be useful,
|				but WITHOUT ANY WARRANTY; without even the implied warranty of
|				MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
|				GNU General Public License for more details.
|
|				You should have received a copy of the GNU General Public License
|				along with this program; if not, write to the Free Software Foundation,
|				Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 ===========================================================================================
*/

class DB_MySQL {
	var $varHost      = "";
	var $varDatabase  = "";
	var $varUser      = "";
	var $varPswd      = "";
	var $varDBStatus  = "";
	var $varDBLink    = "";
	var $varQuery     = "";
	var $varRowitems	=	array();
	var $varID        = 0;
	var $varQuery_rtn = 0;
	var $varRownum    = 0;

/*

	//Uncomment and fill in the HOST_NAME, DB_NAME, USER_NAME and PASSWORD variables if//
	//you are only interrogating one DB.//

	function DB_MySQL {
		//PRIVATE - CONSTRUCTOR//
	  $this->varHost     = "HOST_NAME";
	  $this->varDatabase = "DB_NAME";
	  $this->varUser     = "USER_NAME";
	  $this->varPswd     = "PASSWORD";
	}
*/

	function connect_db() {
		//PRIVATE//
		if ($this->varDBLink == "") {
			$this->varDBLink = mysql_connect($this->varHost, $this->varUser, $this->varPswd);
			$this->varDBStatus = mysql_select_db ($this->varDatabase, $this->varDBLink);

			if (!$this->varDBLink) {
				$this->kill("$this->varDBLink is false, mysql_connect failed");
			} elseif (!$this->varDBStatus) {
				$this->kill("$this->varDBStatus is false, unable to connect to Database");			
			}			
		}
	}

	function switch_db($parSwitchDatabase) {
		//PUBLIC//
		$this->varDatabase = $parSwitchDatabase;
	}

	function kill($parMsg) {
		//PRIVATE//
		echo "<font size=\"+1\"><b><font color=\"#CC0000\">DB Error:</font></b></font> <font face=\"Arial, Helvetica, sans-serif\"> %s</font><br />".$parMsg;
		die("Session killed.");
	}

	function query ($parQuerystr = FALSE) {
		//PUBLIC//
		if ($parQuerystr != FALSE) {
			$this->varQuery = $parQuerystr;
		}

		$this->connect_db();
		#echo "Debug: query = $this->varQuery<br />";
		$this->varQuery_rtn = mysql_query($this->varQuery, $this->varDBLink);

		if ($parQuerystr != false) {
			return ($this->varQuery_rtn);
		}
	}

	function numquery($parQuerystr) {
		//PUBLIC//
		$this->varQuery = $parQuerystr;
		$this->query();

		if($this->varQuery_rtn > 0) {
			$this->varRownum = mysql_num_rows($this->varQuery_rtn);
			#echo "Debug: numquery returned = $this->varRownum<br />";
		}
		
		return ($this->varRownum);
	}

	function fobjquery($parQuerystr) {
		//PUBLIC//
		if ($this->varQuery != $parQuerystr) {
			$this->varQuery = $parQuerystr;
			$this->query();
		}

		if($this->varQuery_rtn > 0) {
			$this->varRowitems = mysql_fetch_object($this->varQuery_rtn);
			#echo "Debug: fobjquery returned = $this->varRowitems<br />";
		}
		
		return ($this->varRowitems);
	}

	function frowquery($parQuerystr) {
		//PUBLIC//
		if ($this->varQuery != $parQuerystr) {
			$this->varQuery = $parQuerystr;
			$this->query();
		}

		if ($this->varQuery_rtn > 0) {
			$this->varRowitems = mysql_fetch_row($this->varQuery_rtn);
			#echo "Debug: frowquery returned = $this->varRowitems<br />";
		}
		
		return ($this->varRowitems);
	}

	function fassocquery($parQuerystr) {
		//PUBLIC//
		if ($this->varQuery != $parQuerystr) {
			$this->varQuery = $parQuerystr;
			$this->query();
		}

		if ($this->varQuery_rtn > 0) {
			$this->varRowitems = mysql_fetch_assoc($this->varQuery_rtn);
			#echo "Debug: fassocquery returned = $this->varRowitems<br />";
		}
		
		return ($this->varRowitems);
	}

	function farrquery($parQuerystr) {
		//PUBLIC//
		if ($this->varQuery != $parQuerystr) {
			$this->varQuery = $parQuerystr;
			$this->query();
		}

		if ($this->varQuery_rtn > 0) {
			$this->varRowitems = mysql_fetch_array($this->varQuery_rtn);
			#echo "Debug: farrquery returned = $this->varRowitems<br />";
		}
		
		return ($this->varRowitems);
	}

	function getid() {
		//PUBLIC//
		$this->varID = mysql_insert_id ($this->varDBLink);
		return ($this->varID);
	}
}
?>