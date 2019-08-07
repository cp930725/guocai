(function(){
var initSlide = function(){
	$("#focus-slide").flexslider({
		selector:".slide-content > .slide-panel"
    });
}

var initTabs = function(){
	$(".lottery-tabs,.live-tabs,.vip-tabs").tabs();
}

var showPrize = function(){
	var $prize = $("#game-prize");
	if($prize.size() == 0) return;
	var numberArr = $prize.attr("data-prize").split(",");
	$prize.children("li:has(.number-run)").each(function(index){
		var $item = $(this);
		var numberRun = new NumberRun($item.find(".number-run"),numberArr[index]);
		numberRun.run();
	});
}

var initLatestWinning = function(){
	$(".sport-winning .marquee-holder,.game-winning .marquee-holder").each(function(){
    	new Marquee($(this),{
			direction : 1
		});
    });
}

var initLive = function(){
	var $list = $(".live-list");
	if($list.size() == 0) return;
	var $items = $list.children();
	$items.on("mouseenter",function(){
		var $cur = $(this);
		$items.removeClass("hover");
		$cur.addClass("hover");
	});
	$items.eq(0).addClass("hover");
}

var initExchange = function(){
	$("#latest-exchange .marquee-holder").each(function(){
    	new Marquee($(this), {
    		direction: 1
    	});
    });
}
	
var init = function(){
	initSlide();
	initTabs();
	showPrize();
	initLatestWinning();
	initLive();
	initExchange();
}

$(function(){
	init();
});
})();