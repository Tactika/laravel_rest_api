<div class="flex">
    <div class="w-2/5"></div>
    <div class="w-1/5 content-center h-screen">
        <h1 class="block text-gray-700 text-2xl font-bold m-6 text-center">Create Customer Form</h1>
        <form wire:submit.prevent='submit' class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="form-group">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Name" wire:model="name" />
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group inline-block relative w-64">
                <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type</label>
                <select class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="selectType" , placeholder="Enter Type" wire:model="type">
                    <option value="I">Individual</option>
                    <option value="B">Business</option>
                </select>
            </div>
            <div class="form-group inline-block relative w-64">
                <label for="business_id" class="block text-gray-700 text-sm font-bold mb-2">Business</label>
                <select class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="selectCustomer" , placeholder="Enter Customer" wire:model="business_id">
                    <option value="null">Select Business</option>
                    @foreach ($this->businesses as $business)
                    <option value="{{ $business->id }}">{{ $business->name }}</option>
                    @endforeach
                </select>
                @error('business_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputEmail" , placeholder="Enter E-mail" wire:model="email" />
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputAddress" , placeholder="Enter Address" wire:model="address" />
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputCity" , placeholder="Enter City" wire:model="city" />
                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="state" class="block text-gray-700 text-sm font-bold mb-2">State</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputState" , placeholder="Enter State" wire:model="state" />
                @error('state') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="postal_code" class="block text-gray-700 text-sm font-bold mb-2">Postal Code</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputPostalCode" , placeholder="Enter Postal Code" wire:model="postal_code" />
                @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">Submit</button>
        </form>
    </div>
    <div class="w-2/5"></div>
</div>