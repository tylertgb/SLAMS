<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Observers\DisbursementObserver;

#[ObservedBy(DisbursementObserver::class)]
class Disbursement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'disbursed_by');
    }

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }

    public function repayments(): HasMany
    {
        return $this->hasMany(Repayment::class);
    }

}
