<?php header('content-type:application/json') ?>
<?php if($_SESSION['uid']) echo "{\"title\":\"似乎哪里有点不对劲？\",\"type\":\"error\",\"text\":\"你已登入\",\"login\":true}"; else {?>
<?php session_start(); ?>
<?php include "./mysql.php" ?>
<?php 
if($_SESSION['code']==$_POST['captcha']) {
  $luogu=$_POST["luogu"];
  $time = date("Y-m-d");
  $user=json_decode(file_get_contents("https://www.luogu.com.cn/api/user/search?keyword=$luogu"));
  if($user->users[0]->slogan==md5(md5(md5($_SESSION['key']).sha1($time))))
  {
    $con = mysqli_connect($servername, $username, $password, $sjkname);mysqli_query($con , "set names utf8");
    $sql="UPDATE `user` SET luoguUID = $luoguUID WHERE id = $uid";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "{\"title\":\"恭喜你❤~\",\"type\": \"success\",\"text\":\"luogu用户身份验证成功！\",\"login\":true}";
    $uid=$_SESSION['uid']=$user->users[0]->uid;
    $name=$_SESSION['name']=$user->users[0]->name;
    $con = mysqli_connect($servername, $username, $password, $sjkname);mysqli_query($con , "set names utf8");
    $sql="INSERT INTO `login` (id,name,time) 
          VALUES ('$id','$name','$time')";
    $fh=mysqli_query($con,$sql);
  }
  else{
    echo "{\"title\":\"似乎哪里有点不对劲？\",\"type\":\"error\",\"text\":\"luogu用户身份验证失败\",\"login\":false}";
  }
} else {
  echo "{\"title\":\"似乎哪里有点不对劲？\",\"type\":\"error\",\"text\":\"验证码错误，你输入的验证码为：".$_POST['captcha']."，实际应为".$_SESSION['code']."\",\"login\":false}";
}
?>
<?php } ?>