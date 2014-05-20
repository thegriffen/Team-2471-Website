jQuery(function($) {

    $(".topopup").click(function() {
        loadPopup();
        return false;
    });

    /* event for close the popup */
    $("div.close").hover(
        function() {
            $('span.close-tooltip').show();
        },
        function () {
            $('span.close-tooltip').hide();
        }
    );

    $("div.close").click(function() {
        disablePopup();  // function close pop up
    });

    $(this).keyup(function(event) {
        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
            disablePopup();  // function close pop up
        }
    });

    $("div#popup-background").click(function() {
        disablePopup();  // function close pop up
    });

    var popupStatus = 0; // set value

    function loadPopup() {
        if(popupStatus == 0) { // if value is 0, show popup
            $("#popup-wrapper").fadeIn(0500); // fadein popup div
            $("#popup-background").css("opacity", "0.7"); // css opacity, supports IE7, IE8
            $("#popup-background").fadeIn(0001);
            popupStatus = 1; // and set value to 1
        }
    }

    function disablePopup() {
        if(popupStatus == 1) { // if value is 1, close popup
            $("#popup-wrapper").fadeOut("normal");
            $("#popup-background").fadeOut("normal");
            popupStatus = 0;  // and set value to 0
        }
    }
    /************** end: functions. **************/
}); // jQuery End