// 彩票开奖配置
exports.cp=[
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'重庆时时彩',                                                                               //
		source:'16彩票',                                                                                 		//
		name:'cqssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'cqssc',                                                                                          //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/K25d3a5d691b972/cqssc-1.json',                                                                      //重
			headers:{                                                                                           //庆
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //时
			}                                                                                                   //时
		},                                                                                                      //彩
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:1,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------重庆时时彩解析数据不正确');                                                        //
			}                                                                                                                   //
		}                                                                                                       //
	},
	/*{                                                                                                           //
		title:'16彩票重庆时时彩',                                                                               //
		source:'16彩票',                                                                                 		//
		name:'cqssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'cqssc',                                                                                          //
		option:{                                                                                                //
			host:"web.dglchk.cn",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/cqssc/cqssc_16cp.php',                                                                      //重
			headers:{                                                                                           //庆
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //时
			}                                                                                                   //时
		},                                                                                                      //彩
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:1,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------16彩票重庆时时彩解析数据不正确');                                                //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //
                                                                                         //
	{                                                                                                           //
		title:'360彩票重庆时时彩',                                                                              //
		source:'360彩票',                                                                                		//
		name:'cqssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'cqssc1',                                                                                          //
		option:{                                                                                                //
			host:"web.dglchk.cn",                                                                                   //
			timeout:50000,                                                                                      //重
			path: '/cqssc/cqssc_360.php',                                                                       //庆
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //时
			}                                                                                                   //彩
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:1,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票重庆时时彩解析数据不正确');                                               //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //
	                                                                                                            //
	{                                                                                                           //
		title:'百度重庆时时彩',                                                                                 //重
		source:'百度乐彩',                                                                                 		//庆
		name:'cqssc',                                                                                           //时
		enable:true,                                                                                            //时
		timer:'cqssc2',                                                                                          //彩
		option:{                                                                                                //
			host:"web.dglchk.cn",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/cqssc/cqssc_cle.php',                                                                       //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:1,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //重
				throw('--------百度重庆时时彩解析数据不正确');                                                  //庆
			}                                                                                                   //时
		}                                                                                                       //时
    },  */                                                                                                        //彩
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'新疆时时彩',                                                                           	    	//
		source:'新疆福彩网',                                                                                 	//
		name:'xjssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'xjssc',                                                                                          //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //新
			path: '/K25d3e5b50e701a/xjssc-1.json',                                                                       	//疆
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //时
			}                                                                                                   //彩
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:12,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------新疆时时彩解析数据不正确');                                                        //
			}                                                                                                                  //
		}                                                                                                       //新
	},	                                                                                                        //疆
	/* {
             title:'新疆时时彩',
             source:'【新疆时时彩---500万彩票网】',
             name:'xjssc',
             enable:true,
             timer:'xjssc',

             option:{
                 host:"www.500wan.com",
                 timeout:30000,
                 path: '/static/info/kaijiang/xml/xjssc/newlyopen.xml',
                 headers:{
                     "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
                 }
             },

             parse:function(str){
                 try{
                     str=str.substr(0,300);
                     var m;
                     var reg=/<row expect="([\d\-]+?)" opencode="([0\d\,]+?)" opentime="([\d\:\- ]+?)"/;
                     if(m=str.match(reg)){
                         return {
                             type:12,
                             time:m[3],
                             number:m[1],
                             data:m[2]
                     };}
                 }catch(err){
                     throw('■500万■新疆时时彩■■解析数据不正确');
                 }
             }
         },                                                                                                            //时
     {                                                                                                           //时
         title:'新疆时时彩',                                                                              		//彩
         source:'新疆福彩网2',                                                                                	//
         name:'xjssc',                                                                                           //
         enable:true,                                                                                            //
         timer:'xjssc',                                                                                          //
         option:{                                                                                                //
             host:"web.dglchk.cn",                                                                                   //
             timeout:50000,                                                                                      //
             path: '/xjssc/xjssc_list_0.php',                                                                    //
             headers:{                                                                                           //
                 "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
             }                                                                                                   //
         },                                                                                                      //
         parse:function(str){                                                                                    //
             try{                                                                                                //
                 str=str.substr(0,200);	                                                                        //
                 var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
                 var m;                                                                                          //
                 if(m=str.match(reg)){                                                                           //
                     return {                                                                                    //
                         type:12,                                                                                //
                         time:m[3],                                                                              //
                         number:m[1],                                                                            //
                         data:m[2]                                                                               //
                     };                                                                                          //新
                 }					                                                                            //疆
             }catch(err){                                                                                        //时
                 throw('--------新疆福利彩票解析数据不正确');                                                  	//时
             }                                                                                                   //彩
         }                                                                                                       //
     },*/                                                                                         					//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'天津时时彩',                                                                           	    	//
		source:'天津福利彩票网',                                                                                //
		name:'tjssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'tjssc',                                                                                          //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //天
			timeout:50000,                                                                                      //津
			path: '/K25d3e5b50e701a/tjssc-1.json',                                                                 		    //时
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //彩
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:60,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------天津时时彩解析数据不正确');                                                        //
			}                                                                                                            //彩
		}                                                                                                       //
	},	                                                                                                        //
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'北京pk10',                                                                           	    	//
		source:'北京福彩网',//'百度',                                                                                 			//
		name:'bjpk10',                                                                                          //
		enable:true,                                                                                            //
		timer:'bjpk10',                                                                                         //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/K25d3e5b50e701a/bjpk10-1.json',                                                                       //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:20,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------北京pk10解析数据不正确');                                                        //
			}                                                                                                  //北
		}                                                                                                       //京
	},	                                                                                                        //PK
	/*{
        title:'【北京PK10】',
        source:'【百度乐彩】',
        name:'bjpk10',
        enable:true,
        timer:'bjpk10',

        option:{
            host:"baidu.lecai.com",
            timeout:30000,
            path: '/lottery/draw/view/557?phase=503062&agentId=5563',
            headers:{
                "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
            }
        },

        parse:function(str){
            try{
                var exp_data = /var latest_draw_result = {"red":\[([0-9\[\]\,\s"]+)\]/;
                var exp_phase = /var latest_draw_phase = '(\d+)';/;
                var exp_time = /var latest_draw_time = '([0-9\-\:\s]+)';/;
                var m_data = str.match(exp_data);
                var m_phase = str.match(exp_phase);
                var m_time = str.match(exp_time);
                if(m_data && m_phase && m_time){
                    return {
                        type:20,
                        time:m_time[1],
                        number:m_phase[1],
                        data:m_data[1].replace(/"/g, '')
                    };
                }
            }catch(err){
                throw('北京PK10】解析数据不正确');
            }
        }
    },                                                                                                            //拾
{                                                                                                           //
    title:'北京pk10',                                                                              			//
    source:'北京福彩网',                                                                                	//
    name:'bjpk10',                                                                                          //
    enable:true,                                                                                            //
    timer:'bjpk10',                                                                                         //
    option:{                                                                                                //
        host:"web.dglchk.cn",                                                                                   //
        timeout:50000,                                                                                      //
        path: '/pk10/pk10_bjfucai.php',                                                                     //
        headers:{                                                                                           //
            "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
        }                                                                                                   //
    },                                                                                                      //
    parse:function(str){                                                                                    //
        try{                                                                                                //
            str=str.substr(0,200);	                                                                        //
            var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
            var m;                                                                                          //
            if(m=str.match(reg)){                                                                           //
                return {                                                                                    //
                    type:20,                                                                                //
                    time:m[3],                                                                              //
                    number:m[1],                                                                            //
                    data:m[2]                                                                               //北
                };                                                                                          //京
            }					                                                                            //PK
        }catch(err){                                                                                        //拾
            throw('--------北京福彩网pk10解析数据不正确');                                                  //
        }                                                                                                   //
    }                                                                                                       //
},                                                                                         					//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
{                                                                                                           //
    title:'百度2广东11选5',                                                                                 //
    source:'百度1广东11x5',                                                                                 //
    name:'gd11',                                                                                            //
    enable:true,                                                                                            //
    timer:'gd11',                                                                                           //
    option:{                                                                                                //
        host:"web.dglchk.cn",                                                                                   //
        timeout:50000,                                                                                      //
        path: '/gd11/gd115_baidu.php',                                                                      //广
        headers:{                                                                                           //东
            "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //11
        }                                                                                                   //选
    },                                                                                                      //5
    parse:function(str){                                                                                    //
        try{                                                                                                //
            str=str.substr(0,200);	                                                                        //
            var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
            var m;                                                                                          //
            if(m=str.match(reg)){                                                                           //
                return {                                                                                    //
                    type:6,                                                                                 //
                    time:m[3],                                                                              //
                    number:m[1],                                                                            //
                    data:m[2]                                                                               //
                };                                                                                          //
            }					                                                                            //
        }catch(err){                                                                                        //
            throw('--------广东11x5解析数据不正确');                                                        //
        }                                                                                                   //
    }                                                                                                       //
},*/	                                                                                                        //
	//
	{                                                                                                           //
		title:'广东11选5',                                                                                //
		source:'广东11选5',                                                                                //
		name:'gd11',                                                                                            //
		enable:true,                                                                                            //
		timer:'gd11',                                                                                           //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //广
			path: '/K25d3e5b50e701a/gd11x5-1.json',                                                                     //东
			headers:{                                                                                           //11
				"User-Agent":" Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:6,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------广东11x5解析数据不正确');                                                        //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //
	//
	// {                                                                                                           //
	// 	title:'彩88广东11选5',                                                                                  //广
	// 	source:'广东11选5彩88',                                                                                 //东
	// 	name:'gd11',                                                                                            //11
	// 	enable:true,                                                                                            //选
	// 	timer:'gd11',                                                                                           //5
	// 	option:{                                                                                                //
	// 		host:"web.dglchk.cn",                                                                                   //
	// 		timeout:50000,                                                                                      //
	// 		path: '/gd11/gd115_cai88.php',                                                                      //
	// 		headers:{                                                                                           //
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
	// 		}                                                                                                   //
	// 	},                                                                                                      //
	// 	parse:function(str){                                                                                    //
	// 		try{                                                                                                //
	// 			str=str.substr(0,200);	                                                                        //
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
	// 			var m;                                                                                          //
	// 			if(m=str.match(reg)){                                                                           //
	// 				return {                                                                                    //
	// 					type:6,                                                                                 //
	// 					time:m[3],                                                                              //
	// 					number:m[1],                                                                            //
	// 					data:m[2]                                                                               //
	// 				};                                                                                          //
	// 			}					                                                                            //
	// 		}catch(err){                                                                                        //广
	// 			throw('--------彩88广东11选5解析数据不正确');                                                   //东
	// 		}                                                                                                   //11
	// 	}                                                                                                       //选
	//    },                                                                                                          //5
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// {                                                                                                           //
	// 	title:'360彩票山东11选5',                                                                               //
	// 	source:'360彩票',                                                                                	    //
	// 	name:'sd11',                                                                                            //
	// 	enable:true,                                                                                            //
	// 	timer:'sd11',                                                                                           //
	// 	option:{                                                                                                //
	// 		host:"free.manycai.com",                                                                                   //
	// 		timeout:50000,                                                                                      //
	// 		path: '/K25d3e5b50e701a/sd11x5-1.json',                                                                        //山
	// 		headers:{                                                                                           //东
	// 			"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //11
	// 		}                                                                                                   //选
	// 	},                                                                                                      //5
	// 	parse:function(str){                                                                                    //
	// 		try{                                                                                                //
	// 			str=str.substr(0,200);	                                                                        //
	// 			var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
	// 			var m;                                                                                          //
	// 			if(m=str.match(reg)){                                                                           //
	// 				return {                                                                                    //
	// 					type:7,                                                                                 //
	// 					time:m[3],                                                                              //
	// 					number:m[1],                                                                            //
	// 					data:m[2]                                                                               //
	// 				};                                                                                          //
	// 			}					                                                                            //
	// 		}catch(err){                                                                                        //
	// 			throw('--------360彩票山东11选5解析数据不正确');                                                //
	// 		}                                                                                                   //
	// 	}                                                                                                       //
	// },
	//自定义添加山东11选5	                                                                                                        //
	{
		title:'山东11选5',                                                                                //
		source:'山东11选5',                                                                            		    //
		name:'sd11',                                                                                            //
		enable:true,                                                                                            //
		timer:'sd11',                                                                                           //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //山
			path: '/K25d3e5b50e701a/sd11x5-1.json',                                                                   	    //东
			headers:{                                                                                           //11
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:7,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------山东11x5解析数据不正确');                                                        //
			}                                                                                                                                     //
		}
	},
	//自定义添加江西11选5	                                                                                                        //
	{
		title:'江西11选5',                                                                                //
		source:'江西11选5',                                                                            		    //
		name:'jx11',                                                                                            //
		enable:true,                                                                                            //
		timer:'jx11',                                                                                           //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //山
			path: '/K25d3e5b50e701a/jx11x5-1.json',                                                                   	    //东
			headers:{                                                                                           //11
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:16,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------江西11x5解析数据不正确');                                                        //
			}                                                                                                                                     //
		}
	},
	//                                                                                                                        //
	/*{                                                                                                           //
		title:'彩乐乐山东11选5',                                                                                //
		source:'彩乐乐',                                                                            		    //
		name:'sd11',                                                                                            //
		enable:true,                                                                                            //
		timer:'sd11',                                                                                           //
		option:{                                                                                                //
			host:"cp.360.cn",                                                                                   //
			timeout:50000,                                                                                      //山
			path: '/sd11/sd115_cle.php',                                                                   	    //东
			headers:{                                                                                           //11
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:7,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------彩乐乐山东11选5解析数据不正确');                                                 //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //
	                                                                                                            //
	{                                                                                                           //
		title:'彩88山东11选5',                                                                                  //山
		source:'广东11选5彩88',                                                                                 //东
		name:'sd11',                                                                                            //11
		enable:true,                                                                                            //选
		timer:'sd11',                                                                                           //5
		option:{                                                                                                //
			host:"web.dglchk.cn",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/sd11/sd115_cai88.php',                                                                      //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:7,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //山
				throw('--------彩88山东11选5解析数据不正确');                                                   //东
			}                                                                                                   //11
		}                                                                                                       //选
    },                                                                                                          //5
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'360彩票江西11选5',                                                                           	//
		source:'360彩票',                                                                                 		//
		name:'jx11',                                                                                            //
		enable:true,                                                                                            //
		timer:'jx11',                                                                                           //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //江
			path: '/K25d3e5b50e701a/jx11x5-1.json',                                                                      	//西
			headers:{                                                                                           //11
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:16,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票江西11选5解析数据不正确');                                                //
			}                                                                                                   //
		}                                                                                                       //江
	},	                                                                                                        //西
                                                                                                               //11
	{                                                                                                           //选
		title:'彩88江西11选5',                                                                              	//5
		source:'彩88',                                                                                			//
		name:'jx11',                                                                                            //
		enable:true,                                                                                            //
		timer:'jx11',                                                                                           //
		option:{                                                                                                //
			host:"web.dglchk.cn",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/jx11/jx115_cai88.php',                                                                      //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:16,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //江
				}					                                                                            //西
			}catch(err){                                                                                        //11
				throw('--------彩88江西11选5解析数据不正确');                                                  	//选
			}                                                                                                   //5
		}                                                                                                       //
	},                                                                                         					//
/////////////////////////////////////////*//////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// {                                                                                                           //
	// 	title:'上海11选5',                                                                           	    	//
	// 	source:'360彩票',                                                                                 		//
	// 	name:'sh11',                                                                                            //
	// 	enable:true,                                                                                            //
	// 	timer:'sh11',                                                                                           //
	// 	option:{                                                                                                //
	// 		host:"free.manycai.com",                                                                                   //
	// 		timeout:50000,                                                                                      //上
	// 		path: '/K25d3e5b50e701a/sh11x5-1.json',                                                                        //海
	// 		headers:{                                                                                           //11
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //选
	// 		}                                                                                                   //5
	// 	},                                                                                                      //
	// 	parse:function(str){                                                                                    //
	// 		try{                                                                                                //
	// 			str=str.substr(0,200);	                                                                        //
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
	// 			var m;                                                                                          //
	// 			if(m=str.match(reg)){                                                                           //
	// 				return {                                                                                    //
	// 					type:15,                                                                                //
	// 					time:m[3],                                                                              //
	// 					number:m[1],                                                                            //
	// 					data:m[2]                                                                               //
	// 				};                                                                                          //
	// 			}					                                                                            //
	// 		}catch(err){                                                                                        //
	// 			throw('--------360彩票上海11选5解析数据不正确');                                                //
	// 		}                                                                                                   //上
	// 	}                                                                                                       //海
	// },	                                                                                                        //11
	//选
	{                                                                                                           //5
		title:'上海11选5',                                                                              		//
		source:'爱彩乐',                                                                                		//
		name:'sh11',                                                                                          	//
		enable:true,                                                                                            //
		timer:'sh11',                                                                                         	//
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/K25d3e5b50e701a/sh11x5-1.json',                                                                     	//
			headers:{                                                                                           //
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //
			}                                                                                                   //
		},                                                                                                      //
		// parse:function(str){                                                                                    //
		// 	try{                                                                                                //
		// 		str=str.substr(0,200);	                                                                        //
		// 		var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
		// 		var m;                                                                                          //
		// 		if(m=str.match(reg)){                                                                           //
		// 			return {                                                                                    //
		// 				type:15,                                                                                //
		// 				time:m[3],                                                                              //
		// 				number:m[1],                                                                            //上
		// 				data:m[2]                                                                               //海
		// 			};                                                                                          //11
		// 		}					                                                                            //选
		// 	}catch(err){                                                                                        //5
		// 		throw('--------爱彩乐上海11选5解析数据不正确');                                                  //
		// 	}                                                                                                   //
		// }
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:15,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------爱彩乐上海11x5解析数据不正确');                                                        //
			}                                                                                                                                     //
		}                                                                                                                  //
	},                                                                                         					//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'江苏快3',//'360彩票江苏快3'                                                                           		//
		source:'360彩票',                                                                                 		//
		name:'jsk3',                                                                                            //
		enable:true,                                                                                            //
		timer:'jsk3',                                                                                           //
		option:{                                                                                                //
			host: "free.manycai.com",//"xingcai1.xitid.com",                                                                                   //
			timeout:50000,                                                                                      //江
			path: '/K25d3e5b50e701a/jsks-1.json',//'/jsk3/jsk3_360.php',                                                                      	//苏
			headers:{                                                                                           //快
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //3
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:79,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票江苏快3解析数据不正确');                                                        //
			}                                                                                                                                     //
		}                                                                                              //                                                                                                      //江
	},	                                                                                                        //苏
	//快
	/*{                                                                                                           //3
		title:'163江苏快3',                                                                              		//
		source:'网易163',                                                                                		//
		name:'jsk3',                                                                                            //
		enable:true,                                                                                            //
		timer:'jsk3',                                                                                           //
		option:{                                                                                                //
			host:"free.manycai.com",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/K25d3e5b50e701a/jsks-1.json',//'/jsk3/jsk3_163.php',                                                                         //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36"                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:79,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //江
				throw('--------163江苏快3解析数据不正确');                                                  	//苏
			}                                                                                                   //快
		}                                                                                                       //3
	},       */                                                                                  					//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'快乐8',                                                                           				//
		source:'北京福利彩票',                                                                                  //
		name:'bjkl8',                                                                                           //
		enable:true,                                                                                            //
		timer:'bjkl8',                                                                                          //
		option:{                                                                                                //北
			host:"free.manycai.com",                                                                                   //京
			timeout:50000,                                                                                      //快
			path: '/K25d3e5b50e701a/bjkl8-1.json',                                                                      			//乐
			headers:{                                                                                           //8
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36 "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			// try{                                                                                                //
			// 	str=str.substr(0,200);	                                                                        //
			// 	var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
			// 	var m;                                                                                          //
			// 	if(m=str.match(reg)){                                                                           //
			// 		return {                                                                                    //
			// 			type:78,                                                                                //
			// 			time:m[3],                                                                              //
			// 			number:m[1],                                                                            //
			// 			data:m[2]                                                                               //北
			// 		};                                                                                          //京
			// 	}					                                                                            //快
			// }catch(err){                                                                                        //乐
			// 	throw('--------官网快乐8解析数据不正确');                                                	    //8
			// }
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;              //
				var m;
				if(m=str.match(reg)){
					return {                                                                                    //
						type:78,                                                                                 //
						time:m[2],                                                                              //
						number:m[1],                                                                            //
						data:m[3]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------北京快乐8解析数据不正确');                                                        //
			}                                                                                                                  //
		}                                                                                                       //
	},	                                                                                                        //
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                                             //
		title:'福彩3D',                                                                                                           //
		source:'香雨娱乐平台',                                                                                                    //
		name:'fc3d',                                                                                                              //
		enable:true,                                                                                                              //
		timer:'fc3d',                                                                                                             //
                                                                                                                                  //
		option:{                                                                                                                  //
			host:"free.manycai.com",                                                                                                //福
			timeout:50000,                                                                                                        //彩
			path: '/K25d3a5d691b972/fc3d-1.json',                                                                      //3D
			headers:{                                                                                                             //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"                                                //
			}                                                                                                                     //
		},                                                                                                                        //
		                                                                                                                          //
		parse:function(str){                                                                                                      //
			try{                                                                                                                  //
				str=str.substr(0,300);                                                                                            //
				var m;                                                                                                            //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;  //
                                                                                                                                  //
				if(m=str.match(reg)){                                                                                             //
					return {                                                                                                      //
						type:9,                                                                                                   //
						time:m[2],                                                                                                //
						number:m[1],                                                                                              //
						data:m[3]                                                                                                 //
					};                                                                                                            //
				}                                                                                                                 //
			}catch(err){                                                                                                          //
				throw('福彩3D解析数据不正确');                                                                                    //
			}                                                                                                                     //
		}                                                                                                                         //
	},                                                                                                                           //

	{                                                                                                                             //
		title:'排列3',                                                                                                            //排
		source:'香雨娱乐平台',                                                                                                    //列
		name:'pl3',                                                                                                              //3
		enable:true,                                                                                                              //
		timer:'pl3',                                                                                                             //
	                                                                                                                                 //
		option:{                                                                                                                  //
			host:"free.manycai.com",                                                                                                //
			timeout:50000,                                                                                                        //
			path: '/K25d3a5d691b972/tcpl3-1.json',                                                                     //
			headers:{                                                                                                             //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"                                                //
			}                                                                                                                     //
		},                                                                                                                        //
		                                                                                                                          //
		parse:function(str){                                                                                                      //
			try{                                                                                                                  //
				str=str.substr(0,300);                                                                                            //
				var m;	                                                                                                          //
				var reg=/\[{"issue":"([\d]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,]+?)"/;                                    //
				if(m=str.match(reg)){                                                                                             //
					return {                                                                                                      //
						type:10,                                                                                                  //
						time:m[2],                                                                                                //
						number:m[1],                                                                                           //
						data:m[3]                                                                                                 //
					};                                                                                                            //
				}                                                                                                                 //
			}catch(err){                                                                                                          //
				throw('排3解析数据不正确');                                                                                       //
			}                                                                                                                     //
		}                                                                                                                         //
	},                                                                                                                            //
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*{                                                                                                         	//
		title:'澳门时时彩',                                                                                   	//
		source:'杏彩',                                                                                        	//
		name:'amssc',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'amssc',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcamssc',                                                               	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//杏
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//彩
				var m;                                                                                        	//系
				if(m=str.match(reg)){                                                                         	//统
					return {                                                                                  	//彩
						type:61,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门时时彩解析数据不正确');                                                            	//
			}                                                                                                 	//
		}                                                                                                     	//
	},                                                                                                        	//
																												//
	{                                                                                                         	//
		title:'台湾时时彩',                                                                                   	//
		source:'杏彩',                                                                                        	//
		name:'twssc',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'twssc',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctwssc',                                                               	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//杏
				if(m=str.match(reg)){                                                                         	//彩
					return {                                                                                  	//系
						type:62,                                                                              	//统
						time:m[3],                                                                            	//彩
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾时时彩解析数据不正确');                                                            	//
			}                                                                                                 	//
		}                                                                                                     	//
	},                                                                                                        	//
																												//
	{                                                                                                         	//
		title:'澳门快乐8',                                                                                    	//
		source:'杏彩',                                                                                        	//
		name:'amkl8',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'amkl8',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcamkl8',                                                               	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//杏
			try{                                                                                              	//彩
				str=str.substr(0,200);	                                                                      	//系
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//统
				var m;                                                                                        	//彩
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:73,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门快乐8解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'韩国快乐8',                                                                                    	//
		source:'杏彩',                                                                                        	//
		name:'hgkl8',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'hgkl8',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xchgkl8',                                                               	//杏
			headers:{                                                                                         	//彩
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//系
			}                                                                                                 	//统
		},                                                                                                    	//彩
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:74,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('韩国快乐8解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'澳门pk10',                                                                                     	//
		source:'杏彩',                                                                                        	//杏
		name:'ampk10',                                                                                         	//彩
		enable:true,                                                                                          	//系
		timer:'ampk10',                                                                                        	//统
		option:{                                                                                              	//彩
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcampk10',                                                              	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:65,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//杏
						data:m[2]                                                                             	//彩
					};                                                                                        	//系
				}					                                                                          	//统
			}catch(err){                                                                                      	//彩
				throw('澳门pk10解析数据不正确');                                                              	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'台湾pk10',                                                                                     	//
		source:'杏彩',                                                                                        	//
		name:'twpk10',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'twpk10',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctwpk10',                                                              	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//杏
				if(m=str.match(reg)){                                                                         	//彩
					return {                                                                                  	//系
						type:66,                                                                              	//统
						time:m[3],                                                                            	//彩
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾pk10解析数据不正确');                                                              	//
			}                                                                                                 	//
		}                                                                                                     	//
	},			                                                                                              	//
																												//
	{                                                                                                         	//
		title:'澳门11选5',                                                                                    	//
		source:'杏彩',                                                                                        	//
		name:'am11',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'am11',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcam11',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//杏
				var m;                                                                                        	//彩
				if(m=str.match(reg)){                                                                         	//系
					return {                                                                                  	//统
						type:67,                                                                              	//彩
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门11选5解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'台湾11选5',                                                                                    	//
		source:'杏彩',                                                                                        	//
		name:'tw11',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'tw11',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctw11',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//杏
						type:68,                                                                              	//彩
						time:m[3],                                                                            	//系
						number:m[1],                                                                          	//统
						data:m[2]                                                                             	//彩
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾11选5解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'澳门幸运农场',                                                                                 	//
		source:'杏彩',                                                                                        	//
		name:'amklsf',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'amklsf',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcamklsf',                                                              	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:71,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门幸运农场解析数据不正确');                                                          	//杏
			}                                                                                                 	//彩
		}                                                                                                     	//系
	},		                                                                                                  	//统
																												//彩
	{                                                                                                         	//
		title:'台湾幸运农场',                                                                                 	//
		source:'杏彩',                                                                                        	//
		name:'twklsf',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'twklsf',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctwklsf',                                                              	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:72,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾幸运农场解析数据不正确');                                                          	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'澳门快3',                                                                                      	//
		source:'杏彩',                                                                                        	//杏
		name:'amk3',                                                                                         	//彩
		enable:true,                                                                                          	//系
		timer:'amk3',                                                                                        	//统
		option:{                                                                                              	//彩
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcamk3',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:63,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门快3解析数据不正确');                                                               	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'台湾快3',                                                                                      	//
		source:'杏彩',                                                                                        	//
		name:'twk3',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'twk3',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctwk3',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//杏
			}                                                                                                 	//彩
		},                                                                                                    	//系
		parse:function(str){                                                                                  	//统
			try{                                                                                              	//彩
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:64,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾快3解析数据不正确');                                                               	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'澳门3D',                                                                                       	//
		source:'杏彩',                                                                                        	//
		name:'am3d',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'am3d',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcam3d',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:69,                                                                              	//杏
						time:m[3],                                                                            	//彩
						number:m[1],                                                                          	//系
						data:m[2]                                                                             	//统
					};                                                                                        	//彩
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门3D解析数据不正确');                                                                	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'台湾3D',                                                                                       	//
		source:'杏彩',                                                                                        	//
		name:'tw3d',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'tw3d',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctw3d',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:70,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾3D解析数据不正确');                                                                	//
			}                                                                                                 	//
		}                                                                                                     	//杏
	},		                                                                                                  	//彩
																												//系
	{                                                                                                         	//统
		title:'香港六合彩',                                                                                   	//彩
		source:'杏彩',                                                                                        	//
		name:'gslhc',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'gslhc',                                                                                        	//
		option:{                                                                                              	//
			host:"free.manycai.com",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/K25d3a5d691b972/xglhc-1.json',                                                                 	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/\[{"issue":"([\d\\/]+?)","opendate":"([\d\:\- ]+?)","code":"([\d\,\+]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:77,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('高速六合彩解析数据不正确');                                                            	//
			}                                                                                                 	//
		}                                                                                                     	//
	},	*/	                                                                                                  	//
																												//
	/*{                                                                                                         	//杏
		title:'巴西快乐彩',                                                                                   	//彩
		source:'杏彩',                                                                                        	//系
		name:'bxklc',                                                                                         	//统
		enable:true,                                                                                          	//彩
		timer:'bxklc',                                                                                        	//
		option:{                                                                                              	//
			host:"www.dglchk.cn",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcbxklc',                                                               	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:75,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('巴西快乐彩解析数据不正确');                                                            	//
			}                                                                                                 	//
		}                                                                                                     	//
	},             */                                                                                           	//
	//
	// {                                                                                                         	//
	// 	title:'巴西1.5分彩',                                                                                  	//
	// 	source:'杏彩',                                                                                        	//
	// 	name:'bx15',                                                                                          	//
	// 	enable:true,                                                                                          	//
	// 	timer:'bx15',                                                                                         	//
	// 	option:{                                                                                              	//
	// 		host:"www.dglchk.cn",                                                                                   	//
	// 		timeout:50000,                                                                                    	//
	// 		path: '/index.php/xingcai/xcbx15',                                                                	//
	// 		headers:{                                                                                         	//
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
	// 		}                                                                                                 	//
	// 	},                                                                                                    	//
	// 	parse:function(str){                                                                                  	//
	// 		try{                                                                                              	//杏
	// 			str=str.substr(0,200);	                                                                      	//彩
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//系
	// 			var m;                                                                                        	//统
	// 			if(m=str.match(reg)){                                                                         	//彩
	// 				return {                                                                                  	//
	// 					type:76,                                                                              	//
	// 					time:m[3],                                                                            	//
	// 					number:m[1],                                                                          	//
	// 					data:m[2]                                                                             	//
	// 				};                                                                                        	//
	// 			}					                                                                          	//
	// 		}catch(err){                                                                                      	//
	// 			throw('巴西1.5分彩解析数据不正确');                                                           	//
	// 		}                                                                                                 	//
	// 	}                                                                                                     	//
	// },                                                                                                        	//
	//
	// {                                                                                                         	//
	// 	title:'河内5分彩',                                                                                    	//
	// 	source:'杏彩',                                                                                        	//
	// 	name:'qtllc',                                                                                         	//
	// 	enable:true,                                                                                          	//
	// 	timer:'qtllc',                                                                                        	//
	// 	option:{                                                                                              	//
	// 		host:"www.dglchk.cn",                                                                                   	//
	// 		timeout:50000,                                                                                    	//
	// 		path: '/index.php/xingcai/xc5fc',                                                                 	//
	// 		headers:{                                                                                         	//
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
	// 		}                                                                                                 	//
	// 	},                                                                                                    	//
	// 	parse:function(str){                                                                                  	//
	// 		try{                                                                                              	//
	// 			str=str.substr(0,200);	                                                                      	//
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
	// 			var m;                                                                                        	//
	// 			if(m=str.match(reg)){                                                                         	//
	// 				return {                                                                                  	//
	// 					type:14,                                                                              	//
	// 					time:m[3],                                                                            	//
	// 					number:m[1],                                                                          	//
	// 					data:m[2]                                                                             	//
	// 				};                                                                                        	//
	// 			}					                                                                          	//
	// 		}catch(err){                                                                                      	//杏
	// 			throw('河内5分彩解析数据不正确');                                                             	//彩
	// 		}                                                                                                 	//系
	// 	}                                                                                                     	//统
	// },	                                                                                                      	//彩
	// 																											//
	// {                                                                                                         	//
	// 	title:'河内2分彩',                                                                                    	//
	// 	source:'杏彩',                                                                                        	//
	// 	name:'lfc',                                                                                           	//
	// 	enable:true,                                                                                          	//
	// 	timer:'lfc',                                                                                          	//
	// 	option:{                                                                                              	//
	// 		host:"www.dglchk.cn",                                                                                   	//
	// 		timeout:50000,                                                                                    	//
	// 		path: '/index.php/xingcai/xc2fc',                                                                 	//
	// 		headers:{                                                                                         	//
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
	// 		}                                                                                                 	//
	// 	},                                                                                                    	//
	// 	parse:function(str){                                                                                  	//
	// 		try{                                                                                              	//
	// 			str=str.substr(0,200);	                                                                      	//
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
	// 			var m;                                                                                        	//
	// 			if(m=str.match(reg)){                                                                         	//
	// 				return {                                                                                  	//
	// 					type:26,                                                                              	//
	// 					time:m[3],                                                                            	//
	// 					number:m[1],                                                                          	//
	// 					data:m[2]                                                                             	//
	// 				};                                                                                        	//
	// 			}					                                                                          	//
	// 		}catch(err){                                                                                      	//
	// 			throw('河内2分彩解析数据不正确');                                                             	//
	// 		}                                                                                                 	//
	// 	}                                                                                                     	//
	// },		                                                                                                  	//
	// 																											//
	// {                                                                                                         	//
	// 	title:'河内1分彩',                                                                                    	//
	// 	source:'杏彩',                                                                                        	//
	// 	name:'ffc',                                                                                           	//
	// 	enable:true,                                                                                          	//
	// 	timer:'ffc',                                                                                          	//
	// 	option:{                                                                                              	//杏
	// 		host:"www.dglchk.cn",                                                                                   	//彩
	// 		timeout:50000,                                                                                    	//系
	// 		path: '/index.php/xingcai/xcffc',                                                                 	//统
	// 		headers:{                                                                                         	//彩
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
	// 		}                                                                                                 	//
	// 	},                                                                                                    	//
	// 	parse:function(str){                                                                                  	//
	// 		try{                                                                                              	//
	// 			str=str.substr(0,200);	                                                                      	//
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
	// 			var m;                                                                                        	//
	// 			if(m=str.match(reg)){                                                                         	//
	// 				return {                                                                                  	//
	// 					type:5,                                                                               	//
	// 					time:m[3],                                                                            	//
	// 					number:m[1],                                                                          	//
	// 					data:m[2]                                                                             	//
	// 				};                                                                                        	//
	// 			}					                                                                          	//
	// 		}catch(err){                                                                                      	//
	// 			throw('河内1分彩解析数据不正确');                                                             	//
	// 		}                                                                                                 	//
	// 	}                                                                                                     	//
	// },	                                                                                                      	//
	// 																											//
	// {                                                                                                         	//
	// 	title:'河内2分彩',                                                                                    	//
	// 	source:'杏彩',                                                                                        	//
	// 	name:'lfc',                                                                                           	//
	// 	enable:true,                                                                                          	//
	// 	timer:'lfc',                                                                                          	//
	// 	option:{                                                                                              	//
	// 		host:"www.dglchk.cn",                                                                                   	//
	// 		timeout:50000,                                                                                    	//
	// 		path: '/index.php/xingcai/xc2fc',                                                                 	//杏
	// 		headers:{                                                                                         	//彩
	// 			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//系
	// 		}                                                                                                 	//统
	// 	},                                                                                                    	//彩
	// 	parse:function(str){                                                                                  	//
	// 		try{                                                                                              	//
	// 			str=str.substr(0,200);	                                                                      	//
	// 			var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
	// 			var m;                                                                                        	//
	// 			if(m=str.match(reg)){                                                                         	//
	// 				return {                                                                                  	//
	// 					type:26,                                                                              	//
	// 					time:m[3],                                                                            	//
	// 					number:m[1],                                                                          	//
	// 					data:m[2]                                                                             	//
	// 				};                                                                                        	//
	// 			}					                                                                          	//
	// 		}catch(err){                                                                                      	//
	// 			throw('河内2分彩解析数据不正确');                                                             	//
	// 		}                                                                                                 	//
	// 	}                                                                                                     	//
	// },	                                                                                                      	//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*{                                                                                                                                             //
            title: '六合彩',                                                                                                                      //
            source: '9800开奖网',                                                                                                                 //
            name: 'hklhc',                                                                                                                        //
            enable: true,                                                                                                                         //
            timer: 'hklhc',                                                                                                                       //
            stype: 34,                                                                                                                            //
            option: {                                                                                                                             //
                host: "free.manycai.com",                                                                                                          //
                timeout: 50000,                                                                                                                   //香
                path: '/K25d3a5d691b972/xglhc-1.json',                                                                                                                //港
                hhost: "free.manycai.com",                                                                                                         //六
                npath: '/K25d3a5d691b972/xglhc-1.json	',                                                                                                               //合
                headers: {                                                                                                                        //彩
                    "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/22.0.1271.64 Safari/537.11"      //
                }                                                                                                                                 //
            },                                                                                                                                    //
            parse: function(str) {                                                                                                                //
                try {                                                                                                                             //
                    return getFrom9800(str, 34);                                                                                                  //
                } catch (err) {}                                                                                                                  //
            },                                                                                                                                    //
            reparse: function(bet) {                                                                                                              //
                try {                                                                                                                             //
                    log(bet.actionNo);                                                                                                            //
                    return reparseFrom9800(bet, 34);                                                                                              //
                } catch (err) {                                                                                                                   //
                                                                                                                                                  //
                }                                                                                                                                 //
                                                                                                                                                  //
            },                                                                                                                                    //
        }                                                                                                                                         //
    /////////////////*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
];

