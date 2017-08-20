View file/ login.php
<html>
<body>
<?php
echo $result;
?>
<form action="" method="POST">
<p>
<label>username
</label>
<input id="username" value="" name="username" type="text" required="required">
</p>
<br>
<p>
<label>password
</label>
<input id="password" name="password" type="password" requried="required">
</p>
<br>
<p>
<label> Email Address
</label>
<input id="Email" name="email" type="text" required="required">
</p>
<br>
<p>
<label>school
</label>
school:
<select>
<option value="select">select</option>
<option value="oxford school">oxford school</option>
<option value="abacus">abacus</option>
<option value="oakfield">oakfield</option>
<option value="new hall">new hall</new hall>
</select>
</p>
<br>
<p>
<button type="submit"><span>submit</span></button>
<button type="reset"><span>reset</span></button>
</p>
</body>
</html>
?>
