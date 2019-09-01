/* If you're feeling fancy you can add interactivity 
    to your site with Javascript */

// prints "hi" in the browser's dev tools console
$(document).ready(function(){
    $("#intro").click(function(){
      $(this).removeClass("item");
      $(this).addClass("active item");
      $("#list").removeClass("active item");
      $("#prereq").removeClass("active item");
      $("#faq").removeClass("active item");
      $("#faq").addClass("item");
      $("#list").addClass("item");
      $("#prereq").addClass("item");
      $("#int").show();
      $("#lis").hide();
      $("#pre").hide();
      $("#faqs").hide();
    });
      $("#list").click(function(){
      $(this).removeClass("item");
      $(this).addClass("active item");
      $("#intro").removeClass("active item");
      $("#prereq").removeClass("active item");
      $("#faq").removeClass("active item");
      $("#faq").addClass("item");
      $("#intro").addClass("item");
      $("#prereq").addClass("item");
      $("#int").hide();
      $("#lis").show();
      $("#pre").hide();
      $("#faqs").hide();
    });
      $("#prereq").click(function(){
      $(this).removeClass("item")
      $(this).addClass("active item")
      $("#list").removeClass("active item");
      $("#intro").removeClass("active item");
      $("#faq").removeClass("active item");
      $("#faq").addClass("item");
      $("#list").addClass("item");
      $("#intro").addClass("item");
      $("#int").hide();
      $("#lis").hide();
      $("#pre").show();
      $("#faqs").hide();
    });
    $("#faq").click(function(){
      $(this).removeClass("item");
      $(this).addClass("active item");
      $("#intro").removeClass("active item");
      $("#prereq").removeClass("active item");
      $("#list").removeClass("active item");
      $("#intro").addClass("item");
      $("#prereq").addClass("item");
      $("#list").addClass("item");
      $("#int").hide();
      $("#lis").hide();
      $("#pre").hide();
      $("#faqs").show();
    });
    
    $(window).scroll(function() {
      if ($(this).scrollTop()) {
          $('#toTop').fadeIn();
      } else {
          $('#toTop').fadeOut();
      }
  });

  // $("#dion1").click(function(){
  //   $("#accord1").slideToggle();
  //   $("#accord2").slideUp();
  //   $("#accord3").slideUp();
  // });
  // $("#dion2").click(function(){
  //   $("#accord2").slideToggle();
  //   $("#accord1").slideUp();
  //   $("#accord3").slideUp();
  // });
  // $("#dion3").click(function(){
  //   $("#accord3").slideToggle();
  //   $("#accord1").slideUp();
  //   $("#accord2").slideUp();
  // });
  
  $("#toTop").click(function () {
     $("html, body").animate({scrollTop: 0}, 500);
  });
  });

  function myFunction() {
    var x = document.getElementById("inputs");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function myFunction2() {
    var x = document.getElementById("outputBox");
    if (x.style.display === "none") {
      x.style.display = "block";
    }
  }
