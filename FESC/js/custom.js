$('.lista_depoimentos').slick({
    centerMode: true,
    centerPadding: '20%',
    slidesToShow: 1,
    responsive: [
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            centerMode: false,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });

  $('.only_mobile').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
          {
                  breakpoint: 768,
                  settings: 'unslick'
          }
    ]
  });

  document.getElementById('video_play').onclick = function (){
    document.getElementById('play_button').style.display = 'none';;
    document.getElementById('video').play();
};

  $(".sgu").click(function(){
    $('.lista_solucoes .col-md-4').removeClass('active');
    $(this).addClass('active');
    $(".open_solucao").removeClass('current');
    $(".sgu_content").toggleClass('current');
  });
  $(".auditoria").click(function(){
    $('.lista_solucoes .col-md-4').removeClass('active');
    $(this).addClass('active');
    $(".open_solucao").removeClass('current');
    $(".auditoria_content").toggleClass('current');
  });
  $(".contact").click(function(){
    $('.lista_solucoes .col-md-4').removeClass('active');
    $(this).addClass('active');
    $(".open_solucao").removeClass('current');
    $(".contact_content").toggleClass('current');
  });

  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
});

  function translateJuicer() {
    $('.j-paginate').text("Carregar mais");
    $('.j-read-more').text("Leia Mais");
    $('.juicer-feed h1.referral').hide();
    $('.juicer-button.j-facebook').text("Abrir no Facebook");
    $('.j-on').text("em");
  }

  $(".hamburger").click(function()
{
    $(".navigation").toggleClass("open_menu");
});
$('.popup-player').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
              '</div>',

        srcAction: 'iframe_src',
        }
});
$(".mobile_menu a").click(function()
{
    $(".navigation").removeClass("open_menu");
});

$("nav .nav-item").click(function()
{
    $('nav .nav-item').removeClass("active");
    $(this).addClass("active");
});