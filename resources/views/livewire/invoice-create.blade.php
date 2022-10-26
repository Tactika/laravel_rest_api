<div class="flex">
    <div class="w-2/5"></div>
    <div class="w-1/5 content-center h-screen">
        <h1 class="block text-gray-700 text-2xl font-bold m-6 text-center">Create Invoice Form</h1>
        <form wire:submit.prevent='submit' class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="form-group inline-block relative w-64">
                <label for="customer_id" class="block text-gray-700 text-sm font-bold mb-2">Customer Name</label>
                <select class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="selectCustomer" , placeholder="Enter Customer" wire:model="customer_id">
                    <option value="null">Select Customer</option>
                    @foreach ($this->customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
                @error('customer_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Invoiced Amount</label>
                <input type="number" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputamount" , placeholder="Enter Amount" wire:model="amount" />
                @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group inline-block relative w-64">
                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Billing Status</label>
                <select class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="selectBillingStatus" , placeholder="Enter Billing Status" wire:model="status">
                    <option value="B">Billed</option>
                    <option value="P">Paid</option>
                    <option value="V">Void</option>
                </select>
            </div>
            <div class="form-group">
                <label for="billed_date" class="block text-gray-700 text-sm font-bold mb-2">Billed Date</label>
                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" class="form-control" id="inputBilledDate" , placeholder="Enter Billed Date" wire:model="billed_date" />
                @error('billed_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">Submit</button>
        </form>
    </div>
    <div class="w-2/5"></div>
</div>
<form>
    <input type="number" name="customer_id" id="customerID">


    <input type="number" step="0.01" name="amount" id="amountField">
    <input type="text" name="status" id="statusField">
    <input type="number" name="customer_id" id="customerID">
    <input type="number" name="customer_id" id="customerID">
</form>