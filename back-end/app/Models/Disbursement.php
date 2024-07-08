<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this->belongsTo(Application::class, 'application_code', 'code');
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->disbursed_by = auth()->id();
        });

        static::created(function (Model $model) {
            Application::isAccepted()
                ->where('code', $model->application_code)
                ->update(['status' => Application::IS_DISBURSED]);
        });
    }
}
