jQuery(document).ready(function($){
 
 
    var custom_uploader;
 
 
    $('#upload_image_button').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#upload_image').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });


    var custom_uploader2;
 
 
    $('#upload_image_button2').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader2) {
            custom_uploader2.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader2 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader2.on('select', function() {
            attachment = custom_uploader2.state().get('selection').first().toJSON();
            $('#upload_image2').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader2.open();
 
    });



   var custom_uploader3;
 
 
    $('#upload_image_button3').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader3) {
            custom_uploader3.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader3 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader3.on('select', function() {
            attachment = custom_uploader3.state().get('selection').first().toJSON();
            $('#upload_image3').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader3.open();
 
    });

   var custom_uploader4;
 
 
    $('#upload_image_button4').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader4) {
            custom_uploader4.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader4 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader4.on('select', function() {
            attachment = custom_uploader4.state().get('selection').first().toJSON();
            $('#upload_image4').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader4.open();
 
    });
 
 


  var custom_uploader5;
 
 
    $('#upload_image_button5').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader5) {
            custom_uploader5.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader5 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader5.on('select', function() {
            attachment = custom_uploader5.state().get('selection').first().toJSON();
            $('#upload_image5').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader5.open();
 
    });

  var custom_uploader6;
 
 
    $('#upload_image_button6').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader6) {
            custom_uploader6.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader6 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader6.on('select', function() {
            attachment = custom_uploader6.state().get('selection').first().toJSON();
            $('#upload_image6').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader6.open();
 
    });



  var custom_uploader7;
 
 
    $('#upload_image_button7').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader7) {
            custom_uploader7.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader7 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader7.on('select', function() {
            attachment = custom_uploader7.state().get('selection').first().toJSON();
            $('#upload_image7').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader7.open();
 
    });


  var custom_uploader8;
 
 
    $('#upload_image_button8').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader8) {
            custom_uploader8.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader8 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader8.on('select', function() {
            attachment = custom_uploader8.state().get('selection').first().toJSON();
            $('#upload_image8').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader8.open();
 
    });


  var custom_uploader9;
 
 
    $('#upload_image_button9').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader9) {
            custom_uploader9.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader9 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader9.on('select', function() {
            attachment = custom_uploader9.state().get('selection').first().toJSON();
            $('#upload_image9').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader9.open();
 
    });


  var custom_uploader10;
 
 
    $('#upload_image_button10').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader10) {
            custom_uploader10.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader10 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader10.on('select', function() {
            attachment = custom_uploader10.state().get('selection').first().toJSON();
            $('#upload_image10').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader10.open();
 
    });


});


/* http://www.menucool.com/tabbed-content Free to use. Version 2013.3.13 */

