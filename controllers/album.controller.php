<?php

function index()
{
    require '../models/album.manager.php';
    $artists = getAllArtists();

    $template = '../views/album/index.html.php';
    require '../views/layout.html.php';
}