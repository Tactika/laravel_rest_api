<div>
    <div>

        <livewire:datatable model="App\Models\Invoice" include="customer_id,amount,status, billed_date, paid_date" exclude="" hide="id" searchable="customer_id,amount,status, billed_date, paid_date" />
    </div>
</div>