var tabs=function(){var b=function(c,a){var b=new RegExp("(^| )"+a+"( |$)");return b.test(c.className)?true:false},j=function(a,c){if(!b(a,c))if(a.className=="")a.className=c;else a.className+=" "+c},h=function(a,b){var c=new RegExp("(^| )"+b+"( |$)");a.className=a.className.replace(c,"$1");a.className=a.className.replace(/ $/,"")},g=function(c,b){var a=document.getElementsByTagName("html");if(a)a[0].scrollTop+=b},e=function(){var b=window.location.pathname;if(b.indexOf("/")!=-1)b=b.split("/");var a=b[b.length-1]||"root";if(a.indexOf(".")!=-1)a=a.substring(0,a.indexOf("."));if(a>20)a=a.substring(a.length-19);return a},d=e(),c=function(a){this.a=0;this.b=[];this.c=[];this.d=[];this.e=0;this.f(a)};c.prototype={g:function(b){var c=new RegExp(d+b+"=(\\d+)"),a=document.cookie.match(c);return a?a[1]:this.h()},h:function(){for(var a=0,c=this.d.length;a<c;a++)if(b(this.d[a],"selected"))return a;return 0},j:function(d,c){for(var b=d.getAttribute("rel"),a=0;a<this.b.length;a++)if(this.b[a].getAttribute("rel")==b){j(this.b[a].parentNode,"selected");c&&this.e&&this.k(this.a,a)}else h(this.b[a].parentNode,"selected");this.l(b)},k:function(a,b){document.cookie=d+a+"="+b+"; path=/"},l:function(b){for(var a=0;a<this.c.length;a++)this.c[a].style.display=this.c[a].id==b?"block":"none"},m:function(a){if(a.id)for(var b=0;b<this.b.length;b++)if(this.b[b].getAttribute("rel")==a.id)return this.b[b];return a.parentNode.nodeName!="BODY"?this.m(a.parentNode):null},n:function(d,c){var a=document.getElementById(d);if(a){var b=this.m(a);if(b){this.j(b,0);if(!c)setTimeout(function(){a.scrollIntoView();g(a,-120)},0);else setTimeout(function(){window.scrollTo(0,0)},0);return 1}else return 0}},f:function(a){this.a=a.i;this.b=a.getElementsByTagName("a");this.d=a.getElementsByTagName("li");for(var b=0;b<this.b.length;b++)if(this.b[b].getAttribute("rel")){this.c.push(document.getElementById(this.b[b].getAttribute("rel")));var f=this;this.b[b].onclick=function(){f.j(this,1);return false}}var e=a.getAttribute("persist")||"";this.e=e.toLowerCase()=="true"?1:0;var d=window.location.hash;if(d&&d.length>1)if(this.n(d.substring(1),window.location.search.indexOf("noscroll=true")>-1))return;var c=this.e?parseInt(this.g(a.i)):this.h();if(c>=this.b.length)c=0;this.j(this.b[c],0)}};var a=[],i=function(d){var b=false;function a(){if(b)return;b=true;setTimeout(d,4)}if(document.addEventListener)document.addEventListener("DOMContentLoaded",a,false);else if(document.attachEvent){try{var e=window.frameElement!=null}catch(f){}if(document.documentElement.doScroll&&!e){function c(){if(b)return;try{document.documentElement.doScroll("left");a()}catch(d){setTimeout(c,10)}}c()}document.attachEvent("onreadystatechange",function(){document.readyState==="complete"&&a()})}if(window.addEventListener)window.addEventListener("load",a,false);else window.attachEvent&&window.attachEvent("onload",a)},f=function(){for(var e=document.getElementsByTagName("ul"),d=0,f=e.length;d<f;d++)if(b(e[d],"tabs")){e[d].i=a.length;a.push(new c(e[d]))}};i(f);return{open:function(c,d){for(var b=0;b<a.length;b++)a[b].n(c,d)}}}()




function close_pop()
{
document.getElementById('top_block1').style.display='none';
}

function pop()
{
document.getElementById('top_block1').style.display='block';
} 


function close_pop2()
{
document.getElementById('top_block2').style.display='none';
}

function pop2()
{
document.getElementById('top_block2').style.display='block';
} 


function close_pop3()
{
document.getElementById('top_block3').style.display='none';
}

function pop3()
{
document.getElementById('top_block3').style.display='block';
} 



/*
 * Basic jQuery Slider plug-in v.1.3
 *
 * http://www.basic-slider.com
 *
 * Authored by John Cobb
 * http://www.johncobb.name
 * @john0514
 *
 * Copyright 2011, John Cobb
 * License: GNU General Public License, version 3 (GPL-3.0)
 * http://www.opensource.org/licenses/gpl-3.0.html
 *
 */

