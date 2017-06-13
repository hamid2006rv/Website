<?php
  $page='index';
  $orgid=1;
  include_once ('/php/init.php');
  include_once ('/php/functions.php');
  include_once ('/php/header.php');
  include_once ('/php/carousel.php');
?>   

 <div class='container'>
        <div class='row'>
            <div class='main col-md-8 col-sm-8'>
                <div class='main-title'>
                    <h2>اخبار دانشگاه</h2>
                    <div class='btn-header'>
                        <a class='btn btn-sm bg-blue' href='news.php' target='_blank'>نمایش سایر اخبار</a>
                    </div>
                 </div>
                <div class='top-news'>
                    <?php 
						$result=mysql_query('select * from news order by edate desc limit 0,5');
						$row=mysql_fetch_assoc($result);
						if($row)
						{
							echo "<a href='news.php?id=$row[eid]'>";
							echo "<img src='../uploads/news/e$row[eid]/$row[epic]' alt='news'>";
							echo "</a>";
							echo "<div class='text-news'>";
							$date=explode('-',$row['edate']);
							echo "<span class='glyphicon glyphicon-calendar'></span> <span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
							echo "<h3><a href='news.php?id=$row[eid]'>$row[etitle]</a></h3><p>$row[edesc]</p>";
							echo "</div>";
						}
					?>
			   </div>
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<?php 
							$row=mysql_fetch_assoc($result);
							if($row)
							{
								echo "<a href='news.php?id=$row[eid]'><img src='../uploads/news/e$row[eid]/thumbs/$row[epic]'></a>";
								echo "<div class='text-news'>";
								$date=explode('-',$row['edate']);
								echo "<span class='glyphicon glyphicon-calendar'></span> <span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
								echo "<h3><a href='news.php?id=$row[eid]'>$row[etitle]</a></h3>";
								echo "</div>";
							}
							?>
         				</div>
	    			</div>
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<?php 
							$row=mysql_fetch_assoc($result);
							if($row)
							{
								echo "<a href='news.php?id=$row[eid]'><img src='../uploads/news/e$row[eid]/thumbs/$row[epic]'></a>";
								echo "<div class='text-news'>";
								$date=explode('-',$row['edate']);
								echo "<span class='glyphicon glyphicon-calendar'></span> <span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
								echo "<h3><a href='news.php?id=$row[eid]'>$row[etitle]</a></h3>";
								echo "</div>";
							}
							?>
					  </div>
				    </div>
                </div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<?php 
							$row=mysql_fetch_assoc($result);
							if($row)
							{
								echo "<a href='news.php?id=$row[eid]'><img src='../uploads/news/e$row[eid]/thumbs/$row[epic]'></a>";
								echo "<div class='text-news'>";
								$date=explode('-',$row['edate']);
								echo "<span class='glyphicon glyphicon-calendar'></span> <span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
								echo "<h3><a href='news.php?id=$row[eid]'>$row[etitle]</a></h3>";
								echo "</div>";
							}
							?>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<?php 
							$row=mysql_fetch_assoc($result);
							if($row)
							{
								echo "<a href='news.php?id=$row[eid]'><img src='../uploads/news/e$row[eid]/thumbs/$row[epic]'></a>";
								echo "<div class='text-news'>";
								$date=explode('-',$row['edate']);
								echo "<span class='glyphicon glyphicon-calendar'></span> <span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
								echo "<h3><a href='news.php?id=$row[eid]'>$row[etitle]</a></h3>";
								echo "</div>";
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-4 col-sm-4'>
            	<div class='main-title'>
                	<h2>اطلاعیه</h2>
                     <div class='btn-header'>
                    	<a class='btn btn-sm bg-blue' href='./notification.php' target='_blank'>مشاهده تمام اطلاعیه ها</a>
                    </div>
                </div>

				<?php
				$result=mysql_query("select * from notification where orgid=$orgid order by ndate desc limit 0,6");
				while($row=mysql_fetch_assoc($result))
				{
					echo "<div class='notification'>";
                	echo "<a  href='./notifdetails.php?id=$row[nid]'>$row[ntitle]</a>";
					$date=explode('-',$row['ndate']);
                    echo "<span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
                    echo "</div>";
				}
				?>
            </div>
		</div>
	</div>

<?php
  include_once ('/php/footer.php');
?>