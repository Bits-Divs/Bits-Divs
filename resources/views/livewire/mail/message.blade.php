<div>
    <label>För &amp; efternamn</label>
    <input wire:model="name" type="text" class="w-full mb-2 p-1 bg-white border-2 border-light-blue-500 border-opacity-100" />
    <label>Epost-adress</label>
    <input wire:model="email" type="text" class="w-full mb-2 p-1 bg-white border-2 border-light-blue-500 border-opacity-100" />
    <label>Telefonnummer</label>
    <input wire:model="phone" type="text" class="w-full mb-2 p-1 bg-white border-2 border-light-blue-500 border-opacity-100" />
    <label>Meddelande</label>
    <textarea wire:model="message" class="w-full p-1 bg-white h-32 border-2 border-light-blue-500 border-opacity-100"></textarea>
    <button type="button" wire:click.prevent="send()" class="w-full p-1 bg-white text-white mt-4 p-2" style="background: steelblue;">
        {{$confirm}}
    </button>
</div>
