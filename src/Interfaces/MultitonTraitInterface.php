<?php
namespace Qubus\Traits\Interfaces;

interface MultitonTraitInterface
{
    public static function getInstance();

    public static function getNamedInstance($key = '__DEFAULT__');
}
