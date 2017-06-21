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
                            <!--- menu ---->
                            <li class='dropdown'>
                            	<a href='#'>درباره دانشگاه
                                <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu first-cat' role='menu' aria-labelledby='dropDownMenu'>
                                    <li><a href='department.php?id=6'>دانشگاه علوم و فناوری سپاهان</a></li>
                                    <li><a href='#'>ریاست دانشگاه</a></li>
                                    <li><a href='#'>هیات موسس</a></li>
                                    <li><a href='#'>اعضای هیات علمی</a></li>
                                 </ul> 
                            </li>
                    		<!--- menu ---->
                            <li class='dropdown'>
                                <a href='#' class="dropdown-toggle" data-toggle="dropdown">دانشکده ها 
                                <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu multi-level first-cat'>
                                    <li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										دانشکده مهندسی
										<span class='glyphicon glyphicon-triangle-left'></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="department.php?id=2">مهندسی فناوری اطلاعات</a></li>
											<li><a href="#">مهندسی برق</a></li>
											<li><a href="#">مهندسی نرم افزار</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										دانشکده علوم انسانی<span class='glyphicon glyphicon-triangle-left'></span></a>
										
										<ul class="dropdown-menu">
											<li><a href="#">مدیریت</a></li>
											<li><a href="#">معارف</a></li>
										</ul>
									</li>
                                 </ul>
                            </li>
							<li><a href='department.php?id=1'>آموزش</a></li>
                            <li><a href='department.php?id=4'>امور پژوهشی</a></li>
                            <li><a href='department.php?id=3'>امور دانشجویی</a></li>
							<li><a href='department.php?id=7'>امور مالی</a></li>
                            <!--- menu ---->
                            <li class='dropdown'>
                            	<a href='department.php?id=4'>تحصیلات تکمیلی
                                <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu first-cat' role='menu' aria-labelledby='dropDownMenu'>
                                    <li><a href='department.php?id=4'>فرم ها</a></li>
                                    <li><a href='department.php?id=4'>اطلاعیه ها</a></li>
                                 </ul>
                            </li>
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