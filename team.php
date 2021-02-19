<?php session_start(); ?>
<?php header('content-type:application/json') ?>
<?php include "./mysql.php" ?>
<?php if(!$_SESSION['uid']) header("Refresh:0;url=./login.php"); else { ?>
<?php if($_GET["id"]) { ?>
<?php if($_SESSION['code'] != date("Y-m-d H:i")) { ?>
<?php
  function unicodeDecode($unicode_str){
    $json = '{"str":"'.$unicode_str.'"}';
    $arr = json_decode($json,true);
    if(empty($arr)) return '';
    return $arr['str'];
  }
  $id=$_GET["id"];
  $str=file_get_contents("https://www.luogu.com.cn/team/$id");
  preg_match('/decodeURIComponent\(\"(.*)\"\)/',$str,$match);
  for($i=0;$match[0][$i]!="\"";$i++); $i++;
  for(;$match[0][$i]!="\"";$i++) $x=$x.$match[0][$i];
  $x=json_decode(urldecode($x));
  $id=$x->currentData->team->id;//团队id
  $name=$x->currentData->team->name;//团队名称
  $memberCount=$x->currentData->team->memberCount;//成员人数
  $description=$x->currentData->team->setting->description;//简介
  $description=str_replace("\\","\\\\",$description);
  $joinPermission=$x->currentData->team->setting->joinPermission;//加入许可
  $master=json_encode($x->currentData->team->master);//建立者(json)
  $master=str_replace("\\","\\\\",$master);
  $time=date("Y-m-d H:i:s");
  $recorder=$_SESSION['name'];
  $con = mysqli_connect($servername, $username, $password, $sjkname);mysqli_query($con , "set names utf8");
  $sql="INSERT INTO `team` (id,name,memberCount,description,joinPermission,master,time,recorder) 
        VALUES ('$id','$name','$memberCount','$description','$joinPermission','$master','$time','$recorder')";
  $fh=mysqli_query($con,$sql);
  $_SESSION['code'] = date("Y-m-d H:i");
  if($fh) echo "{\"return\":true,\"because\":\"数据添加成功\"}";
  else{
    echo "{\"return\":false,\"because\":\"数据库已有此数据/数据库出错惹".$error."\"}";
  } 
?>
<?php } else { ?>{"return":false,"because":"一分钟内只能调用一次"}<?php } ?>
<?php } else { ?>{"return":false,"because":"id为空"}<?php } ?>
<?php } ?>