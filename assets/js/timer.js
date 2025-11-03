
    var cookieTime = $.cookie('__tsx_range');
    var timeParts = {};
    if (cookieTime) {
        timeParts = JSON.parse(cookieTime);
    }
    // выставляем секунды
    var seconds = timeParts.sec || 34;
    // выставляем минуты
    var minutes = timeParts.min || 47;
    // выставляем часы
    var hours = timeParts.hour || 5;
    // выставляем дни
    var days = timeParts.day || 1;

    var sec, min, hour, day;
    sec = parseInt(seconds, 10);
    min = parseInt(minutes, 10);
    hour = parseInt(hours, 10);
    day = parseInt(days, 10);

    if (sec > 59) sec = 59;
    if (min > 59) min = 59;
    if (hour > 23) min = 23;
    if (day > 1) min = 1;

    function refresh()
    {
        secDiv = document.getElementById("secDiv");
        minDiv = document.getElementById("minDiv");
        hourDiv = document.getElementById("hourDiv");
        dayDiv = document.getElementById("dayDiv");
        if (! (secDiv && minDiv && hourDiv && dayDiv)) {
            return;
        }
        secDiv.innerHTML = (sec<=9 ? "0" + sec : sec);
        minDiv.innerHTML = (min<=9 ? "0" + min : min);
        hourDiv.innerHTML = (hour<=9 ? "0" + hour : hour);
        dayDiv.innerHTML = (day<=9 ? "0" + day : day);

        sec--;
        if(sec <= -1) {
            sec = 59;
            min = min-1;
        }
        if(min <= -1) {
            min = 59;
            hour = hour-1;
        }
        if(hour < 0) {
            sec = 0;
            min = 0;
            hour = 0;
            //Отсчет закончен, сброс времени
            sec = 34;
            min = 47;
            hour = 5;
            refresh();
        }
        else {
            setTimeout("refresh()", 1000);
        }

        timeParts.sec = sec;
        timeParts.min = min;
        timeParts.hour = hour;
        timeParts.day = day;
        $.cookie('__tsx_range', JSON.stringify(timeParts));
    }

$(function(){
    refresh();
});
