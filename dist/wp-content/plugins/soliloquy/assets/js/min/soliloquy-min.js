function soliloquyIsMobile(){var e,t=!1;return e=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(e)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0,4)))&&(t=!0),t}function soliloquyYouTubeVids(e,t,i,s,n,o,l){o("#"+n).show().css({display:"block","z-index":"1210"}),player=l,YT.Player&&void 0===soliloquy_youtube[t]&&(soliloquy_youtube[t]=new YT.Player(n,{videoId:t,playerVars:e,events:{onStateChange:soliloquyYouTubeOnStateChange}}))}function soliloquyYouTubeOnStateChange(e){var t=jQuery(e.target.getIframe()).data("soliloquy-slider-id");e.data!==YT.PlayerState.PAUSED&&e.data!==YT.PlayerState.ENDED||soliloquy_slider[t]&&soliloquy_slider[t].getSetting("auto")&&soliloquy_slider[t].startAuto(),e.data!==YT.PlayerState.PLAYING&&e.data!==YT.PlayerState.BUFFERING||soliloquy_slider[t]&&soliloquy_slider[t].stopAuto()}function soliloquyVimeoVids(e,t,i,s,n,o){o("#"+n).show().css({display:"block","z-index":"1210"});var l={};o.each(o("#"+n)[0].attributes,function(e,t){l[t.nodeName]=t.nodeValue}),e.player_id=n,l.src="//player.vimeo.com/video/"+t+"?"+o.param(e),l.frameborder=0,o("#"+n).replaceWith(function(){return o("<iframe />",l).append(o(this).contents())}),soliloquy_vimeo[t]=new Vimeo.Player(o("#"+n)[0],{transparent:!1});var a=o("#"+n).data("soliloquy-slider-id");soliloquy_vimeo[t].on("play",function(){soliloquy_slider[a]&&soliloquy_slider[a].stopAuto()}),soliloquy_vimeo[t].on("pause",function(){soliloquy_slider[a].getSetting("auto")&&soliloquy_slider[a].startAuto()}),soliloquy_vimeo[t].on("ended",function(){soliloquy_slider[a].getSetting("auto")&&soliloquy_slider[a].startAuto()})}function soliloquyVimeoSliderPause(e){var t=jQuery("#"+e).data("soliloquy-slider-id");soliloquy_slider[t]&&soliloquy_slider[t].stopAuto()}function soliloquyVimeoSliderStart(e){var t=jQuery("#"+e).data("soliloquy-slider-id");soliloquy_slider[t]&&soliloquy_slider[t].getSetting("auto")&&soliloquy_slider[t].startAuto()}function soliloquyWistiaVids(e,t,i,s,n,o){if(o("#"+n).show().css({display:"block","z-index":"1210"}),wistiaEmbeds){var l={};o.each(o("#"+n)[0].attributes,function(e,t){l[t.nodeName]=t.nodeValue}),e.container=n,l.src="//fast.wistia.net/embed/iframe/"+t+"?"+o.param(e),l.frameborder=0,o("#"+n).replaceWith(function(){return o("<iframe />",l).addClass("wistia_embed").append(o(this).contents())}),wistiaEmbeds.onFind(function(e){t===e.hashedId()&&(soliloquy_wistia[t]=e,soliloquy_wistia[t].bind("play",function(){var e=o(this.container).data("soliloquy-slider-id");soliloquy_slider[e]&&soliloquy_slider[e].stopAuto()}),soliloquy_wistia[t].bind("pause",function(){var e=o(this.container).data("soliloquy-slider-id");soliloquy_slider[e]&&soliloquy_slider[e].getSetting("auto")&&soliloquy_slider[e].startAuto()}),soliloquy_wistia[t].bind("end",function(){var e=o(this.container).data("soliloquy-slider-id");soliloquy_slider[e]&&soliloquy_slider[e].getSetting("auto")&&soliloquy_slider[e].startAuto()}),e.play())})}}function soliloquyLocalVids(e,t,i,s,n,o){o("#"+n).show().css({display:"block","z-index":"1210"}),o(".soliloquy-id-"+t+" .soliloquy-video-icon").hide();var l={};o.each(o("#"+n)[0].attributes,function(e,t){l[t.nodeName]=t.nodeValue});var a=[];1===e.playpause&&a.push("playpause"),1===e.progress&&a.push("progress"),1===e.current&&a.push("current"),1===e.duration&&a.push("duration"),1===e.volume&&a.push("volume"),1===e.fullscreen&&a.push("fullscreen"),soliloquy_local[t]=o("video#"+n).mediaelementplayer({features:a,success:function(t,i,s){1==e.autoplay&&t.play()},error:function(e,t,i){}})}function soliloquyInitManually(){jQuery(document).ready(function($){var soliloquy_sliders=[];$(".soliloquy-outer-container[data-soliloquy-loaded='0']").each(function(){soliloquy_sliders.push($(".soliloquy-container",$(this)).attr("id").replace(/^\D+/g,""))}),soliloquy_sliders.length>0&&$.post(soliloquy_ajax.ajax,{action:"soliloquy_init_sliders",ajax_nonce:soliloquy_ajax.ajax_nonce,ids:soliloquy_sliders},function(response){"-1"!==response&&"0"!==response&&eval(response)})})}!function(e,t,s,n){var o={mode:"horizontal",slideSelector:"",infiniteLoop:!0,hideControlOnEnd:!1,speed:500,captionSpeed:0,easing:null,slideMargin:0,startSlide:0,randomStart:!1,captions:!1,ticker:!1,tickerHover:!1,adaptiveHeight:!1,adaptiveHeightSpeed:500,video:!1,useCSS:!0,preloadImages:"visible",responsive:!0,slideZIndex:50,wrapperClass:"soliloquy-wrapper",touchEnabled:!0,swipeThreshold:50,oneToOneTouch:!0,preventDefaultSwipeX:!0,preventDefaultSwipeY:!1,ariaLive:!0,ariaHidden:!0,keyboard:!1,pager:!0,pagerType:"full",pagerShortSeparator:" / ",pagerSelector:null,buildPager:null,pagerCustom:null,controls:!0,nextText:"Next",prevText:"Prev",nextSelector:null,prevSelector:null,autoControls:!1,startText:"Start",stopText:"Stop",autoControlsCombine:!1,autoControlsSelector:null,auto:!1,pause:4e3,autoStart:!0,autoDirection:"next",stopAutoOnClick:!1,autoHover:!1,autoDelay:0,autoSlideForOnePage:!1,minSlides:1,maxSlides:1,moveSlides:0,slideWidth:0,shrinkItems:!1,onSliderLoad:function(){return!0},onSlideBefore:function(){return!0},onSlideAfter:function(){return!0},onSlideNext:function(){return!0},onSlidePrev:function(){return!0},onSliderResize:function(){return!0},onAutoChange:function(){return!0}};e.fn.soliloquy=function(n){if(0===this.length)return this;if(this.length>1)return this.each(function(){e(this).soliloquy(n)}),this;var l={},a=this,r=e(t).width(),d=e(t).height(),c=function(){l.settings=e.extend({},o,n),l.settings.slideWidth=parseInt(l.settings.slideWidth),l.children=a.children(l.settings.slideSelector),l.children.length<l.settings.minSlides&&(l.settings.minSlides=l.children.length),l.children.length<l.settings.maxSlides&&(l.settings.maxSlides=l.children.length),l.settings.randomStart&&(l.settings.startSlide=Math.floor(Math.random()*l.children.length)),l.active={index:l.settings.startSlide},l.carousel=l.settings.minSlides>1||l.settings.maxSlides>1,l.carousel&&(l.settings.preloadImages="all"),l.minThreshold=l.settings.minSlides*l.settings.slideWidth+(l.settings.minSlides-1)*l.settings.slideMargin,l.maxThreshold=l.settings.maxSlides*l.settings.slideWidth+(l.settings.maxSlides-1)*l.settings.slideMargin,l.working=!1,l.controls={},l.interval=null,l.animProp="vertical"===l.settings.mode?"top":"left",l.usingCSS=l.settings.useCSS&&"fade"!==l.settings.mode&&function(){for(var e=s.createElement("div"),t=["WebkitPerspective","MozPerspective","OPerspective","msPerspective"],i=0;i<t.length;i++)if(void 0!==e.style[t[i]])return l.cssPrefix=t[i].replace("Perspective","").toLowerCase(),l.animProp="-"+l.cssPrefix+"-transform",!0;return!1}(),"vertical"===l.settings.mode&&(l.settings.maxSlides=l.settings.minSlides),a.data("origStyle",a.attr("style")),a.children(l.settings.slideSelector).each(function(){e(this).data("origStyle",e(this).attr("style"))}),u()},u=function(){var t=l.children.eq(l.settings.startSlide);a.wrap('<div class="'+l.settings.wrapperClass+'"><div class="soliloquy-viewport"></div></div>'),l.viewport=a.parent(),l.settings.ariaLive&&!l.settings.ticker&&l.viewport.attr("aria-live","polite"),l.loader=e('<div class="soliloquy-loading" />'),l.viewport.prepend(l.loader),a.css({width:"horizontal"===l.settings.mode?1e3*l.children.length+215+"%":"auto",position:"relative"}),l.usingCSS&&l.settings.easing?a.css("-"+l.cssPrefix+"-transition-timing-function",l.settings.easing):l.settings.easing||(l.settings.easing="swing"),l.viewport.css({width:"100%",overflow:"hidden",position:"relative"}),l.viewport.parent().css({maxWidth:v()}),l.settings.pager||l.viewport.parent().css({margin:"0 auto 0px"}),l.children.css({float:"horizontal"===l.settings.mode?"left":"none",listStyle:"none",position:"relative"}),l.children.css("width",f()),"horizontal"===l.settings.mode&&l.settings.slideMargin>0&&l.children.css("marginRight",l.settings.slideMargin),"vertical"===l.settings.mode&&l.settings.slideMargin>0&&l.children.css("marginBottom",l.settings.slideMargin),"fade"===l.settings.mode&&(l.children.css({position:"absolute",zIndex:0,display:"none"}),l.children.eq(l.settings.startSlide).css({zIndex:l.settings.slideZIndex,display:"block"})),l.controls.el=e('<div class="soliloquy-controls" />'),l.settings.captions&&E(),l.active.last=l.settings.startSlide===y()-1,l.settings.video&&a.fitVids(),"none"===l.settings.preloadImages?t=null:("all"===l.settings.preloadImages||l.settings.ticker)&&(t=l.children),l.settings.ticker?l.settings.pager=!1:(l.settings.controls&&k(),l.settings.auto&&l.settings.autoControls&&C(),l.settings.pager&&b(),(l.settings.controls||l.settings.autoControls||l.settings.pager)&&l.viewport.after(l.controls.el)),null===t?p():g(t,p)},g=function(t,i){var s=t.find('img:not([src=""]), iframe').length,n=0;0!==s?t.find('img:not([src=""]), iframe').each(function(){e(this).one("load error",function(){++n===s&&i()}).each(function(){(this.complete||""==this.src)&&e(this).trigger("load")})}):i()},p=function(){if(l.settings.infiniteLoop&&"fade"!==l.settings.mode&&!l.settings.ticker){var i="vertical"===l.settings.mode?l.settings.minSlides:l.settings.maxSlides,s=l.children.slice(0,i).clone(!0).addClass("soliloquy-clone"),n=l.children.slice(-i).clone(!0).addClass("soliloquy-clone");l.settings.ariaHidden&&(s.attr("aria-hidden",!0),n.attr("aria-hidden",!0)),a.append(s).prepend(n)}l.loader.remove(),S(),"vertical"===l.settings.mode&&(l.settings.adaptiveHeight=!0),l.viewport.height(h()),a.redrawSlider(),l.settings.onSliderLoad.call(a,l.active.index),l.initialized=!0,l.settings.responsive&&e(t).on("resize",N),l.settings.auto&&l.settings.autoStart&&(y()>1||l.settings.autoSlideForOnePage)&&j(),l.settings.ticker&&O(),l.settings.pager&&I(l.settings.startSlide),l.settings.controls&&H(),l.settings.touchEnabled&&!l.settings.ticker&&F(),l.settings.keyboard&&!l.settings.ticker&&e("body").on("keydown",function(t){if(!e(".soliloquybox-overlay").is(":visible")&&"textarea"!=t.target.type&&"input"!=t.target.type)return 39==t.keyCode?(T(t),!1):37==t.keyCode?(z(t),!1):void 0})},h=function(){var t=0,s=e();if("vertical"===l.settings.mode||l.settings.adaptiveHeight)if(l.carousel){var n=1===l.settings.moveSlides?l.active.index:l.active.index*x();for(s=l.children.eq(n),i=1;i<=l.settings.maxSlides-1;i++)s=n+i>=l.children.length?s.add(l.children.eq(i-1)):s.add(l.children.eq(n+i))}else s=l.children.eq(l.active.index);else s=l.children;return"vertical"===l.settings.mode?(s.each(function(i){t+=e(this).outerHeight()}),l.settings.slideMargin>0&&(t+=l.settings.slideMargin*(l.settings.minSlides-1))):t=Math.max.apply(Math,s.map(function(){return e(this).outerHeight(!1)}).get()),"border-box"===l.viewport.css("box-sizing")?t+=parseFloat(l.viewport.css("padding-top"))+parseFloat(l.viewport.css("padding-bottom"))+parseFloat(l.viewport.css("border-top-width"))+parseFloat(l.viewport.css("border-bottom-width")):"padding-box"===l.viewport.css("box-sizing")&&(t+=parseFloat(l.viewport.css("padding-top"))+parseFloat(l.viewport.css("padding-bottom"))),t},v=function(){var e="100%";return l.settings.slideWidth>0&&(e="horizontal"===l.settings.mode?l.settings.maxSlides*l.settings.slideWidth+(l.settings.maxSlides-1)*l.settings.slideMargin:l.settings.slideWidth),e},f=function(){var e=l.settings.slideWidth,t=l.viewport.width();if(0===l.settings.slideWidth||l.settings.slideWidth>t&&!l.carousel||"vertical"===l.settings.mode)e=t;else if(l.settings.maxSlides>1&&"horizontal"===l.settings.mode){if(t>l.maxThreshold)return e;t<l.minThreshold?e=(t-l.settings.slideMargin*(l.settings.minSlides-1))/l.settings.minSlides:l.settings.shrinkItems&&(e=Math.floor((t+l.settings.slideMargin)/Math.ceil((t+l.settings.slideMargin)/(e+l.settings.slideMargin))-l.settings.slideMargin))}return e},m=function(){var e=1,t=null;return"horizontal"===l.settings.mode&&l.settings.slideWidth>0?l.viewport.width()<l.minThreshold?e=l.settings.minSlides:l.viewport.width()>l.maxThreshold?e=l.settings.maxSlides:(t=l.children.first().width()+l.settings.slideMargin,e=Math.floor((l.viewport.width()+l.settings.slideMargin)/t)||1):"vertical"===l.settings.mode&&(e=l.settings.minSlides),e},y=function(){var e=0,t=0,i=0;if(l.settings.moveSlides>0){if(!l.settings.infiniteLoop){for(;t<l.children.length;)++e,t=i+m(),i+=l.settings.moveSlides<=m()?l.settings.moveSlides:m();return i}e=Math.ceil(l.children.length/x())}else e=Math.ceil(l.children.length/m());return e},x=function(){return l.settings.moveSlides>0&&l.settings.moveSlides<=m()?l.settings.moveSlides:m()},S=function(){var e,t,i;l.children.length>l.settings.maxSlides&&l.active.last&&!l.settings.infiniteLoop?"horizontal"===l.settings.mode?(e=(t=l.children.last()).position(),w(-(e.left-(l.viewport.width()-t.outerWidth())),"reset",0)):"vertical"===l.settings.mode&&(i=l.children.length-l.settings.minSlides,e=l.children.eq(i).position(),w(-e.top,"reset",0)):(e=l.children.eq(l.active.index*x()).position(),l.active.index===y()-1&&(l.active.last=!0),void 0!==e&&("horizontal"===l.settings.mode?w(-e.left,"reset",0):"vertical"===l.settings.mode&&w(-e.top,"reset",0)))},w=function(t,i,s,n){var o,r;l.usingCSS?(r="vertical"===l.settings.mode?"translate3d(0, "+t+"px, 0)":"translate3d("+t+"px, 0, 0)",a.css("-"+l.cssPrefix+"-transition-duration",s/1e3+"s"),"slide"===i?(a.css(l.animProp,r),0!==s?a.on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(t){e(t.target).is(a)&&(a.off("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"),A())}):A()):"reset"===i?a.css(l.animProp,r):"ticker"===i&&(a.css("-"+l.cssPrefix+"-transition-timing-function","linear"),a.css(l.animProp,r),0!==s?a.on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(t){e(t.target).is(a)&&(a.off("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"),w(n.resetValue,"reset",0),Y())}):(w(n.resetValue,"reset",0),Y()))):((o={})[l.animProp]=t,"slide"===i?a.animate(o,s,l.settings.easing,function(){A()}):"reset"===i?a.css(l.animProp,t):"ticker"===i&&a.animate(o,s,"linear",function(){w(n.resetValue,"reset",0),Y()}))},q=function(){for(var t="",i="",s=y(),n=0;n<s;n++)i="",l.settings.buildPager&&e.isFunction(l.settings.buildPager)||l.settings.pagerCustom?(i=l.settings.buildPager(n),l.pagerEl.addClass("soliloquy-custom-pager")):(i=n+1,l.pagerEl.addClass("soliloquy-default-pager")),t+='<div class="soliloquy-pager-item"><a href="" data-slide-index="'+n+'" class="soliloquy-pager-link">'+i+"</a></div>";l.pagerEl.html(t)},b=function(){l.settings.pagerCustom?l.pagerEl=e(l.settings.pagerCustom):(l.pagerEl=e('<div class="soliloquy-pager" />'),l.settings.pagerSelector?e(l.settings.pagerSelector).html(l.pagerEl):l.controls.el.addClass("soliloquy-has-pager").append(l.pagerEl),q()),l.pagerEl.on("click touchend","a",_)},k=function(){l.controls.next=e('<a class="soliloquy-next" role="button" href="" tabindex="0"><span>'+l.settings.nextText+"</span></a>"),l.controls.prev=e('<a class="soliloquy-prev" role="button" href="" tabindex="0"><span>'+l.settings.prevText+"</span></a>"),l.controls.next.on("click touchend",T),l.controls.prev.on("click touchend",z),l.settings.nextSelector&&e(l.settings.nextSelector).append(l.controls.next),l.settings.prevSelector&&e(l.settings.prevSelector).append(l.controls.prev),l.settings.nextSelector||l.settings.prevSelector||(l.controls.directionEl=e('<div class="soliloquy-controls-direction" />'),l.controls.directionEl.append(l.controls.prev).append(l.controls.next),l.controls.el.addClass("soliloquy-has-controls-direction").append(l.controls.directionEl))},C=function(){l.controls.start=e('<div class="soliloquy-controls-auto-item"><a class="soliloquy-start" href="">'+l.settings.startText+"</a></div>"),l.controls.stop=e('<div class="soliloquy-controls-auto-item"><a class="soliloquy-stop" href="">'+l.settings.stopText+"</a></div>"),l.controls.autoEl=e('<div class="soliloquy-controls-auto" />'),l.controls.autoEl.on("click",".soliloquy-start",M),l.controls.autoEl.on("click",".soliloquy-stop",P),l.settings.autoControlsCombine?l.controls.autoEl.append(l.controls.start):l.controls.autoEl.append(l.controls.start).append(l.controls.stop),l.settings.autoControlsSelector?e(l.settings.autoControlsSelector).html(l.controls.autoEl):l.controls.el.addClass("soliloquy-has-controls-auto").append(l.controls.autoEl),D(l.settings.autoStart?"stop":"start")},E=function(){l.children.each(function(t){var i=e(this).find("img:first").attr("title");void 0!==i&&(""+i).length&&e(this).append('<div class="soliloquy-caption"><span>'+i+"</span></div>")})},T=function(e){e.preventDefault(),l.controls.el.hasClass("disabled")||(l.settings.auto&&l.settings.stopAutoOnClick&&a.stopAuto(),a.goToNextSlide())},z=function(e){e.preventDefault(),l.controls.el.hasClass("disabled")||(l.settings.auto&&l.settings.stopAutoOnClick&&a.stopAuto(),a.goToPrevSlide())},M=function(e){a.startAuto(),e.preventDefault()},P=function(e){a.stopAuto(),e.preventDefault()},_=function(t){var i,s;t.preventDefault(),l.controls.el.hasClass("disabled")||(l.settings.auto&&l.settings.stopAutoOnClick&&a.stopAuto(),void 0!==(i=e(t.currentTarget)).attr("data-slide-index")&&(s=parseInt(i.attr("data-slide-index")))!==l.active.index&&a.goToSlide(s))},I=function(t){var i=l.children.length;if("short"===l.settings.pagerType)return l.settings.maxSlides>1&&(i=Math.ceil(l.children.length/l.settings.maxSlides)),void l.pagerEl.html(t+1+l.settings.pagerShortSeparator+i);l.pagerEl.find("a").removeClass("active"),l.pagerEl.each(function(i,s){e(s).find("a").eq(t).addClass("active")})},A=function(){if(l.settings.infiniteLoop){var e="";0===l.active.index?e=l.children.eq(0).position():l.active.index===y()-1&&l.carousel?e=l.children.eq((y()-1)*x()).position():l.active.index===l.children.length-1&&(e=l.children.eq(l.children.length-1).position()),e&&("horizontal"===l.settings.mode?w(-e.left,"reset",0):"vertical"===l.settings.mode&&w(-e.top,"reset",0))}l.working=!1,l.settings.onSlideAfter.call(a,l.children.eq(l.active.index),l.oldIndex,l.active.index)},D=function(e){l.settings.autoControlsCombine?l.controls.autoEl.html(l.controls[e]):(l.controls.autoEl.find("a").removeClass("active"),l.controls.autoEl.find("a:not(.soliloquy-"+e+")").addClass("active"))},H=function(){1===y()?(l.controls.prev.addClass("disabled"),l.controls.next.addClass("disabled")):!l.settings.infiniteLoop&&l.settings.hideControlOnEnd&&(0===l.active.index?(l.controls.prev.addClass("disabled"),l.controls.next.removeClass("disabled")):l.active.index===y()-1?(l.controls.next.addClass("disabled"),l.controls.prev.removeClass("disabled")):(l.controls.prev.removeClass("disabled"),l.controls.next.removeClass("disabled")))},L=function(){a.startAuto()},W=function(){a.stopAuto()},j=function(){l.settings.autoDelay>0?setTimeout(a.startAuto,l.settings.autoDelay):(a.startAuto(),e(t).focus(L).blur(W)),l.settings.autoHover&&a.hover(function(){l.interval&&(a.stopAuto(!0),l.autoPaused=!0)},function(){l.autoPaused&&(a.startAuto(!0),l.autoPaused=null)})},O=function(){var t,i,s,n,o,r,d,c,u=0;"next"===l.settings.autoDirection?a.append(l.children.clone().addClass("soliloquy-clone")):(a.prepend(l.children.clone().addClass("soliloquy-clone")),t=l.children.first().position(),u="horizontal"===l.settings.mode?-t.left:-t.top),w(u,"reset",0),l.settings.pager=!1,l.settings.controls=!1,l.settings.autoControls=!1,l.settings.tickerHover&&(l.usingCSS?(n="horizontal"===l.settings.mode?4:5,l.viewport.hover(function(){i=a.css("-"+l.cssPrefix+"-transform"),s=parseFloat(i.split(",")[n]),w(s,"reset",0)},function(){c=0,l.children.each(function(t){c+="horizontal"===l.settings.mode?e(this).outerWidth(!0):e(this).outerHeight(!0)}),o=l.settings.speed/c,r="horizontal"===l.settings.mode?"left":"top",d=o*(c-Math.abs(parseInt(s))),Y(d)})):l.viewport.hover(function(){a.stop()},function(){c=0,l.children.each(function(t){c+="horizontal"===l.settings.mode?e(this).outerWidth(!0):e(this).outerHeight(!0)}),o=l.settings.speed/c,r="horizontal"===l.settings.mode?"left":"top",d=o*(c-Math.abs(parseInt(a.css(r)))),Y(d)})),Y()},Y=function(e){var t,i,s=e||l.settings.speed,n={left:0,top:0},o={left:0,top:0};"next"===l.settings.autoDirection?n=a.find(".soliloquy-clone").first().position():o=l.children.first().position(),t="horizontal"===l.settings.mode?-n.left:-n.top,i="horizontal"===l.settings.mode?-o.left:-o.top,w(t,"ticker",s,{resetValue:i})},V=function(i){var n=s.activeElement.tagName.toLowerCase();if(null==new RegExp(n,["i"]).exec("input|textarea")&&function(i){var s=e(t),n={top:s.scrollTop(),left:s.scrollLeft()},o=i.offset();return n.right=n.left+s.width(),n.bottom=n.top+s.height(),o.right=o.left+i.outerWidth(),o.bottom=o.top+i.outerHeight(),!(n.right<o.left||n.left>o.right||n.bottom<o.top||n.top>o.bottom)}(a)){if(39===i.keyCode)return T(i),!1;if(37===i.keyCode)return z(i),!1}},F=function(){l.touch={start:{x:0,y:0},end:{x:0,y:0}},l.viewport.on("click",".soliloquy a",function(e){l.viewport.hasClass("click-disabled")&&(e.preventDefault(),l.viewport.removeClass("click-disabled"))})},N=function(i){if(l.initialized)if(l.working)t.setTimeout(N,10);else{var s=e(t).width(),n=e(t).height();r===s&&d===n||(r=s,d=n,a.redrawSlider(),l.settings.onSliderResize.call(a,l.active.index))}},X=function(e){var t=m();l.settings.ariaHidden&&!l.settings.ticker&&(l.children.attr("aria-hidden","true"),l.children.slice(e,e+t).attr("aria-hidden","false"))};return a.goToSlide=function(t,i){var s,n,o,r,d=!0,c=0,u={left:0,top:0},g=null;if(l.oldIndex=l.active.index,l.active.index=function(e){return e<0?l.settings.infiniteLoop?y()-1:l.active.index:e>=y()?l.settings.infiniteLoop?0:l.active.index:e}(t),!l.working&&l.active.index!==l.oldIndex){if(l.working=!0,void 0!==(d=l.settings.onSlideBefore.call(a,l.children.eq(l.active.index),l.oldIndex,l.active.index))&&!d)return l.active.index=l.oldIndex,void(l.working=!1);"next"===i?l.settings.onSlideNext.call(a,l.children.eq(l.active.index),l.oldIndex,l.active.index)||(d=!1):"prev"===i&&(l.settings.onSlidePrev.call(a,l.children.eq(l.active.index),l.oldIndex,l.active.index)||(d=!1)),l.active.last=l.active.index>=y()-1,(l.settings.pager||l.settings.pagerCustom)&&I(l.active.index),l.settings.controls&&H(),"fade"===l.settings.mode?(l.settings.adaptiveHeight&&l.viewport.height()!==h()&&l.viewport.animate({height:h()},l.settings.adaptiveHeightSpeed),l.children.filter(":visible").fadeOut(l.settings.speed).css({zIndex:0}),l.children.eq(l.active.index).css("zIndex",l.settings.slideZIndex+1).fadeIn(l.settings.speed,function(){e(this).css("zIndex",l.settings.slideZIndex),A()})):(l.settings.adaptiveHeight&&l.viewport.height()!==h()&&l.viewport.animate({height:h()},l.settings.adaptiveHeightSpeed),!l.settings.infiniteLoop&&l.carousel&&l.active.last?"horizontal"===l.settings.mode?(u=(g=l.children.eq(l.children.length-1)).position(),c=l.viewport.width()-g.outerWidth()):(s=l.children.length-l.settings.minSlides,u=l.children.eq(s).position()):l.carousel&&l.active.last&&"prev"===i?(n=1===l.settings.moveSlides?l.settings.maxSlides-x():(y()-1)*x()-(l.children.length-l.settings.maxSlides),u=(g=a.children(".soliloquy-clone").eq(n)).position()):"next"===i&&0===l.active.index?(u=a.find("> .soliloquy-clone").eq(l.settings.maxSlides).position(),l.active.last=!1):t>=0&&(r=t*parseInt(x()),u=l.children.eq(r).position()),void 0!==u&&(o="horizontal"===l.settings.mode?-(u.left-c):-u.top,w(o,"slide",l.settings.speed)),l.working=!1),l.settings.ariaHidden&&X(l.active.index*x())}},a.goToNextSlide=function(){if(!e(".soliloquybox-overlay").is(":visible")&&(l.settings.infiniteLoop||!l.active.last)){var t=parseInt(l.active.index)+1;a.goToSlide(t,"next")}},a.goToPrevSlide=function(){if(!e(".soliloquybox-overlay").is(":visible")&&(l.settings.infiniteLoop||0!==l.active.index)&&!0!==l.working){var t=parseInt(l.active.index)-1;a.goToSlide(t,"prev")}},a.startAuto=function(e){l.interval||(l.interval=setInterval(function(){"next"===l.settings.autoDirection?a.goToNextSlide():a.goToPrevSlide()},l.settings.pause),l.settings.onAutoChange.call(a,!0),l.settings.autoControls&&!0!==e&&D("stop"))},a.stopAuto=function(e){l.autoPaused&&(l.autoPaused=!1),l.interval&&(clearInterval(l.interval),l.interval=null,l.settings.onAutoChange.call(a,!1),l.settings.autoControls&&!0!==e&&D("start"))},a.getCurrentSlide=function(){return l.active.index},a.getCurrentSlideElement=function(){return l.children.eq(l.active.index)},a.getSlideElement=function(e){return l.children.eq(e)},a.getSlideCount=function(){return l.children.length},a.isWorking=function(){return l.working},a.redrawSlider=function(){l.children.add(a.find(".soliloquy-clone")).outerWidth(f()),l.viewport.css("height",h()),l.settings.ticker||S(),l.active.last&&(l.active.index=y()-1),l.active.index>=y()&&(l.active.last=!0),l.settings.pager&&!l.settings.pagerCustom&&(q(),I(l.active.index)),l.settings.ariaHidden&&X(l.active.index*x())},a.destroySlider=function(){l.initialized&&(l.initialized=!1,e(".soliloquy-clone",this).remove(),l.children.each(function(){void 0!==e(this).data("origStyle")?e(this).attr("style",e(this).data("origStyle")):e(this).removeAttr("style")}),void 0!==e(this).data("origStyle")?this.attr("style",e(this).data("origStyle")):e(this).removeAttr("style"),e(this).unwrap().unwrap(),l.controls.el&&l.controls.el.remove(),l.controls.next&&l.controls.next.remove(),l.controls.prev&&l.controls.prev.remove(),l.pagerEl&&l.settings.controls&&!l.settings.pagerCustom&&l.pagerEl.remove(),e(".soliloquy-caption",this).remove(),l.controls.autoEl&&l.controls.autoEl.remove(),clearInterval(l.interval),l.settings.responsive&&e(t).off("resize",N),l.settings.keyboardEnabled&&e(s).off("keydown",V),e(t).off("blur",W).off("focus",L))},a.reloadSlider=function(e){void 0!==e&&(n=e),a.destroySlider(),c()},a.getSetting=function(e){return!!l.settings[e]&&l.settings[e]},c(),this}}(jQuery,window,document),function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof exports?module.exports=e:e(jQuery)}(function(e){var t,i,s=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],n="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],o=Array.prototype.slice;if(e.event.fixHooks)for(var l=s.length;l;)e.event.fixHooks[s[--l]]=e.event.mouseHooks;var a=e.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var t=n.length;t;)this.addEventListener(n[--t],r,!1);else this.onmousewheel=r;e.data(this,"mousewheel-line-height",a.getLineHeight(this)),e.data(this,"mousewheel-page-height",a.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var t=n.length;t;)this.removeEventListener(n[--t],r,!1);else this.onmousewheel=null;e.removeData(this,"mousewheel-line-height"),e.removeData(this,"mousewheel-page-height")},getLineHeight:function(t){var i=e(t),s=i["offsetParent"in e.fn?"offsetParent":"parent"]();return s.length||(s=e("body")),parseInt(s.css("fontSize"),10)||parseInt(i.css("fontSize"),10)||16},getPageHeight:function(t){return e(t).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};function r(s){var n,l=s||window.event,r=o.call(arguments,1),u=0,g=0,p=0,h=0,v=0;if((s=e.event.fix(l)).type="mousewheel","detail"in l&&(p=-1*l.detail),"wheelDelta"in l&&(p=l.wheelDelta),"wheelDeltaY"in l&&(p=l.wheelDeltaY),"wheelDeltaX"in l&&(g=-1*l.wheelDeltaX),"axis"in l&&l.axis===l.HORIZONTAL_AXIS&&(g=-1*p,p=0),u=0===p?g:p,"deltaY"in l&&(u=p=-1*l.deltaY),"deltaX"in l&&(g=l.deltaX,0===p&&(u=-1*g)),0!==p||0!==g){if(1===l.deltaMode){var f=e.data(this,"mousewheel-line-height");u*=f,p*=f,g*=f}else if(2===l.deltaMode){var m=e.data(this,"mousewheel-page-height");u*=m,p*=m,g*=m}if(n=Math.max(Math.abs(p),Math.abs(g)),(!i||n<i)&&(i=n,c(l,n)&&(i/=40)),c(l,n)&&(u/=40,g/=40,p/=40),u=Math[u>=1?"floor":"ceil"](u/i),g=Math[g>=1?"floor":"ceil"](g/i),p=Math[p>=1?"floor":"ceil"](p/i),a.settings.normalizeOffset&&this.getBoundingClientRect){var y=this.getBoundingClientRect();h=s.clientX-y.left,v=s.clientY-y.top}return s.deltaX=g,s.deltaY=p,s.deltaFactor=i,s.offsetX=h,s.offsetY=v,s.deltaMode=0,r.unshift(s,u,g,p),t&&clearTimeout(t),t=setTimeout(d,200),(e.event.dispatch||e.event.handle).apply(this,r)}}function d(){i=null}function c(e,t){return a.settings.adjustOldDeltas&&"mousewheel"===e.type&&t%120==0}e.fn.extend({mousewheel:function(e){return e?this.bind("mousewheel",e):this.trigger("mousewheel")},unmousewheel:function(e){return this.unbind("mousewheel",e)}})});