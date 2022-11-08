//  Initialize Swiper
var screenWidth = window.innerWidth;
function makeSwiper(screenWidth) {
  if (screenWidth > 576) {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  } else {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}
makeSwiper(screenWidth);
window.onresize = makeSwiper(window.innerWidth);

// Ubah gambar utama pada halaman produk
changeImage = function (node) {
  document.getElementById("mainpic").src = document.querySelectorAll(".thumbnail img")[node].src;

  for (let i = 0; i < document.querySelectorAll(".thumbnail img").length; i++) {
    if (i != node) {
      document.querySelectorAll(".thumbnail img")[i].classList.remove("activepic");
    } else {
      document.querySelectorAll(".thumbnail img")[node].classList.add("activepic");
    }
  }
};

//fungsi sidebar & sidebar-sm
moveBig = function () {
  for (let i = 0; i < document.querySelectorAll(".containerSeller").length; i++) {
    document.querySelectorAll(".containerSeller")[i].classList.add("container-side");
    document.querySelectorAll(".containerSeller")[i].classList.remove("container-side-sm");
  }
};
moveSmall = function () {
  for (let i = 0; i < document.querySelectorAll(".containerSeller").length; i++) {
    document.querySelectorAll(".containerSeller")[i].classList.add("container-side-sm");
    document.querySelectorAll(".containerSeller")[i].classList.remove("container-side");
  }
};

//sidebar penjual
if (document.getElementById("sidebar") || document.getElementById("sidebar-sm")) {
  if (screenWidth < 992) {
    document.getElementById("sidebar").classList.add("hidden");
    moveSmall();
  } else {
    document.getElementById("sidebar-sm").classList.add("hidden");
    moveBig();
  }
}

function sidebarNormal() {
  document.getElementById("sidebar").classList.remove("hidden");
  document.getElementById("sidebar-sm").classList.add("hidden");
  moveBig();
}
function sidebarSmall() {
  document.getElementById("sidebar").classList.add("hidden");
  document.getElementById("sidebar-sm").classList.remove("hidden");
  moveSmall();
}

// panjang halaman penjual
lengthen = function () {
  for (let i = 0; i < document.querySelectorAll(".containerSeller").length; i++) {
    if (i != document.querySelectorAll(".containerSeller").length - 1) {
      continue;
    } else {
      document.querySelectorAll(".containerSeller")[i].style.height = (window.innerHeight - 40 - 53 - 35).toString().concat("px");
    }
  }
};
if (window.innerHeight - 40 > document.body.scrollHeight) {
  lengthen();
}

console.log("JS run till end!");
