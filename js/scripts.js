$(document).ready(function() {
  
  /* SLIDER */
  if ( $( "#slides" ).length ) {
     $('#slides').superslides({
      animation: 'fade',
      play: 10000,
      animation_speed: 1000,
     });
  }
  
  $(".promo, .offer-bar").delay(1500).slideToggle(1000,'easeOutExpo');
  $(document).on('click','.promo-trigger',function(e){
    e.preventDefault();
    $(".promo, .offer-bar").slideToggle(1500,'easeOutExpo');	
    
    if($(this).hasClass('active')){
      $(this).removeClass("active");
    }else{
      $(this).addClass("active");
    }    
  });
  
  $('.slider .tagline-wrapper').css("width", $(window).width());
  $(window).resize(function(){
    $('.slider .tagline-wrapper').css("width", $(window).width());
  });   
  
  $('.carousel').carousel({
    interval: 10000
  })

  if($('div#luxury-packages').length > 0){
    /* SPECIAL OFFERS */
    $("div#luxury-packages").owlCarousel({
      autoPlay: 5000,
      slideSpeed : 1500,
      paginationSpeed : 1500,
      navigation : false,
      pagination : true,
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,2],
      navigationText : ["", ""]
    });
  }
  
  if($('div#services').length > 0){
    /* SPECIAL OFFERS */
    $("div#services").owlCarousel({
      autoPlay: 5000,
      slideSpeed : 1500,
      paginationSpeed : 1500,
      navigation : false,
      pagination : true,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2],
      navigationText : ["", ""]
    });
  }

  if($('div#facilities').length > 0){
    /* SPECIAL OFFERS */
    $("div#facilities").owlCarousel({
      autoPlay: 5000,
      slideSpeed : 1500,
      paginationSpeed : 1500,
      navigation : false,
      pagination : true,
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,2],
      navigationText : ["", ""]
    });
  }   
  
  if($('div#testimonial').length > 0){
    $("div#testimonial").owlCarousel({
      //autoPlay: 3000,
      slideSpeed : 1500,
      paginationSpeed : 1500,
      navigation : true,
      pagination : true,
      slideSpeed : 1000,
      paginationSpeed : 400,
      transitionStyle : "fade",
      singleItem : true,
      autoHeight : true,
      navigationText : ["", ""],
      autoPlay : true, 
    });
  }
  
  if($('div#offers').length > 0){
    if ($('div#offers .offer-content').length > 1) {
      $("div#offers").owlCarousel({
        //autoPlay: 3000,
        slideSpeed : 1500,
        paginationSpeed : 1500,
        navigation : true,
        pagination : false,
        slideSpeed : 1000,
        paginationSpeed : 400,
        transitionStyle : "fade",
        singleItem : true,
        autoHeight : false,
        navigationText : ["", ""],
        autoPlay : true, 
      });
    }
  }
  
  if($('div#hotel-photos').length > 0){
    $("div#hotel-photos").owlCarousel({
      //autoPlay: 3000,
      navigation : true,
      pagination : true,
      slideSpeed : 1000,
      paginationSpeed : 400,
      singleItem : true,
      navigationText : ["", ""],
      autoPlay : true, 
    });
  }

  
	/* BOOKING FORM */
  
  $(document).on("click", function (e) {
    var elem = $(e.target);
    if (!elem.hasClass("hasDatepicker") &&
        !elem.hasClass("ui-datepicker") &&
        !elem.hasClass("ui-icon") &&
        !elem.hasClass("ui-datepicker-next") &&
        !elem.hasClass("ui-datepicker-prev") &&
        !$(elem).parents(".ui-datepicker").length) {
        $('#departDate').datepicker('hide');
    }
  });
  
	$("#booking-form").hide();
	
	$(".book-now").click(function(event) {
		var booking = $("#booking-form");
		
		if(booking.is(":visible")) {
			booking.slideUp(350,'easeOutExpo');
		} else {
			booking.slideDown(350,'easeOutExpo');
		}
		
		if($(this).hasClass('closed')){
			$(this).removeClass("closed").addClass("opened");;
			//$(this).addClass("opened");
		}else if($(this).hasClass('opened')){
			$(this).removeClass("opened").addClass("closed");
			//$(this).addClass("closed");
		}
		event.preventDefault();
	});
  
  /* BOOKING CALENDAR */
  var dateToday = new Date();
  $.datepicker.setDefaults({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    minDate: dateToday,
    dateFormat: 'yy-mm-dd',
    showAnim: 'slideDown',
    firstDay: 1
  });
  
  $('.s-arrival, #sp-arrival, #ac-arrival, #r-arrival').datepicker({dateFormat: 'd MM yy', minDate: 0, onSelect: function(selectedDate) { 
        event.preventDefault();
        var minDate = $(this).datepicker('getDate');
        if (minDate) {
              minDate.setDate(minDate.getDate() + 2);
        }
        $('#s-departure, #sp-departure, #ac-departure, #r-departure').datepicker('option', 'minDate', minDate || 2); // Date + 1 or tomorrow by default
        
        var arrival = $(this).val().split(' ');
        var arrday = arrival[1].replace(/^0+/, '');
        
        if(arrday){
          switch(arrday) 
          { 
              case "January" : 
                  arrday = "1"; 
                  break;
              case "February" : 
                  arrday = "2"; 
                  break;
              case "March" : 
                  arrday = "3"; 
                  break;
              case "April" : 
                  arrday = "4"; 
                  break;
              case "May" : 
                  arrday = "5"; 
                  break;
              case "June" : 
                  arrday = "6"; 
                  break;
              case "July" : 
                  arrday = "7"; 
                  break;
              case "August" : 
                  arrday = "8"; 
                  break;
              case "September" : 
                  arrday = "9"; 
                  break;
              case "October" : 
                  arrday = "10"; 
                  break;
              case "November" : 
                  arrday = "11"; 
                  break;
              case "December" : 
                  arrday = "12"; 
                  break;
          }
        }

  }});
  $('#s-departure, #sp-departure, #ac-departure, #r-departure').datepicker({dateFormat: 'd MM yy', minDate: 2, onSelect: function(selectedDate) {
        event.preventDefault();
        var maxDate = $(this).datepicker('getDate');

        if (maxDate) {
          maxDate.setDate(maxDate.getDate() - 2);
        }
        $('.s-arrival, #sp-arrival, #ac-arrival, #r-arrival').datepicker('option', 'maxDate', maxDate); // Date - 1
        
        var departure = $(this).val().split(' ');
        var depday = departure[1].replace(/^0+/, '');
        
        if(depday){
          switch(depday) 
          { 
              case "January" : 
                  depday = "1"; 
                  break;
              case "February" : 
                  depday = "2"; 
                  break;
              case "March" : 
                  depday = "3"; 
                  break;
              case "April" : 
                  depday = "4"; 
                  break;
              case "May" : 
                  depday = "5"; 
                  break;
              case "June" : 
                  depday = "6"; 
                  break;
              case "July" : 
                  depday = "7"; 
                  break;
              case "August" : 
                  depday = "8"; 
                  break;
              case "September" : 
                  depday = "9"; 
                  break;
              case "October" : 
                  depday = "10"; 
                  break;
              case "November" : 
                  depday = "11"; 
                  break;
              case "December" : 
                  depday = "12"; 
                  break;
          }
        }
        

  }});
  
  $('body').on('click', '#reserve', function(e) {
    $("#form-acc-detail").submit();
  });
  $('body').on('click', '#reserve-2', function(e) {
    $("#form-acc-detail-2").submit();
  });

  
  
  /* BEGIN ISOTOPE */
  $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: 1
    }
  });
  
  
  
  // init Isotope  
  $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: 1
    }
  });
  
  $('.grid').imagesLoaded(function(){
    $('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: 1
      }
    });
    $('.grid').isotope('reLayout');
  });
  

      
  $('#filter a').click(function(event){
    event.preventDefault();
    var selector = $(this).attr('data-filter');
    $('.grid').isotope({ filter: selector });
    $('#filter a.selected').removeClass('selected');
    $(this).addClass('selected');
  });
  
  
  $(window).smartresize(function(){
    $('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: 1
      }
    });
  });
  /* END ISOTOPE */
  
  /* MAIN NAV */
  $('.menu-item-has-children').hover(function () {
    clearTimeout($.data(this, 'timer'));
    $(this).addClass('active');
    $(this).children(".sub-menu").stop(true, true).slideDown(200);
  }, function () {
    $.data(this, 'timer', setTimeout($.proxy(function () {
      $(this).children(".sub-menu").stop(true, true).slideUp(200);
      $(this).removeClass('active');
    }, this), 200));
  });
    

  
  $('.image-popup').magnificPopup({
    type:'image',
    mainClass: 'mfp-fade',
    removalDelay: 180,
    preloader: false,
  });
  
  $('.photo-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    mainClass: 'mfp-fade',
    removalDelay: 180,
    gallery:{
      enabled:true
    }
  });
  
  $('.popup-youtube').magnificPopup({
    disableOn: 100,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 180,
    preloader: false,

    fixedContentPos: false
  });
  

  $('.popup-modal').magnificPopup({
    type: 'inline',
    preloader: false,
    mainClass: 'mfp-fade',
    removalDelay: 180,
    modal: true
  });

  /* CENTER BOOTSTRAP MODAL */  
  function reposition() {
      var modal = $(this),
          dialog = modal.find('.modal-dialog');
      modal.css('display', 'block');
      
      // Dividing by two centers the modal exactly, but dividing by three 
      // or four works better for larger screens.
      dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
  }
  // Reposition when a modal is shown
  $('.modal').on('show.bs.modal', reposition);
  // Reposition when the window is resized


  fixedPropertyNav();  
  leaf_mobile_menu();
  equalHeight('.equal-height');
  keepAspectRatio('.acc-gallery-item',1,0.333);
  keepAspectRatio('.acc-gallery-item.landscape',15,5);
  keepAspectRatio('.acc-gallery-item.potrait',1,1.495);
  $(window).resize(function(){
    keepAspectRatio('.acc-gallery-item',1,0.333);
    keepAspectRatio('.acc-gallery-item.landscape',15,5);
    keepAspectRatio('.acc-gallery-item.potrait',1,1.495);
    equalHeight('.equal-height');
    $('.modal:visible').each(reposition);
    $('.acf-map').css({'height':$('#contact-form').outerHeight()});
  });

  $('.acf-map').css({'height':$('#contact-form').outerHeight()});

}());

