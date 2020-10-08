<?php

class NumberGenerator
{
    public function getNumber(): int
    {
        return rand(1, 1000);
    }
}