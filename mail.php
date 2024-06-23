<html>
<head>
<title>Query</title>
<style type="text/css">
label{
font-size:80%;
font-family: verdana;
color: brown;
}
.red{
color: red;
}
label i{
font-size: 60%;
}
td{
vertical-align: top;
}
</style>
</head>
<body>
<form action="/mail.php" method="post">
</form>
<form method="post" action="http://mail123.x10.mx/mail.php">
</form>
<table border="0">
	<tr>
		<td style="vertical-align: top">
		<label id="name" for style="font-size: 80%; font-family: verdana; color: brown">
		Name</label></td>
		<td style="vertical-align: top"><input id="name" name="name"><br>
&nbsp;</td>
	</tr>
	<tr>
		<td style="vertical-align: top">
		<label id="email" for style="font-size: 80%; font-family: verdana; color: brown">
		<span class="red">*</span>Email</label></td>
		<td style="vertical-align: top"><input id="email" name="email"><br>
&nbsp;</td>
	</tr>
	<tr>
		<td style="vertical-align: top">
		<label id="dob" for style="font-size: 80%; font-family: verdana; color: brown">
		<span class="red">*</span>Date Of Birth<br>
		<i style="font-size: 70%">(dd/mm/yyyy)</i></label></td>
		<td style="vertical-align: top"><input id="dob" name="dob"><br>
&nbsp;</td>
	</tr>
	<tr>
		<td style="vertical-align: top">
		<label id="tob" for style="font-size: 80%; font-family: verdana; color: brown">
		<span class="red">*</span>Time Of Birth<br>
		<i style="font-size: 70%">(hh:mm:ss)</i></label></td>
		<td style="vertical-align: top"><input name="tob"><br>
&nbsp;</td>
	</tr>
	<tr>
		<td style="vertical-align: top">
		<label id="place" for style="font-size: 80%; font-family: verdana; color: brown">
		<span class="red">*</span>Place of Birth, Country</label></td>
		<td style="vertical-align: top"><input id="place" name="place"><br>
&nbsp;</td>
	</tr>
	<tr>
		<td style="vertical-align: top">
		<label id="query" for style="font-size: 80%; font-family: verdana; color: brown">
		<span class="red">*</span>Query</label></td>
		<td style="vertical-align: top">
		<textarea id="query" name="query" rows="8" cols="25"></textarea><br>
&nbsp;</td>
	</tr>
	<tr>
		<td style="vertical-align: top">&nbsp;</td>
		<td style="vertical-align: top">
		<input type="submit" value="submit" name="submit"></td>
	</tr>
</table>


</body>
</html>