let burger = document.querySelector('.page-header__burger');
let nav = document.querySelector('.page-header__nav');
let menu = document.querySelector('.page-header__menu-container');
let scrollFlag = true;

burger.addEventListener('click', () => {
  toggleMenu();
})

let toggleMenu = () => {
  // if (scrollFlag) disableScroll()
  // else enableScroll();
  burger.classList.toggle('is-active');
  nav.classList.toggle('is-active');
}
$(document).ready(function() {
  let toggleSubmenu = (elem) => {
    $('.page-header__menu').toggleClass('active')
    elem.siblings('.sub-menu').toggleClass('active')
    elem.siblings('.icon-back').toggle(300)
  }

  if ($(document).width() <= 768) {
    $('.page-header__menu > li a').click(function (e) {
      if ($(this).siblings('.sub-menu').length) {
        e.preventDefault();
        // $(this).siblings('.sub-menu').toggle(200)
        toggleSubmenu($(this))
      }
    })
  }
  $('.icon-back').click(function() {
    toggleSubmenu($(this).siblings('.page-header__menu > li a'))
  })
})



// let disableScroll = function () {
//   console.log('DISB')
//   scrollFlag = !scrollFlag;
//   let pagePosition = window.scrollY;
//   document.body.classList.add('disable-scroll');
//   document.body.dataset.position = pagePosition;
//   document.body.style.top = -pagePosition + 'px';
// }
//
// let enableScroll = function () {
//   scrollFlag = !scrollFlag;
//   let pagePosition = parseInt(document.body.dataset.position, 10);
//   document.body.style.top = 'auto';
//   document.body.classList.remove('disable-scroll');
//   window.scroll({ top: pagePosition, left: 0 });
//   document.body.removeAttribute('data-position');
// }

$('.page-header__overlay').on('click', function() {
  if ($('.page-header__burger').hasClass('is-active')) {
    toggleMenu();
  }
})

