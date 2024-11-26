// Loader
const loaderTL = new TimelineMax();
const loaderTL2 = new TimelineMax();
window.onload = function() {
  loaderTL.to(".preloader__text svg", 2, {strokeDashoffset:"0"});
  loaderTL.to(".preloader__text svg", 1, {fillOpacity:1, y: 0, scale:.5});
  loaderTL2.to(".preloader img", 1, {opacity:1, y: 0, scale: 1, delay:2.2});

  loaderTL.to(".preloader img", .8, {opacity:0, y: -50, delay:.75});
  loaderTL2.to(".preloader__text svg", .8, {opacity:0, y: -50, delay:.52});
  loaderTL.to(".preloader", 1.5,{y: '-100%', ease: Expo.easeInOut});
  loaderTL2.from(".m-banner", 1,{y: 100, delay:.75, scale: 1.25});

  loaderTL.from(".text-revel", .5, {y: 105});
  loaderTL.from(".para-revel", .5, {y: 70});
  loaderTL.from(".m-banner__img", 20, {scale:1.2, repeat:-1, ease: "none", yoyo: true});
}


// Header on scroll
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("header").style.top = "0";
      if(currentScrollPos < 100){
        document.getElementById("header").classList.remove("small-header");
      }
    }  else{
      document.getElementById("header").style.top = "-210px";
      document.getElementById("header").classList.add("small-header");
    }
    prevScrollpos = currentScrollPos;
  }


// For Headline revel animation on scroll
const windowWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
if (windowWidth > 900) {
  // For Smooth Scroll
  var html = document.documentElement;
  var body = document.body;

  var scroller = {
    target: document.querySelector("#scroll-container"),
    ease: .05, // <= scroll speed
    endY: 0,
    y: 0,
    resizeRequest: 1,
    scrollRequest: 0,
  };

  var requestId = null;

  TweenLite.set(scroller.target, {
    rotation: 0,
    force3D: true
  });

  window.addEventListener("load", onLoad);

  function onLoad() {    
    updateScroller();  
    window.focus();
    window.addEventListener("resize", onResize);
    document.addEventListener("scroll", onScroll); 
  }

  function updateScroller() {
    
    var resized = scroller.resizeRequest > 0;
      
    if (resized) {    
      var height = scroller.target.clientHeight;
      body.style.height = height + "px";
      scroller.resizeRequest = 0;
    }
        
    var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

    scroller.endY = scrollY;
    scroller.y += (scrollY - scroller.y) * scroller.ease;

    if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
      scroller.y = scrollY;
      scroller.scrollRequest = 0;
    }
    
    TweenLite.set(scroller.target, { 
      y: -scroller.y
    });
    
    requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
  }

  function onScroll() {
    scroller.scrollRequest++;
    if (!requestId) {
      requestId = requestAnimationFrame(updateScroller);
    }
  }

  function onResize() {
    scroller.resizeRequest++;
    if (!requestId) {
      requestId = requestAnimationFrame(updateScroller);
    }
  }

   // Section animation on scroll 

   // Banner svg animation
   gsap.to(".m-top-banner .swiper-slide svg", 10, {strokeDashoffset:"0", repeat:-1, ease: "none"});
   
   $(".m-section").each(function(i) {
      var headline3 = $(this).find(".text-revel-3");
      var statData = $(this).find(".m-statistics-figure");
      var statSVG = $(this).find(".m-statistics-content svg");
      var serviceSlideItem = $(this).find(".m-service-slider .swiper-slide");
      var workSlideItem = $(this).find(".m-work-slider .swiper-slide");
      var newsSlideItem = $(this).find(".m-news-slider .swiper-slide");
      var blogSlideItem = $(this).find(".m-blog-slider .swiper-slide");
      var sec2Para = $(this).find(".m-why-choose-content p");
      var sec4Img = $(this).find(".m-profile-slider-right");

      var headline = $(this).find(".text-revel");
      var subHeadline2 = $(this).find(".m-about-section__content h5");
      var paraSec2 = $(this).find(".m-about-section__content p");
      var imgSec2 = $(this).find(".m-about-section__media");

     //Creates a timeline with scroll trigger
     const titleTL = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 50%",}
     });
     const sec2tl = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 40%",}
     });

     const sec4tl = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 10%",}
     });

     const tl1 = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 50%",}
     });
     const tl2 = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 50%",}
     });
     const tl3 = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 40%",}
     });
     const tl4 = gsap.timeline({
       scrollTrigger: {trigger: $(this), start: "top 20%",}
     });

      
     titleTL.staggerFrom(headline3, .8, {
       y:250, 
       ease: " expo.out"
     });

     sec4tl.from(sec4Img, .5, {
       x:300,
       opacity:0,
       ease: "back.out(1.7)"
     });

     sec2tl.staggerFrom(sec2Para, .5, {
       y:50, 
       stagger: .15,
       ease: " expo.out"
     });

     tl1.to(statSVG, 2, {strokeDashoffset:"0", ease: "none"});
     tl1.from(statData, .75, {y: 50, opacity: 0, ease: "back.out(1.7)"});

     tl2.from(serviceSlideItem, .75, {x: 100, ease: "back.out(1.25)", stagger: .15});
     tl3.from(workSlideItem, .75, {x: 200, opacity: 0, ease: "back.out(1.25)", stagger: .15});
     tl3.from(newsSlideItem, .75, {x: 100, opacity: 0, ease: "back.out(1.25)", stagger: .15});
     tl4.from(blogSlideItem, .75, {x: 100, opacity: 0, ease: "back.out(1.25)", stagger: .15});

     tl2.staggerFrom(imgSec2, .6, {
       scale:.5, 
       opacity:0,
       ease: "back.out(1.7)"
     });     
   });





