<?php
    include('php/authority.php');
	include_once ('php/functions.php');
?>

<?php
    if(isset($_POST['save']))
	{
		$day=date('N');
		if(isset($_POST['etitle']))
			$etitle=htmlspecialchars($_POST['etitle'],ENT_QUOTES,'UTF-8');
		if(isset($_POST['edesc']))
			$edesc=htmlspecialchars($_POST['edesc'],ENT_QUOTES,'UTF-8');
		if(isset($_POST['date']))
			$date=htmlspecialchars($_POST['date'],ENT_QUOTES,'UTF-8');
        $er=0;
		if (!isset($etitle) || trim($etitle)=='')
			$er=$er | 0b00001;
		
		if (!isset($edesc) || trim($edesc)=='' || count(explode(' ',$edesc))<50)
			$er=$er | 0b00010;
			
		if($_FILES['epic']['error']==0)
			{
				$epic= $_FILES['epic']['name'];	
			}
		if (!isset($epic))
			$er=$er | 0b00100;
		
		if (!isset($date))
			$er=$er | 0b01000;
			
		
		if($er==0)
		{
			
			$sql="insert into news values (null,'$etitle','$edesc','$epic','$epic',null,'$date',$day,0)";
			$result=mysql_query($sql);
			if ($result)
			{
				$error="<b style='color:green'>اطلاعات در سیستم ذخیره شد</b>";
				$id=mysql_insert_id();
				mkdir('../uploads/news/e'.$id);
				mkdir('../uploads/news/e'.$id.'/thumbs');
				$epic = cwUpload('epic','../uploads/news/e'.$id.'/','',TRUE,'../uploads/news/e'.$id.'/thumbs/','90','90');
				$etitle='';
				$edesc='';
			}
			else
			{
				$error="<b style='color:red'>خطا در ذخیره سازی اطلاعات!</b>";
			}
		}
		else
		{
			$error="<b style='color:red'>فیلد مشخص شده وارد شود!!</b>";	
		}
	}
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>پانل مدیریت سایت</title>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
   
   <link href="css/persian-datepicker-dark.css" rel="stylesheet" type="text/css"/>
   <link href="css/persian-datepicker-redblack.css" rel="stylesheet" type="text/css"/>
   <link href="css/persian-datepicker-cheerup.css" rel="stylesheet" type="text/css"/>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/news.js"></script>
   
   <script type="text/javascript" src="js/persian-date.js"></script>
   
    <script type="text/javascript" src="js/mousewheel.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/constant.js"></script>
    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="js/template.js"></script>
    <script type="text/javascript" src="js/base-class.js"></script>
    <script type="text/javascript" src="js/compat-class.js"></script>
    <script type="text/javascript" src="js/helper.js"></script>
    <script type="text/javascript" src="js/monthgrid.js"></script>
    <script type="text/javascript" src="js/monthgrid-view.js"></script>
    <script type="text/javascript" src="js/datepicker-view.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/navigator.js"></script>
    <script type="text/javascript" src="js/daypicker.js"></script>
    <script type="text/javascript" src="js/monthpicker.js"></script>
    <script type="text/javascript" src="js/yearpicker.js"></script>
    <script type="text/javascript" src="js/toolbox.js"></script>
    <script type="text/javascript" src="js/timepicker.js"></script>
    <script type="text/javascript" src="js/state.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body dir='rtl'>

<script>
 $(document).ready(function(e) {
        $("#observer").persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD'

        });
});
</script>
<div id='header'>
<h1>پانل مدیریت سایت</h1>
</div>
<div id='menu'>
<ul>
	<li><a href='index.php'>اطلاعیه ها</a></li>
	<?php 
	if($_SESSION['user_id']==1):
	?>
	<li><a href='content.php'>محتوای سایت</a></li>
	<li><a href='news.php'>اخبار</a></li>
	<?php endif;?>
    <li><a href='php/login.php'>خروج</a></li>
</ul>
</div>
<div id='content'>
<h2>اخبار</h2>
<div id='form'>
	<form action='<?=$_SERVER['PHP_SELF']?>' method="POST" enctype="multipart/form-data">
    	<table cellpadding="0" cellspacing="0" border="0"> 
    	<tr>
        	<td>عنوان خبر</td><td><input type="text" size="100" name='etitle' 
			<?php if(isset($etitle)) echo " value='$etitle'";?>></td>
            <td><?php if(isset($er) && ($er & 0b00001)>0) echo "<span style='color:red'>*</span>"; ?></td>
        </tr>
        <tr>
        	<td>متن خبر</td><td>
            <textarea name='edesc' rows="10" cols="100"><?php if(isset($edesc)) echo trim($edesc);?></textarea></td>
            <td><?php if(isset($er) && ($er & 0b00010) >0) echo "<span style='color:red'>*متن خبر باید بیشتر از 50 کلمه باشد</span>"; ?></td>
        </tr>
        <tr><td>عکس</td><td><input type='file' name="epic" accept="image/*" /></td>
		 <td><?php if(isset($er) && ($er & 0b00100) >0) echo "<span style='color:red'>*</span>"; ?></td>
		</tr>
		<tr><td>تاریخ</td><td><input type='text' id='observer' name='date'/>
        <?php if(isset($er) && ($er & 0b01000) >0) echo "<span style='color:red'>*</span>"; ?>
        </td></tr>
        <tr><td><input type="submit" name="save" value="ذخیره"></td><td></td></tr>
        </table>

        <div>
        	<?php
			if(isset($error))
				echo $error;
			?>
        </div>
        
        
    </form>
    
	<table class='table' style='width:100%'>
	<tr class='row'>
        <th class='head'></th>
		<th class='head'></th>
		<th class='head'>کد</th>
		<th class='head'>عنوان</th>
        <th class='head'>توضیحات</th>
        <th class='head'>تاریخ</th>
        <th class='head'>عکس</th>
    </tr>
    <?php
		$result=mysql_query("select * from news	 order by edate desc");
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr class='row' >";
			echo "<td class='col'><a class='edit' href='updateNews.php?id=$row[eid]'><img width='20' height='20' src='pic/edit.png'></a></td>";
			echo "<td class='col'><input class='delete' value='$row[eid]' type='image' width='20' height='20' src='pic/delete.png'></input></td>";
			echo "<td class='col'>$row[eid]</td>";
			echo "<td class='col'>$row[etitle]</td>";
			echo "<td class='col'>$row[edesc]</td>";
			echo "<td class='col'>$row[edate]</td>";
			echo "<td class='col'><img alt='' src='../uploads/news/e$row[eid]/thumbs/$row[epic]'></td>";
			echo "</tr>";
		}
	?>
	</table>
</div>
</div>
	

</body>
</html>