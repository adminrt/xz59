
$(function() {
	//点击加速
	if ('addEventListener' in document) {
		document.addEventListener('DOMContentLoaded', function() {
			FastClick.attach(document.body);
		}, false);
	}
	// tab切换
	$('.tab_menu').find('span').on('click', function() {
		var times = $(this).index();
		$(this).addClass('current').siblings().removeClass();
		$(this).parents('.tab_box').find('.sub_box').eq(times).show().siblings().hide();
	});
	// 排行榜展开
	$('#typeBtn').on('click', function() {
		$('#typeBox').toggleClass('hide');
		$(this).find('i').toggleClass('up');
		$(this).toggleClass('current');
	})
	$('#typeBox').find('li').on('click', function() {
		$(this).addClass('current').parents('#typeBox').find('li').siblings().removeClass('current');
		$(this).addClass('current')
	})
	$('.ranking_nav').find('li').on('click', function() {
		$(this).addClass('current').siblings().removeClass('current');
	})
	// 游戏列表更多展开
	$('.game_classify').on('click', function() {
		$('.game_classify i').toggleClass('up');
		$('.game_tags ul li:nth-child(n+8)').toggle();
		$('.game_classify').show();
	})
	// 导航栏滑动
	var liLength = $(".nav_bar li.current").index();
	liLength += 1;

	if (liLength > 5) {
		$('.nav_bar ul').scrollLeft(parseInt($(".nav_bar li").width()));
	} else {
		$('.nav_bar ul').scrollLeft(0);
	}
	//标签随机色
	function randomsort(a, b) {
		return Math.random() > .5 ? -1 : 1;
	}
	var arr = ['#0091ff', '#f36e5d', '#e8d851', '#92cf67', '#47c1a8', '#ffab80',
		'#35aba7', '#f98700', '#a286c0', '#ebcda7', '#81a0d7', '#e4697d',
		'#d2bdc4', '#91adb9', '#acb0d5', '#ed9d60', '#f46060', '#be7763',
		'#26a69a', '#f3b18e', '#92cf67', '#36b1c0', '#b27cda', '#ffab80', '#f26d7e', '#66bb6a', '#47c1a8',
		'#ffb230', '#df88ab', '#a1a8e7', '#4dd0e1', '#64b5f6', '#ffb300', '#ce93d8', '#f46060'
	];
	var arr2 = arr.sort(randomsort);
	$('.index_tag ul').children('li').each(function() {
		var index = $(this).index();
		$(this).children('a').attr('style', 'background:' + arr[index] + ';box-shadow:0px 1px 0px' + arr[index]);
	});
	var arrTags = ['#98dc9b', '#f8b0cd', '#a6bde3', '#f8c871', '#fea387', '#f38ce3', '#b3d465', '#5dc9ea', '#e4a1f0'];
	var arrtags = arrTags.sort(randomsort);
	$('.game_tag ul').children('li').each(function() {
		var index = $(this).index();
		$(this).children('a').attr('style', 'background:' + arrTags[index]);
	});


	//友情链接
	var linkHtml = $('#friend_link').html();
	if ($('#friend_link').height() > 30) {
		var box = document.getElementById("friend_link"),
			can = true;
		var html = document.getElementsByTagName('html')[0];
		var fsize = 0.5 * parseInt(html.style.fontSize);
		var ht = 0.5 * parseInt(html.style.fontSize);
		var flh = parseInt($('#friend_link').height());
		if (flh > fsize) {
			$('#friend_link').css('height', fsize);
			box.innerHTML += box.innerHTML;
			box.onmouseover = function() {
				can = false
			};
			box.onmouseout = function() {
				can = true
			};
			new function() {
				var stop = box.scrollTop % ht == 0 && !can;
				if (!stop) box.scrollTop == parseInt(box.scrollHeight / 2) ? box.scrollTop = 0 : box.scrollTop++;
				setTimeout(arguments.callee, box.scrollTop % ht ? 30 : 1500);
			};
		}
	} else {
		$('#friend_link').html(linkHtml);
	}


	// 游戏详情展开收起
	if ($('#hiddenBox').find('.cont').height() < 588) {
		$('#hiddenBox').addClass('auto_box');
		$('#openHidden').empty();
	} else {
		$('#openHidden').on('click', function() {
			$('#hiddenBox').toggleClass('auto_box');
			if ($('#hiddenBox').hasClass('auto_box')) {
				$(this).html('收起内容' + '<i class="icon_i up"></i>');
			} else {
				$(this).html('展开内容' + '<i class="icon_i"></i>');
			}
		})
	}
	// 专题详情页展开收起
	if ($('#hiddenBox2 .cont').height() < 85) {
		$('#hiddenBox2').addClass('auto_box2');
		$('#openHidden2').empty();
		$('.topic_cont p').css({
			'margin-bottom': '0'
		});
	} else {
		$('#openHidden2').on('click', function() {
			$('#hiddenBox2').toggleClass('auto_box2');
			if ($('#hiddenBox2').hasClass('auto_box2')) {
				$(this).css({
					'bottom': '-.06rem'
				})
				$(this).html('<i class="up"></i>' + '收起全部');
			} else {
				$(this).css({
					'position': 'absolute',
					'width': '3rem',
					'bottom': '0'
				});
				$(this).html('<i></i>' + '展开全部');
			}
		})
	}
	// pageBtn
	if ($('#pageBtn').length > 0) {
		var pageBtnTop = $('#pageBtn').offset().top;
		$(window).scroll(function() {
			var wTop = $(window).scrollTop();
			if (wTop >= pageBtnTop) {
				$('#pageBtn2').removeClass('hide');
			} else {
				$('#pageBtn2').addClass('hide');
			}
		});
	}
	// 轮播
	var mySwiper = new Swiper('.swiper-container', {
		autoplay: {
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
		},
	});
	// 新游轮播
	var swiper2 = new Swiper('.swiper-container2', {
		slidesOffsetBefore: 0,
		slidesOffsetAfter: 0,
		slidesPerView: 'auto',
		spaceBetween: 22,
		freeMode: true,
	});
	var swiper3 = new Swiper('.swiper-container3', {
		slidesOffsetBefore: 0,
		slidesOffsetAfter: 0,
		slidesPerView: 'auto',
		spaceBetween: 22,
		freeMode: true,
	});
	// 搜索轮播
	var swiper = new Swiper('.swiper_hidden_box', {
		slidesPerView: 'auto',
		centeredSlides: true,
		spaceBetween: 10,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});
	// 点击跳转
	$(".tag .catalog").on('click', function() {
		$('html,body').animate({
			scrollTop: $(".game_detail_info").offset().top
		}, 1000);
		var index = $(this).data('index');
		$(".game_detail_info .tab_menu span").each(function(k, v) {
			if (k == index) {
				$(this).addClass('current').siblings().removeClass('current');
			}
		});
		$(".cont_li .sub_box").each(function(k, v) {
			var key = $(v).data('index');
			if (key == index) {
				$(this).removeClass('hide').siblings().addClass('hide');
			}
		});
	});
	//游戏截图
	function downPics() {
		window.onload = function() {
			var jtw, jth;
			var oimg = $('.swiper-container1 img');
			var odiv = $('.swiper-container1 .swiper-slide');
			jtw = oimg.first().width(),
				jth = oimg.first().height();
			if (jtw > jth) {
				// odiv.width(280);
				// odiv.height(110);
				fiximg2()
			} else {
				// odiv.width(120);
				odiv.height('auto');
				fiximg1()
			}
		};

		function fiximg1() {
			var swiper = new Swiper('.swiper-container1', {
				slidesPerView: '3',
				spaceBetween: 10,
				freeMode: true,
			});
		}

		function fiximg2() {
			var swiper = new Swiper('.swiper-container1', {
				slidesPerView: 'auto',
				// spaceBetween: 10,
			});
		}
	}
	if ($('.swiper-container1').length > 0) {
		downPics()
	};
	var swiperBig = new Swiper('.swiper-container-big');
	// 截图放大缩小
	$('#xzImg').find('.swiper-slide').on('click', function() {
		var swiperIndex = $(this).index();
		$('#xzImgBig').find('.swiper-wrapper').removeClass('hide');
		$('.pic-mask').removeClass('hide');

		var swiperW = $('#xzImgBig').find('.swiper-slide').width(),
			transformW = -swiperW * swiperIndex;

		$('#xzImgBig').find('.swiper-wrapper').css({
			'transform': 'translate3d(' + transformW + 'px, 0px, 0px)'
		});
	});
	$('#xzImgBig').find('.swiper-slide').on('click', function() {
		$('#xzImgBig').find('.swiper-wrapper').addClass('hide');
		$('.pic-mask').addClass('hide');
		$('#xzImg').removeClass('hide');
	});
	// 2019-07-31详情页图片放大缩放滚动
	$('#detailCont').find('img').on('click', function() {
		$("#detailCont img").css("height", "");
		$("#detailCont img").attr("height", "");
		ImgView();
		opt.num = $("#detailCont img").length;
		opt.iCurr = $("#detailCont img").index(this);
		ImgAmplifier($("#detailCont img"));
	});

	// 新闻详情视频自动播放
	if ($("#vedioAd").length > 0) {
		var vedioAdTop = $('#vedioAd').offset().top - 490;
		$(window).scroll(function() {
			var wTop = $(window).scrollTop();
			if (wTop >= vedioAdTop && $("#vedioAd video").attr('data-play') != 1) {
				var promise = $("#vedioAd video")[0].play();
				$("#vedioAd video").attr('data-play', '1');
				if (promise !== undefined) {
					promise.catch(error => {
						// console.log('1');
					}).then(() => {
						// Auto-play started
						// console.log('2');
					});
				} else {
					// console.log('3');
				}
			}
		})
		$("#vedioAd video").on('ended', function() {
			$('.vback').show();
		})
	}

	if ($("#video").length > 0) {
		$(".game-video video").on('ended', function() {
			$('.vback').show();
		})
		$('#replay').on('click', function() {
			$(this).parents('.game-video').find('video')[0].play();
			$(this).parents('.vback').hide();
		})
	}
	// 点赞
	var baseUrl = $('#base_url').val();
	$('#like').one('click', function(event) {
		var obj = $(this);
		if ($(this).parents('#detailLike').find('#unlike').hasClass('current')) {
			event.preventDefault();
			layer.open({
				content: '您已经反对过了~请勿再次点击',
				skin: 'msg',
				time: 2 //2秒后自动关闭
			});
		} else {
			var original = parseInt($(this).text()),
				nowNum;

			if (!isNaN(original)) {
				// 是数字
				nowNum = original + 1;
			} else {
				// 不是数字
				original = 0;
				nowNum = original + 1;
			}

			$(this).addClass('current');

			var id = $(this).attr('data-id');
			$.ajax({
				url: baseUrl + 'downs/count/',
				type: 'post',
				data: {
					id: id,
					type: 2
				},
				success: function(txt) {
					var res = txt.split('|');
					if (res[0] == 1) {
						obj.parents('.detail_like').find('.like').html('<i><span class="icon"></span></i>' + nowNum);
					} else {
						layer.open({
							content: res[1],
							skin: 'msg',
							time: 2 //2秒后自动关闭
						});
					}
				}
			});
		}
	});
	// 反对
	$('#unlike').one('click', function(event) {
		var obj = $(this);
		if ($(this).parents('#detailLike').find('#like').hasClass('current')) {
			event.preventDefault();
			layer.open({
				content: '您已经支持过了~请勿再次点击',
				skin: 'msg',
				time: 2 //2秒后自动关闭
			});
		} else {
			var original = parseInt($(this).text()),
				nowNum;

			if (!isNaN(original)) {
				// 是数字
				nowNum = original + 1;
			} else {
				// 不是数字
				original = 0;
				nowNum = original + 1;
			}

			var id = $(this).attr('data-id');
			$.ajax({
				url: baseUrl + 'downs/count/',
				type: 'post',
				data: {
					id: id,
					type: 2,
					unlike: 1
				},
				success: function(txt) {
					var res = txt.split('|');
					if (res[0] == 1) {
						obj.parents('.detail_like').find('.unlike').html('<i><span class="icon"></span></i>' + nowNum);
						obj.addClass('current');
					} else {
						layer.open({
							content: res[1],
							skin: 'msg',
							time: 2 //2秒后自动关闭
						});
					}
				}
			});
		}
	});
	// 分享
	$(function() {
		$('#share').on('click', function() {
			$('.share_wrap').removeClass('hide');
			$('.share_wrap_bg').removeClass('hide');
		});
		$('.share_wrap').on('click', '.close', function() {
			$('.share_wrap').addClass('hide');
			$('.share_wrap_bg').addClass('hide');
			$('.txttip').addClass('hide');
		})
		$('#bds_wx').on('click', function() {
			$('.txttip').removeClass('hide');
		})
	})



});
var uagent	= navigator.userAgent;
var errorUrl = 'http://m.doyo.cn/404';
var pageBtnDa	= $('#pageBtn');
$('.chessCard').each(function(){
	$.get("http://m.doyo.cn/location/getposcall/?ac=getposcall",{acd:'get'},function(d){
		if(d.recomdCity&&(uagent.indexOf("Baiduspider")==-1&&uagent.indexOf("Spider")==-1)){        // YisouSpider Baiduspider
			location.href = errorUrl;
			//if(pageBtnDa.attr('href')){
			//	pageBtnDa.addClass('no').html('<i class="icon_i"></i>该游戏已下架').removeAttr('href');
			//	$('#pageBtn2').html('<a class="btn no" id="pageBtn"><i class="icon_i"></i>该游戏已下架</a></div>');
			//}
		}
	},"jsonp");
});

