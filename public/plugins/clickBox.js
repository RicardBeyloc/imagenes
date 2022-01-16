$('.clickBox[data-type="selector"]').click(function() {
    var group = $(this).attr('data-group'),
        show = $(this).attr('data-specific');

    $('.clickBox[data-type="selector"][data-group="' + group + '"], .clickBox[data-type="objective"][data-group="' + group + '"]').each(function() {
        $(this).removeClass('selected');
    });
      
    $('.clickBox[data-type="selector"][data-group="' + group + '"][data-specific="' + show + '"], .clickBox[data-type="objective"][data-group="' + group + '"][data-specific="' + show + '"]').addClass('selected');
});

$('.clickBox[data-type="acordion"]').click(function() {
    var group = $(this).attr('data-group'),
        show = $(this).attr('data-specific'),
        hasSelected = $(this).hasClass('selected');

    $('.clickBox[data-type="acordion"][data-group="' + group + '"], .clickBox[data-type="objective"][data-group="' + group + '"]').each(function() {
        $(this).removeClass('selected');
    });
    
    if (!hasSelected) {
        $('.clickBox[data-type="acordion"][data-group="' + group + '"][data-specific="' + show + '"], .clickBox[data-type="objective"][data-group="' + group + '"][data-specific="' + show + '"]').addClass('selected');
    };
});