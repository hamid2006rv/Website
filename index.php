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
                        <a class='btn btn-sm bg-blue' href='#' target='_blank'>نمایش سایر اخبار</a>
                    </div>
                 </div>
                <div class='top-news'>
                    <a target='_blank' href='#'>
                        <img src='img/1.gif' alt='news'>
                    </a>
                    <div class='text-news'>
                        <span class='glyphicon glyphicon-calendar'></span><span> سه شنبه 11 آبان</span>
                        <h3>
                        	<a target='_blank' href='#'>قابل توجه متقاضیان شرکت در همایش بدون ارائه مقاله</a>
                        </h3>
                        <p>زمان برگزاری همایش: شنبه 20 آذر ساعت 9 الی 16
                            زمان ثبت نام: 20 آبان  الی 1 آذر
                            محل ثبت نام: امور دانشجویی
                            هزینه ثبت نام با ارائه کارت دانشجویی (شامل پذیرایی، ناهار و گواهی شرکت): 10 هزار تومان
                            مکان برگزاری همایش: روبروی پل خواجو، سالن موسسه تنظیم و نشر آثار امام خمینی(ره)
                            قابل ذکر است با توجه به محدود بودن  ظرفیت سالن، اولویت با دانشجویان ارشد و دانشجویان مهندسی برق و مهندسی پزشکی می باشد.
                        </p>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<a href='#'><img src='img/1.gif'></a>
							<div class="text-news">
                            	<span class='glyphicon glyphicon-calendar'></span> 
								<span>پنجشنبه 20 آبان</span>
								<h3><a href='#'>اطلاعیه پذیرش دانشجو در سال تحصیلی ۹۶-۹۵
</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<a href='#'><img src='img/1.gif'></a>
							<div class="text-news">
                            	<span class='glyphicon glyphicon-calendar'></span>
								<span>پنجشنبه 20 آبان</span>
								<h3><a href='#'>اسامی پذیرفته شدگان کنکور ارشد سال ۹۴</a></h3>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<a href='#'><img src='img/1.gif'></a>
							<div class="text-news">
                            	<span class='glyphicon glyphicon-calendar'></span>
								<span>پنجشنبه 20 آبان</span>
								<h3><a href='#'>مراسم جشن عید غدیر</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="latest-news">
							<a href='#'><img src='img/1.gif'></a>
							<div class="text-news">
                            	<span class='glyphicon glyphicon-calendar'></span>
								<span>پنجشنبه 20 آبان</span>
								<h3><a href='#'>اسامی قبول شدگان کنکور کارشناسی ارشد سال ٩٣</a></h3>
							</div>
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
                	echo "<a target='_blank' href='./notification.php?id=$row[nid]'>$row[ntitle]</a>";
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