;(function($) {

    "use strict";

    $.fn.bjqs = function(o) {
        
        // slider default settings
        var defaults        = {

            // w + h to enforce consistency
            width           : 700,
            height          : 300,

            // transition valuess
            animtype        : 'fade',
            animduration    : 450,      // length of transition
            animspeed       : 4000,     // delay between transitions
            automatic       : true,     // enable/disable automatic slide rotation

            // control and marker configuration
            showcontrols    : true,     // enable/disable next + previous UI elements
            centercontrols  : true,     // vertically center controls
            nexttext        : '',   // text/html inside next UI element
            prevtext        : '',   // text/html inside previous UI element
            showmarkers     : true,     // enable/disable individual slide UI markers
            centermarkers   : true,     // horizontally center markers

            // interaction values
            keyboardnav     : true,     // enable/disable keyboard navigation
            hoverpause      : true,     // enable/disable pause slides on hover

            // presentational options
            usecaptions     : true,     // enable/disable captions using img title attribute
            randomstart     : false,     // start from a random slide
            responsive      : false     // enable responsive behaviour

        };

        // create settings from defauls and user options
        var settings        = $.extend({}, defaults, o);

        // slider elements
        var $wrapper        = this,
            $slider         = $wrapper.find('ul.bjqs'),
            $slides         = $slider.children('li'),

            // control elements
            $c_wrapper      = null,
            $c_fwd          = null,
            $c_prev         = null,

            // marker elements
            $m_wrapper      = null,
            $m_markers      = null,

            // elements for slide animation
            $canvas         = null,
            $clone_first    = null,
            $clone_last     = null;

        // state management object
        var state           = {
            slidecount      : $slides.length,   // total number of slides
            animating       : false,            // bool: is transition is progress
            paused          : false,            // bool: is the slider paused
            currentslide    : 1,                // current slide being viewed (not 0 based)
            nextslide       : 0,                // slide to view next (not 0 based)
            currentindex    : 0,                // current slide being viewed (0 based)
            nextindex       : 0,                // slide to view next (0 based)
            interval        : null              // interval for automatic rotation
        };

        var responsive      = {
            width           : null,
            height          : null,
            ratio           : null
        };

        // helpful variables
        var vars            = {
            fwd             : 'forward',
            prev            : 'previous'
        };
            
        // run through options and initialise settings
        var init = function() {

            // differentiate slider li from content li
            $slides.addClass('bjqs-slide');

            // conf dimensions, responsive or static
            if( settings.responsive ){
                conf_responsive();
            }
            else{
                conf_static();
            }

            // configurations only avaliable if more than 1 slide
            if( state.slidecount > 1 ){

                // enable random start
                if (settings.randomstart){
                    conf_random();
                }

                // create and show controls
                if( settings.showcontrols ){
                    conf_controls();
                }

                // create and show markers
                if( settings.showmarkers ){
                    conf_markers();
                }

                // enable slidenumboard navigation
                if( settings.keyboardnav ){
                    conf_keynav();
                }

                // enable pause on hover
                if (settings.hoverpause && settings.automatic){
                    conf_hoverpause();
                }

                // conf slide animation
                if (settings.animtype === 'slide'){
                    conf_slide();
                }

            } else {
                // Stop automatic animation, because we only have one slide! 
                settings.automatic = false;
            }

            if(settings.usecaptions){
                conf_captions();
            }

            // TODO: need to accomodate random start for slide transition setting
            if(settings.animtype === 'slide' && !settings.randomstart){
                state.currentindex = 1;
                state.currentslide = 2;
            }

            // slide components are hidden by default, show them now
            $slider.show();
            $slides.eq(state.currentindex).show();

            // Finally, if automatic is set to true, kick off the interval
            if(settings.automatic){
                state.interval = setInterval(function () {
                    go(vars.fwd, false);
                }, settings.animspeed);
            }

        };

        var conf_responsive = function() {

            responsive.width    = $wrapper.outerWidth();
            responsive.ratio    = responsive.width/settings.width,
            responsive.height   = settings.height * responsive.ratio;

            if(settings.animtype === 'fade'){

                // initial setup
                $slides.css({
                    'height'        : settings.height,
                    'width'         : '100%'
                });
                $slides.children('img').css({
                    'height'        : settings.height,
                    'width'         : '100%'
                });
                $slider.css({
                    'height'        : settings.height,
                    'width'         : '100%'
                });
                $wrapper.css({
                    'height'        : settings.height,
                    'max-width'     : settings.width,
                    'position'      : 'relative'
                });

                if(responsive.width < settings.width){

                    $slides.css({
                        'height'        : responsive.height
                    });
                    $slides.children('img').css({
                        'height'        : responsive.height
                    });
                    $slider.css({
                        'height'        : responsive.height
                    });
                    $wrapper.css({
                        'height'        : responsive.height
                    });

                }

                $(window).resize(function() {

                    // calculate and update dimensions
                    responsive.width    = $wrapper.outerWidth();
                    responsive.ratio    = responsive.width/settings.width,
                    responsive.height   = settings.height * responsive.ratio;

                    $slides.css({
                        'height'        : responsive.height
                    });
                    $slides.children('img').css({
                        'height'        : responsive.height
                    });
                    $slider.css({
                        'height'        : responsive.height
                    });
                    $wrapper.css({
                        'height'        : responsive.height
                    });

                });

            }

            if(settings.animtype === 'slide'){

                // initial setup
                $slides.css({
                    'height'        : settings.height,
                    'width'         : settings.width
                });
                $slides.children('img').css({
                    'height'        : settings.height,
                    'width'         : settings.width
                });
                $slider.css({
                    'height'        : settings.height,
                    'width'         : settings.width * settings.slidecount
                });
                $wrapper.css({
                    'height'        : settings.height,
                    'max-width'     : settings.width,
                    'position'      : 'relative'
                });

                if(responsive.width < settings.width){

                    $slides.css({
                        'height'        : responsive.height
                    });
                    $slides.children('img').css({
                        'height'        : responsive.height
                    });
                    $slider.css({
                        'height'        : responsive.height
                    });
                    $wrapper.css({
                        'height'        : responsive.height
                    });

                }

                $(window).resize(function() {

                    // calculate and update dimensions
                    responsive.width    = $wrapper.outerWidth(),
                    responsive.ratio    = responsive.width/settings.width,
                    responsive.height   = settings.height * responsive.ratio;

                    $slides.css({
                        'height'        : responsive.height,
                        'width'         : responsive.width
                    });
                    $slides.children('img').css({
                        'height'        : responsive.height,
                        'width'         : responsive.width
                    });
                    $slider.css({
                        'height'        : responsive.height,
                        'width'         : responsive.width * settings.slidecount
                    });
                    $wrapper.css({
                        'height'        : responsive.height
                    });
                    $canvas.css({
                        'height'        : responsive.height,
                        'width'         : responsive.width
                    });

                    resize_complete(function(){
                        go(false,state.currentslide);
                    }, 200, "some unique string");

                });

            }

        };

        var resize_complete = (function () {
            
            var timers = {};
            
            return function (callback, ms, uniqueId) {
                if (!uniqueId) {
                    uniqueId = "Don't call this twice without a uniqueId";
                }
                if (timers[uniqueId]) {
                    clearTimeout (timers[uniqueId]);
                }
                timers[uniqueId] = setTimeout(callback, ms);
            };

        })();

        // enforce fixed sizing on slides, slider and wrapper
        var conf_static = function() {

            $slides.css({
                'height'    : settings.height,
                'width'     : settings.width
            });
            $slider.css({
                'height'    : settings.height,
                'width'     : settings.width
            });
            $wrapper.css({
                'height'    : settings.height,
                'width'     : settings.width,
                'position'  : 'relative'
            });

        };

        var conf_slide = function() {

            // create two extra elements which are clones of the first and last slides
            $clone_first    = $slides.eq(0).clone();
            $clone_last     = $slides.eq(state.slidecount-1).clone();

            // add them to the DOM where we need them
            $clone_first.attr({'data-clone' : 'last', 'data-slide' : 0}).appendTo($slider).show();
            $clone_last.attr({'data-clone' : 'first', 'data-slide' : 0}).prependTo($slider).show();

            // update the elements object
            $slides             = $slider.children('li');
            state.slidecount    = $slides.length;

            // create a 'canvas' element which is neccessary for the slide animation to work
            $canvas = $('<div class="bjqs-wrapper"></div>');

            // if the slider is responsive && the calculated width is less than the max width
            if(settings.responsive && (responsive.width < settings.width)){

                $canvas.css({
                    'width'     : responsive.width,
                    'height'    : responsive.height,
                    'overflow'  : 'hidden',
                    'position'  : 'relative'
                });

                // update the dimensions to the slider to accomodate all the slides side by side
                $slider.css({
                    'width'     : responsive.width * (state.slidecount + 2),
                    'left'      : -responsive.width * state.currentslide
                });

            }
            else {

                $canvas.css({
                    'width'     : settings.width,
                    'height'    : settings.height,
                    'overflow'  : 'hidden',
                    'position'  : 'relative'
                });

                // update the dimensions to the slider to accomodate all the slides side by side
                $slider.css({
                    'width'     : settings.width * (state.slidecount + 2),
                    'left'      : -settings.width * state.currentslide
                });

            }

            // add some inline styles which will align our slides for left-right sliding
            $slides.css({
                'float'         : 'left',
                'position'      : 'relative',
                'display'       : 'list-item'
            });

            // 'everything.. in it's right place'
            $canvas.prependTo($wrapper);
            $slider.appendTo($canvas);

        };

        var conf_controls = function() {

            // create the elements for the controls
            $c_wrapper  = $('<ul class="bjqs-controls"></ul>');
            $c_fwd      = $('<li class="bjqs-next"><a href="#" data-direction="'+ vars.fwd +'">' + settings.nexttext + '</a></li>');
            $c_prev     = $('<li class="bjqs-prev"><a href="#" data-direction="'+ vars.prev +'">' + settings.prevtext + '</a></li>');

            // bind click events
            $c_wrapper.on('click','a',function(e){

                e.preventDefault();
                var direction = $(this).attr('data-direction');

                if(!state.animating){

                    if(direction === vars.fwd){
                        go(vars.fwd,false);
                    }

                    if(direction === vars.prev){
                        go(vars.prev,false);
                    }

                }

            });

            // put 'em all together
            $c_prev.appendTo($c_wrapper);
            $c_fwd.appendTo($c_wrapper);
            $c_wrapper.appendTo($wrapper);

            // vertically center the controls
            if (settings.centercontrols) {

                $c_wrapper.addClass('v-centered');

                // calculate offset % for vertical positioning
                var offset_px   = ($wrapper.height() - $c_fwd.children('a').outerHeight()) / 2,
                    ratio       = (offset_px / settings.height) * 100,
                    offset      = ratio + '%';

                $c_fwd.find('a').css('top', offset);
                $c_prev.find('a').css('top', offset);

            }

        };

        var conf_markers = function() {

            // create a wrapper for our markers
            $m_wrapper = $('<ol class="bjqs-markers"></ol>');

            // for every slide, create a marker
            $.each($slides, function(key, slide){

                var slidenum    = key + 1,
                    gotoslide   = key + 1;
                
                if(settings.animtype === 'slide'){
                    // + 2 to account for clones
                    gotoslide = key + 2;
                }

                var marker = $('<li><a href="#">'+ slidenum +'</a></li>');

                // set the first marker to be active
                if(slidenum === state.currentslide){ marker.addClass('active-marker'); }

                // bind the click event
                marker.on('click','a',function(e){
                    e.preventDefault();
                    if(!state.animating && state.currentslide !== gotoslide){
                        go(false,gotoslide);
                    }
                });

                // add the marker to the wrapper
                marker.appendTo($m_wrapper);

            });

            $m_wrapper.appendTo($wrapper);
            $m_markers = $m_wrapper.find('li');

            // center the markers
            if (settings.centermarkers) {
                $m_wrapper.addClass('h-centered');
                var offset = (settings.width - $m_wrapper.width()) / 2;
                $m_wrapper.css('left', offset);
            }

        };

        var conf_keynav = function() {

            $(document).keyup(function (event) {

                if (!state.paused) {
                    clearInterval(state.interval);
                    state.paused = true;
                }

                if (!state.animating) {
                    if (event.keyCode === 39) {
                        event.preventDefault();
                        go(vars.fwd, false);
                    } else if (event.keyCode === 37) {
                        event.preventDefault();
                        go(vars.prev, false);
                    }
                }

                if (state.paused && settings.automatic) {
                    state.interval = setInterval(function () {
                        go(vars.fwd);
                    }, settings.animspeed);
                    state.paused = false;
                }

            });

        };

        var conf_hoverpause = function() {

            $wrapper.hover(function () {
                if (!state.paused) {
                    clearInterval(state.interval);
                    state.paused = true;
                }
            }, function () {
                if (state.paused) {
                    state.interval = setInterval(function () {
                        go(vars.fwd, false);
                    }, settings.animspeed);
                    state.paused = false;
                }
            });

        };

        var conf_captions = function() {

            $.each($slides, function (key, slide) {

                var caption = $(slide).children('img:first-child').attr('title');

                // Account for images wrapped in links
                if(!caption){
                    caption = $(slide).children('a').find('img:first-child').attr('title');
                }

                if (caption) {
                    caption = $('<p class="bjqs-caption">' + caption + '</p>');
                    caption.appendTo($(slide));
                }

            });

        };

        var conf_random = function() {

            var rand            = Math.floor(Math.random() * state.slidecount) + 1;
            state.currentslide  = rand;
            state.currentindex  = rand-1;

        };

        var set_next = function(direction) {

            if(direction === vars.fwd){
                
                if($slides.eq(state.currentindex).next().length){
                    state.nextindex = state.currentindex + 1;
                    state.nextslide = state.currentslide + 1;
                }
                else{
                    state.nextindex = 0;
                    state.nextslide = 1;
                }

            }
            else{

                if($slides.eq(state.currentindex).prev().length){
                    state.nextindex = state.currentindex - 1;
                    state.nextslide = state.currentslide - 1;
                }
                else{
                    state.nextindex = state.slidecount - 1;
                    state.nextslide = state.slidecount;
                }

            }

        };

        var go = function(direction, position) {

            // only if we're not already doing things
            if(!state.animating){

                // doing things
                state.animating = true;

                if(position){
                    state.nextslide = position;
                    state.nextindex = position-1;
                }
                else{
                    set_next(direction);
                }

                // fade animation
                if(settings.animtype === 'fade'){

                    if(settings.showmarkers){
                        $m_markers.removeClass('active-marker');
                        $m_markers.eq(state.nextindex).addClass('active-marker');
                    }

                    // fade out current
                    $slides.eq(state.currentindex).fadeOut(settings.animduration);
                    // fade in next
                    $slides.eq(state.nextindex).fadeIn(settings.animduration, function(){

                        // update state variables
                        state.animating = false;
                        state.currentslide = state.nextslide;
                        state.currentindex = state.nextindex;

                    });

                }

                // slide animation
                if(settings.animtype === 'slide'){

                    if(settings.showmarkers){
                        
                        var markerindex = state.nextindex-1;

                        if(markerindex === state.slidecount-2){
                            markerindex = 0;
                        }
                        else if(markerindex === -1){
                            markerindex = state.slidecount-3;
                        }

                        $m_markers.removeClass('active-marker');
                        $m_markers.eq(markerindex).addClass('active-marker');
                    }

                    // if the slider is responsive && the calculated width is less than the max width
                    if(settings.responsive && ( responsive.width < settings.width ) ){
                        state.slidewidth = responsive.width;
                    }
                    else{
                        state.slidewidth = settings.width;
                    }

                    $slider.animate({'left': -state.nextindex * state.slidewidth }, settings.animduration, function(){

                        state.currentslide = state.nextslide;
                        state.currentindex = state.nextindex;

                        // is the current slide a clone?
                        if($slides.eq(state.currentindex).attr('data-clone') === 'last'){

                            // affirmative, at the last slide (clone of first)
                            $slider.css({'left': -state.slidewidth });
                            state.currentslide = 2;
                            state.currentindex = 1;

                        }
                        else if($slides.eq(state.currentindex).attr('data-clone') === 'first'){

                            // affirmative, at the fist slide (clone of last)
                            $slider.css({'left': -state.slidewidth *(state.slidecount - 2)});
                            state.currentslide = state.slidecount - 1;
                            state.currentindex = state.slidecount - 2;

                        }

                        state.animating = false;

                    });

                }

            }

        };

        // lets get the party started :)
        init();

    };

})(jQuery);