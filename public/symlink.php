<?php

$targetfolder = __DIR__ . '/../laravel/storage/app/public';
$linkfolder = __DIR__ . '/storage';
symlink($targetfolder, $linkfolder);

echo 'symlink sukses';
