<?php
  $orgid=1;
  $page='';
  include_once ('/php/init.php');
  include_once ('/php/functions.php');
  include_once ('/php/header.php');
?>

 <div class='container'>
        <div class='row'>
            <div class='col-md-9 col-sm-12 col-xs-12'>
				<ol class="breadcrumb">
				  <li><a href="index.php">صفحه اصلی</a></li>
				  <li><a href="notification.php">اطلاعیه ها</a></li>
				</ol>
				  <?php
						$id=htmlspecialchars($_GET['id']);
						$result=mysql_query("select * from notification where nid=$id");
						$row=mysql_fetch_assoc($result);
						echo "<div class='panel panel-default' style='margin:5px;'>";
                        echo "<div class='panel-heading' style='font-weight:bold;'>$row[ntitle]</div>";
                        echo "<div class='panel-body'><div style='color:#888;margin-bottom:5px;'><span class='glyphicon glyphicon-calendar'></span> ارسال شده در تاریخ: ";
						$date=explode('-',$row['ndate']);
						echo "<span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
						echo "</div><div>$row[ndesc]</div>";
						
						if ($row['attachment1']!=null)
							echo "<div><a href='../uploads/notif/n$row[nid]/$row[attachment1]'><span class='glyphicon glyphicon-download-alt'></span>   $row[attachment1]</a></div>";
						
						if ($row['attachment2']!=null)
							echo "<div><a href='../uploads/notif/n$row[nid]/$row[attachment2]'><span class='glyphicon glyphicon-download-alt'></span>   $row[attachment2]</a></div>";

						if ($row['attachment3']!=null)
							echo "<div><a href='../uploads/notif/n$row[nid]/$row[attachment3]'><span class='glyphicon glyphicon-download-alt'></span>   $row[attachment3]</a></div>";

						echo "</div>";
                        echo "</div>";
				  ?>
			

							
						   </div>
		   <div class='col-md-3 col-sm-2 col-xs-2'>
					<h1>تبلیغات</h1>
					<img src='img/ads/ads.jpg'/>
					<img src='img/ads/ads.jpg'/>
					<img src='img/ads/ads.jpg'/>
           </div>
		</div>

</div>

<?php
  include_once ('/php/footer.php');
?>