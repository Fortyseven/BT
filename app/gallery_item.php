<?php
function galleryItem( $id, $title, $screencap_array, $description, $links_array )
{
    ?>
    <div id="<?php echo $id; ?>" class="gallery_entry">
        <div class="row">
            <div class="gallery_title col-xs-12"><?php echo $title; ?></div>
        </div>
        <div class="row">
            <div class="gallery_description col-xs-12 col-md-6">
                <?php echo $description; ?>
                <?php if ( isset( $links_array ) ) { ?>
                    <div class="">Links</div>
                    <ul>
                        <?php foreach ( $links_array as $url => $name ) { ?>
                            <li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <?php if (isset( $screencap_array )) { ?>
                <div class="col-xs-12 col-md-6">
                    <?php foreach ( $screencap_array as $image ) { ?>
                        <a class="" href="#"><img class="img-responsive pull-right" src="<?php echo $image; ?>"></a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="row">
        <div class="">
        </div>
        </div>
    </div>
    <?php
}