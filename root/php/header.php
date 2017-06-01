<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>موسسه آموزش عالی سپاهان</title>
		<link rel='stylesheet' href='./css/bootstrap.min.css'>
		<link rel='stylesheet' href='./css/styles.css'>
	</head>
	<body>
	<header class='main-header '>
		<div class='top-nav'>
			<div class='container-fluid'>
            	<div class='row'>
                	<div class='col-md-4'>
                    	<ul class='top-menu breadcrumb'>
                        	<li><a href="http://edu.sepahan.ac.ir/StudentLoginForm.aspx"><span class='glyphicon glyphicon-education'></span> سیستم آموزش </a></li>
                        	<li><a href='http://93.126.34.164/'><span class='glyphicon glyphicon-cutlery'></span> سیستم تغذیه</a></li>
                        </ul>
                    </div>
                    <div class='col-md-4'>
                    	<div class='info'>
                    	<span class='glyphicon glyphicon-map-marker'>
                        </span><span> اصفهان-سپاهان شهر-انتهای بلوار غدیر-بلوار
                         پاسداران جنوبی
                         </span>
                    </div>
                    </div>
                    <div class='col-md-2'>
                    	<div class='info'>
                    	<span class='glyphicon glyphicon-earphone'></span><span> ۰۳۱-۳۶۵۳۰۲۴۱</span>
                        </div>
                    </div>
                    <div class='col-md-2' style='float:left'>
	                   <div class='telegram pull-left'>
                        	<a  href="https://telegram.me/sepahanofficial" target="_blank">
                        	<img src='img/telegram.png'>
                        	<span>تلگرام دانشگاه</span>
                       		</a>
                       </div>
                    </div>
                </div>
            </div>
		</div>
       	<div class='container-fluid  '>
    		<div class='row'>
            	<div class='col-xs-6 col-md-pull-5'>
                	<h1 class='logo'>
                    	<a href='/'>
                        <img  src='img/logo.png' alt='موسسه آموزش عالی علوم و فناوری سپاهان'>
                        </a>
                    </h1>
                 </div>
                <div class='col-xs-1 pull-left hidden-xs' style='padding:0;'> 
                	<img  src='img/iranflag.png' alt='پرچم ایران' style='height:90px;border-radius: 0;float:left;'>
                </div>
            </div>
            <div class='row hidden-xs'>
            	<div class='col-xs-12 clearfix'>
                	<div class='botton-nav' >
                    <span id='theTicker'></span>
                    </div>
                </div>
            </div>
        </div>
	</header>
	<nav class='navbar navbar-default'>
        <div class='container-fluid'>
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
                                <ul class='dropdown-menu' role='menu' aria-labelledby='dropDownMenu'>
                                    <li><a href='#'>دانشگاه علوم و فناوری سپاهان</a></li>
                                    <li><a href='#'>ریاست دانشگاه</a></li>
                                    <li><a href='#'>هیات موسس</a></li>
                                    <li><a href='#'>اعضای هیات علمی</a></li>
                                 </ul> 
                            </li>
                    		<!--- menu ---->
                            <li class='dropdown'>
                                <a href='#' >دانشکده ها 
                                <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu' role='menu' aria-labelledby='dropDownMenu'>
                                    <li><a href='department.php?id=2'>فناوری اطلاعات</a></li>
                                 </ul>
                            </li>
                            <li><a href='department.php?id=3'>امور پژوهشی</a></li>
                            <li><a href='department.php?id=4'>امور دانشجویی</a></li>
                            <!--- menu ---->
                            <li class='dropdown'>
                            	<a href='department.php?id=4'>تحصیلات تکمیلی
                                <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu' role='menu' aria-labelledby='dropDownMenu'>
                                    <li><a href='department.php?id=4'>فرم ها</a></li>
                                    <li><a href='department.php?id=4'>اطلاعیه ها</a></li>
                                 </ul>
                            </li>
                        </ul>
                               
                        <form action='search.php' method='get' class='navbar-form'>
                            <div class='form-group'>
                                <input type='text' name ='search' class='form-control' placeholder='جستجو ...' >
								<button type='submit'name='submit' clas='btn btn-default'>
									<span class='glyphicon glyphicon-search'></span> 
								</button> 
                            </div>
                        </form>
                    </div>
        </div>
    </nav>