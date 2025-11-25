AOS.init({
  disable: window.innerWidth < 1024,
});

function toggleNave() {
  const $btn = jQuery("#menuBtn");
  const $sidenav = jQuery("#mySidenav");

  if ($btn.hasClass("active")) {
    $btn.removeClass("active");
    $sidenav.css("right", "-100%");
  } else {
    $btn.addClass("active");
    $sidenav.css("right", 0);
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

jQuery(".owl-carousel-banner").owlCarousel({
  loop: false,
  margin: 0,
  dots: true,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

jQuery(".owl-carousel-mobile").owlCarousel({
  loop: false,
  margin: 0,
  dots: false,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

$(".owl-galeria-carrosel").owlCarousel({
  loop: false,
  margin: 20,
  center: false, // centraliza um item
  nav: false, // ativa setas
  dots: true, // remove bolinhas
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

function nextGaleria() {
  jQuery(".owl-galeria-carrosel").trigger("next.owl.carousel");
}

function prevGaleria() {
  jQuery(".owl-galeria-carrosel").trigger("prev.owl.carousel");
}

jQuery(".owl-equipe").owlCarousel({
  loop: false,
  margin: 20,
  dots: true,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

jQuery(".owl-clients").owlCarousel({
  loop: true,
  margin: 20,
  dots: true,
  nav: false,
  autoplay: true,
  autoplayTimeout: 1500,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

function nextMarcas() {
  jQuery(".owl-clients").trigger("next.owl.carousel");
}

function prevMarcas() {
  jQuery(".owl-clients").trigger("prev.owl.carousel");
}

jQuery(".owl-segmentos").owlCarousel({
  loop: false,
  margin: 20,
  dots: true,
  margin: 30,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

jQuery(".owl-marcas").owlCarousel({
  loop: false,
  dots: true,
  margin: 20,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    400: {
      items: 1,
    },
    580: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

jQuery(".owl-livros").owlCarousel({
  loop: false,
  margin: 20,
  dots: true,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

jQuery(".owl-blog").owlCarousel({
  loop: false,
  margin: 20,
  dots: true,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});

jQuery(".owl-depoimentos").owlCarousel({
  loop: false,
  margin: 0,
  dots: false,
  margin: 20,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

function nextDepoimentos() {
  jQuery(".owl-depoimentos").trigger("next.owl.carousel");
}

function prevDepoimentos() {
  jQuery(".owl-depoimentos").trigger("prev.owl.carousel");
}

document.addEventListener("DOMContentLoaded", function () {
  let perguntas = document.querySelectorAll(".secao-faq .pergunta");
  if (perguntas) {
    perguntas.forEach((pergunta) => {
      pergunta.addEventListener("click", function () {
        if (pergunta.classList.contains("open")) {
          pergunta.classList.remove("open");
        } else {
          pergunta.classList.add("open");
        }
      });
    });
  }
});

function fecharMenu() {
  jQuery("#menufull").removeClass("aberta");
}

function fecharPesquisa() {
  jQuery("#searchfull").removeClass("aberta");
}

jQuery(".fechar_menu").click(function () {
  fecharMenu();
});

jQuery(".botao_menu").click(function () {
  if (jQuery("#menufull").hasClass("aberta")) {
    fecharMenu();
    jQuery("#corpo").removeClass("fix");
  } else {
    jQuery("#menufull").addClass("aberta");
    jQuery("#corpo").addClass("fix");
  }
});

jQuery(".fechar_section").click(function () {
  fecharMenu();
  fecharPesquisa();
  jQuery("#corpo").removeClass("fix");
});

jQuery(".botao_pesquisa").click(function () {
  if (jQuery("#searchfull").hasClass("aberta")) {
    fecharPesquisa();
    jQuery("#corpo").removeClass("fix");
  } else {
    jQuery("#searchfull").addClass("aberta");
    jQuery("#corpo").addClass("fix");
  }
});

document.querySelector("body").addEventListener("keydown", function (event) {
  var tecla = event.keyCode;

  if (tecla == 27) {
    fecharMenu();
    fecharPesquisa();
    jQuery(".pesquisa_full").removeClass("on");
    jQuery("#corpo").removeClass("fix");

    jQuery(".box_promocao").css({ display: "none" });
    jQuery(".infos").css({ display: "block" });

    jQuery("#mascara_transparencia").css({ display: "none" });
  }
});

jQuery(".abrir_pesquisa").click(function () {
  jQuery(".pesquisa_full").addClass("on");
  document.getElementById("label_for").click();
});

jQuery(".fechar_pesquisa").click(function () {
  jQuery(".pesquisa_full").removeClass("on");
});

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-link");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      const target = this.getAttribute("data-target");

      // remove active de todos
      tabs.forEach((t) => t.classList.remove("active"));
      contents.forEach((c) => c.classList.remove("active"));

      // ativa o clicado
      this.classList.add("active");
      document.getElementById(target).classList.add("active");
    });
  });
});

jQuery(document).ready(function ($) {
  $(".numero-infos").each(function () {
    var $this = $(this);
    var countTo = $this.text().trim(); // Obter o valor do elemento e remover espaços em branco

    // Verificar se o valor é vazio
    if (countTo === "") {
      countTo = null; // Definir como null se estiver vazio
    } else {
      countTo = parseInt(countTo); // Converter para número inteiro
    }

    // Inicializar o contador apenas se countTo não for nulo
    if (countTo !== null) {
      $this.counterUp({
        delay: 10,
        time: 2000,
        countTo: countTo, // Passar o valor para o contador
      });
    }
  });
});

$(document).ready(function () {
  // Ao clicar em um dropdown-toggle
  $(".dropdown-toggle").click(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this);
    var $submenu = $this.next(".dropdown-menu");

    // Fecha apenas os dropdowns que não são ancestrais do item clicado
    $(".dropdown-menu")
      .not($submenu.parents(".dropdown-menu"))
      .not($submenu)
      .removeClass("show");

    // Alterna o submenu atual
    $submenu.toggleClass("show");
  });

  // Impede que cliques dentro de qualquer dropdown fechem os menus
  $(".dropdown-menu").click(function (e) {
    e.stopPropagation();
  });

  // Clicar fora fecha todos os menus
  $(document).click(function () {
    $(".dropdown-menu").removeClass("show");
  });
});

jQuery("#telefone").mask("(99) 99999-9999");

document.addEventListener("DOMContentLoaded", function () {
  const overlay = document.getElementById("popup-overlay");
  const closeBtn = document.querySelector(".popup-close");

  if (overlay && closeBtn) {
    // Mostra o popup automaticamente
    overlay.style.display = "flex";

    // Fecha ao clicar no botão
    closeBtn.addEventListener("click", function () {
      overlay.style.display = "none";
    });

    // Fecha ao clicar fora da área do conteúdo
    overlay.addEventListener("click", function (e) {
      if (e.target === overlay) {
        overlay.style.display = "none";
      }
    });
  }
});

//carrossel de servicos projeart
jQuery(document).ready(function($) {
    $('.servicos-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayTimeout: 4500,
        smartSpeed: 600,
        responsive:{
            0:{ items:1 },
            600:{ items:2 },
            1000:{ items:2 }
        }
    });
});

jQuery(document).ready(function($) {
    $('.projetos-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayTimeout: 4500,
        smartSpeed: 600,
        responsive:{
            0:{ items:1 },
            600:{ items:2 },
            1000:{ items:3 }
        }
    });
});

jQuery(document).ready(function($) {
    $('.produtos-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayTimeout: 4500,
        smartSpeed: 600,
        responsive:{
            0:{ items:1 },
            600:{ items:2 },
            1000:{ items:5 }
        }
    });
});

jQuery(document).ready(function($) {

  $('.owl-clientes').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 0,
    autoplaySpeed: 3000,
    autoplayHoverPause: false,
    slideTransition: 'linear',

    responsive:{
      0:{
        items: 3
      },
      480:{
        items: 4
      },
      768:{
        items: 6
      },
      992:{
        items: 8
      },
      1200:{
        items: 10
      }
    }
  });

});


// js sessao video  

document.addEventListener("DOMContentLoaded", function() {
    const video = document.getElementById("videoSessao");
    const btn = document.getElementById("playVideo");

    btn.addEventListener("click", function() {
        video.play();
        btn.style.display = "none";
    });
});

