<?php // sanitization-filters.php
$user['name'] = 'Ivy<script src="js/bad.js"></script>'  // User' s name
$user['age'] = 23.75;                                   // User' s age
$user['email'] = '♥ivy@eg.link/';                       // User' s email

$sanitize_user['name'] = FILTETR_SANITIZE_FULL_SPECIAL_CHARS;  // HTML Escape filter
$sanitize_user['age'] =  FILTETR_SANITIZE_NUMBER_INT;          // Interger filter
$sanitize_user['email'] = FILTETR_SANITIZE_EMAIL;              // Email filter

$user = filter_vae_array($user, $sanitize_user);               // Sanitiz output
?>
<?php include 'includes/header.php'; ?>

<p>Name:  <?= $user['name'] ?></p>
<p>Age:   <?= $user['age'] ?></p>
<p>Email: <?= $user['email'] ?></p>
<pre><?php var_dump($user); ?></pre>

<?php include 'includes/footer.php'; ?>