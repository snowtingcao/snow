<?php session_start();
include("db.php");
$st=mysql_query("SELECT * FROM `".$ad."site`");
$s=mysql_fetch_assoc($st);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $s['webname']?>-<?php echo $s['mingcheng']?></title>
<Meta name="keywords" content="<?php echo $s['keywords']?>">
<Meta name="description" content="<?php echo $s['description']?>">
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script src="jj_js/js.js"></script>
</head>
<?php include("top1.php");?>
<body>
<div id="img" style="position:absolute;"> 
<script language="javascript">
function checklogin(){
if (document.login.uid.value==""){
	alert('�û�������Ϊ�գ�');
	document.login.uid.focus();
	return false;
}
if (document.login.pwd.value==""){
	alert('���벻��Ϊ�գ�');
	document.login.pwd.focus();
	return false;
}
	return true;
}
</script>


<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="196" valign="top">
	<table width="196" border="0" cellspacing="0" cellpadding="0" bgcolor="CFCFCF">
	  <tr>
        <td width="196" height="30" background="images/left.png" style="color:white;font-size:14px;FONT-WEIGHT: bold;">&nbsp;&nbsp;��Ա��¼</td>
      </tr>
	  <tr>
	  <td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php if ($_SESSION['uid']){?>
      <tr>
        <td width="1" rowspan="5" bgcolor="EB6900"></td>
        <td width="190" height="30" align="center"><strong><font color="#FF0000"><?php echo $_SESSION['uid']?></font>��ӭ��½��</strong></td>
        <td width="1" rowspan="5" bgcolor="EB6900"></td>
      </tr>
      <tr><td height="20" class="td">&nbsp;&nbsp;<a href="user/user_xyinfo.php">��Ա��Ϣ�޸�</a>&nbsp;|&nbsp;<a href="user/user_xypwd.php">�����޸�</a></td>
  </tr>
      <tr>
        <td height="20" class="td">&nbsp;&nbsp;<a href="user/user_xyyuyue.php">����ԤԼ״̬</a>&nbsp;|&nbsp;<a href="user/user_xyshoucang.php">�ҵ��ղؼ�</a>&nbsp;</td>
  </tr>
      <tr>
        <td height="20" class="td">&nbsp;&nbsp;&nbsp;&nbsp;<a href="user/user_xyindex.php">��Ա����</a></td>
  </tr>
      <tr>
        <td height="30" align="center"><strong><a href="loginout.php">�˳���½</a></strong></td>
  </tr>
    <?php } elseif ($_SESSION['juid']){?>
      <tr>
        <td width="1" rowspan="5" bgcolor="EB6900"></td>
        <td width="190" height="30" align="center"><strong><font color="#FF0000"><?php echo $_SESSION['juid']?></font>��ӭ��½��</strong></td>
        <td width="1" rowspan="5" bgcolor="EB6900"></td>
      </tr>
      <tr><td height="20" class="td">&nbsp;&nbsp;<a href="user/user_jyinfo.php">��Ա��Ϣ�޸�</a>&nbsp;|&nbsp;<a href="user/user_jypwd.php">�����޸�</a></td>
  </tr>
      <tr>
        <td height="20" class="td">&nbsp;&nbsp;<a href="user/user_jyyuyue.php">����ԤԼ״̬</a>&nbsp;|&nbsp;<a href="user/user_jyshoucang.php">�ҵ��ղؼ�</a>&nbsp;</td>
  </tr>
      <tr>
        <td height="20" class="td">&nbsp;&nbsp;&nbsp;&nbsp;<a href="user/user_jyindex.php">��Ա����</a></td>
  </tr>
      <tr>
        <td height="30" align="center"><strong><a href="loginout.php">�˳���½</a></strong></td>
  </tr>
  <?php } else echo "<tr>
        <td>
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
      <form id='login' name='login' method='post' action='pwdlogin.php' onsubmit='return checklogin();'><tr>
        <td width='3' rowspan='6' ></td>
        <td width='190' height='26' align='left'>�û�����
              <input name='uid' type='text' class='input1' id='uid' size='14' />        </td>
        <td width='1' rowspan='6' ></td>
      </tr>
      <tr>
        <td height='24'>�ܡ��룺
        <input name='pwd' type='password' class='input1' id='pwd' size='14' /></td>
        </tr>
      <tr>
        <td height='26'>��֤�룺
          <input name='mofei' type='text' class='input1' id='mofei' size='6' />
          <img src='che.php' align='absmiddle'></td>
        </tr>
      <tr>
        <td height='26'>���ǣ�
          <input name='rr' type='radio' value='1' checked='checked' />
          ѧԱ
          <input type='radio' name='rr' value='0' />
          ��Ա
        </td>
        </tr>
      <tr>
        <td height='26' align='center'><input type='image' name='imageField' src='images/login.gif' />��
          <label><img src='images/reset.gif' width='50' height='22' /></label></td>
        </tr>
      <tr>
        <td height='24' colspan='3' align='center'><a href='reg.php'>���ע��</a>��</td>
