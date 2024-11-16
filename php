<?php
$uploadDir = "uploads/";

if (is_dir($uploadDir)) {
    $files = scandir($uploadDir);

    foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
            echo "<li><a href='$uploadDir$file' target='_blank'>$file</a></li>";
        }
    }
} else {
    echo "No files found.";
}
?>