$(window).load(function() {
  equalHeight('.equal-height');
  fixedPropertyNav();
});
$(window).scroll(function () {
  fixedPropertyNav();
});


function accommodation(){
    $windowWidth = $(window).width();
    $containerWidth = $('#features .container').width();
    $containerOuterWidth = $('#features .container').outerWidth();
    $featuredItemWidth = $('.featured-item-content').outerWidth();
    $accSlidePadding = ($windowWidth - $containerWidth) / 2;
    //alert('window:'+$windowWidth+' | '+'container:'+$containerWidth+'featured:'+$featuredItemWidth);
    $accSlidePadding = $accSlidePadding + $featuredItemWidth + 45;
    //alert($windowWidth+' - '+$containerOuterWidth);
    if($windowWidth <= $containerOuterWidth){
      $('#featured-acc').css({"padding-left": 0, "min-height": $('#leafSlider').height()});
      $('.featured-acc-content').css({"margin-left": 0,"position":"relative"});
    }else{
      $('#featured-acc').css({"padding-left": $accSlidePadding, "min-height": $('#leafSlider').height()});
      $('.featured-acc-content').css({"margin-left": ($containerWidth/2) * -1,"position":"absolute"}); 
    }

}

function leaf_mobile_menu(){
	var $menu = $( "#primary-menu" ).clone();
	$menu.find("ul").removeClass("menu");
	$menu.find("ul").removeAttr("style");
	$menu.find("li").removeAttr("style");
	$menu.find("li").each(function() {
		if($(this).find('> ul').length > 0) {
			 $(this).prepend('<span class="sf-sub-indicator"></span>');
		}
	})
	//$(".header").append('<div id="three-lines-menu"><a href="#">&#9776;</a></div>');
	$(".container > #primary-menu").after("<div id='mobile-menu' class='navbar-collapse collapse navbar-right'>" + $menu.html() + "</div>");

	$('#mobile-menu-trigger').click(function(){
		$('#mobile-menu').stop(true,true).slideToggle(200);
		return false;
	});
	
	$('#mobile-menu .container ul li ul').hide();
	
	$('#mobile-menu .sf-sub-indicator').click(function(){
		$(this).parent().toggleClass('open');
		$(this).parent().find('> ul').stop(true,true).slideToggle(200);
		return false;
	});
}


