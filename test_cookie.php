<?php
// Set a cookie if not already set
if (!isset($_COOKIE['test'])) {
    setcookie('test', 'HelloCookie', time() + 3600, "/"); // 1 hour expiry
    echo "Cookie is set! Reload the page to see it.";
} else {
    echo "Cookie value: " . $_COOKIE['test'];
}
?>
