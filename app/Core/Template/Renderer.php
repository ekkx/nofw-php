<?php

declare(strict_types=1);

namespace App\Core\Template;

interface Renderer
{
    public function getEngine(): mixed;

    public function render(string $template, array $data = []): string;
}
