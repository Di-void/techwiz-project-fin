$(document).ready(function() {
    $('.showmenu').click(function() {
        $('.nav-menu').toggleClass('visible');
        $('.showmenu').hide();
        $('.cancelmenu').show();
    });

    $('[myid="1"], [myid="2"], [myid="3"], [myid="4"], [myid="5"], [myid="6"]').click(function() {
        $('.nav-menu').toggleClass('visible');
        $('.cancelmenu').hide();
        $('.showmenu').show();
    });
    
    $('.eye').click(function() {
        if($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('.info .password').attr('type', 'text');
        } else {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');  
            $('.info .password').attr('type','password');
        }
    });
});
