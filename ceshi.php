<html>
<body>
<?php
$name=$email="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=test_input($_POST["name"]);
	$email=test_input($_POST["email"]);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data,ENT_QUOTES);
	return $data;
}
?>
<p>欢迎进入负重前行:<?php echo $name; ?>,您的表单已提交成功哦~</p>
<p>更多信息会发送到您的邮箱:<?php echo $email; ?></p>
</body>
</html>