<?php

namespace App\Http\Livewire;

use App\Models\Infiwindow;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class infiwindow extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            //
        ];
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Infiwindow::create($data);

        $this->form->model($record)->saveRelationships();
    }

    protected function getFormModel(): string
    {
        return Infiwindow::class;
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function render(): View
    {
        return view('livewire.infiwindow');
    }
}