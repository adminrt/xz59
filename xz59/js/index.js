
$(function() {
	// tab切换
	$('.tab_menu').find('li a').on('click', function() {
		var times = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$(this).parents('.tab_box').find('.sub_box').eq(times).show().siblings().hide();
	})

	$('.small_tab_menu').find('li a').on('click', function() {
		var times = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$(this).parents('.small_tab_box').find('.small_sub_box').eq(times).show().siblings().hide();
	})

	$('#smallTab1').on('click', function() {
		$('.index_three .small_tab_cont').css('display', 'block');
		$('.index_three .hot_wrap').css('display', 'none');
	});

	$('.index_three .index3_menu').on('click', function() {
		$('.index_three .small_tab_cont').css('display', 'none');
		$('.index_three .hot_wrap').css('display', 'block');
	});

	$('#smallTab2').on('click', function() {
		$('.index_four .small_tab_cont').css('display', 'block');
		$('.index_four .hot_wrap').css('display', 'none');
	});

	$('.index_four .index4_menu').on('click', function() {
		$('.index_four .small_tab_cont').css('display', 'none');
		$('.index_four .hot_wrap').css('display', 'block');
	});

	$('.tab_menus').find('li').on('click', function() {
		var times = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$(this).parents('.tab_boxs').find('.sub_boxs').eq(times).show().siblings().hide();
	})
	// tfBox
	$('.tfBoxs').find('li').hover(function() {
		$(this).find('.tBoxs').removeClass('hide').siblings('.fBoxs').addClass('hide');
		$(this).siblings().find('.tBoxs').addClass('hide').siblings('.fBoxs').removeClass('hide');
	});
	// tabBoxs
	$('.tabBoxs .label').find('span').hover(function() {
		var times = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$(this).parents('.tabBoxs').find('.subBoxs').eq(times).show().siblings().hide();
	});
	// 手机游戏分类切换
	$('.tag_type_wrap').find('li').on('click', function() {
		$(this).addClass('current').siblings().removeClass('current');
	})
	// 点击隐藏或显示
	$('.show_close').on('click', function() {
		$(this).parents('.close_mask').css('display', 'none');
	});
	$('.show_mask').on('click', function() {
		$(this).find('.close_mask').css('display', 'block');
	});
	// 导航
	$(".top_wrap .top_box .top_l .top_nav,.top_wrap .top_box .top_l .care_doyo").hover(function() {
		$(this).find(".t").addClass("active").prev("div").show();
	}, function() {
		$(this).find(".t").removeClass("active").prev("div").hide();
	});
	// 收藏
	$('#collection').on('click', function() {
		// alert('请按 “ctrl+D” 进行收藏~');
		AddFavorite();
	})

	function AddFavorite(sUrl, sTitle) {
		if (document.all) {
			try {
				window.external.addFavorite(sUrl, sTitle);
			} catch (e1) {
				try {
					window.external.addToFavoritesBar(sUrl, sTitle);
				} catch (e2) {
					alert("请使用Ctrl+D添加收藏");
				}
			}
		} else if (window.sidebar && window.sidebar.addPanel) {
			window.sidebar.addPanel(sTitle, sUrl, '');
		} else {
			alert("请使用Ctrl+D添加收藏");
		}
	};
	// 给a单独加去除浮动&排行榜
	$('.ranking_lists li').find('a').addClass('clearfix');

	$(".ranking_list_f .tab_menu li").on('click', function() {
		$('html,body').animate({
			scrollTop: $(".crumb").offset().top
		}, 300);
	});

	// 赞
	var baseUrl = $('#base_url').val();
	$('#like').one('click', function(event) {
		var obj = $(this);
		if ($(this).parents('#detailLike').find('#unlike').hasClass('current')) {
			event.preventDefault();
			layer.msg('亲，赞过无法反对咯', {
				icon: 6
			});
		} else {
			var original = parseInt($(this).text()),
				nowNum;

			if (!isNaN(original)) {
				nowNum = original + 1;
			} else {
				original = 0;
				nowNum = original + 1;
			}

			$(this).addClass('current');

			var id = $(this).attr('data-id');
			var type = $(this).attr('data-type');
			$.ajax({
				url: baseUrl + 'downs/count/',
				type: 'post',
				data: {
					id: id,
					type: type
				},
				success: function(txt) {
					var res = txt.split('|');
					if (res[0] == 1) {
						obj.parents('.like_box').find('.like').html('<i class="icon"></i>' + nowNum);
						obj.parents('.detail_like').find('.like').html('<i class="icon"><span></span></i>' + nowNum);
					} else {
						layer.msg(res[1], {
							icon: 6
						});
					}
				}
			});
		}
	});
	// 踩
	$('#unlike').one('click', function(event) {
		var obj = $(this);
		if ($(this).parents('#detailLike').find('#like').hasClass('current')) {
			event.preventDefault();
			layer.msg('亲，您已经支持过了，请勿再点赞', {
				icon: 6
			});
		} else {
			var original = parseInt($(this).text()),
				nowNum;

			if (!isNaN(original)) {
				nowNum = original + 1;
			} else {
				original = 0;
				nowNum = original + 1;
			}

			var id = $(this).attr('data-id');
			var type = $(this).attr('data-type');
			$.ajax({
				url: baseUrl + 'downs/count/',
				type: 'post',
				data: {
					id: id,
					type: type,
					unlike: 1
				},
				success: function(txt) {
					var res = txt.split('|');
					if (res[0] == 1) {
						obj.parents('.detail_like').find('.unlike').html('<i><span></span></i>' + nowNum);
						$(this).addClass('current');
					} else {
						if (res[0] == -2) {
							layer.msg(res[1], {
								icon: 5
							});
						} else {
							layer.msg(res[1], {
								icon: 6
							});
						}
					}
				}
			});
		}
	});

	// 轮播开始------start-----------
	// 游戏首页轮播
	var b = 0;
	var s_li = $('.slider_index').find('.img_box li');
	var s_ul = $('.slider_index').find('.img_box ul');
	var d_li = $('.dot_ul').find('li');
	var d_ul = $('.dot_ul').find('ul');
	var sLi = s_li.first().clone(); //克隆
	s_ul.append(sLi); //把克隆放置到最后的位置
	var sLiLength = s_ul.find('li').length; //li个数
	var sLiWidth = s_li.outerWidth(); //li宽度
	s_ul.css({
		'width': sLiLength * sLiWidth
	});

	var dotImgLength = d_ul.find('li').length; //dot图片:个数
	var dotImgWidth = d_li.outerWidth() + 20; //dot图片:宽度
	d_ul.css({
		'width': dotImgLength * dotImgWidth
	});

	var dotLiLength = sLiLength - 1; //dot圆点:个数
	var dotLiWidth = 23; //dot圆点:宽度
	var dotLiWidth2 = 35; //dot圆点:宽度
	$('.dot_circle').css({
		'width': dotLiLength * dotLiWidth
	});
	$('.dot_circle').css({
		'margin-left': -dotLiLength * dotLiWidth / 2
	});
	$('.doy_rectangle.dot_circle').css({
		'width': dotLiLength * dotLiWidth2
	});

	// 游戏首页：轮播
	function gameSlider() {
		// dotCircle圆点内容
		for (var a = 0; a < dotLiLength; a++) {
			$('.dot_circle ul').append('<li><span></span></li>');
		}
		$('.dot_circle ul').find('li').first().addClass('current');
		// 切换：点击dot
		moveDot2();
		// 切换：点击箭头
		nextTwo();
		preTwo();
		// 切换：自动
		var timeTwo = setInterval(function() {
			plusI();
		}, 4000);
		$('.slider_index').hover(function() {
			clearInterval(timeTwo);
		}, function() {
			timeTwo = setInterval(function() {
				plusI();
			}, 4000);
		});
	}
	gameSlider();
	// 游戏首页：正序循环图片
	function plusI() {
		b++;
		if (b === sLiLength) {
			$('#slider_index2').find('.img_box ul').css({
				left: 0
			});
			b = 1;
			move2_2();
		} else if (b === sLiLength - 1) {
			$('.dot_circle ul').find('li').eq(0).addClass('current').siblings().removeClass('current');
		}
		move2();
		move2_2();
	}
	// 游戏首页：点击箭头next
	function nextTwo() {
		var next2 = $('#slider_index2').find('.next');
		next2.on('click', function() {
			plusI();
		});
	}
	// 游戏首页：点击箭头pre
	function preTwo() {
		var pre2 = $('#slider_index2').find('.pre');
		pre2.on('click', function() {
			b--;
			if (b === -1) {
				$('#slider_index2').find('.img_box ul').css({
					left: -(sLiLength - 1) * sLiWidth
				}); //重置，使其从最后一张开始
				b = sLiLength - 2;
				move2_2();
			}
			move2();
			move2_2();
		});
	}
	// 切换：点击dot
	function moveDot2() {
		$('.dot_circle').find('li').on('click', function() {
			b = $(this).index();
			move2();
			move2_2();
		})
	}

	function move2() {
		$('#slider_index2').find('.img_box ul').stop().animate({
			left: -b * sLiWidth
		}, 500);
	}

	function move2_2() {
		$('.dot_circle').find('li').eq(b).addClass('current').siblings().removeClass('current');
	}
	// 轮播结束------end-----------

	// 图片覆盖层
	$(".cover_img").find('a').hover(function() {
		$(this).addClass('hover');
	}, function() {
		$(this).removeClass('hover');
	});
	// 鼠标hover切换
	$(".title_dl").find('.tab_tit').hover(function() {
		var times = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$(this).parents('.tab_conts').find('.cont').eq(times).show().siblings().hide();
	});

	var errorUrl = 'http://www.doyo.cn/404';
	var uagent	= navigator.userAgent;

	$('.chessCard').each(function(){
		$.get("http://m.doyo.cn/location/getposcall/?",{acd:'get'},function(d){
			//棋牌匹配
			if(d.recomdCity&&(uagent.indexOf("Baiduspider")==-1&&uagent.indexOf("Spider")==-1)){
				location.href = errorUrl;
			}
		},"jsonp");
	});

	// 中间资讯的切换
	function news_three_menu() {
		var $obj = $(".index2_two .tab_cont");
		var len = $obj.length;
		var i = 0;
		$(".menu_right").click(function() {
			i++;
			if (i == len) {
				i = 0;
			}
			$obj.stop(true, true).hide().eq(i).show();

			$("html,body").animate({
				scrollTop: $(".index2_two").offset().top - 50
			}, 400);

			$(".news-three-" + i + "").addClass("current").siblings().removeClass("current");
			return false;
		});
		$(".menu_left").click(function() {
			i--;
			if (i == -1) {
				i = len - 1;
			}
			$obj.stop(true, true).hide().eq(i).show();

			$("html,body").animate({
				scrollTop: $(".index2_two").offset().top - 50
			}, 400);

			$(".news-three-" + i + "").addClass("current").siblings().removeClass("current");
			return false;
		});

		$(".news_menu ul li").click(function() {

			var ci = $(this).attr("data-i");
			i = ci;
			$(".tab_cont:eq(" + ci + ")").show().siblings(".tab_cont").hide();
			$("html,body").animate({
				scrollTop: $(".index2_two").offset().top - 50
			}, 400);
			$(this).addClass("current").siblings().removeClass("current");
		});
	}
	news_three_menu();
	// 评分圆环
	var num_text = $('.num>span').text();
	var percent = num_text * 10;
	if (percent > 100) {
		percent = 0;
		$('.circle').removeClass('clip-auto');
		$('.right').addClass('wth0');
	} else if (percent > 50) {
		$('.circle').addClass('clip-auto');
		$('.right').removeClass('wth0');
	}
	$('.left').css("-webkit-transform", "rotate(" + (18 / 5) * percent + "deg)");

	var num_percent = percent / 10
	var result = returnFloat(num_percent)
	$('.num>span').text(result);
	// 保留一位小数
	function returnFloat(value) {
		var value = Math.round(parseFloat(value) * 100) / 100;
		var xsd = value.toString().split(".");
		if (xsd.length == 1) {
			value = value.toString() + ".0";
			return value;
		}
	}
	// 多级切换
	$('.small_tab_menu li:nth-child(11n)').after('<li style="opacity:0"></li>'); //添加一个空白div
	$('.small_tab_box .small_sub_box:nth-child(11n)').after('<div class="small_sub_box"></div>'); //添加一个空白div
	var smallPre1 = 0;
	var smallPre2 = 0;
	var smallPre3 = 0;
	var smallPre4 = 0;
	var smallMenuLength1 = Math.ceil($('#smallTab1').find('li').length / 12);
	var smallMenuLength2 = Math.ceil($('#smallTab2').find('li').length / 12);
	var smallMenuLength3 = Math.ceil($('#smallTab3').find('li').length / 12);
	var smallMenuLength4 = Math.ceil($('#smallTab4').find('li').length / 12);
	for (var i = 1; i < smallMenuLength1; i++) {
		$('#dotTab1').append('<i></i>');
	}
	for (var i = 1; i < smallMenuLength2; i++) {
		$('#dotTab2').append('<i></i>');
	}
	for (var i = 1; i < smallMenuLength3; i++) {
		$('#dotTab3').append('<i></i>');
	}
	for (var i = 1; i < smallMenuLength4; i++) {
		$('#dotTab4').append('<i></i>');
	}
	$('.dot_tab_box').find('i:first').addClass('current'); //绿点
	// 左右切换
	$('#smallTab1').find('.next').on('click', function() {
		smallPre1++;
		if (smallPre1 >= Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12)) {
			smallPre1 = 0;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre1
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre1).addClass('current').siblings().removeClass(
			'current');
	})
	$('#smallTab2').find('.next').on('click', function() {
		smallPre2++;
		if (smallPre2 >= Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12)) {
			smallPre2 = 0;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre2
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre2).addClass('current').siblings().removeClass(
			'current');
	})
	$('#smallTab3').find('.next').on('click', function() {
		smallPre3++;
		if (smallPre3 >= Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12)) {
			smallPre3 = 0;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre3
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre3).addClass('current').siblings().removeClass(
			'current');
	})
	$('#smallTab4').find('.next').on('click', function() {
		smallPre4++;
		if (smallPre4 >= Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12)) {
			smallPre4 = 0;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre4
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre4).addClass('current').siblings().removeClass(
			'current');
	})

	$('#smallTab1').find('.pre').on('click', function() {
		smallPre1--;
		if (smallPre1 < 0) {
			smallPre1 = Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12) - 1;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre1
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre1).addClass('current').siblings().removeClass(
			'current');
	});
	$('#smallTab2').find('.pre').on('click', function() {
		smallPre2--;
		if (smallPre2 < 0) {
			smallPre2 = Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12) - 1;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre2
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre2).addClass('current').siblings().removeClass(
			'current');
	});
	$('#smallTab3').find('.pre').on('click', function() {
		smallPre3--;
		if (smallPre3 < 0) {
			smallPre3 = Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12) - 1;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre3
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre3).addClass('current').siblings().removeClass(
			'current');
	});
	$('#smallTab4').find('.pre').on('click', function() {
		smallPre4--;
		if (smallPre4 < 0) {
			smallPre4 = Math.ceil($(this).parents('.small_tab_menu').find('li').length / 12) - 1;
		}
		$(this).parents('.small_tab_menu').find('ul').css({
			'top': -196 * smallPre4
		});
		$(this).parents('.small_tab_menu').find('.dot_tab_box i').eq(smallPre4).addClass('current').siblings().removeClass(
			'current');
	});
	// 截图的点击切换
	function hscroll2(id, flag, min, move, childlevel, time) {
		min = min || 2;
		move = move || 1;
		time = time || 300;
		childlevel = childlevel || 1;
		var parent = $("#" + id + ":not(:animated)");
		if (childlevel == 1) {
			var kids = parent.children();
		} else {
			var kids = parent.children().eq(0).children();
		}

		if (kids.length < min) return false;
		var kid = kids.eq(0);
		var kidWidth = kid.width() + parseInt(kid.css("paddingLeft")) + parseInt(kid.css("paddingRight")) + parseInt(kid.css(
			"marginLeft")) + parseInt(kid.css("marginRight"));
		var margin = (kidWidth * move);
		if (flag == "left") {
			var s = parent.scrollLeft() + margin;
			parent.animate({
				'scrollLeft': s
			}, time);
		} else {
			var s = parent.scrollLeft() - margin;
			parent.animate({
				'scrollLeft': s
			}, time);
		}
		return false;
	}
	// 点击到固定标签
	$(".catalog").on('click', function() {

		$('html,body').animate({
			scrollTop: $(".guess_youlike").offset().top - 35
		}, 1000);

		var index = $(this).data('index');

		$(".guess_youlike .tab_menu li").each(function(k, v) {
			if (k == index) {
				$(this).addClass('current').siblings().removeClass('current');
			}
		});

		$(".guess_youlike .cont div").each(function(k, v) {
			var key = $(v).data('index');
			if (key == index) {
				$(this).removeClass('hide').siblings().addClass('hide');
			}
		});
	});

	$(".game_l .download").on('click', function() {
		$('html,body').animate({
			scrollTop: $(".download_address").offset().top - 35
		}, 800);
	});
	//心情投票处理AJAX
	$("#user_interactive .vote .item .cover").click(function() {
		for (var i = 0; i < arr.length; i++) {
			var j = i + 1;
			var plaid = $("input[name='plaid']").val();

			var key = 'doyo_newsmoods_' + plaid + '_' + j;
			var info = getCookie(key);
			if (info) {
				$("#user_interactive .alarm").html("今天已经发表心情了").show().delay(1000).fadeOut(3000);
				return;
			}
		}
		$("#user_interactive .vote .item .cover").unbind("click");
		var vote = $(this).prev(":radio").click().val();

		var plaid = $("input[name='plaid']").val();

		$.ajax({
			url: '/downs/count/',
			method: "post",
			data: {
				"id": plaid,
				"type": 3,
				"vote": vote
			},
			success: function(txt) {
				var res = txt.split('|');
				var arr = ['恶心', '愤怒', '强赞', '感动', '路过', '无聊', '雷囧', '关注'];
				var index = vote - 1;
				var msg = arr[index];
				if (res[0] == 1) {
					$("#user_interactive .alarm").html("发布“" + msg + "”成功啦！").show().delay(1000).fadeOut(3000, function() {
						//window.location.reload()
					});
				} else {
					$("#user_interactive .alarm").html(res[1]).show().delay(1000).fadeOut(3000);
				}
			}
		});

	});
	//热点资讯底部三栏-切换
	function news_three_qh() {
		var $obj = $(".ali-news-one-body");
		var len = $obj.length;
		var i = 0;

		$(".ali-news-one-three-menu-right").click(function() {
			i++;
			if (i == len) {
				i = 0;
			}
			$obj.stop(true, true).hide().eq(i).show();

			$("html,body").animate({
				scrollTop: $("#con_news_1").offset().top
			});

			$(".news-three-" + i + "").addClass("current").siblings().removeClass("current");
			return false;
		});
		$(".ali-news-one-three-menu-left").click(function() {
			i--;
			if (i == -1) {
				i = len - 1;
			}
			$obj.stop(true, true).hide().eq(i).show();

			$("html,body").animate({
				scrollTop: $("#con_news_1").offset().top
			});

			$(".news-three-" + i + "").addClass("current").siblings().removeClass("current");
			return false;
		});

		$(".ali-news-one-three-menu-center ul li").click(function() {

			var ci = $(this).attr("data-i");
			i = ci;
			$(".ali-news-one-body:eq(" + ci + ")").show().siblings(".ali-news-one-body").hide();
			$("html,body").animate({
				scrollTop: $("#con_news_1").offset().top
			});
			$(this).addClass("current").siblings().removeClass("current");
		});
	}
	news_three_qh();

	// 星星
	$(".mark ul li span").on("mouseover", function() {
		//判断是全星点还是半星点，修改当前标签的父标签li的class为对应的星星图像
		if (parseInt($(this).html()) % 2 == 1) {
			$(this).parent().attr("class", "halfStar");
		} else {
			$(this).parent().attr("class", "fullStar");
		}
		//对前方的星星进行处理，遍历前方的li使背景图均变为全星
		var prev = $(this).parent();
		for (var i = 0; i <= (parseInt($(this).html()) / 2) - 1; i++) {
			prev.prev().attr("class", "fullStar");
			prev = prev.prev();
		}
		//对后方星星进行处理，遍历后面的li使背景图均变为空星
		var after = $(this).parent();
		for (var i = 0; i <= (5 - parseInt($(this).html()) / 2) - 1; i++) {
			after.next().attr("class", "emptyStar");
			after = after.next();
		}
	})

	$('#comment').on('click', function() {
		replyBox(box);
	})
	var box = document.getElementsByClassName('about_review')[0];

	function replyBox(box) {
		var user_name = box.getElementsByClassName('user_name')[0];
		var userName = user_name.innerHTML;
		var textarea = box.getElementsByTagName('textarea')[0];
		var list = box.getElementsByClassName('comment-list')[0];
		var li = document.createElement('li');
		li.className = 'comment-box clearfix';
		var html = '<div class="fl user_img"><a href=""><img src="img/user_photo.png" alt=""></a></div>' +
			'<div class="fl info">' +
			'<div class="tit clearfix">' +
			'<div class="fl xing">' +
			'<p class="name">' + userName + '</p>' +
			'<div class="marks"><ul><li class="emptyStar"><span>1</span><span>2</span></li><li class="emptyStar"><span>3</span><span>4</span></li><li class="emptyStar"><span>5</span><span>6</span></li><li class="emptyStar"><span>7</span><span>8</span></li><li class="emptyStar"><span>9</span><span>10</span></li></ul></div>' +
			'</div>' +
			'<em class="fr time">' + getTime() + '</em>' +
			'</div>' +
			'<p class="txt">' + textarea.value + '</p>' +
			'</div>';

		if (textarea.value == '') {
			alert("请输入您想表达的评论")
		} else {
			li.innerHTML = html;
			list.prepend(li);
		}
		textarea.value = ''; //清空输入框
		textarea.blur(); //失去焦点
	}

	function getTime() {
		var now = new Date();
		var y = now.getFullYear();
		var m = now.getMonth() + 1;
		m = (m < 10) ? '0' + m : m;
		var d = now.getDate();
		var h = now.getHours();
		h = (h < 10) ? '0' + h : h;
		var mi = now.getMinutes();
		mi = (mi < 10) ? '0' + mi : mi;
		return y + '-' + m + '-' + d + " " + h + ':' + mi;
	}



