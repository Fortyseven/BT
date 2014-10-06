//var cur_section = null;
//var cur_item = null;
//
//function updateLocation()
//{
//    document.location.hash = (cur_section || "") + "-" + (cur_item || "");
//}
//
//function changeTo( hash )
//{
//    hash = hash.replace( '#', '' );
//    var foo = hash.split( '-' );
//
//    var section = foo[0];
//    var item = foo[1];
//
//    $( "#SectionButtons .button" ).each( function ( n, el )
//    {
//        var el = $( el );
//
//        if ( el.data( 'section-id' ) == section ) {
//            cur_section = section;
//            el.click();
//
//            $( ".section." + cur_section + " .item_buttons .button" ).each( function ( n, el )
//            {
//                var el = $( el );
//                if ( el.data( 'item-id' ) == item ) {
//                    el.click();
//                }
//            } );
//        }
//    } );
//}
//
//function main()
//{
//    $( ".section" ).hide();
//    $( ".item_content .contents" ).hide();
//    $( ".item_content" ).hide();
//
//    /********************/
//    $( "#SectionButtons .button" ).click( function ()
//    {
//        var this_button = $( this );
//        var old_button = $( "#SectionButtons .button.selected" );
//        var section_id = this_button.data( 'section-id' );
//        var old_section_id = old_button.data( 'section-id' );
//
//        if ( this_button.hasClass( 'selected' ) ) return; // already selected, ignore this press
//
//        if ( old_button.length ) old_button.removeClass( "selected" );
//        this_button.addClass( 'selected' );
//
//        cur_section = section_id;
//
//        // Is a section already open? Close it first, before opening the new one
//        if ( old_button.length ) {
//            var old_section = $( ".section." + old_section_id );
//
//            // expand appropriate section
//            old_section.slideUp( 100, function ()
//            {
//                old_section.hide();
//                $( ".section." + section_id ).slideDown( 100 );
//                $( ".section." + section_id + " .item_buttons .button" ).first().click();
//            } );
//        }
//        else {
//            $( ".section." + section_id ).slideDown( 100 );
//            $( ".section." + section_id + " .item_buttons .button" ).first().click();
//        }
//        updateLocation();
//    } );
//
//    /********************/
//    $( ".item_buttons .button" ).click( function ()
//    {
//        var this_button = $( this );
//        var widget_id = this_button.data( 'item-id' );
//        var this_item_content = $( this_button.parents()[1] ).find( ".item_content" );
//
//        $( ".item_content" ).hide();
//        $( ".item_buttons .button" ).removeClass( 'button_selected' );
//
//        this_button.addClass( "button_selected" );
//
//        this_item_content.show();
//        this_item_content.children( ".contents" ).hide();
//        this_item_content.find( "." + widget_id ).show();
//
//        cur_item = widget_id;
//
//        updateLocation();
//    } );
//
//    if ( !document.location.hash ) {
//        // Open Unity first to prime the user's pump
////        $( "#SectionButtons .button" ).first().click();
//    }
//    else {
//        changeTo( document.location.hash );
//    }
//}

//$( document ).ready( main );