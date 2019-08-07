var UserCurMoney = 0;
var audioElementHovertree;
$(document).ready(function () {
    ajaxNewsTop();
    ajaxUserInfo();
    ajaxPopInfo();
    _jcms_GetRefreshCode('imgCode');
    if (getCookie("username") != null) {
        $("#txtUserName").val(getCookie("username"));
    }
    $('.sc_ylnav a').click(function () {
        $(this).parent().find('a').removeClass();
        $(this).addClass('current');
        var src = $(this).attr("nmb");
        ajaxCheckLoginToUrl(src);
    });
    audioElementHovertree = document.createElement('audio');
    audioElementHovertree.setAttribute('autoplay', 'autoplay');
    //activity.init();
});

//加载基本信息
function ajaxUserInfo() {
    $.ajax({
        type: "get",
        dataType: "json",
        data: "clienttime=" + Math.random(),
        url: "/ajax/ajax.aspx?oper=ajaxUserInfo",
        error: function (XmlHttpRequest, textStatus, errorThrown) { if (XmlHttpRequest.responseText != "") {  } },
        success: function (d) {
            if (d.result != "0") {
                $("#login").hide();
                $("#Info").show();
                Adminname = d.AdminName;
                $i('username').innerHTML = d.AdminName;
                $i('money').innerHTML = UserCurMoney = d.AdminMoney;
                //ajaxHBList();
            }
            else {
                $("#login").show();
                $("#Info").hide();
            }
        }
    });
    setTimeout('ajaxUserInfo()', 60000);
}

//获取即时信息
function ajaxPopInfo() {
    $.ajax({
        type: "get",
        dataType: "json",
        data: "clienttime=" + Math.random(),
        url: "/ajax/ajax.aspx?oper=ajaxPopInfo",
        error: function (XmlHttpRequest, textStatus, errorThrown) { if (XmlHttpRequest.responseText != "") {  } },
        success: function (d) {
            if (d.result == "1") {
                audioPlay('info');
                var pop = new Pop(d.title, "#", d.content.replace(/,/g, "<br/>").replace(/ /g, "："));
                setTimeout(function () {
                    $('#pop').hide();
                }, 5000);
                ajaxBetList();
            }
        }
    });
    setTimeout('ajaxPopInfo()', 120000);
}

function ajaxNewsTop() {
    $.ajax({
        type: "get",
        dataType: "json",
        data: "clienttime=" + Math.random(),
        url: "/ajax/ajaxNews.aspx?oper=ajaxGetNewsTop1",
        success: function (data) {
            if (data.result == "1") {
                $("#newsTop1").html(data.table[0].title);
            }
        }
    });
}

function ajaxLogin() {
    var uName = stripscript($("#txtUserName").val());
    var oPass = $('#txtUserPass').val();
    var typeNum = $("#txtLoginType").val();
    var code = $("#txtUserCode").val();
    setCookie("username", uName);
    if (site.WebIsOpen == "1") {
        emAlert(site.WebCloseSeason);
        return false;
    }
    if (uName == "") {
        emAlert("会员账号不能为空");
        return false;
    }
    if (oPass == "") {
        emAlert("密码不能为空");
        return false;
    }
    if (code == "") {
        emAlert("验证码不能为空");
        return false;
    }
    var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
    if (uName != "" && uName != null) {
        if (pattern.test(uName)) {
            emAlert("会员账号中包含非法字符！");
            $("#txtUserName").attr("value", "");
            $("#txtUserName").focus();
            return false;
        }
    }
    var index = emLoading();

    uPass = Lottery.MD5(oPass);
    $('#txtUserPass').val(uPass);
    $.ajax({
        type: "post",
        dataType: "json",
        url: "ajax/ajax.aspx?oper=login&clienttime=" + Math.random(),
        data: "name=" + encodeURIComponent(uName) + "&pass=" + encodeURIComponent(uPass) + "&type=" + typeNum + "&code=" + encodeURIComponent(code),
        error: function (XmlHttpRequest, textStatus, errorThrown) {  },
        success: function (d) {
            layer.close(index);
            if (d.result == "1") {
                LayerPop('系统公告', '900px', '600px', '/help/news.html')
                initInfo();
            }
            else {
                emAlert(d.message);
                return;
            }
            closeload(index);
            $('#txtUserPass').val("");
            $('#txtUserCode').val("");
        }
    });
}

