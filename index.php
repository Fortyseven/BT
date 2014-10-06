<!DOCTYPE html>
<html>
<head>
    <title>Bytes Templar - Web, Gaming, and Mobile Software Development</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="vendor/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <script src="vendor/jquery-2.1.1.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="icon" href="images/favicon.png" sizes="32x32"/>
    <link rel="icon" href="images/favicon.png" sizes="48x48"/>
    <link rel="stylesheet" href="css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body style="padding-top:50px">
    <?php require( 'nav.html' ); ?>
    <?php require( 'app/gallery_item.php' ); ?>
    <div class="container">
        <div id="Header">
            <div id="Logo">
                <img src="images/header_logo.png">

                <div id="Byline">Web, Mobile, and<br/>Game Development</div>
            </div>
            <?php require_once('app/contact_block.html'); ?>
            <div class="clearfix"></div>
        </div>
        <!-- --------------------------- -->
        <div id="Content">
            <!--div id="SectionButtons">
                <div class="button" data-section-id="unity"><label>Unity</label><div class="type unity"></div></div>
                <div class="button" data-section-id="android"><label>Android</label><div class="type android"></div></div>
                <div class="button" data-section-id="html5"><label>HTML5</label><div class="type html5"></div></div>
            </div-->
            <!-- --------------------------- -->
            <div class="section unity">
                <div class="content">
                    <div class="gallery_head" align="center"><img src="images/type_unity.png"/> Unity</div>
                    <div class="gallery_content">
                        <!--------------->
                        <?php
                            galleryItem( "WhackABurster",
                                         "Whack-A-Burster",
                                         array( "http://i.gjcdn.net/imgserver/screenshot-thumbnail/320x240/58867.jpg" ),
                                         "<p>The Space Marines were pretty clever. With their advanced science, they simply beamed their dead off the
                                            battlefield to be recycled into another wave of soldiers. A gruesome and morally questionable mechanism of war,
                                            but one that led them to unstoppable success against any threat.</p>
                                          <p>The enemy Xenomorphs would prove to be quite a different story. Wild, violent, but spectacularly intelligent, the
                                             alien creatures found they could simply nest inside their attacker's chests. This allowed them to follow the dead
                                             soldier as they're recycled into new, fresh men... behind enemy lines! Luckily, this cunning tactic was discovered
                                             early on.</p>
                                          <p>That's where <b>you</b> come in...</p>",
                                         array( "http://gamejolt.com/games/arcade/whack-a-burster/30298/"               => "Play it on GameJolt",
                                                "misc/ld48/29/"                                                         => "Original LD48 Version",
                                                "http://www.ludumdare.com/compo/ludum-dare-29/?action=preview&uid=2847" => "LD29 Entry Page" ) );

                            galleryItem( "GalaxyLanes",
                                         "Galaxy Lanes",
                                         array( "images/projects/galx.jpg" ),
                                         "Yup! Bowling. Completely out of left field for me. The Ludum Dare theme fulfillment of \"connected worlds\" was intended
                                         to be that the bowling balls would all look like planets, and they'd \"connect\" with the pins down the end. A stretch, I
                                         admit it. Unfortunately, this is incomplete. I got a lot done in the 72-hour period, but I did more work with Blender than
                                         I'd expected to, among other things.",
                                         array( "http://galaxylanes.tumblr.com/"                       => "Development Blog",
                                                "http://gamejolt.com/games/sports/galaxy-lanes/33217/" => "Playable WIP LD48 Version" ) );

                            galleryItem( "BrownianMotionSimulator",
                                         "Brownian Motion Simulator",
                                         array( "images/projects/bms-1.png" ),
                                         "<p>Just a fun experiment attempting to simulate <a href=\"http://en.wikipedia.org/wiki/Brownian_motion\">Brownian Motion</a>
                                            in Unity.</p>
                                            <p>Scientific accuracy not guaranteed.</p>",
                                         array( "misc/unity/brownian/" => "Web Version" ) );

                            galleryItem( "VirtualStuckBehindABus",
                                         "Virtual Stuck-Behind-A-Bus",
                                         array( "images/projects/vsb-1.jpg" ),
                                         "<p>This stupid little thing was created as both a bit of a joke, and served as my first real introduction to Unity. It is
                                            not an actual \"game\".</p>
                                            <p><i>Virtual Stuck Behind A Bus</i> was a video game played by Peter Griffin during an episode of 'Family Guy'. It a
                                            hilarious scene, and I realized it would be quite easy to mock up.</p>
                                            <p>This version of the game represents the joke as presented in the episode,
                                            <a href=\"https://www.youtube.com/watch?v=fuQ_1Z85VY8\">seen here</a>.</p>
                                            <br/>
                                            <p>(I have more current build where I attempted to take the idea and expand it out, turning it into an actual game! I
                                            doubt I will return to that, however.)</p>",
                                         array( "http://gamejolt.com/games/other/virtual-stuck-behind-a-bus/30775/" => "Play it on GameJolt!" ) );

                            galleryItem( "Flapjack",
                                         "Flapjack",
                                         array( "images/projects/flp-1.png" ),
                                         "<p>A skeleton version of Flappy Bird made on my lunch break. Note, this was made before it was considered shameful to
                                            do so.</p>
                                            <br/>
                                            <p><small>This was expanded into a more complete game, with custom graphics and everything... but it was purposely
                                            destroyed. Don\'t ask.</small></p>",
                                         array( "misc/unity/flapjack/" => "Web version" ) );

                            galleryItem( "ChipsEscape",
                                         "Ch1p5 Escape",
                                         array( "images/projects/esc-1.png" ),
                                         "<p>Unfinished one-level remake of the classic <i><a href=\"http://en.wikipedia.org/wiki/Chip\'s_Challenge\">Chip\'s Challenge</a></i> in 3D.</p>
                                         <p>This was made in my early Unity days. Note the 'Unreal' levels of colored lighting, and ripped off Minecraft textures. Complete
                                         abuse. Barely any skill with Blender here.</p>",
                                         array( "misc/unity/chips/" => "Web version" ) );
                        ?>
                    </div>
                </div>
            </div>
            <!-- --------------------------- -->
            <div class="section android">
                <div class="content">
                    <div class="gallery_head" align="center"><img src="images/type_android.png"/> Android</div>
                    <div class="gallery_content">
                        <!--------------->
                        <?php
                            galleryItem( "ToneDef",
                                         "ToneDef Tone Dialer",
                                         array( "images/projects/ton-1-lg.jpg" ),
                                         "<p>ToneDef is a small, powerful open-source tone dialer featuring full DTMF, blue box, and red box modes.
                                            Dial using the keypad buttons, enter a predefined sequence for automatic playback, or select an entry
                                            from your contact list. A small slice of phreaking history! ;)</p>
                                          <p>License: GPL V2</p>",
                                         array( "https://play.google.com/store/apps/details?id=com.bytestemplar.tonedef" => "Google Play Store",
                                                "https://github.com/Fortyseven/ToneDef"                                  => "Fork it on GitHub" ) );

                            galleryItem( "SpareDeck",
                                         "Spare Deck",
                                         array( "images/projects/sdk-1.jpg" ),
                                         "<p><i>\"Lose the deck of AR cards for your favorite video game console? This free Android app might be able
                                            to help...\"</i></p><br/>
                                            <p>This is an Android app I actually had taken down by Nintendo off of the Google Play Store. <i>Spare
                                            Deck</i> is essentially a high res gallery of the AR cards that come packed with the Nintendo 3DS. It was
                                            expanded to include the ones packed with Kid Icarus, and also the Playstation Vita.</p>
                                            <p>The app is no longer supported, but the source code is free for whoever might be interested.</p>
                                            <hr/>
                                            <p><small>Spare Deck was written early in the process of learning Android, so there's probably bugs and
                                            bad decisions everywhere.</small></p>
                                            <p>License: MIT</p>",
                                         array( "https://github.com/Fortyseven/SpareDeck" => "Fork it on GitHub" ) );

                            galleryItem( "VKLauncher",
                                         "VK Launcher",
                                         array( "images/projects/vkl-2.png" ),
                                         "<p><b>Launch apps by saying your favorite phrase or word!</b></p>
                                            <p>VK Launcher lets you harness the power of Google Voice Search to start any application on your Android
                                            device by saying a keyword that you define. An unlimited amount of keywords can be created and backed up
                                            to external storage.</p>
                                            <hr/>
                                            <p><small>Admittedly, this app has been deprecated a bit thanks to Google Now, but at the time there wasn't
                                            anything like it in the store.  Still, maybe it has some utility for certain individuals.</small></p>",
                                         array( "https://play.google.com/store/apps/details?id=com.hacsoft.vk"       => "Google Play Store",
                                                "https://play.google.com/store/apps/details?id=com.hacsoft.vk.trial" => "Free Trial Version" ) );
                        ?>
                    </div>
                </div>
            </div>

            <!-- --------------------------- -->
            <div class="section html5">
                <div class="content">
                    <div class="gallery_head" align="center"><img src="images/type_html5.png"/> HTML5</div>
                    <div class="gallery_content">
                        <?php
                            galleryItem( "ToneDefWebEdition",
                                         "ToneDef Web Edition",
                                         array( "images/projects/ton-1-lg.jpg" ),
                                         "<p>This is a port of the Android ToneDef tone dialer to HTML5 using the Web Audio API and AngularJS.
                                                Tested with the latest Chrome (desktop and mobile), and Firefox.</p>",
                                         array( "apps/tonedef/#/"                          => "View on the Web",
                                                "https://github.com/Fortyseven/ToneDefWeb" => "Fork it on GitHub" ) );

                            galleryItem( "Reddmo",
                                         "Reddmo",
                                         array( "images/projects/red-1.png" ),
                                         "<p>It's not Cosmo! It's the internationally famous news magazine, Reddmo!</p>
                                        <p>Reddmo is an HTML5 toy that automatically generates a magazine cover using the images and headlines linked
                                           to off of Reddit.  The cover can be customized to use content from a specific subreddit, or from the front
                                           page.</p>
                                        <p>The outcome is hit or miss, but this was a seriously fun toy to hack on.</p>",
                                         array( "misc/reddmo/"                         => "View on the Web",
                                                "https://github.com/Fortyseven/Reddmo" => "Fork it on GitHub" ) );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="Footer">&copy;2014 Bytes Templar; All Rights Reserved</div>
    </div>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/smooth_scroll.js"></script>
    <script src="js/app.js"></script>
    <?php require_once( "app/google_tracking.html" ); ?>
</body>
</html>