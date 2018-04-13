<head>
    <title>WELCOME</title>
    <style>
        body {
                background-image: url("first.jpg");
        }
    </style>
</head>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<marquee><h1 style="color:gold;">HOTEL SRM</h1></marquee>
<tr>
<td style="color:gold;"><strong>View Guestbook | <a href="index.html">Sign Guestbook</a> </strong></td>
</tr>
</table>
<br>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="sakthi"; // Database name 
$tbl_name="guestbook"; // Table name 
$obj=mysqli_connect("$host", "$username", "$password","$db_name");
if(mysqli_connect_errno()){
	mysqli_connect_error();
}
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($obj,$sql);
while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>ID</td>
<td>:</td>
<td><?php echo $rows['id']; ?></td>
</tr>
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><?php echo $rows['name']; ?></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $rows['email']; ?></td>
</tr>
<tr>
<td valign="top">Message</td>
<td valign="top">:</td>
<td><?php echo $rows['message']; ?></td>
</tr>
<tr>
</table></td>
</tr>
</table>
<?php
}
mysqli_close($obj); //close database
?>