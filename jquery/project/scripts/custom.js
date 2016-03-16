/**
 * Created by robertsg on 3/14/2016.
 */
$( document ).ready(function() {

    function updateOutput() {
        $('iframe').contents().find('html').html("<html><head><style type='text/css'>" + $('#cssPanel').val() +
            "</style></head><body>" + $('#htmlPanel').val() + "</body></html>");
        document.getElementById('outputPanel').contentWindow.eval($('#jsPanel').val());
    }

    $('.toggleButton').hover(function() {
        $(this).addClass('highlightedButton');;
    }, function() {
        $(this).removeClass('highlightedButton');
    });

    $('.toggleButton').click(function() {
        $(this).toggleClass('active');
        $(this).removeClass('highlightedButton');

        var panelID = $(this).attr('id') + 'Panel';
        $('#' + panelID).toggleClass('hidden');

        var numberOfActivePanels = 4 - $('.hidden').length;
        $('.panel').width($(window).width() /numberOfActivePanels - 8);
    });

    $('.panel').height($(window).height() - $('header').height() - 50);
    $('.panel').width($(window).width() /2 - 5);

    $('iframe').contents().find('html').html($('#htmlPanel').val());
    updateOutput();

    $('textarea').on('change keyup paste', function(){
        updateOutput();
    });
});