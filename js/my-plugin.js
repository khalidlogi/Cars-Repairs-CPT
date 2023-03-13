jQuery(document).ready(function($) {
    $('.car-type-video').click(function(event) {
        event.preventDefault();
        var video_url = $(this).attr('href');
        var video_id = video_url.match(/(\?v=|\/embed\/)([a-zA-Z0-9_-]+)/)[2];
        var video_embed_url = 'https://www.youtube.com/embed/' + video_id + '?autoplay=1';
        var window_width = $(window).width();
        var window_height = $(window).height();
        var popup_width = window_width * 0.8;
        var popup_height = window_height * 0.8;
        var popup_left = (window_width - popup_width) / 2;
        var popup_top = (window_height - popup_height) / 2;
        window.open(video_embed_url, 'car-type-video-popup', 'width=' + popup_width + ',height=' + popup_height + ',left=' + popup_left + ',top=' + popup_top + ',resizable=yes,scrollbars=yes');
    });
});