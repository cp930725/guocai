var Util = {};
(function($){
Util.zeroPrefix = function(n){
	if(n <= 9){
		return "0" + n;	
	}
	return n;
}

Util.countdown = function(ms,isH,isM,isS,fn){
	var s = 1;
	var m = 60 * s;
	var h = 60 * m;
	var fn = typeof fn === "function" ? fn : function(){};
	var end = false;
	
	var format = function(ms){
		var hour = Math.floor(ms / h);
		var minute = Math.floor(ms % h / m);
		var sec = Math.floor(ms % h % m / s);
		var timeStr = "";
		
		if(isH){
			timeStr += Util.zeroPrefix(hour);
		}
		
		if(isM){
			if(timeStr.lastIndexOf(":") != (timeStr.length - 1)){
				timeStr += ":";
			}
			timeStr += Util.zeroPrefix(minute);
		}
		
		if(isS){
			if(timeStr.lastIndexOf(":") != (timeStr.length - 1)){
				timeStr += ":";
			}
			timeStr += Util.zeroPrefix(sec);
		}
		return timeStr;
	}
	
	var timer;
	
	var start = function(){
		timer = setInterval(function(){
			setTime(--ms);
		},1000);
	}
	
	var stop = function(){
		clearInterval(timer);
	}
	
	var setTime = function(ms){
		if(ms <= 0){
			ms = 0;
			end = true;
			stop();
		}
		fn(format(ms),end);
	}
	
	setTime(ms);
	
	start();
}

NumberRun = function(numberRun,number,fn){
	this.numberRun = numberRun;
	this.number = number;
	this.speed = 500,
	this.fn = fn;
	this.init();
}
NumberRun.prototype.init = function(){
	this.numbers = this.numberRun.children();
	this.height = this.numbers.eq(0).height();
	this.top = this.getPosTop();
}
NumberRun.prototype.getPosTop = function(){
	var pos = 0,
		number = this.number;
	this.numbers.each(function(index){
		var $number = $(this);
		if(number == $number.attr("data-number")){
			pos = index;
			return;	
		}
	});
	return pos * this.height;
}
NumberRun.prototype.run = function(){
	var numberRun = this.numberRun,
		top = this.top,
		speed = this.speed,
		fn = this.fn;
	setTimeout(function(){
		numberRun.animate({top:-top},speed,function(){
			if(typeof fn == "function"){
				fn();
			}
		});
	},0);
}

Marquee = function(holder,opts){
	this.holder = holder;
	this.init(opts);
}
Marquee.prototype.init = function(opts){
	var opts = opts ? opts : {};
	this.offset = opts.offset ? opts.offset : 0;
	this.direction = opts.direction ? opts.direction : 0;
	this.speed = opts.speed ? opts.speed : 50;
	this.distance = opts.distance ? opts.distance : 1;
	this.timer;
	this.width = this.holder.width();
	this.height = this.holder.height();
	this.left = this.width + this.offset;
	this.top = this.height + this.offset;
	this.content = this.holder.find(".marquee");
	this.container = $("<div style='position:relative;overflow:hidden;'></div>");
	this.marquee = $("<div style='position:absolute;overflow:hidden;'></div>");		
	this.container.height(this.height);
	if(!this.direction){
		this.marquee.css({
			left : this.left,
			width : '99999em',
			height : this.height
		});	
	}else{
		this.marquee.css({
			top : this.top,
			width : this.width
		});
	}
	this.holder.append(this.container);
	this.container.append(this.marquee);
	this.marquee.append(this.content);
	if(!this.direction){
		this.content.css("float","left");
	}
	this.contentWidth = this.content.outerWidth();
	this.contentHeight = this.content.outerHeight();
	this.bindEvent();
	this.start();
}
Marquee.prototype.move = function(){
	var self = this;
	this.timer = setInterval(function(){
		if(!self.direction){
			var left = parseFloat(self.marquee.css("left"));
			if(left < -self.contentWidth){
				left = self.left;
			}
			left -= self.distance;
			self.marquee.css({left : left});
		}else{
			var top = parseFloat(self.marquee.css("top"));
			if(top < -self.contentHeight){
				top = self.top;
			}
			top -= self.distance;
			self.marquee.css({top : top});
		}
	},this.speed);
}
Marquee.prototype.start = function(){
	this.move();
}
Marquee.prototype.stop = function(){
	clearInterval(this.timer);
	this.timer = undefined;
}
Marquee.prototype.reset = function(){
	this.stop();
	if(!this.direction){
		this.marquee.css({left : this.left});
	}else{
		this.marquee.css({top : this.top});
	}
}
Marquee.prototype.resize = function(){
	var started = this.timer === undefined ? false : true; 
	this.stop();
	this.width = this.holder.outerWidth();
	this.height = this.holder.outerHeight();
	this.left = this.width + this.offset;
	this.top = this.height + this.offset;
	if(started){
		this.start();
	}
}
Marquee.prototype.bindEvent = function(){
	var self = this;
	this.marquee.on("mouseenter",function(){
		self.stop();
	}).on("mouseleave",function(){
		self.start();	
	});
	$(window).on("resize",function(){
		self.resize();
	});
}

var initOptgroup = function(){
	$(".optgroup").each(function(){
        var $optgroup = $(this),
			$options = $optgroup.children(".option");
		$options.on("click",function(){
			$options.removeClass("selected");
			$(this).addClass("selected");
		});
    });
};

var initNotice = function(){
	$(".latest-notice .marquee-holder").each(function(){
    	new Marquee($(this));    
    });
	ModalFactory.open({
		title: '网站公告',
		iconCls: 'icon-sound',
		content: $("#site-notice")
	});
};

var initTabs = function(){
	$(".flat-tabs").tabs();
};

var initMinibar = function(){
	var $minibar = $("#minibar");
	if($minibar.size() == 0) return;
	var $toggle = $("#minibar-toggle");
	$toggle.on("click", function(){
		if($toggle.hasClass("opened")){
			$minibar.animate({
				right: -60
			}, function () {
				$toggle.removeClass("opened");
			});
		}else{
			$minibar.animate({
				right: 0
			}, function () {
				$toggle.addClass("opened");
			});
		}
	});
//	var $mininav = $("#mini-nav");
//	$mininav.on("click", ".mini-sound", function () {
//		ModalFactory.open({
//			title: '声音设置',
//			iconCls: 'icon-music',
//			content: $("#sound-settings"),
//			modalCls: 'mini',
//			open: function($modal, $elem){
//				$elem.find(".sound-toggle").each(function(){
//					var $toggle = $(this),
//						$text = $toggle.find(".toggle-text");
//					$toggle.on("click", function(){
//						if($toggle.hasClass("closed")){
//							$toggle.removeClass("closed");
//							$text.text("播放");
//						}else{
//							$toggle.addClass("closed");
//							$text.text("禁音");
//						}
//					});
//				});
//				$elem.find(".btn-set").on("click", function(){
//					$modal.delete();
//				});
//			}
//		});
//	});
//	$mininav.on("click", ".mini-dl", function () {
//		ModalFactory.open({
//			title: '下载APP客户端',
//			iconCls: 'icon-app-dl',
//			content: $("#app-download"),
//			open: function($modal, $elem){
////				var $scanTypes = $elem.find(".scan-type");
////				var $scanCodes = $elem.find(".scan-code");
////				$scanTypes.each(function(){
////					var $type = $(this),
////						$code = $scanCodes.filter(".scan-" + $type.attr("data-type"));
////					$type.on("click", function () {
////						if(!$type.hasClass("active")){
////							$scanTypes.removeClass("active");
////							$type.addClass("active");
////							$scanCodes.hide();
////							$code.show();
////						}
////					});
////				});

//				var $installTypes = $elem.find(".install-type");
//				var $installImgs = $elem.find(".install-imgs");
//				var viewIndex,
//					$viewList,
//					viewLen;
//				$installTypes.each(function(){
//					var $type = $(this),
//						$imgs = $installImgs.filter("." + $type.attr("data-type") + "-imgs"),
//						$pics = $imgs.children(".pic");
//					$type.on("click", function () {
//						$installTypes.removeClass("active");
//						$type.addClass("active");
//						$installImgs.hide();
//						$imgs.show();
//						$preview.hide();
//						$prev.show();
//						$next.show();
//					});
//					$pics.on("click", function(){
//						$viewList = $pics;
//						viewLen = $viewList.size() - 1;
//						viewIndex = $(this).index();
//						$installImgs.hide();
//						$preview.show();
//						if(viewIndex == 0){
//							$prev.hide();
//						}
//						if(viewIndex == viewLen){
//							$next.hide();
//						}
//						preview($(this));
//					});
//				});

//				var $preview = $elem.find(".install-preview");
//				var $prev = $preview.find(".prev");
//				var $next = $preview.find(".next");
//				var $viewTitle = $preview.find(".view-title");
//				var $viewDesc = $preview.find(".view-desc");
//				var $viewPic = $preview.find(".view-pic");

//				var preview = function($el){
//					var $img = $el.find("img");
//					$viewTitle.text($img.attr("data-title"));
//					$viewDesc.text($img.attr("data-desc"));
//					$viewPic.empty();
//					$viewPic.append('<img src="' + $img.attr("data-src") + '" alt="">');
//				};

//				var chekcIndex = function () {
//					if(viewIndex == 0){
//						$prev.hide();
//					}else{
//						$prev.show();
//					}
//					if(viewIndex == viewLen){
//						$next.hide();
//					}else{
//						$next.show();
//					}
//				};

//				$preview.find(".back").on("click", function(){
//					$installImgs.filter("." + $installTypes.filter(".active").attr("data-type") + "-imgs").show();
//				});

//				$prev.on("click", function(){
//					--viewIndex;
//					chekcIndex();
//					preview($viewList.eq(viewIndex));
//				});

//				$next.on("click", function(){
//					++viewIndex;
//					chekcIndex();
//					preview($viewList.eq(viewIndex));
//				});
//			}
//		});
//	});
};

var Modal = function(options){
	var opts = options || {};

	this.title = opts.title ? opts.title : "";
	this.iconCls = opts.iconCls ? opts.iconCls : "";
	this.content = opts.content ? opts.content : "";
	this.modalCls = opts.modalCls ? opts.modalCls : "";
	this.isShade = opts.isShade !== false;
	this.open = $.isFunction(opts.open) ? opts.open : $.noop;
	this.close = $.isFunction(opts.close) ? opts.close : $.noop;

	this.init();
};

Modal.prototype = {
	constructor: Modal,
	create: function(){
		var $modal = $('<div class="sc-modal">' +
				      '<div class="modal-header">' +
					      '<h2 class="modal-title"><i class="icon-modal ' + this.iconCls + '"></i>' + this.title + '</h2>' +
					      '<span class="modal-close"><i class="icon-modal icon-close"></i></span>' +
					  '</div>' +
					  '<div class="modal-body">' +
					  '</div>' +
				  '</div>');

		if (this.content instanceof jQuery) {
			this.content = this.content.clone();
			this.content.show();
		}

		$modal.find(".modal-body").append(this.content);

		return $modal;
	},
	delete: function(){
		this.close(this, this.content);
		this.$modal && this.$modal.remove();
		this.$shade && this.$shade.remove();
	},
	bind: function(){
		var that = this;
		this.$modal.on("click", ".modal-close", function(){
			that.delete();
		});
	},
	position: function () {
		var $win = $(window);
		this.$modal.css({
			left: ($win.width() - this.$modal.outerWidth())/2,
			top: ($win.height() - this.$modal.outerHeight())/2
		});
	},
	init: function(){
		this.$modal = this.create();

		if(this.modalCls){
			this.$modal.addClass(this.modalCls);
		}

		if(this.isShade){
			this.$shade = $('<div class="sc-shade"></div>');
		}

		this.bind();

		this.$modal.appendTo("body");
		this.$shade.appendTo("body");

		this.position();

		var that = this;

		$(window).on("resize", function () {
			that.position();
		});

		this.open(this, this.content);
	}
};

ModalFactory = {
	open: function (options) {
		return new Modal(options);
	}
};

var init = function(){
	initOptgroup();
//	initNotice();
	initTabs();
	initMinibar();
};

$(function(){
	init();
});	
})(jQuery);