$(document).ready(function ($) {
   
    $('input[type="submit"]').mousedown(function () {
        $(this).css('background', '#2ecc71');
    });
    $('input[type="submit"]').mouseup(function () {
        $(this).css('background', '#1abc9c');
    });

    $('#loginform').click(function () {
        $('.login').fadeToggle('slow');
        $(this).toggleClass('green');
    });

    $('#registrationform').click(function (e) {
        // location.href ="/ForumCW/index.php/register_view/register";
        e.preventDefault();
        $('.register').fadeToggle('slow');
        $(this).toggleClass('green');
    });

    $('#change').click(function () {
        $('.login').fadeToggle('slow');
        $(this).toggleClass('green');
    });



    $('#contact').click(function (e) {
        // location.href ="/ForumCW/index.php/register_view/register";
        e.preventDefault();
        $('.register').fadeToggle('slow');
        $(this).toggleClass('green');
    });

    $(document).mouseup(function (e)
    {

        var container = $(".login");
        var container2 = $(".register");

        if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.hide();
            $('#loginform').removeClass('green');
        }

        if (!container2.is(e.target) && container2.has(e.target).length === 0) {
            container2.hide();
            $('#registrationform').removeClass('green');
        }

    });
});