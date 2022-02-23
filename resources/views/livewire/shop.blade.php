<div>
    <div class="container">
        <h1 class="text-center">E-Commerce</h1>
        <div class="card mt-5">
            <div class="card-header">
                    @livewire('cart')
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush d-flex">
                    <li class="list-group-item d-flex justify-content-between">An item <button wire:click="addToCart" class="btn btn-primary"> Add To Cart </button> </li>
                    <li class="list-group-item d-flex justify-content-between">A second item <button wire:click="addToCart" class="btn btn-primary"> Add To Cart </button> </li>
                    <li class="list-group-item d-flex justify-content-between">A third item <button wire:click="addToCart" class="btn btn-primary"> Add To Cart </button> </li>
                    <li class="list-group-item d-flex justify-content-between">A fourth item <button wire:click="addToCart" class="btn btn-primary"> Add To Cart </button> </li>
                    <li class="list-group-item d-flex justify-content-between">And a fifth one <button wire:click="addToCart" class="btn btn-primary"> Add To Cart </button> </li></li>
                </ul>
            </div>
        </div>
    </div>
</div>