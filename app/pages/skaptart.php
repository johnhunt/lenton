<h1>SkaptArt</h1>

<p>SkaptArt was a platform for artists to auction their work to interested bidders which I developed as a freelancer. The project got to the stage of everything being functional except for the checkout system but unfortunately the owner ran out of funds and decided to stop the project.</p>

<?php
$screenshots = [
    'home.png',
    'home_bottom.png',
    'auctions.png',
    'view_auction.png',
    'view_auction_bottom.png',
    'account_dropdown.png',
    'account_bids.png',
    'edit_auction.png',
];
?>

<?php foreach ($screenshots as $screenshot): ?>
    <img src="<?=URL_ROOT?>images/screenshots/skaptart/<?=$screenshot?>" alt="" /><br /><br />
<?php endforeach ?>
