<h1>MP3 Chest</h1>

<p>An MP3 search engine which allowed you to search and download music for free. It had its own spider which crawled a remote file hosting service for new MP3 urls to index and add to its database.</p>

<?php
$screenshots = [
    'home.png',
    'home_bottom.png',
    'search.png',
];
?>

<?php foreach ($screenshots as $screenshot): ?>
    <img src="<?=URL_ROOT?>images/screenshots/mp3chest/<?=$screenshot?>" alt="" /><br /><br />
<?php endforeach ?>
