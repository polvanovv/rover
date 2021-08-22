<?php

declare(strict_types=1);

interface LocationInterface
{
    /**
     * @return int
     */
    public function getX(): int;

    /**
     * @return int
     */
    public function getY(): int;

    /**
     * @param int $x
     *
     * @return LocationInterface
     */
    public function updateX(int $x): LocationInterface;

    /**
     * @param int $y
     *
     * @return LocationInterface
     */
    public function updateY(int $y): LocationInterface;

}