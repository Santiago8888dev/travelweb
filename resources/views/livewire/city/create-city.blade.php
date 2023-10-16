<div>
    <section class="form-register">
    <form wire:submit="create" >
        @csrf
        <label for="name">Name</label>
        <input class="controls" type="text" name="name" id="" required wire:model="name">

        <label for="description">Description</label>
        <input class="controls" type="text" name="description" id="" required wire:model="description">

        <label for="description">Location</label>
        <input class="controls" type="text" name="description" id="" required wire:model="location">

        <label for="image">Image</label>
        <input class="controls" type="file" name="image" id="" required wire:model="image">

        <input class="botons"  type="submit" value="Crear">
    </form>
    </section>
</div>
