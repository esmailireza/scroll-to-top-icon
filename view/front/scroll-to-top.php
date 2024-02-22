<?php
function scroll_to_top_layout()
{
return '<a id="back2Top" class="top-scroll" title="back to top" href="#"><span>&#8593;</span>
    <i class="ti-arrow-up"></i></a>';
}

add_shortcode('scroll-to-top', scroll_to_top_layout());
