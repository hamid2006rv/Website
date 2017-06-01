<?php
  $page='';
  include_once ('/php/init.php');
  include_once ('/php/functions.php');
  include_once ('/php/header.php');
  

?>
 <div class='container'>
        <div class='row'>
			<div class='col-md-9 col-sm-12 col-xs-12'>
            	<div class='row'>
                	<div class='col-md-12 col-sm-12 col-xs-12'>
						<?php
							if(isset($_GET['submit']))
							{
								$search=htmlspecialchars($_GET['search']);
								$terms=explode(' ', $search);
								$w='';
								foreach($terms as $i)
									$w.="(ntitle like '%$i%' or ndesc like '%$i%') and";
								$w.=' 1=1';
								$result=mysql_query("select distinct * from notification where $w");
								if(mysql_num_rows($result)==0) 
									echo '<b>Not found!</b>';
								else
									while($row=mysql_fetch_assoc($result))
									{
										echo '<div class="panel panel-default" style="margin:5px;">';
										echo '<div class="panel-body">';
										echo "<a href='notifdetails.php?id=$row[nid]'>$row[ntitle]</a>";
										echo '</div></div>';
									}

								////////////////////////////////////////

							}
						?>
						
                    </div>
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