<?php


function getAllArtists() {
    require '../config/db.connect.php';

    $query = $pdo->query("SELECT * FROM track");
    return $query->fetchAll();
}

function getArtist(int $id)
{

}

function addArtist(array $artist){

}

function updateArtist(array $artist)
{

}

function deleteArtist(int $id)
{

}