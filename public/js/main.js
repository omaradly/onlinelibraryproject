 /* button to top */
 $(window).scroll(()=> {
    
    let scroll = $(window).scrollTop();
  
    if (scroll > 200) {
        $('.btn-up').fadeIn(500);
    }
    else {
        $('.btn-up').fadeOut(500);
    }
  
  });
  
  $(".btn-up").click(()=> {
  
    $("html").animate({ scrollTop: '0' }, 1000);
  
  });
