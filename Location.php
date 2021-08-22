<?php

declare(strict_types=1);

/**
 * Class Location
 *
 * @author Polvanov Igor <polvanovv@gmail.com>
 */
class Location implements LocationInterface
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $x
     *
     * @return $this
     */
    public function updateX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    /**
     * @param int $y
     *
     * @return $this
     */
    public function updateY(int $y): self
    {
        $this->y = $y;

        return  $this;
    }
}