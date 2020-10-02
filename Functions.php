<?php

class Functions
{
    public string $data;
    private string $path;
    private array $array = [];

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function addNumber(int $number)
    {
        $this->data = file_get_contents($this->path) . "$number" . PHP_EOL;
        file_put_contents($this->path, $this->data);
    }

    public function getAverage()
    {
        $this->array = array_filter(explode("\n", $this->data));

        return round(array_sum($this->array) / count($this->array), 2);
    }
}