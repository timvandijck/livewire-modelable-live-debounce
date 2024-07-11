<div>
    <h1>Parent Component</h1>

    <p>
        <strong>Childs title: </strong> {{$childTitle}}
    </p>

    <livewire:child-component wire:model.live.debounce.1000ms="childTitle" />
</div>
