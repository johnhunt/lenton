<h1>Webplates</h1>

<p>Webplates was an e-commerce which allowed web developers to sell their templates online. Developers uploaded their compressed files for review and if ok, would be published on the website. This project was great experience for building an e-commerce system and communicating with a payment gateway API (on this occasion; PayPal IPN).</p>

<?php
$screenshots = [
    'home.png',
    'view_template.png',
    'developer_portal.png',
    'selling_info.png',
];
?>

<?php foreach ($screenshots as $screenshot): ?>
    <img src="<?=URL_ROOT?>images/screenshots/webplates/<?=$screenshot?>" alt="" /><br /><br />
<?php endforeach ?>
