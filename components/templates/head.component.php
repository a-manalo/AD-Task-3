<?php
function head($pageTitle)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <title><?= htmlEscape($pageTitle ?? 'Music Playlist') ?></title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
            <!-- Libraries -->
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        </head>

        <body>
            <?php
}
?>