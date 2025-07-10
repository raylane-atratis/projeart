AOS.init({
  disable: window.innerWidth < 1024,
});


function toggleNave() {
  const $btn = jQuery("#menuBtn");
  const $sidenav = jQuery("#mySidenav")
  
  if ($btn.hasClass('active')) {
    $btn.removeClass('active');
    $sidenav.css('right', '-100%');
  } else {
    $btn.addClass('active');
    $sidenav.css('right', 0);
  }
}


function closeNave() {
  document.getElementById("mySidenav").style.right = "-100%";
}

function openNave2() {
  document.getElementById("mySidenav2").style.right = "0";
}
function closeNave2() {
  document.getElementById("mySidenav2").style.right = "-100%";
}

function openNave3() {
  document.getElementById("mySidenav3").style.right = "0";
}
function closeNave3() {
  document.getElementById("mySidenav3").style.right = "-100%";
}

jQuery(document).ready(function () {
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = jQuery("header").outerHeight();

  jQuery(window).scroll(function (event) {
    didScroll = true;
  });

  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = jQuery(this).scrollTop();

    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      jQuery("header").removeClass("fixa").addClass("normal");
    } else {
      // Scroll Up
      if (st + jQuery(window).height() < jQuery(document).height()) {
        jQuery("header").removeClass("normal").addClass("fixa");
      }
    }

    var top_offset = jQuery(window).scrollTop();
    if (top_offset == 0) {
      jQuery("header").removeClass("fixa fade-in");
    } else {
      jQuery("header").addClass("menu-fixo");
    }

    lastScrollTop = st;
  }
});

jQuery('.owl-carousel-banner').owlCarousel({
  loop:false,
  margin:0,
  dots: true,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 1
      },
      1000: {
          items: 1
      }
  }
});

jQuery('.owl-carousel-mobile').owlCarousel({
  loop:false,
  margin:0,
  dots: false,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 1
      },
      1000: {
          items: 1
      }
  }
});

jQuery('.owl-solucoes').owlCarousel({
  loop:false,
  margin:20,
  dots: true,
  margin: 30,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 1
      },
      1000: {
          items: 2
      }
  }
});

jQuery('.owl-clients').owlCarousel({
  loop:true,
  margin:20,
  dots: true,
  margin: 30,
  nav:false,
  autoplay:true,
  autoplayTimeout:1500,
  autoplayHoverPause:false,
  responsive: {
      0: {
          items: 2
      },
      600: {
          items: 3
      },
      1000: {
          items: 6
      }
  }
});

jQuery('.owl-segmentos').owlCarousel({
    loop:true,
    margin:20,
    dots: true,
    margin: 30,
    nav:false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
  });

jQuery('.owl-galeria-carrosel').owlCarousel({
loop:false,
dots: true,
nav:false,
responsive: {
    0: {
        items: 1
    },
    600: {
        items: 2
    },
    1000: {
        items: 2
    }
}
});

jQuery('.owl-diferenciais').owlCarousel({
    loop:false,
    dots: true,
    nav:false,
    responsive: {
        0: {
            items: 1
        },
        400: {
            items: 1
        },
        580: {
            items: 2
        },
        800: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});

jQuery('.owl-marcas').owlCarousel({
    loop:false,
    dots: true,
    margin: 20,
    nav:false,
    responsive: {
        0: {
            items: 1
        },
        400: {
            items: 1
        },
        580: {
            items: 2
        },
        800: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});


jQuery('.owl-blog ').owlCarousel({
  loop:false,
  margin:0,
  dots: true,
  margin: 30,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 2
      },
      1000: {
          items: 3
      }
  }
});


jQuery('.owl-linha-tempo').owlCarousel({
  loop:false,
  margin:0,
  dots: false,
  margin: 30,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 2
      },
      800: {
        items: 3
      },
      1000: {
          items: 4
      }
  }
});

function nextTimeLine(){
  jQuery('.owl-linha-tempo').trigger('next.owl.carousel');
}

function prevTimeLine(){
  jQuery('.owl-linha-tempo').trigger('prev.owl.carousel');
}

function nextDiferenciais(){
    jQuery('.owl-diferenciais').trigger('next.owl.carousel');
  }
  
  function prevDiferenciais(){
    jQuery('.owl-diferenciais').trigger('prev.owl.carousel');
  }

jQuery('.owl-solucoes').owlCarousel({
  loop:true,
  margin:0,
  dots: true,
  margin: 10,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 2
      },
      1000: {
          items: 3
      }
  }
});

jQuery('.owl-depoimentos').owlCarousel({
  loop:false,
  margin:0,
  dots: true,
  margin: 20,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 2
      },
      1000: {
          items: 3
      }
  }
});

jQuery('.owl-galeria-carrosel').owlCarousel({
  loop:false,
  dots: true,
  margin: 20,
  nav:false,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 2
      },
      1000: {
          items: 3
      }
  }
});



document.addEventListener("DOMContentLoaded", function () {
  
  let perguntas = document.querySelectorAll(".secao-faq .pergunta");
  if(perguntas){
    perguntas.forEach(
      pergunta => {
        pergunta.addEventListener( "click",
          function(){
            if(pergunta.classList.contains("open")){
              pergunta.classList.remove("open");
            }else{
              pergunta.classList.add("open");
            }
          }
        )
      }
    )
  }
  
  });



function fecharMenu(){
  jQuery("#menufull").removeClass("aberta");
}

function fecharPesquisa(){
  jQuery("#searchfull").removeClass("aberta");
}

jQuery(".fechar_menu").click(function() {
  fecharMenu();
});

jQuery(".botao_menu").click(function() {
  if(jQuery("#menufull").hasClass("aberta")) {
      fecharMenu();
      jQuery("#corpo").removeClass("fix");
  }
  else {
      jQuery("#menufull").addClass("aberta");
      jQuery("#corpo").addClass("fix");
  }
});

jQuery(".fechar_section").click(function(){
  fecharMenu();
  fecharPesquisa();
  jQuery("#corpo").removeClass("fix");
});


jQuery(".botao_pesquisa").click(function() {
  if(jQuery("#searchfull").hasClass("aberta")) {
      fecharPesquisa();
      jQuery("#corpo").removeClass("fix");
  }
  else {
      jQuery("#searchfull").addClass("aberta");
      jQuery("#corpo").addClass("fix");
  }
});


document.querySelector('body').addEventListener('keydown', function(event) {

  var tecla = event.keyCode;

  if(tecla == 27) {
      fecharMenu();
      fecharPesquisa();
      jQuery(".pesquisa_full").removeClass("on");
      jQuery("#corpo").removeClass("fix");

      jQuery(".box_promocao").css({display: "none"});
      jQuery(".infos").css({display: "block"});

      jQuery("#mascara_transparencia").css({display: "none"});
  }

});



jQuery(function(){
  // Initialize the gallery
  jQuery('.thumbs a').touchTouch();

});


jQuery(".abrir_pesquisa").click(function() {
  jQuery(".pesquisa_full").addClass("on");
  document.getElementById("label_for").click();
});

jQuery(".fechar_pesquisa").click(function(){
  jQuery(".pesquisa_full").removeClass("on");
});


