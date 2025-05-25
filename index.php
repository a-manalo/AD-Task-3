<?php
require BASE_PATH . '/utils/HtmlEscape.utils.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
?>

<?php
head('Home');
navHeader();
?>

<body>
    <div class="image-background" style="position: fixed; left: 0; top: 0; width: 100vw; height: 100vh; z-index: -1;">
    <img src="../assets/img/pixelBg.gif" alt="Pixel Background" style="width: 100vw; height: 100vh; object-fit: cover;">
</div>
</body>

<?php footer(); ?>