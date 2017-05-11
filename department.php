<?php
  $page='';
  include_once ('php/init.php');
  include_once ('php/functions.php');
  include_once ('php/header.php');

  if(!isset($_GET['id']))
  	header('HTTP/1.0 404 Not Found');
  $id=htmlspecialchars($_GET['id']);

  
  echo 't';
?>
 <div class='container'>
        <div class='row'>
			<div class='col-md-9 col-sm-12 col-xs-12'>
            	<div class='row'>
                	<?php
					$result=mysql_query("select * from notification where orgid=$id");
					while($row=mysql_fetch_assoc($result))
					{
						echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
						echo "<div class='panel panel-default' style='margin:5px;'>";
						
					    if($row['hasTitle']==1)
							echo "<div class='panel-heading'>$row[ntitle]</div>";
							
						$content=htmlspecialchars_decode($row['ndesc']);
						echo "<div class='panel-body'>$content</div>";
						echo "</div>";
						echo "</div>";
					}
					
					?>
                
            </div>
            </div>
            <!-- ads-->
            <div class='col-md-3 col-sm-2 col-xs-2'>
				<h1>تبلیغات</h1>
				<img class='thumbnail' src='img/ads/ads.jpg'/>
				<img src='img/ads/ads.jpg'/>
				<img src='img/ads/ads.jpg'/>
           </div>
        </div>
	</div>

<?php
  include_once ('/php/footer.php');
?>