function main()
{
//    $( ".section .content" ).hide();
    $( ".section" ).hide();
    $( ".menu_content .contents" ).hide();
    $( ".menu_content" ).hide();

    //TODO: ADD CLICK-TO FUNCTION TO ALLOW HARD LINKING TO PAGES

    /********************/
    $( "#SectionButtons .button" ).click( function ()
    {
        var this_button = $( this );
        var old_button = $( "#SectionButtons .button.selected" );
        var section_id = this_button.data( 'section-id' );
        var old_section_id = old_button.data( 'section-id' );

        if ( this_button.hasClass( 'selected' ) ) return; // already selected, ignore this press

        if ( old_button.length ) old_button.removeClass( "selected" );
        this_button.addClass( 'selected' );

        // Is a section already open? Close it first, before opening the new one
        if ( old_button.length ) {
            var old_section = $( ".section." + old_section_id );

            // expand appropriate section
            old_section.slideUp( 100, function ()
            {
                old_section.hide();
                $( ".section." + section_id ).slideDown( 100 );
                $( ".section." + section_id + " .menu_buttons button" ).first().click();
            } );
        }
        else {
            $( ".section." + section_id ).slideDown( 100 );
            $( ".section." + section_id + " .menu_buttons button" ).first().click();
        }
    } );

    /********************/
    $( ".menu_buttons button" ).click( function ()
    {
        var this_button = $( this );
        var widget_id = this_button.data( 'widget-id' );
        var this_menu_content = $( this_button.parents()[1] ).find( ".menu_content" );

        $( ".menu_content" ).hide();
        $( ".menu_buttons button" ).removeClass( 'button_selected' );

        this_button.addClass( "button_selected" );

        this_menu_content.show();
        this_menu_content.children( ".contents" ).hide();
        this_menu_content.find( "." + widget_id ).show();
    } );

    // Open Unity first to prime the user's pump
    $( "#SectionButtons .button" ).first().click();
}

$( document ).ready( main );