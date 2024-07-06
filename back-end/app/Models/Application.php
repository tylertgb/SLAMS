<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    const IS_PENDING = 'PENDING';

    const IS_REVIEWED = 'REVIEWED';

    const IS_ACCEPTED = 'ACCEPTED';

    const IS_REJECTED = 'REJECTED';

    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
