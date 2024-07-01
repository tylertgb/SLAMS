<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];
    CONST IS_PENDING = 'PENDING';
    CONST IS_REVIEWED = 'REVIEWED';
    CONST IS_ACCEPTED = 'ACCEPTED';
    CONST IS_REJECTED = 'REJECTED';

    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
