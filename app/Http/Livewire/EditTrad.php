<?php

namespace App\Http\Livewire;

use App\Models\trad;
use Livewire\Component;

class EditTrad extends Component
{

    public $trad_id;

    public $market;
    public $trad_type;
    public $open_price;
    public $amount;
    public $tp;
    public $sl;


    public function mount($id)
    {
        $this->trad_id = $id;
        $trad = trad::findOrFail($id);
        $this->market = $trad->market;;
        $this->trad_type = $trad->trad_type;;
        $this->open_price = $trad->open_price;;
        $this->amount = $trad->amount;;
        $this->tp = $trad->tp;;
        $this->sl = $trad->sl;;
    }



    public function update()
    {
        $this->validate([
            "market" => "required",
            "trad_type" => "required",
            "open_price" => "required",
            "amount" => "required",
            "tp" => "required",
            "sl" => "required",
        ]);

        trad::updateOrCreate([
            "id" => $this->trad_id
        ], [
            "user_id" => auth()->id(),
            "trade_type" => $this->trad_type,
            "open_price" => $this->open_price,
            "position_amount" => $this->amount,
            "status" => 'open',
            "market" => $this->market,
            "tp" => $this->tp,
            "sl" => $this->sl,
        ]);
        return redirect()->route("home");
    }


    public function render()
    {
        return view('livewire.edit-trad');
    }
}
