<?php

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Video;

function redirecionar(Video $video) {
    header('location: '. $video->recuperarUrl());
}

redirecionar(new AluraMais('open closed', 'boas práticas'));