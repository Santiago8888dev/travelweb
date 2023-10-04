<div>

    <div class="container">

        <div class="container_form">
            <form wire:submit="send">
                <label for="">{{__('form.name')}}</label>
                <input type="text" wire:model="name">

                <label for="">Gmail</label>
                <input type="email" wire:model="email">

                <label for="">{{__('form.content')}}</label>
                <input type="text">

                <p>{{__('form.permission')}}</p>

                <button type="submit">{{__('form.send')}}</button>
            </form>
        </div>
    </div>

</div>
