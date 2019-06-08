      $.colorbox({
        width:"500",
        height: "350",
        inline:true,
        fixed:true,
        onComplete: function(){
          $("#newsletter_form").validate({ submitHandler: submitFrom });
        },
        onClosed:function(){
          $("#logo_landing").fadeOut(0);
        },
        href:"#landing"
      });

      $("#have_account").click(function() {
        $('#cboxClose').click();
      });