 <footer class='main-footer'>
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-6 footer-list">
                	<h4>دسترسی سریع</h4>
                    <ul>
                    <li><a href='uploads/scan0005.jpg'>تقویم آموزشی</a></li>
                    <li><a href='node.php?id=20'>اعضای هیات علمی</a></li>
                    <li><a href='notification.php'>اطلاعیه ها</a></li>
                    <li><a href='node.php?id=35'>کتابخانه</a></li>
					<li><a href='album.html'>گالری تصاویر</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 footer-list">
                	<h4>پیوندها</h4>
                    <ul>
                    <li><a href='https://www.msrt.ir' target="_blank">وزارت علوم تحقیقات و فناوری</a></li>
                    <li><a href='http://www.ut.ac.ir/' target="_blank">دانشگاه تهران</a></li>
					<li><a href='http://www.sanjesh.org/' target="_blank">سازمان سنجش</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-12">
                	<a href="/"><img src='img/logo-invert.png'></a>
                    <ul style='margin:5px;'>
                    	<li>اصفهان   سپاهان شهر   انتهای بلوار غدیر   بلوار پاسداران جنوبی   موسسه آموزش عالی علوم و فناوری سپاهان</li>
                        <li>تلفن: <span>۰۳۱۳۶۵۳۰۲۴۱</span></li>
                        <li>فاکس: <span>۰۳۱۳۶۵۳۰۲۴۵</span></li>
                        <li>پست الکترونیک: <span>info@sepahan.ac.ir</span></li>
                    </ul>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12">
                	کلیه حقوق این سایت متعلق به موسسه ٱموزش عالی فناوری سپاهان می باشد &copy;
                    [تعداد بازدید: <?php 
					   $result=mysql_query("select * from settings");
					   $row=mysql_fetch_assoc($result);
					   $n= $row['num_visited'];
					   $n++;
					   mysql_query("update settings set num_visited=$n"); 
					   echo number_format($n);	
					?>]
                </div>
            </div>
        </div>
    </footer>
	<script src='./js/jquery.min.js'></script>
	<script src='./js/bootstrap.min.js'></script>
    <script src='./js/text_type.js'></script>
	</body>
</html>