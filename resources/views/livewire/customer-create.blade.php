<div>
    <form wire:submit.prevent='submit'>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" , placeholder="Enter Name" wire:model="name" />
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="selectType" , placeholder="Enter Type" wire:model="type">
                <option value="I">Individual</option>
                <option value="B">Business</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="inputEmail" , placeholder="Enter E-mail" wire:model="email" />
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="inputAddress" , placeholder="Enter Address" wire:model="address" />
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="inputCity" , placeholder="Enter City" wire:model="city" />
            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="inputState" , placeholder="Enter State" wire:model="state" />
            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input type="text" class="form-control" id="inputPostalCode" , placeholder="Enter Postal Code" wire:model="postal_code" />
            @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>