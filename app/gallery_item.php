<?php
function galleryItem( $id, $title, $screencap_array, $description, $links_array )
{
    ?>
    <div class="galleryItem" id="<?php echo $id; ?>">
        <div class="title"><?php echo $title; ?></div>
        <?php if (isset( $screencap_array )) { ?>
            <div class="screencaps">
                <?php foreach ( $screencap_array as $image ) { ?>
                    <img src="<?php echo $image; ?>" class="thumbnail">
                <?php } ?>
            </div>
        <?php } ?>
        <div class="description"><?php echo $description; ?></div>
        <div class="links">
            <?php if ( isset( $links_array ) ) { ?>
                <div class="section_name">Links</div>
                <ul>
                    <?php foreach ( $links_array as $url => $name ) { ?>
                        <li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php
}