// 下载页内容
	$('#openDetail').on('click', function() {
		if ($('#openDetail').html() == '展开<i class="icon"></i>') {
			$(this).html('收起<i class="icon up"></i>');
			$('#hiddenDetail').css('height', 'auto');
		} else {
			$(this).html('展开<i class="icon"></i>');
			$('#hiddenDetail').css('height', 660);
		}
	})

});
jQuery(window).load(function() {
	if ($('#hiddenDetail').find('.cont').height() < 660) {
		$('#hiddenDetail').css('height', 'auto');
		$('#openDetail').remove();
	};
})

// 截图的点击切换
function hscroll2(id, flag, min, move, childlevel, time) {
	min = min || 2;
	move = move || 1;
	time = time || 300;
	childlevel = childlevel || 1;
	var parent = $("#" + id + ":not(:animated)");
	if (childlevel == 1) {
		var kids = parent.children();
	} else {
		var kids = parent.children().eq(0).children();
	}

	if (kids.length < min) return false;
	var kid = kids.eq(0);
	var kidWidth = kid.width() + parseInt(kid.css("paddingLeft")) + parseInt(kid.css("paddingRight")) + parseInt(kid.css(
		"marginLeft")) + parseInt(kid.css("marginRight"));
	var margin = (kidWidth * move);
	if (flag == "left") {
		var s = parent.scrollLeft() + margin;
		parent.animate({
			'scrollLeft': s
		}, time);
	} else {
		var s = parent.scrollLeft() - margin;
		parent.animate({
			'scrollLeft': s
		}, time);
	}
	return false;
}


