<?php

$profile = [
    "id" => 1,
    "name" => "Budi Santoso",
    "email" => "budi.santoso@siswa.ski.sch.id",
    "role" => "member",
];

function getProfile()
{
    global $profile;
    return $profile;
}