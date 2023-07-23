<?php
// Generate a random email prefix (you can customize this as needed)
$prefix = 'user' . rand(100, 999);

// Domain of the temporary email service (you can replace this with your preferred domain)
$domain = 'tempmailservice.com';

// Complete email address
$email = $prefix . '@' . $domain;

// Display the temporary email address to the user
echo "Your temporary email address is: " . $email;
?>
