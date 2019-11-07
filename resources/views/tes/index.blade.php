<?php
    require_once('siswa/includes/tile.class.php');
    require_once('siswa/includes/ui.class.php');

    $ui = new UI();

    $ui->setTitle('MelonHTML5 - Metro Framework');

    $tiles = array(
        array(
            'name'        => 'Profile',
            'thumbnail'   => 'siswa/images/boy.png',
            'content'     => 'Profile',
            'url'         => 'siswa/tiles/blank.php',
            'size'        => '4x2',
            'theme'       => 'orange',
            'link'        => ''
        ),
        array(
            'name'        => 'Jadwal',
            'thumbnail'   => 'siswa/images/calendar.png',
            'content'     => 'Jadwal',
            'url'         => 'siswa/tiles/blank.php',
            'size'        => '4x2',
            'theme'       => 'red',
            'link'        => ''
        ),
        array(
            'name'        => 'Absensi',
            'thumbnail'   => 'siswa/images/assigment.png',
            'content'     => 'Absensi',
            'url'         => 'siswa/tiles/tile002.php',
            'size'        => '4x2',
            'theme'       => 'darkblue',
            'link'        => ''
        ),
        array(
            'name'        => 'Nilai',
            'thumbnail'   => 'siswa/images/grade.png',
            'content'     => 'Nilai',
            'url'         => 'siswa/tiles/blank.php',
            'size'        => '4x2',
            'theme'       => 'blue',
            'link'        => ''
        ),
        array(
            'name'        => 'Event',
            'thumbnail'   => 'siswa/images/event.png',
            'content'     => 'Event',
            'url'         => 'siswa/tiles/tile004.php',
            'size'        => '4x2',
            'theme'       => 'darkgreen',
            'link'        => ''
        ),
        array(
            'name'        => 'Materi',
            'thumbnail'   => 'siswa/images/materi.png',
            'content'     => 'Materi',
            'url'         => 'siswa/tiles/typography.php',
            'size'        => '4x2',
            'theme'       => 'darkred',
            'link'        => ''
        ),
        array(
            'name'        => 'Tugas/PR',
            'thumbnail'   => 'siswa/images/task.png',
            'content'     => 'Tugas/PR',
            'url'         => 'siswa/tiles/tile006.php',
            'size'        => '4x2',
            'theme'       => 'green',
            'link'        => ''
        ),
    );

    $blog_tile = array(
        'name'        => 'Logout',
        'thumbnail'   => 'siswa/images/logout.png',
        'content'     => 'Logout',
        'url'         => 'siswa/tiles/blog.php',
        'size'        => '2x2',
        'theme'       => 'red',
        'link'        => ''
    );

    // function makeRandomTile($id, $size = '2x2') {
    //     $tile = array(
    //         'name'        => 'widget_000' . $id,
    //         'thumbnail'   => '',
    //         'content'     => '',
    //         'url'         => 'tiles/blank.php',
    //         'size'        => $size,
    //         'theme'       => 'grey',
    //         'link'        => ''
    //     );

    //     return $tile;
    // }




    $tile_container1 = array(
        'size'  => 'full',
        'theme' => '',
        'tiles' => $tiles
    );
    $tile_container2 = array(
        'size'  => 'half',
        'theme' => '',
        'tiles' => array($blog_tile)
    );
    $tile_container3 = array(
        'size'  => 'half',
        'theme' => '',
        'tiles' => array()
    );

    $ui->addTileContainer($tile_container1);
    $ui->addTileContainer($tile_container2);
    $ui->addTileContainer($tile_container3);

    $ui->printHeader();
    $ui->printTiles();
    $ui->printFooter();
?>