<?php

namespace App\Http\Livewire;

use App\Models\trad;
use Livewire\Component;

class Trads extends Component
{

    public function delete_trad($id)
    {
        $trad=trad::findOrFail($id);
        $trad->delete();

    }
    public function render()
    {
        return view('livewire.trads',[
            'trads'=>trad::where("user_id",auth()->id())->paginate(7)
        ]);
    }
}