function getLocalTime(){
	$.ajax({

            type      :"GET",
            url       :"gettime.php",
            dataType  :"html",
            data      :{rand : Math.random()},
            success   :function(html){$(".time .info").html(html);},
            error     :function(xhr,status,errorThrown){alert("what error :"+errorThrown);}

        });
}

function callTime(){
	setInterval("getLocalTime()",60000);
}

function keepAspectRatio(divClass,xratio,yratio){
  var divClass = divClass;
  var xratio = xratio;
  var yration = yratio;
  var divWidth = $(divClass).outerWidth();
  if($(window).width() < 992){
    if(xratio < yratio){
      var resizeHeight = Math.floor((divWidth * xratio) / yratio);
    }else{
      var resizeHeight = Math.floor((divWidth * yratio) / xratio);
    }
  }else{    
    var resizeHeight = Math.floor((divWidth * yratio) / xratio);
  }
  $(divClass).css({'height':resizeHeight});
}

function equalHeight(elementClass){
  var maxHeight = -1;

  $(elementClass).each(function() {
    if ( $(this).height() > maxHeight ) {
        maxHeight = $(this).height();
    }
  });
  
  $(elementClass).each(function() {
    $(this).height(maxHeight);
  });
}

function fixedPropertyNav(){
  var sidebarTopPosition = $("header").outerHeight();

  if ($(window).scrollTop() >= (sidebarTopPosition)){
    $('header').addClass('fixed');
    $('header').css('top','0px');
  }else{
    $('header').removeClass('fixed');
    $('header').css('top','-112px');
  }
}




