$(document).ready(function(){
  $(".submitHome").click(function(event){
    event.preventDefault();
    /*
    var titl = $("#title").val();
    var titl2 = $("#title2").val();
    var cont = CKEDITOR.instances.cont.getData();

    var titl3 = $("#title3").val();
    var c2_titl1 = $("#c2-title1").val();
    var c2_cont1 = CKEDITOR.instances.editc1.getData();
    var c2_titl2 = $("#c2-title2").val();
    var c2_cont2 = CKEDITOR.instances.editc2.getData();
    var c2_titl3 = $("#c2-title3").val();
    var c2_cont3 = CKEDITOR.instances.editc3.getData();
    var c2_titl4 = $("#c2-title4").val();
    var c2_cont4 = CKEDITOR.instances.editc4.getData();

    var titl5 = $("#title5").val();
    var titl6 = $("#title6").val();
    var cont6 = CKEDITOR.instances.edit4.getData();

    $.ajax({
      type: "POST",
      url: "cp/update/home",
      data: {imagehero:,title: titl,title2: titl2,content: cont,title3: titl3,c2_title1: c2_titl1,c2_content1: c2_cont1,c2_content2: c2_cont2,c2_content3: c2_cont3,c2_content4: c2_cont4,title5: titl5,title6: titl6,content6: cont6},
      success: function(res) {
        if (res == "1")
        {
          $.notify({
            	icon: 'pe_7s_gift',
            	message: "Update Success!"

            },{
                type: 'success',
                timer: 2000
            });
        }
      }*/
    });
  });

  $(".scroll").on("click", function( e ) {
    e.preventDefault();
    alert("test");
  });
});
