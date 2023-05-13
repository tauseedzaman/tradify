<?php

namespace App\Http\Livewire;

use App\Models\trad;
use Livewire\Component;

class AddTrad extends Component
{

    public $market;
    public $trad_type;
    public $open_price;
    public $amount;
    public $tp;
    public $sl;


    public function save()
    {
        $this->validate([
            "market" => "required",
            "trad_type" => "required",
            "open_price" => "required",
            "amount" => "required",
            "tp" => "required",
            "sl" => "required",
        ]);

        trad::create([
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
        return view('livewire.add-trad');
    }
}
