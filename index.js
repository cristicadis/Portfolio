$(window).on('load', function (){

  var section0 = $("#home").offset().top;
  var section1 = $("#about").offset().top;
  var section2 = $("#skills").offset().top;
  var section3 = $("#projects").offset().top;
  var section4 = $("#edu").offset().top;
  var section5 = $("#contact").offset().top;
  var resizeId;

  $(window).resize(function () {
              section0 = $("#home").offset().top;
              section1 = $("#about").offset().top;
              section2 = $("#skills").offset().top;
              section3 = $("#projects").offset().top;
              section4 = $("#edu").offset().top;
              section5 = $("#contact").offset().top;
  });

//when click on menu scroll to the section
  $(".js--scroll-to-home").click(function(){
    $("html, body").animate({scrollTop:section0},1000);

  });

  $(".js--scroll-to-about").click(function(){
    $("html, body").animate({scrollTop:section1-89},1000);

  });

  $(".js--scroll-to-skills").click(function(){
    $("html, body").animate({scrollTop:section2-89},1000);

  });

  $(".js--scroll-to-projects").click(function(){
    $("html, body").animate({scrollTop:section3-89},1000);

  });

  $(".js--scroll-to-education").click(function(){
    $("html, body").animate({scrollTop: section4-89},1000);

  });

  $(".js--scroll-to-contact").click(function(){
    $("html, body").animate({scrollTop: section5-89},1000);

  });



        $(document).on("scroll",function(){
          var scrollTop = $(document).scrollTop();
          var activeLi ;

          if (scrollTop < section1-91){
            activeLi = $(".js--main-nav>li:nth-child(1)");


          } else if (scrollTop<section2-91){
            activeLi = $(".js--main-nav>li:nth-child(2)");
          }else if (scrollTop<section3-91) {
            activeLi = $(".js--main-nav>li:nth-child(3)");
          }else if (scrollTop<section4-91) {
            activeLi = $(".js--main-nav>li:nth-child(4)");
          } else if (scrollTop<section5-91) {
            activeLi = $(".js--main-nav>li:nth-child(5)");
          } else {
            activeLi = $(".js--main-nav>li:nth-child(6)");
          }
          activeLi.addClass("active");
          $(".js--main-nav>li").not(activeLi).removeClass("active");
        });


/// when click outside  menu to close
$(".header-component").bind("clickoutside", function (event) {
  if ($(".js--nav-icon i").hasClass("fa-times")){
    $(".js--main-nav").slideToggle("200");
    $(".js--nav-icon i").addClass("fa-bars");
    $(".js--nav-icon i").removeClass("fa-times");
    $(".dark").hide();
  }
});

/// icons and image animation

  $(".js--image-edu").waypoint(function(direction){
    $(".js--image-edu").addClass("animated pulse");
  } , {offset:'50%'});


  var i;
  if ($(window).width() > 766) {
      $(window).resize(function(){
        $(".js--main-nav").css("display", "flex");
      });

    }else {

    }

// hamburger icon and close icon for mobile menu

  $(".js--nav-icon").click(function(){
    var nav = $(".js--main-nav");
    var icon = $(".js--nav-icon i");
    nav.slideToggle("200");

    if (icon.hasClass("fa-bars")){
      icon.addClass("fa-times");
      icon.removeClass("fa-bars");
      $(".dark").show();

    } else {
      icon.addClass("fa-bars");
      icon.removeClass("fa-times");
      $(".dark").hide();

    }

  });

  $(window).resize(function() {

    if (window.innerWidth < 768) {
      $(".js--main-nav").css("display", "none");

    }
   else {

        $(".js--main-nav").css("display", "flex");

   }
  });

  // if we have navbar mobile than change X icon from menu with hamburger icon when we click on menu

  $(document).ready(function () {

      for (var i = 1; i <= 6; i++) {
        $(".js--main-nav>li:nth-child("+i+")").click(function (e){

        if ($(window).width() < 767 ) {

          $(".js--main-nav").slideToggle("200");
           $(".js--nav-icon i").addClass("fa-bars");
           $(".js--nav-icon i").removeClass("fa-times");
           $(".dark").hide();

              }

            });
          }

});

  ///For projects - show/hide the top div

        for(var i = 1; i < 7; i++) {
          dara(i);
        }

        function dara (i) {
          $(".project-"+i).hover(


        function () {
                  $(".div"+i).removeClass("hide").addClass("show");
              },
              function () {
                  $(".div"+i).removeClass("show").addClass("hide");
              }
          );

        }

  //style the buttons prev and git from projects
  $(".prew").hover(function() {
     $(".icon_prew").css("color", "#242B33");
  },
  function () {
    $(".icon_prew").css("color", "#fff");
  });

  $(".git").hover(function() {
     $(".icon_git").css("color", "#242B33");
  },
  function () {
    $(".icon_git").css("color", "#fff");
  });

});
