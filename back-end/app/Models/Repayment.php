<?php

namespace App\Models;

use App\Observers\RepaymentObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(RepaymentObserver::class)]
class Repayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function application(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
