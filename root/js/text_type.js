    var theSummaries = new Array();
    theSummaries[0] = 'آغاز ترم جدید تحصیلی را به خادمان و جویندگان علم بویژه شما کارکنان محترم، اساتید گرامی و دانشجویان عزیز تبریک عرض می نماییم .';
    theSummaries[1] = ' رسول اکرم (ص) فرموده اند : ';
    theSummaries[2] = ' طلب دانش بر هر مسلمانی فرض است. هلا به راستی خدا دانش جویان را دوست دارد. ';
    theSummaries[3] = 'حضرت علی (ع) فرموده اند : ';
    theSummaries[4] = 'در علم و ادب بکوشید چه آنکه عالم، عزیز و گرانقدر است، اگر چه خاندان بزرگی منتسب نباشد، اگر چه فقیر بی بضاعت باشد، و اگرچه جوان باشد.';
    theSummaries[5] = ' امام صادق (ع) فرموده اند : ';
    theSummaries[6] = ' بر عاقل واجب است كه علم و ادب كسب كند ولی باید بداند كه قوام و استواری علم به ادب است.';
    theSummaries[7] = ' امام رضا (ع) فرمودند : ';
    theSummaries[8] = 'علم گنجینه های کمال است و کلیدهای آن گنجینه ها پرسش کردن است.';
    theSummaries[9] = 'حضرت علی (ع) فرموده اند : ';
    theSummaries[10] = ' سزاوار است انسان عاقل رأی خردمندان را به رأی خود بیفزاید و دانش علماء را بر دانش خویش اضافه نماید. ';
    theSummaries[11] = 'امام صادق (ع) فرموده اند : ';
    theSummaries[12] = 'مطالعه ی بسیار و پی گیر در مسائل علمی، باعث شگفتی عقل و تقویت نیروی فکر و فهم است.';

	var theCharacterTimeout = 40;
	var theStoryTimeout     = 3000;
    var theWidgetOne        = "_";
	var theWidgetTwo        = "-";
	var theWidgetNone       = "";
	var theItemCount = theSummaries.length;
	
	function startTicker(){
		theCurrentStory     = -1;
		theCurrentLength    = 0;
		runTheTicker();   	
		
	}
	
	function runTheTicker(){
		var myTimeout;  
		if(theCurrentLength == 0){
				theCurrentStory++;
				theCurrentStory      = theCurrentStory % theItemCount;
				theStorySummary      = theSummaries[theCurrentStory];
			}
		var textTitle = theStorySummary.substring(0,theCurrentLength) + whatWidget();
		$("#theTicker").text(textTitle);			 
	
			
		if(theCurrentLength != theStorySummary.length)
			{theCurrentLength++;	myTimeout = theCharacterTimeout;}
		else{theCurrentLength = 0; myTimeout = theStoryTimeout;}
		setTimeout("runTheTicker()", myTimeout);
	}

	function whatWidget(){
		if(theCurrentLength == theStorySummary.length)	return theWidgetNone;
		if((theCurrentLength % 2) == 1)	return theWidgetOne;
			else return theWidgetTwo;
	}
	/////////////////////////////////////
$(document).ready(function(e) {
	startTicker();
	/////////////////////////////
	
});