<HTML>
// Copyright © 2000 Dunbar Aitkens
// This program is licensed under the GPL version 3 or later.
// The associated card images and text are not made available
// under the license.
// Please see the file COPYING in the source
// distribution of this software for license terms.
 <HEAD>
  <TITLE>startOver.php</TITLE>
</HEAD>
<BODY>
<?php
$link = null;
$database = "glassplategame_com";
$link = mysql_connect("localhost", "caploc", "REDACTED");
if(!$link) 
  die("Could not connect to MySQL"); 
mysql_select_db($database)
 or die ("Couldn't open db" .mysql_error());
$result = mysql_query("SELECT * FROM gpgmoves");
$num_rows = mysql_num_rows($result);
$sql = "UPDATE gpgmoves SET color = 'black', x = '670', y = '30', face = piece"; 
$result = mysql_query($sql);
if (!$result) die(mysql_error());
mysql_close();
echo "Starting over";
?>
</BODY>
</HTML>

		
