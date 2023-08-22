<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Component;

class wizard extends Component
{
    protected string $view = 'forms.components.wizard';

    public static function make(): static
    {
        return new static();
    }
}
