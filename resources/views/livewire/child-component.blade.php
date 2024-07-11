<div>
    <h2>Child Component</h2>

    <input type="text" wire:model.live.debounce.1000ms="title">

    <p>{{$title}}</p>

    <button wire:click="add">Add</button>
</div>
