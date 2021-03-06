
'use strict';

const w = $(window).width();
const spwidth = 767;
const tabletwidth = 1025;

{
	const openMenu = document.getElementById('menu_open');
	const Nav = document.querySelector('header nav');
	const body = document.querySelector('body');

	openMenu.addEventListener('click', function () {
		openMenu.classList.toggle('active');
		Nav.classList.toggle('active');
		body.classList.toggle('active');
	});
}

// const video_wrap = document.getElementById('video_wrap');
// const video = document.getElementById('video');
// let is_playing = false;

// video_wrap.addEventListener('click', () => {
// 	if (!is_playing) {
// 		video.play();
// 		is_playing = true;
// 		video_wrap.classList.add('active');
// 	} else {
// 		video.pause();
// 		is_playing = false;
// 		video_wrap.classList.remove('active');
// 	}
// 	console.log(is_playing);
// });



$(function () {
	// JQueryの範囲

	// ハンバーガーメニューのアニメーション発動用クラス付与
	$('#menu_open').on('click',function(){
		if($(this).hasClass('active')){
			$(this).removeClass('close');
			$('header nav').fadeIn(400);
		}else{
			$(this).addClass('close');
			$('header nav').fadeOut(400);
		}
	});

	// トップ：5秒ごとに「就活力UP!」「学びのページ」のテキスト切替
	setInterval(function(){
		$('.top01 .mv .links a').children('p').toggleClass('active');
	}, 3000);

	// テキストアニメーション発動
	$('.txt_anime').on('inview',function(){
		$(this).addClass('start');
	});
	// フェードイン
	$('.fadein, .txtflow_anime').on('inview',function(){
		$(this).addClass('active');
		if($(this).hasClass('anime01')){
			$(this).delay(100).queue(function(){
				$(this).addClass('start');
			});
		}
		if($(this).hasClass('anime02')){
			$(this).delay(300).queue(function(){
				$(this).addClass('start');
			});
		}
		if($(this).hasClass('anime03')){
			$(this).delay(500).queue(function(){
				$(this).addClass('start');
			});
		}
		if($(this).hasClass('anime04')){
			$(this).delay(700).queue(function(){
				$(this).addClass('start');
			});
		}
	});

	// スムーススクロール
	var headerHeight = $('header').outerHeight();
	var urlHash = location.hash;
	if(urlHash) {
			$('body,html').stop().scrollTop(0);
			setTimeout(function(){
					var target = $(urlHash);
					var position = target.offset().top - headerHeight;
					$('body,html').stop().animate({scrollTop:position}, 500);
			}, 100);
	}
	$('a[href^="#"]').click(function () {
		var speed = 300;
		if (w > spwidth) {
			var header = 105.72;
		} else {
			var header = 76;
		}
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({ scrollTop: position - header }, speed, "swing");
		return false;
	}); 

	$("body").removeClass("preload");
});