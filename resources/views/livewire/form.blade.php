<div>
    <form>
        Name:
        <input type="text" wire:model.debounce.500ms="name" id="name" placeholder="Name">

        <br> Hobby:
        <br> <input type="checkbox" wire:modell.debounce.500ms="hobbies" value="cycling"> Cycling
        <br> <input type="checkbox" wire:modell.debounce.500ms="hobbies" value="reading"> Reading
        <br> <input type="checkbox" wire:modell.debounce.500ms="hobbies" value="coding"> Coding
        <br> <input type="checkbox" wire:modell.debounce.500ms="hobbies" value="learning"> Learning
        <br> <input type="checkbox" wire:modell.debounce.500ms="hobbies" value="gaming"> Gaming

        <br> Gender:
        <input type="radio" wire:model.debounce.500ms="gender" id="gender" value="female"> Female
        <input type="radio" wire:model.debounce.500ms="gender" id="gender" value="male"> Male

        <br> Country:
        <select wire:model.debounce.500ms="country" id="country">
            <option value="">Select..</option>
            <option value="pakistan">Pakistan</option>
            <option value="afghanistan">Afghanistan</option>
        </select>

        <br> Details:
        <textarea wire:model.debounce.500ms="details" id="details" cols="30" rows="10"></textarea>
        <br>
    </form>


    <h2>Form Data</h2>
    Name: {{ $name }} <br>
    Gender: {{ $gender }} <br>
    Country: {{ $country }} <br>
    Hobby:
    @foreach($hobbies as $hobby)
    {{ $hobby }} <br>
    @endforeach
    Details: {{ $details }} <br>


    <hr>


    <form wire:submit.prevent="sum">
        First Number:
        <input type="text" wire:model="num1" wire:keydown.enter="getsum" id="num1">

        <br> Second Number:
        <input type="text" wire:model="num2" id="num2">

        <input type="submit" value="Get Sum">
    </form>

    <h2>SUM: {{ $sum }}</h2>
</div>