<?php

namespace App\Models;

use App\Models\Scopes\ApplicationScope;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    const IS_PENDING = 'PENDING';

    const IS_REVIEWED = 'REVIEWED';

    const IS_ACCEPTED = 'ACCEPTED';

    const IS_REJECTED = 'REJECTED';
    const IS_DISBURSED = 'DISBURSED';
    const IS_REPAID = 'REPAID';


    public function canBeToggled(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => !in_array($this->status ?? '', [self::IS_ACCEPTED, self::IS_DISBURSED, self::IS_REPAID]),
            set: fn($value) => $value,
        );
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public static function getStatusColor($status): string
    {
        return match ($status) {
            Application::IS_REVIEWED => 'warning',
            Application::IS_ACCEPTED => 'success',
            Application::IS_REJECTED => 'danger',
            Application::IS_DISBURSED => 'info',
            default => 'grey',
        };

    }

    public static function boot(): void
    {
        parent::boot();
//        register builder macros for application statuses
        static::addGlobalScope(new ApplicationScope);

        static::creating(function ($model) {
            $model->code = strtoupper(Str::random(10));
            if (auth()->user()->is_student) {
                $model->student_id = auth()->user()->student_id;
            }
        });
    }
}
