<?php

declare(strict_types=1);

interface TurnableInterface
{
    /**
     * @return TurnableInterface
     */
    public function turnLeft(): TurnableInterface;

    /**
     * @return TurnableInterface
     */
    public function turnRight(): TurnableInterface;
}