function initInfo() {
    $.ajax({
        type: "get",
        dataType: "json",
        data: "clienttime=" + Math.random(),
        url: "/ajax/ajax.aspx?oper=ajaxUserInfo",
        error: function (XmlHttpRequest, textStatus, errorThrown) { if (XmlHttpRequest.responseText != "") {  } },
        success: function (d) {
            if (d.result == "1") {
                $("#login").hide();
                $("#Info").show();
                Adminname = d.AdminName;
                $i('username').innerHTML = d.AdminName;
                $i('money').innerHTML = UserCurMoney = d.AdminMoney;
                //ajaxHBList();
            }
        }
    });
}

//手动刷新
function ajaxRefresh() {
    var index = emLoading();
    $i('money').innerHTML = "获取中...";
    initInfo();
    closeload(index);
}

function audioPlay(type) {
    if (type == "fengdan") {
        if (getCookie("soundFD") != null) {
            if (getCookie("soundFD") == "1") {
                audioElementHovertree.setAttribute('src', '/statics/mp3/fengdan.mp3');
                audioElementHovertree.play();
            }
        }
        else {
            audioElementHovertree.setAttribute('src', '/statics/mp3/fengdan.mp3');
            audioElementHovertree.play();
        }
    }
    if (type == "info") {
        if (getCookie("soundInfo") != null) {
            if (getCookie("soundInfo") == "1") {
                audioElementHovertree.setAttribute('src', '/statics/mp3/info.mp3');
                audioElementHovertree.play();
            }
        }
        else {
            audioElementHovertree.setAttribute('src', '/statics/mp3/info.mp3');
            audioElementHovertree.play();
        }
    }
    if (type == "kaijiang") {
        if (getCookie("soundKJ") != null) {
            if (getCookie("soundKJ") == "1") {
                audioElementHovertree.setAttribute('src', '/statics/mp3/kaijiang.mp3');
                audioElementHovertree.play();
            }
        }
        else {
            audioElementHovertree.setAttribute('src', '/statics/mp3/kaijiang.mp3');
            audioElementHovertree.play();
        }
    }
    if (type == "cheer") {
        audioElementHovertree.setAttribute('src', '/statics/mp3/cheer.mp3');
    }
    if (type == "lottery") {
        audioElementHovertree.setAttribute('src', '/statics/mp3/lottery.mp3');
    }
}

function audioPause() {
    audioElementHovertree.pause();
}

