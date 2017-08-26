<?php
  $page='';
  include_once ('php/init.php');
  include_once ('php/functions.php');
  include_once ('php/header.php');


?>
 <div class='container'>
        <div class='row'>
			<div class='col-md-9 col-sm-12 col-xs-12'>
       			<?php
					if(isset($_GET['id']))
					{
						echo "<div class='row'>";
						echo "<div class='col-md-9 col-sm-12 col-xs-12'>";
						
						$id=(int)htmlspecialchars($_GET['id'],ENT_QUOTES);
						$result=mysql_query("select * from news where eid=$id");
						$row=mysql_fetch_assoc($result);
						echo "<div class='top-news' >";
						if($row)
							{
								echo "<img src='uploads/news/e$row[eid]/$row[epic]' alt='news' style='margin: 5px 0 5px;width:70%;'>";
								echo "<div class='text-news' style='padding-right:0px;'>";
								$date=explode('-',$row['edate']);
								echo "<span class='glyphicon glyphicon-calendar'></span> <span>".get_name_of_day($row['day_week']). " ".intval($date[2])." " .get_name_of_month($date[1])." $date[0] "."</span>";
									echo "<h3><a href='news.php?id=$row[eid]'>$row[etitle]</a></h3><p>$row[edesc]</p>";
									echo "</div>";
							}
						
					   echo "</div>";
					   echo "</div>";
					   echo "</div>";
					}
				?>
				<div class='row'>
                	<div class='col-md-12 col-sm-12 col-xs-12'>
                    	<?php
						$result=mysql_query("select * from news order by edate desc");
						while($row=mysql_fetch_assoc($result))
						{
							echo "<div class='panel panel-default' style='margin:5px;'>";
							echo "<div class='panel-body'>";
                           	echo  "<div>
							<a href='news.php?id=$row[eid]'><img src='uploads/news/e$row[eid]/thumbs/$row[epic]'></a>  
							<a href='news.php?id=$row[eid]'>$row[etitle]</a></div>";
                            echo "</div></div>";
						}
						?>
					</div>
                </div>
            </div>
            <!-- ads-->
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