// close menu on clicking outside
// $(document).click(function(){
//   gsap.to(".m-secondary-nav-container", .75, {autoAlpha: 0, y:50, ease: "back.out(1.7)"});
// });

// $(".m-nav").click(function(e){
//   $(".m-nav>ul>li").removeClass("active");
//   e.stopPropagation();
// });


} else{
// Below 768px width viewport

 // Banner svg animation
   gsap.to(".m-top-banner .swiper-slide svg", 10, {strokeDashoffset:"0", repeat:-1, ease: "none"});


   $('.m-nav__link').click(function () {
      const menuTL = new TimelineMax();
      var target = $(this).parent().find(".m-secondary-nav-container");
      menuTL.fromTo(target, 
        {xPercent: -100, ease: Expo.easeInOut}, 
        {display:'flex', xPercent: 0, duration: .35, ease: Expo.easeInOut});


        // $(".menu__container").removeClass("showMenu");
        // menuTL.to(".header__right", { xPercent: -100, ease: Expo.easeInOut});
    });

   $('.m-menu-back').click(function () {
      const menuTL = new TimelineMax();
      menuTL.to(".m-secondary-nav-container", {display:'none',xPercent: -100, ease: Expo.easeInOut});
    });

   $(".menu__container").on("click", function(){
      const menuTL = new TimelineMax();

      if($(this).hasClass("showMenu")){
        $(".menu__container").removeClass("showMenu");
        const menuTL = new TimelineMax();
        menuTL.to(".header__right", { xPercent: -100, ease: Expo.easeInOut});
      }else{
        $(".menu__container").addClass("showMenu");
        menuTL.to(".header__right", {x: 0, xPercent:0, ease: Expo.easeInOut});
        menuTL.from(".m-nav>ul>li", {
          opacity: 0,
          // y: 20,
          stagger: 0.15,
        });
      }
   });

  gsap.from(".m-statistics-figure", .75, {y: 50, opacity: 0, ease: "back.out(1.7)"});
  gsap.to(".m-statistics-content svg", 5, {strokeDashoffset:"0", ease: "none", delay: 1});

}





// Modal
$('.m-modal__close').click(function () {
   gsap.to("#contactModal", .25, {scale:.8, opacity:0,  display:'none'}); 
  $("body").removeClass("modal-active");
});

$('.btn-transform-business, .m-cta-btn').click(function () {
    $("body").addClass("modal-active");
    gsap.fromTo("#contactModal",
      {autoAlpha: 0, scale:1.1, ease: "back.out(2)"},
      {autoAlpha: 1, display:'block', scale:1, duration: .45, ease: "back.out(2)"});
});

$(function(){
  $('.nav-tab a').click(function(){
    var tabId = $(this).attr('data-tab');
    
    $('.nav-tab a').removeClass('active');
    $('.Tabcondent').removeClass('active');
    
    $(this).addClass('active');
    $('#'+tabId).addClass('active');
  });
  
});


//Consent Form

