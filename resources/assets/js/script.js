$(window).on("scroll", function() {
  if($(window).scrollTop() > 50 ) {
    $(".header").addClass("bg-color-fade");
    $(".vid-content").css("margin-top", "90px");
  } else {
    $(".header").removeClass("bg-color-fade");
    $(".vid-content").css("margin-top", "0");
  }
});

$(".watch-vid").click(function() {
  $('html,body').animate({
    scrollTop: $(".vid-content").offset().top}, 'slow');
  });
