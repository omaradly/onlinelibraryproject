

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
 ``   }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
/* skills */
let ourskills = document.querySelector(".skills");
window.onscroll = function() {
	//skills offset top
	let skillsOffsetTop = ourskills.offsetTop;
	//skills outer height
	let skillsOuterHeight = ourskills.offsetHeight;
	//window height
	let windowHeight = this.innerHeight; 
	//scroll Top
	let windowScrollTop = this.pageYOffset;
	if(windowScrollTop > (skillsOffsetTop + skillsOuterHeight -windowHeight)) {
		let allSkillsBox = document.querySelectorAll('.skills .skill-box .skill-progress span');
		allSkillsBox.forEach(skill => {
			skill.style.width = skill.dataset.progress;
		});
	}
}
/*  ================================ start Testimonials =========================== */
var swiper2 = new Swiper('.second-swiper', {
  slidesPerView: 1,
  spaceBetween: 10,
  grabCursor: true,
  loop: true,
  loopFillGroupWithBlank: true,
    pagination: {
      el: '.second-swiper .swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      960: {
        slidesPerView: 5,
        spaceBetween: 30
      },
      720: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      540: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 30
      },
    }
  });

  /*  ================================ end Testimonials =========================== */
 