$(function () {
  $('li>a').on('click', function(e) {
    e.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top
    }, 900, function(){
      window.location.hash = hash;
    });
  });

  $(document).ready(function() {
   $('.left-side_menu').find('li').hover(function(e) {
      $('.left-side_menu').find('li').removeClass('active');
       $(this).addClass('active');
       $(".overlay-item").removeClass("active");
       $(".overlay-item").removeClass("inactive");
   $(".overlay-id"+$(this).data("id")).addClass("active").removeClass("inactive");

        $(".overlay-id"+$(this).data("id")).prev().addClass("inactive")
   });

   $('.slideshow').children().on('mouseleave',function(e) {
   $(this).removeClass("active");
   });

   $('.carousel').carousel();
  });
  $("form").on("submit", function(){
    $("#submit").removeClass("btn-primary").addClass("btn-success");
  })
  $('#submit').click(function() {
  $('.modal').modal('show');
  });
});
