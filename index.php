HI
<?php
    require_once( "app/config.php" );
    require_once( "app/App.php");

    use BT\App;
    use BT\RouteType;

    $app = new App(array(
        ""                               => array( "name" => "frontpage", "type" => RouteType::DIRECT )
        , "attic"                        => array( "name" => "attic",     "type" => RouteType::DIRECT )

        , "projects/unity/lasersmash"    => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "lasersmash") )
        , "projects/ld/snozone"          => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "snozone") )
        , "projects/ld/galaxylanes"      => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "galaxylanes") )
        , "projects/ld/whackaburster"    => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "whack") )
        , "projects/unity/virtualstuckbehindabus"
                                         => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "virtualbus") )
        , "projects/unity/lasersmash"    => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "lasersmash") )

        , "projects/html5/bt"            => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "bt") )
        , "projects/html5/tonedefweb"    => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "tonedef_web") )

        , "projects/android/tonedef"     => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "tonedef") )
        , "projects/android/sparedeck"   => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "sparedeck") )
        , "projects/android/vklauncher"  => array( "name" => "project",   "type" => RouteType::PROJECT, "properties" => array("project_name" => "vklauncher") )
    ));

    $app->run();