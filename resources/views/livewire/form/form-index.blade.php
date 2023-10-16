<div>

    <div class="container">
    <section class="form-register">

        <div class="container_form">
            <form wire:submit="send">
                <label for="">{{__('form.name')}}</label>
                <input class="controls" type="text" wire:model="name">

                <label for="">Gmail</label>
                <input class="controls" type="email" wire:model="email">

                <label for="">{{__('form.content')}}</label>
                <input class="controls" type="text"  wire:model="commet">

                <p class="pr">{{__('form.permission')}}</p>
<br>
                <button class="botons" type="submit">{{__('form.send')}}</button>
            </form>
        </div>
    </section>
    </div>

</div>