$(function(){
    $("#btnSaleSubmit").click(function( event ) {
        event.preventDefault();
        //alert( "Handler for sale called." ); 
        var sname = $("#sUserName").val();
        var semail = $("#sUserEmail").val();
        var smob = $("#sUserMob").val();
        var sloc = $("#sUserPropLoc").val();
        var sdetail = $("#sUserPropDetail").val();
        var stype = $("#sUserPropType").val();
        var sexpric = $("#sExpPrice").val();
        var sdata = "name="+sname+"&email="+semail+"&mobile="+smob+"&location="+sloc+"&proptyp="+stype+"&details="+sdetail+"&exptprc="+sexpric+"&src=sale";
        //alert(sdata);
        $.ajax({
          url: 'includes/saledoapi.php',
          data: sdata,
          type: 'POST',
          success: function(resp){
            console.log(resp); //$.alert(resp); die();
            //$(this).closest('form').find("input[type=text], input[type=email], textarea").val("");
            //$(this).closest('form').find("select").val("Not Choosen");
            $('#saleAdd')[0].reset();
          }
        });
       $(".m-modal__close").trigger("click");
    });
    
    $('#btnPurchesSubmit').click(function( event ) {
        event.preventDefault();
        //alert( "Handler for Purchase called." );
        var pname = $("#pBuyerName").val();
        var pemail = $("#pUserEmail").val();
        var pmob = $("#pUserMob").val();
        var ploc = $("#pUserPropLoc").val();
        var pdetail = $("#pUserPropDetail").val();
        var ptype = $("#pUserPropType").val();
        var pexpric = $("#pUserPropPrice").val();
        var parea = $("#pUserPropArea").val();
        var pdata = "name="+pname+"&email="+pemail+"&mobile="+pmob+"&location="+ploc+"&proptyp="+ptype+"&details="+pdetail+"&area="+parea+"&exptprc="+pexpric+"&src=purchase";
        //alert(pdata);
        $.ajax({
          url: 'includes/saledoapi.php',
          data: pdata,
          type: 'POST',
          success: function(resp){
            console.log(resp); //$.alert(resp); die();
            //$(this).closest('form').find("input[type=text], input[type=email], textarea").val("");
            //$(this).closest('form').find("select").val("Not Choosen");
            $('#purchaseAdd')[0].reset();
          }
        });
        $(".m-modal__close").trigger("click");
    });
    
    $('#btnRentSubmit').click(function( event ) {
        event.preventDefault();
        //alert( "Handler for rent called." );
        var rname = $("#rLandLord").val();
        var remail = $("#rUserEmail").val();
        var rmob = $("#rUserMob").val();
        var rloc = $("#rUserPropLoc").val();
        var rdetail = $("#rUserPropDetail").val();
        var rtype = $("#rUserPropType").val();
        var rexpric = $("#rUserPropPrice").val();
        var rdata = "name="+rname+"&email="+remail+"&mobile="+rmob+"&location="+rloc+"&proptyp="+rtype+"&details="+rdetail+"&exptprc="+rexpric+"&src=rent";
        //alert(rdata);
        $.ajax({
          url: 'includes/saledoapi.php',
          data: rdata,
          type: 'POST',
          success: function(resp){
            console.log(resp); //$.alert(resp); die();
            //$(this).closest('form').find("input[type=text], input[type=email], textarea").val("");
            //$(this).closest('form').find("select").val("Not Choosen");
            $('#rentAdd')[0].reset();
          }
        });
        $(".m-modal__close").trigger("click");
    });
    
    $('#btnTenantSubmit').click(function( event ) {
        event.preventDefault();
        //alert( "Handler for Tenant called." );
        var tname = $("#tUserName").val();
        var temail = $("#tUserEmail").val();
        var tmob = $("#tUserMob").val();
        var tloc = $("#tUserPropLoc").val();
        var tdetail = $("#tUserPropDetail").val();
        var ttype = $("#tUserPropType").val();
        var tdata = "name="+tname+"&email="+temail+"&mobile="+tmob+"&location="+tloc+"&proptyp="+ttype+"&details="+tdetail+"&src=tenant";
        //alert(tdata);
        $.ajax({
          url: 'includes/saledoapi.php',
          data: tdata,
          type: 'POST',
          success: function(resp){
            console.log(resp); //$.alert(resp); die();
            //$(this).closest('form').find("input[type=text], input[type=email], textarea").val("");
            //$(this).closest('form').find("select").val("Not Choosen");
            $('#tenantAdd')[0].reset();
          }
        });
        $(".m-modal__close").trigger("click");
    });
});
