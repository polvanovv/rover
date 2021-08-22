<?php

declare(strict_types=1);

interface MovableInterface
{
    /**
     * @param int $units
     *
     * @return MovableInterface
     */
    public function move(int $units): MovableInterface;
}