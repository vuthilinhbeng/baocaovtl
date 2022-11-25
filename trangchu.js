
/*------------cuon header------*/
// When the user scrolls the page, execute myFunction
window.onscroll = function () { myFunction() };

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

/*------- slide_two ------*/
var KichThuoc = document.getElementsByClassName("slide")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("chuyen_slide")[0];
var Img = ChuyenSlide.getElementsByTagName("img");
var Chuyen = 0;
function Next() {
  Chuyen += KichThuoc;
  if (Chuyen < 2580) {
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
    console.log(Chuyen)
  }
  else {
    Chuyen = 0
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
    console.log(Chuyen)
  }
}

function Back() {
  if (Chuyen == 0) {
    ChuyenSlide.style.marginLeft = '-' + 1720 + 'px'
    console.log(Chuyen)
    Chuyen = 1720
  }
  else {
    Chuyen -= KichThuoc;
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
    console.log(Chuyen)

  }
}
setInterval(function () {
  // công việc cần thực hiện
  Next();
}, 4000);


/*---------------slide_nine----------*/
/*-------slide_nine_left --- */
var KichThuocnine = document.getElementsByClassName("slide_nine")[0].clientWidth;
var ChuyenSlidenine = document.getElementsByClassName("chuyen_anh_nine")[0];
var Imgnine = ChuyenSlidenine.getElementsByClassName("slide_slide");
var Chuyennine = 0;
function N_ext() {
  Chuyennine += KichThuocnine;
  if (Chuyennine < 1200) {
    ChuyenSlidenine.style.marginLeft = '-' + Chuyennine + 'px';
    console.log(Chuyennine)
  }
  else {
    Chuyennine = 0
    ChuyenSlidenine.style.marginLeft = '-' + Chuyennine + 'px';
    console.log(Chuyennine)
  }
}

function B_ack() {
  if (Chuyennine == 0) {
    ChuyenSlidenine.style.marginLeft = '-' + 600 + 'px'
    console.log(Chuyennine)
    Chuyennine = 600
  }
  else {
    Chuyennine -= KichThuocnine;
    ChuyenSlidenine.style.marginLeft = '-' + Chuyennine + 'px';
    console.log(Chuyennine)

  }
}
/*-------slide_nine_right --- */

var KichThuocright = document.getElementsByClassName("slide_right")[0].clientWidth;
var ChuyenSlideright = document.getElementsByClassName("chuyen_anh_right")[0];
var Imgright = ChuyenSlideright.getElementsByClassName("slide_slide_right");
var Chuyenslide = 0;
function N_ex_t() {
  Chuyenslide += KichThuocright;
  if (Chuyenslide < 1200) {
    ChuyenSlideright.style.marginLeft = '-' + Chuyenslide + 'px';
    console.log(Chuyenslide);
  }
  else {
    Chuyenslide = 0;
    ChuyenSlideright.style.marginLeft = '-' + Chuyenslide + 'px';
    console.log(Chuyenslide);
  }
}
function B_ac_k() {
  if (Chuyenslide == 0) {
    ChuyenSlideright.style.marginLeft = '-' + 600 + 'px';
    console.log(Chuyenslide);
    Chuyenslide = 600
  }
  else {
    Chuyenslide -= KichThuocright;
    ChuyenSlideright.style.marginLeft = '-' + Chuyenslide + 'px';
    console.log(Chuyenslide);

  }
}
