<div
    x-data="{
        init() {
            console.log('init');

            Echo.channel('public-channel')
                .listen('SendMessage', (e) => {
                    console.log('received message', e);
                    alert(e.message);
                });
        }

    }"
>
    <form wire:submit="sendMessage" class="grid grid-cols-2 gap-6">

        <input placeholder="Send message" wire:model="message">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Send Message
        </button>

    </form>
</div>
