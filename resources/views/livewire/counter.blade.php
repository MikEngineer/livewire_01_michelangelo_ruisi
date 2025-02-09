<div>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="text-center display-4">{{$counter}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <button class="btn btn-success m-2" wire:click="increment">+1</button>
                <button class="btn btn-danger m-2" wire:click="decrement">-1</button>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <button class="btn btn-success m-2" wire:click="incrementByNum({{$number}})">+{{$number}}</button>
                <button class="btn btn-danger m-2" wire:click="decrementByNum({{$number}})">-{{$number}}</button>
            </div>
        </div>

    </div>
</div>