<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preference extends Model
{
    use HasFactory;

    // Indicates if the model should be timestamped.
    public $timestamps = false;

    // The attributes that are mass assignable.
    protected $fillable = [
        'user_id','country', 'currency', 'subscribe_mailing_list'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