$(document).ready(function() {
  $('.hero__features-item').matchHeight();
  $('.grid__title').matchHeight();
  $('.grid__item').matchHeight();
  $('.price__subject').matchHeight();
  $("input.form__input--phone").mask("+7(999) 999-9999");

  $('input, textarea').focus(function() {
    $(this).parent().siblings('.input-name').toggle(100)
  })
  $('input, textarea').blur(function () {
    if($(this).val() === '') {
      $(this).parent().siblings('.input-name').toggle(100);
    }
  })

  $('.wpcf7').on('wpcf7submit', function() {
    $.fancybox.open({
      'autoFocus': false,
      'btnTpl': {
        'smallBtn':
            '<button data-fancybox-close class="fancybox-button modal__close fancybox-button--close" title="{{CLOSE}}">' +
            '<svg>' +
            '<use xlink:href="./spritemap.svg#sprite-close"></use>' +
            '</svg>' +
            "</button>",
      },
      'transitionIn'	:	'elastic',
      'transitionOut'	:	'elastic',
      'speedIn'		:	600,
      'speedOut'		:	200,
    })
  })

  $('.modal__close').click(function () {
    $.fancybox.close();
  })
  $('.gallery__item').draggable({
    start: function(event, ui) {
      $(this).addClass('drag');
    },
    stop: function(event, ui) {
      $(this).removeClass('drag');
    }
  })
  $("a[href$='.jpg']:not(.drag), a[href$='.jpeg']:not(.drag), a[href$='.png']:not(.drag), a[href$='.webp']:not(.drag)").click(function(event) {
    if ($(this).hasClass('drag')) return;
    event.preventDefault();
    var gallerybox = $(this).parent().find($("a[href$='.jpg'], a[href$='.jpeg'], a[href$='.png'], a[href$='.webp']"));
    if (gallerybox.length > 1) {
      var index = $(this).index();
      $.fancybox.open(gallerybox, {
        'index' : index,
        loop: true,
        live: false,
      });
    } else {
      $.fancybox.open(gallerybox);
    }
  });
  $("a.main-block__video").fancybox({
    'autoFocus': false,
    'btnTpl': {
      'smallBtn':
          '<button data-fancybox-close class="fancybox-button modal__close fancybox-button--close" title="{{CLOSE}}">' +
          '<svg>' +
          '<use xlink:href="./spritemap.svg#sprite-close"></use>' +
          '</svg>' +
          "</button>",
    },
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600,
    'speedOut'		:	200,
    'overlayShow'	:	false
  });
  $("a.main-block__link").fancybox({
    'autoFocus': false,
    'btnTpl': {
      'smallBtn':
          '<button data-fancybox-close class="fancybox-button modal__close fancybox-button--close" title="{{CLOSE}}">' +
          '<svg>' +
          '<use xlink:href="./spritemap.svg#sprite-close"></use>' +
          '</svg>' +
          "</button>",
    },
    'touch'         :   false,
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600,
    'speedOut'		:	200,
    'overlayShow'	:	false
  });
  $("a[href$='modal-record']").fancybox({
    'autoFocus': false,
    'btnTpl': {
      'smallBtn':
          '<button data-fancybox-close class="fancybox-button modal__close fancybox-button--close" title="{{CLOSE}}">' +
          '<svg>' +
          '<use xlink:href="./spritemap.svg#sprite-close"></use>' +
          '</svg>' +
          "</button>",
    },
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'touch'         :   false,
    'speedIn'		:	600,
    'speedOut'		:	200,

  });
  $("a[href$='modal-question']").fancybox({
    'autoFocus': false,
    'btnTpl': {
      'smallBtn':
          '<button data-fancybox-close class="fancybox-button modal__close fancybox-button--close" title="{{CLOSE}}">' +
          '<svg>' +
          '<use xlink:href="./spritemap.svg#sprite-close"></use>' +
          '</svg>' +
          "</button>",
    },
    'touch'         :   false,
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600,
    'speedOut'		:	200,
  });
  $("a[href$='modal-thanks']").fancybox({
    'autoFocus': false,
    'btnTpl': {
      'smallBtn':
          '<button data-fancybox-close class="fancybox-button modal__close fancybox-button--close" title="{{CLOSE}}">' +
          '<svg>' +
          '<use xlink:href="./spritemap.svg#sprite-close"></use>' +
          '</svg>' +
          "</button>",
    },
    'closeButton' : '',
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600,
    'speedOut'		:	200,
  });

  if ($('.hero__features').length) {
    $(".hero__features").slick({
      mobileFirst: true,
      variableWidth: true,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      centerMode: true,
      autoplay: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 570,
          settings: {
            centerMode: false,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            centerMode: false,
          }
        },
        {
          breakpoint: 992,
          settings: "unslick",
      },
      ]
    });
  }
  if ($('.teachers__item').length > 1) {
    $('.teachers__arrows').css('display', 'flex')
    $('.teachers__list').slick({
      infinite: false,
      autoplay: true,
      prevArrow: $('.teachers__arrows--prev'),
      nextArrow: $('.teachers__arrows--next')
    })
  }

  if ($('.gallery__item').length > 4) {
    $('.gallery__arrows').css('display', 'flex')
    $('.gallery__list').slick({
      slidesToShow: 4,
      centerMode: true,
      // autoplay: true,
      prevArrow: $('.gallery__arrows--prev'),
      nextArrow: $('.gallery__arrows--next'),
      variableWidth: true,
      centerPadding: '-1180px',
      responsive: [
        {
          breakpoint: 1600,
          settings:{
            slidesToShow: 4,
            centerPadding: '40px',
          }
        },
        {
          breakpoint:1024,
          settings:{
            slidesToShow: 2,
            centerPadding: '50px',
            centerMode: true,
          }
        },
        {
          breakpoint: 768,
          settings:{
            slidesToShow: 1,
            centerPadding: '150px',
            centerMode: true,
          }
        },
        // {
        //   breakpoint: 480,
        //   settings:{
        //     slidesToShow: 1,
        //     centerPadding: '50px',
        //     centerMode: true,
        //   }
        // },
      ]
    })
  }
  if ($('.reviews__item').length > 1) {
    $('.reviews__arrows').css('display', 'flex')
    $('.reviews__list').slick({
      infinite: false,
      // autoplay: true,
      prevArrow: $('.reviews__arrows--prev'),
      nextArrow: $('.reviews__arrows--next'),
    })
  }

  $('.tabs__link').on('click', function() {
    var targetTab = $(this).data('tab');
    $('.tabs__link.active').toggleClass('active');
    $('.tabs__item.active').toggleClass('active');
    $(`.tabs__link[data-tab="${targetTab}"]`).toggleClass('active');
    $(`.tabs__item[data-src="${targetTab}"]`).toggleClass('active');
  })
})

document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function() { scrollFunction()};

  document.getElementById('toTop').addEventListener('click', function(e) {
    e.preventDefault();

    window.scrollTo({top: 0, behavior: 'smooth'});
  })
})

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById('toTop').classList.remove('hide');
  } else {
    document.getElementById('toTop').classList.add('hide');
  }
}

