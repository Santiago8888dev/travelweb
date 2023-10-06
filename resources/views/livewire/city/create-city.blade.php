<div>
    <form wire:submit="create" >
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="" required wire:model="name">

        <label for="description">Description</label>
        <input type="text" name="description" id="" required wire:model="description">

        <label for="description">Location</label>
        <input type="text" name="description" id="" required wire:model="location">

        <label for="image">Image</label>
        <input type="file" name="image" id="" required wire:model="image">

        <input type="submit" value="Enviar">
    </form>
</div>
