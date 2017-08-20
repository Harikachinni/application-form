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
<button type="ADD"><span>Add</span></button>
</p>
</body>
</html>
?>
<html>
<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">
school List :
<select sch Name='NEW'>
<option value="">--- Select ---</option>
  <?
  mysql_connect ("localhost","root","");
  mysql_select_db ("school");
  $select="school";
  if (isset ($select)&&$select!=""){
  $select=$_POST ['NEW'];
   }
   ?>
    <?
 $list=mysql_query("select * from name order by sch_id asc");
            while($row_list=mysql_fetch_assoc($list)){
                ?>
                    <option value="<? echo $row_list['sch_id']; ?>"<? if($row_list['sch_id']==$select){ echo "selected"; } ?>>
                                         <?echo $row_list['sch_name'];?>
                    </option>
                <?
                }
                ?>
            </select>
            <input type="submit" name="Submit" value="Select" />
        </form>
    </body>
</html>
