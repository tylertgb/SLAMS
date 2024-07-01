<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $guarded = [];
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
