<?php
namespace Qubus\Traits\Interfaces;

interface FileSystemTraitInterface
{
    public function mkdir(string $path);

    public function rmdir($dir);

    public function exists(string $filename);
}