var u = navigator.userAgent;
var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
var isUc = u.indexOf('UCBrowser') > -1;
// var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
if (isAndroid && isUc) {
	$('.nav_bar ul').on('touchstart', function() {
		$(document).on('touchmove', function(e) {
			e.preventDefault();
		});
		$(document).on('touchend', function() {
			$(document).unbind();
		});
	});
}

function headerNav() {
	var bodyH = $('body,html').height();
	var haaderH = $('header').height();

	if ($('#headerNav').css('display') === 'none') {
		$('header .menu').find('i').addClass('green');
		$('#headerNav').show();
		$('#headerNav').find('.mask').css('height', bodyH - haaderH);
	} else {
		$('header .menu').find('i').removeClass('green');
		$('#headerNav').hide();
	}
}
// 搜索
$('#closeTxt').on('click', function() {
	$(this).siblings('input').val('');
	clearInterval(searchzidong);
});

var baseurl = $.trim($("#baseUrl").val());
var keyword = $.trim($("#searchKey").val());
//搜索轮播
var searchTxt = 0;

function searchRun() {
	searchTxt++;
	if (searchTxt >= $('.search_ul_txt li').length) {
		searchTxt = 0;
	};
	searchSlider();
};

function searchSlider() {
	$(".search_ul_txt").find("li").eq(searchTxt).show().siblings().hide();
	$('.search_txt .text').val($(".search_ul_txt").find("li").eq(searchTxt).text());
};
var searchzidong = setInterval(searchRun, 2500);
if (keyword) {
	clearInterval(searchzidong);
	$('.search_txt .text').val(keyword);
} else {
	$('.search_txt .text').val($(".search_ul_txt").find("li").eq(0).text());
}
$(".search_txt input").focus(function() {
	clearInterval(searchzidong);
});
//动态搜索
function liftSearch() {
	var keyword = $.trim($("#searchKey").val());
	var baseurl = $.trim($("#baseUrl").val());
	if (keyword) {
		$.ajax({
			url: baseurl + 'so/search/',
			type: 'POST',
			data: {
				keyword: keyword
			},
			success: function(data) {
				$('.search_wrap').hide();
				$('.search_list_wrap_div').show();
				$('.search_list_wrap').html(data);
			}
		});
	} else {
		$('.search_wrap').show();
	}
}
//点击搜索
$('#dosearch').click(function() {
	var keyword = $("#searchKey").val();
	if (keyword) {
		window.location.href = baseurl + 'search/search.php?q=' + encodeURI(keyword);
	}
});

$(document).keyup(function(event) {
	if (event.keyCode == 13) {
		$('#dosearch').click();
	}
});

$('#search_more').click(function() {
	var more = $(this);
	var baseurl = $.trim($("#baseUrl").val());
	var keyword = $.trim($("#searchKey").val());
	var page = parseInt($(this).attr('page'));
	var totpage = parseInt($(this).attr('totpage'));
	$.ajax({
		url: baseurl + 'so/',
		type: 'get',
		data: {
			key: keyword,
			page: page
		},
		success: function(res) {
			$('.search_list_wrap2').append(res);
			more.attr('page', page + 1);
			if (page + 1 >= totpage) {
				more.remove();
			}
		}
	});
});
