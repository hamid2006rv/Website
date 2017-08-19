<?php
  $page='';
  include_once ('php/init.php');
  include_once ('php/functions.php');
  include_once ('php/header.php');

  if(!isset($_GET['id']))
  	header('HTTP/1.0 404 Not Found');
  $id=htmlspecialchars($_GET['id'],ENT_QUOTES);

?>
 <div class='container'>
        <div class='row'>
			<div class='col-md-9 col-sm-12 col-xs-12'>
            	<div class='row'>
					<?php
					if(isset($id))
					{
						echo '<div>';
						echo '<ol class="breadcrumb page-nav">';
						  $liitems='';
						  $result=mysql_query("select * from organization where id=$id");
						  $row=mysql_fetch_assoc($result);
						  $top_id=$row['top_id'];
						  $liitems=$liitems. "<li class='active'>$row[name]</li>";

						  if($top_id!=null)
							{
								$result=mysql_query("select * from organization where id=$top_id");	
						 		$row=mysql_fetch_assoc($result);
								$top_id=$row['top_id'];
								$liitems="<li><a href='node.php?id=$row[id]'>$row[name]</a></li>".$liitems;
							}
							
						 if($top_id!=null)
							{
								$result=mysql_query("select * from organization where id=$top_id");	
						 		$row=mysql_fetch_assoc($result);
								$top_id=$row['top_id'];
								$liitems="<li><a href='node.php?id=$row[id]'>$row[name]</a></li>".$liitems;
							}
						echo $liitems;
						echo '</ol>';
						echo '</div>';
					}
					?>
                	<?php
					$result=mysql_query("select * from content where orgid=$id order by cdate");
					while($row=mysql_fetch_assoc($result))
					{
						echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
							echo "<div class='panel-group'>";						
								echo "<div class='panel panel-default' style='margin:5px;'>";
								$content=htmlspecialchars_decode($row['cbody']);
								if($row['hasTitle']==1)
									{
										if($row['collapse']==0)
										{
											echo "<div class='panel-heading'>$row[ctitle]</div>";
											echo "<div class='panel-body'>$content</div>";
										}
										else 
										{
											echo "<div class='panel-heading'>
												  <a data-toggle='collapse' href='#collapse$row[cid]'>$row[ctitle]</a></div>";
											echo "<div id='collapse$row[cid]' 
											class='panel-body panel-collapse collapse'>$content</div>";
										}
									
									}
								else
									echo "<div class='panel-body'>$content</div>";
								
								

								if ($row['attachment1']!=null)
									echo "<div style='padding:5px;'><a href='uploads/cont/c$row[cid]/$row[attachment1]'><span class='glyphicon glyphicon-download-alt'></span>   $row[attachment1]</a></div>";
								
								if ($row['attachment2']!=null)
									echo "<div style='padding:5px;'><a href='uploads/cont/c$row[cid]/$row[attachment2]'><span class='glyphicon glyphicon-download-alt'></span>   $row[attachment2]</a></div>";

								if ($row['attachment3']!=null)
									echo "<div style='padding:5px;'><a href='uploads/cont/c$row[cid]/$row[attachment3]'><span class='glyphicon glyphicon-download-alt'></span>   $row[attachment3]</a></div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					}
					
					?>
                
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