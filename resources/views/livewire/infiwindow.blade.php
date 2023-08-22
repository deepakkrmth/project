<div>
    <form wire:submit.prevent="create">
        {{ $this->form }}

        <button type="submit">
            Submit
        </button>
    </form>

    {{ $this->modal }}
</div>