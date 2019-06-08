$(document).ready(function(){
	 scrollToTop();
	$(window).load(function(){
	
	$("#balm-slider").removeClass("loading");

    $("#balm-slider").cycle({ 
		fx:     'scrollLeft', 
		speed:  'slow', 
		timeout: 0, 
		next:   '#balm-slider-right', 
		prev:   '#balm-slider-left'  });
		
		
	$("#slider").removeClass("loading");

	$("#slider").cycle({ pager: '#nav' });

	});
	
	$(".optional-info").click(function(){
  $(".optional").toggle();
  $(".optional-info img").toggle();
	});	
	
	$(".optional-info").hover(function(){
  $(".optional-info img").toggle();
	});
	
	
    $(".accordion1").accordion({
    	heightStyle: "content",
        collapsible: false
    });


  $("#tabs a").click(function(){
    rel = $(this).attr("rel");
    if ($(this).hasClass("current")) {
      return false;
    }
    $("#tabs a").removeClass('current');
    $(this).addClass('current');
    $(".hidden").fadeOut(400);
    $("#"+rel).delay(400).fadeIn(400);
  });
  
	$("#distributor_form").validate({ submitHandler: submitFrom });
	
	$("#contact_form").validate({ submitHandler: submitFrom2 });
	
	$("#purchase_form").validate({ submitHandler: submitFrom3 });
	

     $("#grooming_slider").cycle({ prev: "#prev", next: "#next", timeout: 0, after: onAfter });     
	  
	$("#contact_left_details a").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#contact_left_details a span").fadeOut();		
	});

	$("#contact_tabs a").click(function(){
		rel = $(this).attr("rel");
		if ($(this).hasClass("current")) {
			return false;
		}
		$("#contact_tabs a").removeClass('current');
		$(this).addClass('current');
		$("iframe").fadeOut(400);
		$("#"+rel).delay(200).fadeIn(400);
	});

	
	$("#team-image a").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#team-image a span").fadeOut();		
	});
	
	$("#press-image a").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#press-image a span").fadeOut();		
	});
	
	$(".press-1").colorbox({rel:'press-1'});
	$(".press-2").colorbox({rel:'press-2'});
	$(".press-3").colorbox({rel:'press-3'});
	$(".press-4").colorbox({rel:'press-4'});
	$(".press-5").colorbox({rel:'press-5'});
	$(".press-6").colorbox({rel:'press-6'});
	
	$("#gallery li").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#gallery li span").fadeOut();		
	});

	$("#reunion-gallery li").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#reunion-gallery li span").fadeOut();		
	});

	
	
	$("#events li").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#events li span").fadeOut();		
	});
	
	$("#event-picture a").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#event-picture a span").fadeOut();		
	});

	$(".gallery-album").colorbox({rel:'gallery-album'});
	$(".inaugural-event").colorbox({rel:'inaugural-event'});
	$(".JB-Petit-Fun-Fair").colorbox({rel:'JB-Petit-Fun-Fair'});
	$(".One-Billion-Rising").colorbox({rel:'One-Billion-Rising'});
	$(".Ability-Unlimited").colorbox({rel:'Ability-Unlimited'});
	$(".group2").colorbox({rel:'group2'});

	$("#events li a").colorbox({fixed:true});
	
	$("#cboxTitle").colorbox({fixed:true});

	$("select").selectBox();

	
	
	$("#news li").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#news li span").fadeOut();		
	});


	$("#news li a").colorbox({fixed:true});
	
	
	$("#event_albums li").hover(function(){
		$(this).find('span').fadeIn();
	}, function(){
		$("#event_albums li span").fadeOut();		
	});


	$("#event_albums li a").colorbox({fixed:true});
	
	$("#cboxTitle").colorbox({fixed:true});

	$("select").selectBox();

	    $("#team a").click(function(){
        if ($(this).hasClass("no_action")) {
          return false;
        }
        if ($(this).hasClass("current_team")) {
          $("#team2 a").removeClass("current_team2");
          $("#team a").removeClass("current_team");
          $("#team_details2").slideUp(400);
          $("#team_details").slideUp(400);
          $(".hidden1").fadeOut(600);
          $(".hidden2").fadeOut(600);
          return false;
        }
        rel = $(this).attr("rel");
        $(".hidden1").fadeOut(600);
          $(".hidden2").fadeOut(600);
        $("#"+rel).fadeIn(900);
          $("#team2 a").removeClass("current_team2");
          $("#team a").removeClass("current_team");
        $(this).addClass("current_team");
          $("#team_details2").slideUp(400);
          $("#team_details").slideUp(400);
        $("#team_details").slideDown(400);
    });

    $(".arrow_team").click(function(){
          $("#team a").removeClass("current_team");
          $("#team_details").slideUp(400);
          $(".hidden1").fadeOut(600);
    });
	

	
    $("#team2 a").click(function(){
        if ($(this).hasClass("no_action")) {
          return false;
        }
        if ($(this).hasClass("current_team2")) {
          $("#team a").removeClass("current_team");
          $("#team2 a").removeClass("current_team2");
          $("#team_details").slideUp(400);
          $("#team_details2").slideUp(400);
          $(".hidden2").fadeOut(600);
		  $(".hidden1").fadeOut(600);
          return false;
        }
        rel = $(this).attr("rel");
        $(".hidden2").fadeOut(600);
        $(".hidden1").fadeOut(600);
        $("#"+rel).fadeIn(900);
          $("#team a").removeClass("current_team");
          $("#team2 a").removeClass("current_team2");
        $(this).addClass("current_team2");
          $("#team_details").slideUp(400);
          $("#team_details2").slideUp(400);
        $("#team_details2").slideDown(400);
    });

    $(".arrow_team2").click(function(){
          $("#team2 a").removeClass("current_team2");
          $("#team_details2").slideUp(400);
          $(".hidden2").fadeOut(600);
    });
});


// call back to remove buttons on first and last slide / adjust height of container
function onAfter(curr, next, opts, fwd) {
    var index = opts.currSlide;
    $('#prev')[index == 0 ? 'hide' : 'show']();
    $('#next')[index == opts.slideCount - 1 ? 'hide' : 'show']();
}

function submitFrom(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('SENDING ...');
  //console.log(formData);
  $.post("form_submit_distributor.php",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('MESSAGE SENT');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
	  $(location).attr('href','distributors-enquiry-submitted.php');
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}


function submitFrom2(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('SENDING ...');
  //console.log(formData);
  $.post("form_submit_contact.php",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('MESSAGE SENT');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
	  $(location).attr('href','contact-enquiry-submitted.php');
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}


function submitFrom3(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('PLACING ORDER');
  //console.log(formData);
  $.post("form_submit_purchase.php",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('ORDER PLACED');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
	  $( "#franchise_header" ).removeClass( "hidden" )
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}


function scrollToTop(){
	    var offset = 350;
    var duration = 300;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.scroll-up').fadeIn(duration);
        } else {
            $('.scroll-up').fadeOut(duration);
        }
    });

    $('.scroll-up').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
}