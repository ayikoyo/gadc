<!DOCTYPE html>
<html>
<body>

<?php
$str = 'Gift Emmanuel';

// zero limit
print_r(explode(',',$str,0));
print "<br>";
$data = array();

// positive limit
$data = (explode(' ',$str,2));
for($i= 0;$i<sizeof($data);$i++){
	echo $data[$i];
}


print "<br>";
echo $data[0];
print "<br>";
echo $data[1];
// negative limit
// print_r(explode(',',$str,-1));
?>  

</body>
</html>