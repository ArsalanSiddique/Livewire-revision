<div class="container">
    <div class="row mt-5">
            <input type="text" wire:model="name" id="name" placeholder="Name" class="form-control">
            <input type="text" wire:model="message" id="message" placeholder="Message" class="form-control">

            <button wire:click="updateName('Name')">Update Name</button>

        <h3>Name: {{ $name }}</h3>
        <h3>Message: {{ $message }}</h3>
        <h3>Counter: {{ $counter }}</h3>

        @foreach($infos as $info)
        {{ $info }} <br>
        @endforeach
    </div>
</div>