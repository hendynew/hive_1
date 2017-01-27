$(document).ready(function(){
  $(".submitHome").click(function(event){
    event.preventDefault();
    var data = $(this).data("target");

    var file_data = $('#' + data +'file').prop('files')[0];
    var form_data = new FormData();
    if(data == "hero"){
      form_data.append('img', "url_image_hero");
    }
    if(data == "bodyline"){
      var data1 = $('#title').val();
      var data2 = $('#title2').val();
      var data3 = CKEDITOR.instances.content.getData();
      data3 = data3.substring(3, data3.length - 10);
      form_data.append('title', data1);
      form_data.append('title2', data2);
      form_data.append('content', data3);
      form_data.append('img', "url_image_bg2");
    }
    else if(data == "subscribe"){
      var data1 = $('#title6').val();
      var data2 = $('#content6').val();
      form_data.append('title6', data1);
      form_data.append('content6', data2);
      form_data.append('img', "url_image_bg3");
    }


    form_data.append('file', file_data);

    $.ajax({
                url: 'cp/update/home', // point to server-side PHP script
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                beforeSend: function() {
                  $.notify({
                        icon: 'pe_7s_gift',
                        message: "Updating.."

                      },{
                          type: 'warning',
                          timer: 1000
                      });
                },
                success: function(res){
                  $.notify({
                        icon: 'pe_7s_gift',
                        message: "Update Success!"

                      },{
                          type: 'success',
                          timer: 1000
                      });
                }
     });
  });

  $('#tableblog').dataTable();
});



$('body').on('click', '.submitPartner', function(e){
        e.preventDefault();
        var target = $(this).data("target");
        var form = $("#form" + target);
        var formData = new FormData($(this).parents("form")[0]);

        for (var i = 1; i <= 5; i++) {
          var temp = $("#since" + i).val();
          formData.append("since" + i,temp);
        }

        formData.append("title",$("#title5").val());
        $.ajax({
            url: 'cp/update/partner',
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                $.notify({
                        icon: 'pe_7s_gift',
                        message: "Update Success!"

                      },{
                          type: 'success',
                          timer: 1000
                      });
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
  });

$('body').on('click', '.submitFitur', function(e){
        e.preventDefault();
        var target = $(this).data("target");
        var form = $("#form" + target);
        var formData = new FormData($(this).parents("form")[0]);

        for (var i = 1; i <= 4; i++) {
          var temp = CKEDITOR.instances["fiturcontent" + i].getData();
          temp = temp.substring(3, temp.length - 10);
          var temp2 = $("#fiturtitle" + i).val();
          formData.append("fiturcontent" + i,temp);
          formData.append("fiturtitle" + i,temp2);
        }

        formData.append("title",$("#fiturtitle").val());

        for (var pair of formData.entries()) {
          console.log(pair[0]+ ', ' + pair[1]); 
        }
        
        $.ajax({
            url: 'cp/update/fitur',
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                $.notify({
                        icon: 'pe_7s_gift',
                        message: "Update Success!"

                      },{
                          type: 'success',
                          timer: 1000
                });
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
  });

$('body').on('click', '.submitHeroBlog', function(e){
        e.preventDefault();
        var formData = new FormData($(this).parents("form")[0]);
        $.ajax({
            url: 'update/hero_blog',
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                $.notify({
                        icon: 'pe_7s_gift',
                        message: "Update Success!"

                      },{
                          type: 'success',
                          timer: 1000
                });
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
  });

$('body').on('click', '.submitNewBlog', function(e){
        e.preventDefault();
        var formData = new FormData($(this).parents("form")[0]);
        formData.append("title",$("#title").val());
        
        var data3 = CKEDITOR.instances.content.getData();
        data3 = data3.substring(3, data3.length - 10);
        formData.append("content",data3);
        
        var data4 = CKEDITOR.instances.caption.getData();
        data4 = data4.substring(3, data4.length - 10);
        formData.append("caption",data4);
        
        $.ajax({
            url: 'submitnewblog',
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                $.notify({
                        icon: 'pe_7s_gift',
                        message: "Update Success!"

                      },{
                          type: 'success',
                          timer: 1000
                });
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
  });