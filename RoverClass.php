<?php

declare(strict_types=1);

/**
 * Class RoverClass
 *
 * @author Polvanov Igor <polvanovv@gmail.com>
 */
class RoverClass implements MovableInterface, TurnableInterface
{
    private Direction $direction;

    private Location $location;

    public function __construct(Direction $direction, Location $location)
    {
        $this->direction = $direction;
        $this->location = $location;
    }

    /**
     * @param int $units
     *
     * @return $this
     */
    public function move(int $units): self
    {
        if ($this->getDirection()->getValue() === Direction::NORTH) {
            $this->getLocation()->updateX($this->getLocation()->getX() + $units);

            return $this;
        }elseif ($this->getDirection()->getValue() === Direction::SOUTH) {
            $this->getLocation()->updateX($this->getLocation()->getX() - $units);

            return $this;
        }elseif ($this->getDirection()->getValue() === Direction::EAST) {
            $this->getLocation()->updateY($this->getLocation()->getY() + $units);

            return $this;
        }

        $this->getLocation()->updateY($this->getLocation()->getY() - $units);

        return $this;
    }

    /**
     * @return $this
     */
    public function turnLeft(): self
    {
        $this->getDirection()->turnLeft();

        return $this;
    }

    /**
     * @return $this
     */
    public function turnRight(): self
    {
        $this->getDirection()->turnRight();

        return $this;
    }

    /**
     * @return Direction
     */
    public function getDirection(): Direction
    {
        return $this->direction;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }


}