</tr>
</form>
</table>
</td>
      </tr>";?>
</table>
</td>
	  </tr>
      <tr>
        <td height="3" colspan="3" ></td>
      </tr>
	</table>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="5"></td>
      </tr>
    </table>
	<table width="196" border="0" cellspacing="0" cellpadding="0" bgcolor="CFCFCF">
      <tr>
        <td  colspan="3" width="196" height="30" background="images/left.png" style="color:white;font-size:14px;FONT-WEIGHT: bold;">&nbsp;&nbsp;��Ա����</td>
        </tr>
      <tr>
        <td width="1" height="513" bgcolor="CFCFCF"></td>
        <td width="258" align="center" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0">

  <?php 
$rs=mysql_query("SELECT * FROM `".$ad."jyuser` ORDER BY `".$ad."jyuser`.`yuedu` DESC LIMIT 0 , 30");
while ($rw=mysql_fetch_assoc($rs)){
$row=$rw['skecheng'];
?>
  <tr>
    <td height="24" align="center" ><a href="jyuserinfo.php?id=<?php echo $rw['id']?>" title="<?php echo $rw['name']?>��Ա"><?php echo $rw['name']?>��Ա</a></td>
    <td align="center" ><?php echo $rw['diqu']?></td>
    <td align="center"><font color="#666666"><?php echo $rw['yuedu']?></font></td>
  </tr>
<?php }?>
</table>
</td>
        <td width="30" bgcolor="CFCFCF"></td>
      </tr>
     
    </table>	</td>
    <td width="700" valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5" ></td>
        </tr>
      </table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="CFCFCF">
        <tr>
          <td height="31" colspan="3" align="left" background="images/right.gif" style="color:white;font-size:14px;FONT-WEIGHT: bold;">&nbsp;&nbsp;���½�Ա��Ϣ</td>
        </tr>
        <tr>
          <td width="1" height="116" ></td>
          <td width="680" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 

$rs=mysql_query("SELECT * FROM `".$ad."jyuser` WHERE `jiaoyuantype` != '��ְ��ʦ'  ORDER BY `id` DESC LIMIT 0 , 7");
while ($rw=mysql_fetch_assoc($rs)){
$row=$rw['skecheng'];
?>
  <tr>
    <td width="103" height="20" align="center">[<a href="jyuserinfo.php?id=<?php echo $rw['id']?>" title="<?php echo $rw['name']?>��Ա"><?php echo $rw['name']?>��Ա</a>]</td>
    <td width="69" align="center"><?php echo $rw['xueli']?></td>
    <td width="25" align="center">(<?php echo $rw['sex']?>)</td>
    <td width="66" align="center"><?php echo $rw['diqu']?></td>
    <td width="95"><?php print mb_substr($row,0,5,"gb2312"); ?></td>
    <td width="48" align="center"><a href="jyuserinfo.php?id=<?php echo $rw['id']?>">����</a></td>
  </tr>
  <?php }?>

</table>
</td>
          <td width="1" ></td>
        </tr>
        <tr>
          <td height="3" colspan="3" ></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5"></td>
        </tr>
      </table>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5"></td>
  </tr>
</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CFCFCF">
  <tr>
    <td align="center" bgcolor="#FFFFFF"><a href="#" target="_blank"><img width="750" src="ad/2008110918395388054.gif" border="0" /></a></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5"></td>
  </tr>
</table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="CFCFCF">
        <tr >
          <td height="31" colspan="3" align="left" background="images/right.gif" style="color:white;font-size:14px;FONT-WEIGHT: bold;">&nbsp;&nbsp;������ְ��ʦ</td>
        </tr>
        <tr>
          <td width="1" height="115" ></td>
          <td width="380" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 

