<?php
define('PROJECT_ROOT', realpath(dirname(__FILE__).'/..').'/');
define('DOC_ROOT', PROJECT_ROOT.'public/');
define('APP_ROOT', PROJECT_ROOT.'app/');
define('URL_ROOT', 'http://localhost/portfolio/');

/**
 * Gets the current page's file path.
 *
 * @return string Page file path
 */
function get_page_file_path()
{
    $pages_dir = APP_ROOT.'pages/';
    $page_file_ext = '.php';

    if (isset($_GET['page'])) {
        $page_name = $_GET['page'];
    } else {
        $page_name = 'home';
    }

    if (! file_exists($pages_dir.$page_name.$page_file_ext)) {
        http_response_code(404);
        $page_name = '404';
    }

    return $pages_dir.$page_name.$page_file_ext;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Alex Lenton's Portfolio</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="<?=URL_ROOT?>">Home</a></li>
            </ul>
            <ul>
                <li><a href="<?=URL_ROOT?>lentech">Lentech</a></li>
                <li><a href="<?=URL_ROOT?>botster">Botster</a></li>
                <li><a href="<?=URL_ROOT?>thepot">The Pot</a></li>
                <li><a href="<?=URL_ROOT?>skaptart">SkaptArt</a></li>
                <li><a href="<?=URL_ROOT?>webplates">Webplates</a></li>
                <li><a href="<?=URL_ROOT?>mp3chest">MP3 Chest</a></li>
                <li><a href="<?=URL_ROOT?>vanreth">Vanreth</a></li>
                <li><a href="<?=URL_ROOT?>backgammon">Backgammon</a></li>
                <li><a href="<?=URL_ROOT?>jspuzzle">JS Puzzle</a></li>
            </ul>
        </nav>

        <?php require get_page_file_path(); ?>
    </body>
</html>