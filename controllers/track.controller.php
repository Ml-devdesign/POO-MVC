<?php

function index()
{
    require '../models/track.manager.php';
    $artists = getAllArtists();

    $template = '../views/track/index.html.php';
    require '../views/layout.html.php';
}