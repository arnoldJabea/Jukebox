<?php

declare(strict_types=1);

require './vendor/autoload.php';

use App\Configs\Configs;

use App\Views\Template\Bootstrap;

$page = new Bootstrap('Acceuil' , 'Bienvenue sur Jukebox_AROL');

echo $page ->start()

?>
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <span class="fs-4">Jukebox</span>
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="py-5">
        <h1 class="display-5 fw-bold">Bienvenue !</h1>
        <p class="col-md-8 fs-4">Tu vas pouvoir créer de supers playlists !</p>
      </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="bg-body-tertiary rounded-3 p-5">
                <h2>Playlists</h2>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="bg-body-tertiary rounded-3 p-5">
                <h2>Nouvelle Playlist</h2>
            </div>
        </div>
    </div>
  </div>
</main>


<?= $page ->end();?>