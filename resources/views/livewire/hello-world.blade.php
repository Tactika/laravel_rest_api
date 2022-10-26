<div style="height: 100vh; width: 100vw; display: flex; justify-content: center; align-items: center;">
    <div style="padding: 10px; border: 2px solid red; border-radius: 5px;">
        <div style="font-size: 24px;">
            {{ $customer->name }}
        </div>

        <input type="text" id="test" wire:model="new_name" placeholder="Enter new name">
        <button wire:click="changeName">Change Name</button>

    </div>

</div>