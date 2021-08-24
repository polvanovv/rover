<?php

declare(strict_types=1);

/**
 * Class Direction
 *
 * @author Polvanov Igor <polvanovv@gmail.com>
 */
class Direction implements DirectionInterface, TurnableInterface
{
    public const NORTH = 'north';
    public const EAST  = 'east';
    public const SOUTH = 'south';
    public const WEST  = 'west';

    public const DIRECTIONS = [
        self::NORTH,
        self::EAST,
        self::SOUTH,
        self::WEST,
    ];

    /**
     * @var string
     */
    private string $direction;

    /**
     * @param string $direction
     */
    public function __construct(string $direction)
    {
        if (in_array($direction, self::DIRECTIONS)) {
            $this->direction = $direction;
        }

    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->direction;
    }

    /**
     * @return $this
     */
    public function turnLeft(): Direction
    {
        if ($this->isNorth()) {
            $this->changeDirection(self::WEST);
        }

        $currentDirectionKey = $this->getDirectionKey($this->getValue());
        $this->changeDirection(self::DIRECTIONS[$currentDirectionKey - 1]);

        return $this;
    }

    /**
     * @return $this
     */
    public function turnRight(): Direction
    {
        if ($this->isWest()) {
            $this->changeDirection(self::NORTH);
        }

        $currentDirectionKey = $this->getDirectionKey($this->getValue());
        $this->changeDirection(self::DIRECTIONS[$currentDirectionKey + 1]);

        return $this;
    }

    /**
     * @param string $direction
     */
    private function changeDirection(string $direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return bool
     */
    private function isNorth(): bool
    {
        return $this->getValue() === self::NORTH;
    }

    /**
     * @return bool
     */
    private function isWest(): bool
    {
        return $this->getValue() === self::WEST;
    }

    /**
     * @param string $direction
     *
     * @return int
     */
    private function getDirectionKey(string $direction): int
    {
        $directions = array_flip(self::DIRECTIONS);

        return $directions[$direction];
    }

}
