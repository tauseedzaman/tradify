<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trad extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "trade_type",
        "open_price",
        "tp",
        "sl",
        "close_price",
        "position_amount",
        "status",
        "market",
    ];


    /**
     * Get the user that owns the trad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
