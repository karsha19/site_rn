<!-- Image slideshow -->
    <div id="slideshow" class="lpane">
        <?php
            //XXX show loading data.. 
            if($show_slideshow){
                @include('./php/cache/slideshow.php');

                // XXX: add limit for images to be loaded 
                function print_slide(&$image, $index){
                        echo("<img src=\"images/slideshow/".$image."\" alt=\"Slideshow Image ".$index."\" />");
                }

                array_walk($slides,'print_slide');
            }
        ?>
    </div> <!-- /slideshow -->
