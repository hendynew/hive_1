function blogs(item, index){
  var image;
  if(item.url_image == ""){
    image = './resources/images/Images9.jpg';
  }else image = './resources/images/' + item.url_image;
  var hasil = '';
  hasil = '<div class="blogdiv" style="opacity:0"><div class="w-row blognya">';
  hasil += '<div class="colgambarblog w-col w-col-4"><img src="' + image + '"></div>';
  hasil += '<div class="w-col w-col-8">';
  hasil += '<div class="bloginfo">';
  hasil += '<h4 class="blogheader">' + item.title + '</h4>';
  hasil += '<h4 class="blogdate">' + item.date +'</h4>';
  hasil += '<p class="blogdesc"> ' + item.caption + '</p>'
  hasil += '<a class="btnseemore w-inline-block" href="./view_blog/' + item.post_id + '"></a>'
  hasil += '</div></div></div></div>';
  $('.blogall').append(hasil);
}


$(document).ready(function(){

  $("#subscribe").click(function(){
    var email = $("#Email-2").val();
    var url = window.location.href + "subscribe";
    $.ajax({
      type: "POST",
      url: url,
      data: {"Email":email},
      success:function(){$(".w-form-done").slideDown();}
    });
  });

  $( ".send" ).click(function( event ) {
    var data = $("#contact").serializeArray();
    console.log( data );
    $.ajax({
      type: "POST",
      url: "sendmail",
      data: {"data":data},
      success:function(){$(".w-form-done").slideDown();}
    });
    return false;
  });

  $(".selectMonth").click(function(){
    var value = $(this).html();
    var month = $(this).data("month");
    var year = $(this).data("year");
    $.ajax({
      url: 'selectposts',
      type: 'POST',
      dataType: 'text',
      data: {month: month, year: year},
      beforeSend: function(){
        $('.blogdiv').animate({opacity: 0});
        $('.active-month').html(value);
        $('.blogdropdown,.dropdownlist').removeClass("w--open");
      },
      success: function(data){
        var hasil = JSON.parse(data);
        $('.blogall').empty();
        if(hasil.length > 0){
          hasil.forEach(blogs);
          $('#noresult').addClass('hidden');
        }else{
          $('#noresult').removeClass('hidden');
        }
        $('.blogdiv').animate({opacity: 1});
      }
    });
  });

  $(".searchform").submit(function(){
    var isi = $(".search").val();
    if(isi == "")
      isi = $(".search2").val();

    $.ajax({
      url: 'selectposts',
      type: 'POST',
      dataType: 'text',
      data: {search: true, isi: isi},
      beforeSend: function(){
        $('.blogdiv').animate({opacity: 0});
        $('.blogdropdown,.dropdownlist').removeClass("w--open");
      },
      success: function(data){
        var hasil = JSON.parse(data);
        $('.blogall').empty();
        if(hasil.length > 0){
          hasil.forEach(blogs);
          $('#noresult').addClass('hidden');
        }else{
          $('#noresult').removeClass('hidden');
        }
        $('.blogdiv').animate({opacity: 1});
      }
    });

    return false;
  });
});



$( window ).scroll(function() {
    var pos = 50;
    if ($(window).scrollTop() > pos)
          { 
            $(".btnclose").click();
            //alert("test");
          }
});