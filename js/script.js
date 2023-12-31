"use strict";

// ローディングアニメーション
if(document.querySelector('.loader') !== null) {
  let op = gsap.timeline();
    op.fromTo (
      ".loader__line",
      {
        yPercent:0,
      },
      {
        yPercent:-100,
        duration:1,
        stagger:{
          each:0.2,
          ease:Power4.easeInOut,
        }
      },"+=1"
    )
    .to (
      ".loader",
      {
        display:"none",
      },">"
    );
}

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // ハンバーガーメニュー
  $(".js-hamburger, .js-drawer, .js-drawer a").click(function () {
    $(".js-hamburger, body").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
  });

  // ドロワーメニューアニメーション
  $(".js-hamburger").click(function () {
    $(".js-drawer, .js-drawer__inner").toggleClass('panelactive');
    $(".js-circle").toggleClass('circleactive');
  });
  $(".header__drawer-item a, .js-drawer").click(function () {
    $(".js-drawer, .js-drawer__inner").removeClass('panelactive');
    $(".js-circle").removeClass('circleactive');
  });

  // News・Worksカテゴリのクリックイベント
  $(".list__category-item").click(function () {
    $(".list__category-item").each(function () {
      $(this).removeClass("is-active");
    });
    $(this).addClass('is-active');
  });

  // ページ内スクロール
  // ヘッダーの高さ取得
  const headerHeight = $(".js-header").height();
  $('a[href^="#"]').click(function () {
    const speed = 600;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    // ヘッダーの高さ分下げる
    let position = target.offset().top - headerHeight;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

var swiper = new Swiper(".mv__js-swiper", {
  direction: "vertical",
  // 縦方向
  loop: true,
  speed: 3000,
  allowTouchMove: false,
  autoplay: {
    delay: 3000
  }
});

// easeの定義
var custom = CustomEase.create("custom", "0.48,-0.02,0,0.85");
var serviceTrigger = {
  trigger: '.service__title',
  start: 'top 75%'
};
var worksTrigger = {
  trigger: '.works__title',
  start: 'top 75%'
};
var newsTrigger = {
  trigger: '.news__title',
  start: 'top 75%'
};
var mm = gsap.matchMedia();
mm.add('(min-width:769px)', function () {
  if ($("main").hasClass('js-top')) {
    gsap.to('.service__title', {
      clipPath: 'inset(0 0 0 0%)',
      duration: 2,
      ease: custom,
      scrollTrigger: serviceTrigger
    });
    gsap.to('.works__title', {
      clipPath: 'inset(0 0% 0 0)',
      duration: 2,
      ease: custom,
      scrollTrigger: worksTrigger
    });
    gsap.to('.news__title', {
      clipPath: 'inset(0 0% 0 0)',
      duration: 2,
      ease: custom,
      scrollTrigger: newsTrigger
    });

    let images=document.querySelectorAll('.js-image');
    images.forEach((image)=>{
      // divタグを生成
      let coverDiv = document.createElement('div');
      coverDiv.classList.add('js-image-cover');
      image.appendChild(coverDiv);

      gsap.fromTo(
        image.querySelector('.js-image-cover'),
        {
          skewX:10,
          scale:1.2,
          xPercent:0,
        },
        {
          skewX:10,
          scale:1.2,
          xPercent:-120,
          delay:0.3,
          duration:1,
          ease:Power3.easeOut,
          scrollTrigger:{
            trigger:image,
            start:"top bottom",
          }
        }
      );
    });

    gsap.fromTo('.service__card', {
      opacity: 0,
      y: 20
    }, {
      opacity: 1,
      y: 0,
      duration: 1,
      stagger: .3,
      scrollTrigger: {
        trigger: '.service__card',
        start: 'top 75%'
      }
    });
    gsap.fromTo('.works__item', {
      opacity: 0,
      y: 20
    }, {
      opacity: 1,
      y: 0,
      duration: 1,
      stagger: .5,
      scrollTrigger: {
        trigger: '.works__item',
        start: 'top 75%'
      }
    });
    gsap.fromTo('.list__categories', {
      opacity: 0,
      y: 20
    }, {
      opacity: 1,
      y: 0,
      duration: 1.5,
      scrollTrigger: {
        trigger: '.list__categories',
        start: 'top 75%'
      }
    });
    gsap.fromTo('.list__menu-item', {
      opacity: 0,
      y: 20
    }, {
      opacity: 1,
      y: 0,
      duration: .3,
      stagger: .3,
      scrollTrigger: {
        trigger: '.list__menu-item',
        start: 'top 75%'
      }
    });
  } else if ($("main").hasClass('js-listPage')) {
    gsap.fromTo('.list__categories', {
      opacity: 0,
      y: 20
    }, {
      opacity: 1,
      y: 0,
      duration: 1.5,
      scrollTrigger: {
        trigger: '.list__categories',
        start: 'top 75%'
      }
    });
    gsap.fromTo('.list__menu-item', {
      opacity: 0,
      y: 20
    }, {
      opacity: 1,
      y: 0,
      duration: .3,
      stagger: .3,
      scrollTrigger: {
        trigger: '.list__menu-item',
        start: 'top 75%'
      }
    });
  }
  if (document.querySelector('.lower-mv__title') !== null) {
    // 下層ページMVアニメーション
    gsap.fromTo('.lower-mv__title', {
      opacity: 0,
      x: -30
    }, {
      opacity: 1,
      x: 0,
      duration: 1,
      delay: .5
    });
    gsap.fromTo('.lower-mv__img', {
      opacity: 0,
      x: 30
    }, {
      opacity: 1,
      x: 0,
      duration: 2
    });
  }

  if(document.querySelector('.js-maskImg') !== null) {
    let maskImgs=document.querySelectorAll('.js-maskImg');
    maskImgs.forEach ((maskImg)=>{
      gsap.fromTo (
        maskImg,
        {
        },
        {
          scrollTrigger:{
            trigger:maskImg,
            start:"top bottom",
            once:true,
            toggleClass:{
              targets:maskImg,
              className:"is-open"
            }
          }
        }
    )});
  }
});