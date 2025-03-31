<?php
if (!isset($_COOKIE['access_level'])) {
    echo "access_level cookie is not present.";
} else {
    if ($_COOKIE['access_level'] === 'admin') {
        echo "Access Permitted. Your flag is flag{cookie monster}";
    } else {
        echo "You must have admin level access to access this page.";
    }
}
?>