// 出错时等待 15                                                                                                
exports.errorSleepTime=15;                                                                                      

// 重启时间间隔，以小时为单位，0为不重启
//exports.restartTime=0.4;
exports.restartTime=0;

exports.submit={

	host:'localhost',
	path:'/index.php/dataSource/kj'
}

exports.dbinfo={
	host:'localhost',
	user:'xc',
	password:'s5N4MfhFxEKFPYjH',
	port: '3306',
	database:'xc'

}

global.log=function(log){
	var date=new Date();
	console.log('['+date.toDateString() +' '+ date.toLocaleTimeString()+'] '+log)
}


function reparseFrom9800(bet, type) {
	str = bet.str;

	exports.errorSleepTime=500;  

	reg = new RegExp("<TD bgColor=#f6f6f6 align=\"center\"" + bet.actionNo + "<\/TD>[\s\S].*?<TD align=middle>(.*?)<\/TD>[\s\S].*?<TD align=middle>[\s\S].*?<font color=\"#FF0000\"><b>(\d+) (\d+) (\d+) (\d+) (\d+) (\d+)<\/b><\/font>[\s\S].*?\+ <b><font color=\"#009933\">(\d+)<\/font><\/b>", ""); //

	match = str.match(reg);
	var myDate = new Date();
	var year = myDate.getFullYear(); //年
	var month = myDate.getMonth() + 1; //月
	var day = myDate.getDate(); //日
	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	var mytime = match[1] + " " + myDate.toLocaleTimeString();
	try {
		var data = {
			type: type,
			time: mytime,
			number: bet.actionNo
		}

		data.data = match[2] + "," + match[3] + "," + match[4] + "," + match[5] + "," + match[6] + "," + match[7] + "," + match[7];

		console.log(data);
		// return data;
	} catch (err) {
		throw ('解析数据失败');
	}

}

function getFrom9800(str, type) {

	str = str.substr(str.indexOf('bai12'), 560);
	exports.errorSleepTime=500;  

	var reg = /<TD bgColor=#f6f6f6 align="center">(\d+)<\/TD>[\s\S].*?<TD align=middle>(.*?)<\/TD>[\s\S].*?<TD align=middle>[\s\S].*?<font color="#FF0000"><b>(\d+) (\d+) (\d+) (\d+) (\d+) (\d+)<\/b><\/font>[\s\S].*?\+ <b><font color="#009933">(\d+)<\/font><\/b>/,
		match = str.match(reg);

	var myDate = new Date();
	var year = myDate.getFullYear(); //年
	var month = myDate.getMonth() + 1; //月
	var day = myDate.getDate(); //日
	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	var mytime = match[2] + " " + myDate.toLocaleTimeString();
	try {
		var data = {
			type: type,
			time: mytime,
			number: match[1]
		}

		data.data = match[3] + "," + match[4] + "," + match[5] + "," + match[6] + "," + match[7] + "," + match[8] + "," + match[9];

		//console.log(data);
		return data;
	} catch (err) {
		throw ('解析数据失败');
	}

}