<?php

$dirName = __DIR__ . '/patches';
$dir = new DirectoryIterator($dirName);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        $cmd = 'git apply ' . $dirName . '/' . $fileinfo->getFilename();
            $output = '';
        $status = '';
        exec($cmd, $output, $status);
    }
}

