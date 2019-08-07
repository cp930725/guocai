var lib = {
	THEME__: 'ab', 
        Skin_:'csj',
	TITLE__: '福利彩世界',
	COPYRIGHT__: 'COPYRIGHT © 福利彩世界 RESERVED',
	URL__: '', 
	imgUrl: 'http://ab.fighting-ttfc.com',
	WEB_TYPE__: 'credit', 
	DWONLOAD_ZONE_URI: 'http://www.ub66.org/ub.exe',
	act__rul:"http://www.hd87700.com", 
	electronImgUrl: 'http://res.am01.com',
	ME_URL___: 'http://' + window.location.host,
	TARGET_WEB_CODE_:'0',

        IsApp:false,
        device:'wap',       //[wap , web , android , ios]
	WebSocketUrl:'false',
	VersionUrl:'http://' + window.location.host + '/m',    //跳转旧版本切换
	newVersionUrl:'http://' + window.location.host + '/newapp', //跳转到新版本
	VersionSwitch:false,       
        entId: null,
        Skin:function(){
	  if(this.THEME__ =='ae'){
	       return 'tempWns/';					//圆圆的图标
	   }else if(this.THEME__ == 'ap'){
		   return 'tempAf/';					//圆角蓝色带阴影的图片
	   }else if(this.THEME__ == 'ah'||this.THEME__ == 'av') { 
		     return 'tempAe/'					// 老站点图片
	   }else{
		     return 'temp/';					//方圆形图片
	    }
	}
     }



	



























