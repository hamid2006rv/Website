	<nav class='navbar navbar-default'>
       
                    <div class='navbar-header'>
                        <button class='navbar-toggle collapsed' data-toggle='collapse' data-target='#collapsemenu' aria-expanded='false' >
                        <span class='sr-only'>Toggle navigation</span> 
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        </button>
                    </div>
                    <div class='collapse navbar-collapse' id='collapsemenu'>
                        <ul class='nav navbar-nav navbar-right' >
                            <li <?php if($page=='index') echo "class='active'";?>><a href='index.php'>صفحه نخست</a></li>
							<?php
								$sql="select * from organization where top_id is null order by menu_order";
								$result=mysql_query($sql);
								while($row=mysql_fetch_assoc($result))
								{
									$cat1=mysql_query("select * from organization where top_id=$row[id] order by menu_order");
									if(mysql_num_rows($cat1)==0)
									{
										if ($row['external_flag']==0)
											echo "<li><a href='node.php?id=$row[id]'>$row[name]</li>";
										else
											echo "<li><a href='$row[url]'>$row[name]</li>";
									}
									else
									{
										echo "<li class='dropdown'><a href='node.php?id=$row[id]'>$row[name] <span class='caret'></span></a>";
										echo "<ul class='dropdown-menu'>";
										while($cat1row=mysql_fetch_assoc($cat1))
											{
												$cat2=mysql_query("select * from organization where top_id=$cat1row[id] order by menu_order");
												if(mysql_num_rows($cat2)==0)
												{	
													if($cat1row['external_flag']==0)
														echo "<li><a href='node.php?id=$cat1row[id]'>$cat1row[name]</a></li>";
													else
														echo "<li><a href='$cat1row[url]'>$cat1row[name]</a></li>";
												}
													else
													{
														 echo "<li>";
														 echo "<a href='node.php?id=$cat1row[id]'>$cat1row[name]
										<span class='glyphicon glyphicon-triangle-left'></span></a>";
														echo "<ul class='dropdown-menu sub-menu'>";
														while($cat2row=mysql_fetch_assoc($cat2))
														{
															if($cat2row['external_flag']==0)
															echo "<li><a href='node.php?id=$cat2row[id]'>$cat2row[name]</a></li>";
															else
															echo "<li><a href='$cat2row[url]'>$cat2row[name]</a></li>";

														}
														echo "</ul>";
														echo "</li>";
													}
											}
										echo "</ul>";
										echo"</li>";
									}
								}
							?>
                        </ul>
                        <form action='search.php' method='get' class='navbar-form'>
                            <div class='form-group'>
                                <input type='text' name ='search' class='form-control' placeholder='جستجو ...' size='4'>
								<button type='submit'name='submit' clas='btn btn-default'>
									<span class='glyphicon glyphicon-search'></span> 
								</button> 
                            </div>
                        </form>
                    </div>
        
    </nav>