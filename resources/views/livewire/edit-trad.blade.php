<form wire:submit.prevent="update" class="row">
    <div class=" my-3 py-3">
        <div class="col mx-auto">
            <h1 class="text-center">
                Add Trad
            </h1>
        </div>
    </div>
    @csrf
    <div class="form-group col-md-6 mx-auto my-3">
        <label for="market">Market/Coin</label>
        <input id="market" placeholder="Market/Coin" class="form-control" type="text" required
            wire:model.lazy="market" name="market">
    </div>
    <div class="form-group col-md-6 mx-auto my-3">
        <label for="type">Trad_type</label>
        <select placeholder="Trad_type" id="type" class="form-control" required wire:model.lazy="trad_type"
            name="trad_type">
            <option selected value="">-- Trad Type--</option>
            <option>Long</option>
            <option>Short</option>
        </select>
    </div>
    <div class="form-group col-md-6 mx-auto my-3">
        <label for="market">Open Price <small><i class="text-info text-sm">(USDT)</i></small></label>
        <input id="market" placeholder="Open Price" class="form-control" type="number" required
            wire:model.lazy="open_price" name="open_price">
    </div>
    <div class="form-group col-md-6 mx-auto my-3">
        <label for="amount">Position Amount <small><i class="text-info text-sm">(USDT)</i></small></label>
        <input id="amount" placeholder="Position Amount" class="form-control" type="number" required
            wire:model.lazy="amount" name="amount">
    </div>
    <div class="form-group col-md-6 mx-auto my-3">
        <label for="tp">TP <small><i class="text-info text-sm">(USDT)</i></small></label>
        <input id="tp" placeholder="TP" class="form-control" type="number" required wire:model.lazy="tp"
            name="tp">
    </div>
    <div class="form-group col-md-6 mx-auto my-3">
        <label for="sl">SL <small><i class="text-info text-sm">(USDT)</i></small></label>
        <input id="sl" placeholder="SL" class="form-control" type="number" required wire:model.lazy="sl"
            name="sl">
    </div>
    <div class="form-group col-md-12 my-4 mx-auto">
        <button class="btn btn-success btn-lg btn-block" type="submit">Update Trad</button>
    </div>
</form>
</div>
