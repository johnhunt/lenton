<h1>Backgammon</h1>

<p>After losing consecutively at backgammon I thought it would be fun to create an AI to do my work for me. The project has gotten to the stage where it can play a virtual game of backgammon but the AI isn’t yet complete. I’m aiming to create an AI that’s at least good enough to beat a human.</p>

<b>Source:</b> <a href="https://github.com/lenton/backgammon" target="_blank">https://github.com/lenton/backgammon</a><br /><br />

<?php
$screenshots = [
    'humans_turn.png',
    'computers_turn.png',
];
?>

<?php foreach ($screenshots as $screenshot): ?>
    <img src="<?=URL_ROOT?>images/screenshots/backgammon/<?=$screenshot?>" alt="" /><br /><br />
<?php endforeach ?>
