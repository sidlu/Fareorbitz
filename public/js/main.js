!function(e){"use strict";var t=e(document),a=e(".testimonial-carousel"),n=e(".testimonial-carousel-2"),s=e(".testimonial-carousel-3"),o=e(".testimonial-carousel-4"),i=e("#slider-range"),l=e("#amount"),r=e("#slider-range2"),u=e("#amount2");e(a).length&&e(a).owlCarousel({loop:!0,items:2,nav:!0,dots:!1,smartSpeed:700,autoplay:!1,margin:30,navText:['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],responsive:{0:{items:1},900:{items:2}}}),e(n).length&&e(n).owlCarousel({loop:!0,items:3,nav:!0,dots:!1,smartSpeed:700,autoplay:!0,margin:30,navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:3}}}),e(s).length&&e(s).owlCarousel({loop:!0,items:6,nav:!1,dots:!1,smartSpeed:700,autoplay:!0,margin:30,navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],responsive:{0:{items:2},768:{items:3},992:{items:6}}}),e(o).length&&e(o).owlCarousel({loop:!0,items:1,nav:!1,dots:!1,smartSpeed:700,autoplay:!0,margin:30,navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],responsive:{0:{items:1},768:{items:1},992:{items:1}}}),e(i).length&&e(i).slider({range:!0,min:0,max:1e3,values:[40,800],slide:function(t,a){e(l).val("$"+a.values[0]+" - $"+a.values[1])}}),e(l).val("$"+e(i).slider("values",0)+" - $"+e(i).slider("values",1)),e(r).length&&e(r).slider({range:!0,min:0,max:20,values:[0,20],slide:function(t,a){e(u).val("$"+a.values[0]+" - $"+a.values[1])}}),e(u).val("$"+e(r).slider("values",0)+" - $"+e(r).slider("values",1)),t.on("click",".toggle-menu > li .toggle-menu-icon",function(t){return t.preventDefault(),e(this).closest("li").siblings().removeClass("active").find(".toggle-drop-menu, .dropdown-menu-item").slideUp(200),e(this).closest("li").toggleClass("active").find(".toggle-drop-menu, .dropdown-menu-item").slideToggle(200),!1}),e(".dropdown-btn").on("click",function(t){t.preventDefault(),e(this).next(".dropdown-menu-wrap").slideToggle(300),t.stopPropagation()}),t.on("click",function(t){var a=e(".dropdown-contain");a===t.target||a.has(t.target).length||e(".dropdown-menu-wrap").slideUp(300)})}(jQuery);