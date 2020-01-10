<?php
namespace Qubus\Traits\Interfaces;

interface IteratorTraitInterface
{
    public function key();

    public function current();

    public function next();

    public function prev();

    public function rewind();

    public function valid();

    public function seek($position);
}
