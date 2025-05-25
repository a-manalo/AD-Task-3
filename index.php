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

    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 80%; max-width: 800px;">
        <div id="landingMsg-container" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 5); font-family: 'Poppins', sans-serif;">
            <h1 style="font-size: 2em; font-weight: bold; margin-bottom: 1rem">Welcome to <span>Abigail's Music Playlist</span></h1>
            <h2 style="font-size: 1.2em; opacity: 1;">Discover songs you might not know yet and explore her unique music taste.</h2>
            <a href="../pages/playlistPage/index.php" style="display: inline-block; margin-top: 2rem; padding: 0.8rem 1.5rem; background-color: pink; color: white; text-decoration: none; border-radius: 6px; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3); transition: all 0.2s ease; transform: translateY(0); font-weight:bold;" onmouseover="this.style.color='black'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 8px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.color='white'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 5px rgba(0, 0, 0, 0.3)';">Check Playlist</a>
        </div>
    </div>
</body>

<?php footer(); ?>