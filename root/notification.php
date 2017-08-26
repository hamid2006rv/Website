<?php
  $orgid=1;
  $page='';
  include_once ('php/init.php');
  include_once ('php/functions.php');
  include_once ('php/header.php');
?>

 <div class='container'>
        <div class='row'>
            <div class='col-md-9 col-sm-12 col-xs-12'>
				<h2>تمام اطلاعیه ها</h2>
				<?php
				$page=0;
				if(isset($_GET['page']))
					$page=(int)(htmlspecialchars($_GET['page'],ENT_QUOTES)-1);
				$limit=10;
				$page=$page*$limit;
				
				
				
				$result=mysql_query("select * from notification where orgid=$orgid order by ndate desc, nid desc  limit $page,$limit");
				while($row=mysql_fetch_assoc($result))
				{
					echo "<div class='notification'>";
                	echo "<a href='./notifdetails.php?id=$row[nid]'>$row[ntitle]</a>";
					$date=explode('-',$row['ndate']);
                    echo "<span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
                    echo "</div>";
				}
				?>
				<nav aria-label="Page navigation " style="text-align:center">
					<ul class="pagination">
						<?php
							$result=mysql_query("select count(*) from notification");
                        	$count=mysql_fetch_array($result)[0];
							for ($i=1; $i<$count; $i=$i+$limit)
							{
								$p=ceil($i/$limit);
								if(isset($_GET['page']))
									$q=$_GET['page'];
								else
									$q=1;
								if($q==$p) 
									echo "<li class='active'><a href='notification.php?page=$p'>$p</a></li>";
								else
									echo "<li><a href='notification.php?page=$p'>$p</a></li>";
								
							}
						?>
					  </ul>
				</nav>
           </div>
		   <div class='col-md-3 col-sm-12 col-xs-12'>
					<h1>تبلیغات</h1>
				<img class='thumbnail' src='img/ads/ads.jpg'/>
				<img class='thumbnail'src='img/ads/ads.jpg'/>
				<img class='thumbnail'src='img/ads/ads.jpg'/>
           </div>
		</div>

</div>

<?php
  include_once ('php/footer.php');
?>