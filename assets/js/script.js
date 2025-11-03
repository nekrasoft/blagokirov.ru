$(document).ready(function(){

    //nojs
    $("body").removeClass("no-js");

    //------------------------------------------------------------------------//

    //fakelink
    $('a[href="#"]').on('click',function(e){e.preventDefault();});

    //------------------------------------------------------------------------//

    //placeholder
    $('input[placeholder], textarea[placeholder]').placeholder();

    //------------------------------------------------------------------------//

    //tab
    $('.tabs').delegate('li:not(.active)','click',function(){$(this).addClass('active').siblings().removeClass('active').parents('.tab').find('.box').hide().eq($(this).index()).fadeIn(250);});

    $("a.scroll").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });

    $("#block2").hover(function() {
        $('#cover').css('height', $(document).height() + 'px');
        $("#cover").animate({opacity: 'toggle'}, 200, function() {
            if ($('#cover').is(':visible')) {
                var isFocused = false;
                $('#block2').find('input').each(function(i, val){
                    if (! isFocused && ! $(val).val().length) {
                        $(val).focus();
                        isFocused = true;
                        return;
                    }
                });
            } else {
                $('#cover').css('height', 'auto');
            }
        });
    });
    $("a[rel^='prettyPhoto']").prettyPhoto({
        default_width: 1000,
        default_height: 600,
        social_tools: false,
        changepicturecallback: function(){
            /* Called everytime an item is shown/changed */
            $('body').addClass('without_scroll');
        },
        callback: function(){
            /* Called when prettyPhoto is closed */
            $('body').removeClass('without_scroll');
        }
    });
/*
    $('.social-facebook').on('click', function(e) {
        var el = $(e.currentTarget);
        var t = el.data('title'),
            d = el.data('desc'),
            u = 'http://' + location.host + '/' + el.data('href'),
            i = 'http://' + location.host + '/' + el.data('image');
        u=encodeURIComponent(u);
        t=encodeURIComponent(t);
        t=t.replace(/\'/g,'%27');
        i=encodeURIComponent(i);
        d=encodeURIComponent(d);
        d=d.replace(/\'/g,'%27');
        var fbQuery='u='+u;
        if (i!='null'&&i!='') fbQuery='s=100&p[url]='+u+'&p[title]='+t+'&p[summary]='+d+'&p[images][0]='+i;
        window.open('http://www.facebook.com/sharer.php?m2w&'+fbQuery, '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');
        return false;
    });

    $('.social-vk').on('click', function(e) {
        var el = $(e.currentTarget);
        var t = el.data('title'),
            d = el.data('desc'),
            u = 'http://' + location.host + '/' + el.data('href'),
            i = 'http://' + location.host + '/' + el.data('image');
        u=encodeURIComponent(u);
        t=encodeURIComponent(t);
        t=t.replace(/\'/g,'%27');
        i=encodeURIComponent(i);
        d=encodeURIComponent(d);
        d=d.replace(/\'/g,'%27');
        var vkImage='';if(i!='null'&&i!='')vkImage='&image='+i;
        window.open('http://vk.com/share.php?url='+u+'&title='+t+vkImage+'&description='+d+'', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');
        return false;
    });*/
    $('.social-twitter').on('click', function(e) {
        var el = $(e.currentTarget);
        var t = el.data('title'),
            d = el.data('desc'),
            u = 'http://' + location.host + '/' + el.data('href'),
            i = 'http://' + location.host + '/' + el.data('image');
        u=encodeURIComponent(u);
        t=encodeURIComponent(t);
        t=t.replace(/\'/g,'%27');
        window.open('https://twitter.com/intent/tweet?text='+t+'&url='+u+'', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');
        return false;
    });
    $('.social-googleplus').on('click', function(e) {
        var el = $(e.currentTarget);
        var t = el.data('title'),
            d = el.data('desc'),
            u = 'http://' + location.host + '/' + el.data('href'),
            i = 'http://' + location.host + '/' + el.data('image');
        u=encodeURIComponent(u);
        window.open('https://plus.google.com/share?url='+u+'', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');
        return false;
    });



});//document ready