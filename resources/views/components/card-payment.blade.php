<div class="card-payment-container">
    <input type="checkbox" id="card-payment-id">
    <div class="card-payment">
        <label for="card-payment-id">Картой</label>
        <x-banks class="card-payment" gpay="true" ipay="true"
                 visa="true" mastercard="true" maestro="true">
        </x-banks>
    </div>
</div>