$rs=mysql_query("SELECT * FROM `".$ad."jyuser` WHERE `jiaoyuantype` LIKE '��ְ��ʦ' ORDER BY `id` DESC LIMIT 0 , 7");
while ($rw=mysql_fetch_assoc($rs)){
$row=$rw['skecheng'];
?>
  <tr>
    <td width="103" height="20" align="center">[<a href="xyuserinfo.php?id=<?php echo $rw['id']?>" title="<?php echo $rw['name']?>��ʦ" target="_blank"><?php echo $rw['name']?>��ʦ</a>]</td>
    <td width="69" align="center"><?php echo $rw['nianji']?></td>
    <td width="37" align="center">(<?php echo $rw['sex']?>)</td>
    <td width="66" align="center"><?php echo $rw['diqu']?></td>
    <td width="95"><?php print mb_substr($row,0,5,"gb2312"); ?></td>
    <td width="48" align="center"><a href="jyuserinfo.php?id=<?php echo $rw['id']?>" title="<?php echo $rw['name']?>��ʦ" target="_blank">����</a></td>
  </tr>
  <?php }?>
  
</table>
</td>
          <td width="10" ></td>
        </tr>
        <tr>
          <td height="3" colspan="3" ></td>
        </tr>
      </table><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5"></td>
        </tr>
      </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5"></td>
  </tr>
</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CFCFCF">
  <tr>
    <td align="center" bgcolor="#FFFFFF"><a href="#" target="_blank"><img width="750" src="ad/2008110918395388054.gif" border="0" /></a></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5"></td>
  </tr>
</table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="CFCFCF">
        <tr>
          <td height="31" colspan="3" align="left" background="images/right.gif" style="color:white;font-size:14px;FONT-WEIGHT: bold;">&nbsp;&nbsp;����ѧԱ��Ϣ</td>
        </tr>
        <tr>
          <td width="1" height="115" ></td>
          <td width="680" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 

$rs=mysql_query("SELECT * FROM `".$ad."xyuser` ORDER BY `id` DESC LIMIT 0 , 7");
while ($rw=mysql_fetch_assoc($rs)){
$row=$rw['skecheng'];
?>
  <tr>
    <td width="83" height="20" align="center">[<a href="xyuserinfo.php?id=<?php echo $rw['id']?>" title="<?php echo $rw['name']?>ѧԱ" target="_blank"><?php echo $rw['name']?>ѧԱ</a>]</td>
    <td width="80" align="center"><?php echo $rw['nianji']?></td>
    <td width="37" align="center">(<?php echo $rw['sex']?>)</td>
    <td width="66" align="center"><?php echo $rw['diqu']?></td>
    <td width="95"><?php print mb_substr($row,0,5,"gb2312"); ?></td>
    <td width="48" align="center"><a href="xyuserinfo.php?id=<?php echo $rw['id']?>" title="<?php echo $rw['name']?>ѧԱ" target="_blank">����</a></td>
  </tr>
  <?php }?>
  
</table>
</td>
          <td width="1" ></td>
        </tr>
        <tr>
          <td height="3" colspan="3" ></td>
        </tr>
      </table>
	  
	  </td>
    <td valign="top">
      

</td>
          <td width="1" ></td>
        </tr>
      
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5"></td>
        </tr>
      </table>
      
</td>
          <td width="1" ></td>
        </tr>
        <tr>
          <td height="3" colspan="3" ></td>
        </tr>
      </table>
     </td>
  </tr>
</table>

      

<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="701" height="20" bgcolor="#FFFCF1">&nbsp;&nbsp;&nbsp&nbsp;</td>
    <td width="80" align="center" bgcolor="#FFFCF1"></td>
  </tr>
</table>
<table width="980" border="0" align="left" cellpadding="0" cellspacing="1">
  <tr> <hr><td height="30" align="left" bgcolor="#FFFCF1">&nbsp;&nbsp;&nbsp;&nbsp;<?php
  
$rs=mysql_query("SELECT * 
FROM `".$ad."youqing` 
ORDER BY `id` DESC 
LIMIT 0 , 8");
 while ($rw=mysql_fetch_assoc($rs)){ ?>
<a href="<?php echo $rw['url']?>" target="_blank"><?php echo $rw['name']?></a>
<?php }?></td>
  </tr>
</table>
</body>

</html>