var hongbao = {
    open: function (money) {
        var $result = $(this.result(money));
        $result.on("click", ".close", function () {
            $result.remove();
        });
        $result.appendTo("body");
        setTimeout(function () {
            $result.remove();
        }, 3000);
    },
    result: function (money) {
        return '<div id="hongbao-result" class="hongbao-result"><span class="close"></span><span class="hongbao-money">' + money + '</span></div><div class="yl-mask"></div>';
    },
    sendMsg: function (msg) {
        this.timer && clearTimeout(this.timer);
        var $message = this.$message;
        $message.html(msg).show();
        this.timer = setTimeout(function () {
            $message.hide();
        }, 3000);
    },
    init: function () {
        this.$message = $("#hongbao-message");
    }
}
var activity = {
    initHongbao: function () {
        //			$("#hongbao-winning .winning-inner").marquee({
        //				content: ".winning-list",
        //				direction: 1
        //			});
        hongbao.init();
        var $float = $("#hongbao-float");
        var $receive = $("#hongbao-receive");
        $receive.on("click", function () {
            $.ajax({
                type: "post",
                dataType: "json",
                data: "",
                url: "/ajax/ajaxActive.aspx?oper=PaiFaHB&clienttime=" + Math.random(),
                error: function (XmlHttpRequest, textStatus, errorThrown) {  },
                success: function (d) {
                    if (d.result == "1") {
                        //ajaxHBList();
                        var money = d.message;
                        hongbao.open(money);
                        hongbao.sendMsg('<i class="icon-prom icon-sound"></i><p>恭喜 ' + Adminname + '<br/>获得红包现金 ' + money + '元</p>');
                    }
                    else {
                        emAlert(d.message);
                    }
                }
            });


        }).on("click", ".close", function (e) {
            e.stopPropagation();
            $float.remove();
        });
    },
    initQd: function () {
        var $holder = $("#qd-calendar");
        if ($holder.size() == 0) return;
        var $year = $holder.find(".year"),
				$month = $holder.find(".month"),
				$yearMinus = $holder.find(".year-minus"),
				$yearPlus = $holder.find(".year-plus"),
				$monthMinus = $holder.find(".month-minus"),
				$monthPlus = $holder.find(".month-plus"),
				$days = $holder.find(".days"),
				now = new Date();

        var bindYMEvent = function ($target, $plus, $minus) {
            $minus.on("click", function () {
                var $currentOption = $target.find(":selected"),
						$prevOption = $currentOption.prev();
                if ($prevOption.size() == 0) {
                    return;
                }
                $prevOption.prop("selected", true);
                dayHandle();
            });
            $plus.on("click", function () {
                var $currentOption = $target.find(":selected"),
						$nextOption = $currentOption.next();
                if ($nextOption.size() == 0) {
                    return;
                }
                $nextOption.prop("selected", true);
                dayHandle();
            });
        }
        var initYear = function () {
            $year.append("<option value='" + now.getFullYear() + "'>" + now.getFullYear() + "</option>");
            bindYMEvent($year, $yearPlus, $yearMinus);
            $year.on("change", dayHandle);
        }
        var initMonth = function () {
            var mArr = ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月']
            for (var i = 0; i < mArr.length; i++) {
                if (now.getMonth() == i) {
                    $month.append("<option value='" + i + "' selected='selected'>" + mArr[i] + "</option>");
                } else {
                    $month.append("<option value='" + i + "'>" + mArr[i] + "</option>");
                }
            }
            bindYMEvent($month, $monthPlus, $monthMinus);
            $month.on("change", dayHandle);
        }
        var updateDay = function (year, month) {
            year = parseInt(year);
            month = parseInt(month);
            var date = new Date();
            date.setFullYear(year, month + 1, 0);
            var num = date.getDate();
            date.setDate(1);
            var week = date.getDay();
            $days.empty();
            for (var i = 0; i < week; i++) {
                $days.append("<span></span>");
            }
            var $day;
            now = new Date()
            for (var j = 1; j <= num; j++) {
                $day = $("<span data-value='" + j + "'>" + j + "</span>");
                if ((j + week) % 7 == 1 || (j + week) % 7 == 0) {
                    $day.addClass("weekend");
                }
                if (year == now.getFullYear() && month == now.getMonth() && j == now.getDate()) {
                    $day.addClass("current");
                }
                $days.append($day);
            }
        }
        var dayHandle = function () {
            updateDay($year.val(), $month.val());
        }
        var initDay = function () {
            dayHandle();
        }
        var init = function () {
            initYear();
            initMonth();
            initDay();
        }
        init();
    },
    init: function () {
        this.initHongbao();
        this.initQd();
    }
}

function ajaxHBList() {
    $.ajax({
        type: "get",
        dataType: "json",
        data: "clienttime=" + Math.random(),
        url: "/ajax/ajaxActive.aspx?oper=GetHBInfo",
        error: function (XmlHttpRequest, textStatus, errorThrown) {  },
        success: function (d) {
            switch (d.result) {
                case '-1':
                    top.window.location = '/index.aspx';
                    break;
                case '1':
                    $i('hbNums').innerHTML = (parseFloat(d.table[0].hbnum) - parseFloat(d.table[0].todayhbnum));
                    break;
            }
        }
    });
}