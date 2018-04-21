<?php declare(strict_types = 1);

namespace Example\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu() : array
    {
        return [
            ['href' => '/', 'text' => 'Evaproject'],
            ['href' => '/page-one', 'text' => ''],
            ['href' => '/page-two', 'text' => 'Page Two'],
            ['href' => '/page-three', 'text' => 'Page Three'],
        ];
    }
}
