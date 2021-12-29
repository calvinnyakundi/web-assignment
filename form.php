<!DOCTYPE html>
<HTLM lang="en">
<HEAD>
<TITLE>FORM </TITLE>
<META CHARSET="UTF-8">
</HEAD>
<body style="background-color: rgb(155, 150, 230);">
<?php
    print_r($_POST);
?>
<h1> Client_Details</h1>
<form method="post" action="" > 
<label for="First_name" >First_name</label>
<input type="text" name="first_name"><br><br>
<label for="Last_name" >Last_name</label>
<input type="text" name="last_name"><br><br>
<label for="Gender">Gender</label>
<input type="radio" name="gender"><label>Male</label>
<input type="radio" name="gender"><label>Female</label><br><br>
<label for="Pay_Method">Pay_Method</label>
<select>
    <option>Visa</option>
    <option>Mastercard</option>
    <option>Creditcard</option>
    <option>Check</option>
</select><br><br>
<label for="Gmail">Gmail</label>
<input type="email" name="Gmail"><br><br>
<label for="Password">Password</label>
<input type="password" min="8" maxlength="12" name="Password"><br><br>

<input type="submit" style="background-color: aqua;border-radius: 5px;">
</form>
</body>
</HTLM>