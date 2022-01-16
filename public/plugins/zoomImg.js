const zoomImg_close = () => {
    $('body').removeClass('blockScroll');
    $('#zoomImg').empty();
};

const zoomImg_exec = () => {
    $('body').append('<div id="zoomImg"></div>');

    $('.zoom-it').click(function() {        
        switch(this.tagName) {
            case 'DIV':
                var imgUrl = $(this).attr('style').split("background-image: url('")[1].split("')")[0],
                    imgAlt = $(this).attr('title');
            
                break;
                
            case 'A':
                var imgUrl = $(this).attr('data-src'),
                    imgAlt = 'video';
            
                break;
            
            default:
                var imgUrl = $(this).attr('src'),
                    imgAlt = $(this).attr('alt');
                    
                break;
        };
    
        var structure = '';
        
        structure += '<div id="zoomImg-inner">';
        
        if (imgAlt === 'video') {
            structure += '<video controls class="zoomImg-noclick"><source src="' + imgUrl + '" type="video/mp4"/></video>';     
        } else if (typeof imgAlt !== typeof undefined && imgAlt !== false) { 
            structure += '<img src="' + imgUrl + '" class="zoomImg-noclick"/>';      
        } else {
            structure += '<img src="' + imgUrl + '" alt="' + imgAlt + '" class="zoomImg-noclick"/>';
        };
        
        structure += '<span class="is-pointer"><i class="fas fa-times"></i></span>';
        structure += '</div>';
    
        zoomImg_close();
        $('body').addClass('blockScroll');
        $('#zoomImg').append(structure);

        $('#zoomImg-inner').click(function(e) {
            if (e.originalEvent.target.className.indexOf('zoomImg-noclick')) {
                zoomImg_close();
            }
        });
    });
};

$(() => {
    zoomImg_exec();
});