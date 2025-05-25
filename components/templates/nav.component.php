<?php
function navHeader()
{
    ?>
    <header>
        <nav class="bg-pink-200 backdrop-blur-sm w-full shadow-lg">
            <div class="flex justify-center items-center py-5">
                <ul class="flex space-x-8">
                    <li>
                        <a href="../index.php" class="text-white font-bold hover:text-black transition-colors duration-200 [text-shadow:_2px_2px_2px_rgb(0_0_0_/_40%)]">Home</a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-bold hover:text-black transition-colors duration-200 [text-shadow:_2px_2px_2px_rgb(0_0_0_/_40%)]">Playlist</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php
}
?>