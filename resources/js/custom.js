
/*
  Pada halaman BLOG, untuk berpindah bulan pada pagination
  monthblog-active adalah bulan yang sedang aktif atau ditampilkan.
*/
$(".monthblog").click(function(){
  monthBlogOnClick(this);
});

function monthBlogOnClick(element){
  var activeMonthBlog = $(".monthblog-active");
  if(activeMonthBlog[0] != element){
    $(".monthblog").removeClass("monthblog-active");
    $(element).addClass("monthblog-active");

  }
}

$(document).ready(function(){
  $('.colblogs').lightSlider({
    item:3,
    loop:false,
    slideMove:2,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
  });

  $(".btnnext").click(function(){
    var elements = document.getElementsByClassName("monthblog-active");
    var element = elements[0];
    var month = parseInt(element.id);
    var monthTarget = parseInt(month) + 1;
    var target = $("#" + monthTarget + " > a");
    monthBlogOnClick(target);
  });

  $(".send").click(function(){
    alert("test");
  });
});

$(".btn-prev-blog-posts").click(function(){
  $(".colblogpost").fadeOut();
  $(".colblogpost").fadeOut();
});
