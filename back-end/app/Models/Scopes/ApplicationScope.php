<?php

namespace App\Models\Scopes;

use App\Models\Application;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ApplicationScope implements Scope
{

    public function apply(Builder $builder, Model $model): void
    {
        //
    }

    public function extend(Builder $builder): void
    {
        $builder->macro('isPending', function (Builder $builder) {
            return $builder->where('status', Application::IS_PENDING);
        });

        $builder->macro('isNotPending', function (Builder $builder) {
            return $builder->whereNot('status', Application::IS_PENDING);
        });


        $builder->macro('isReviewed', function (Builder $builder) {
            return $builder->where('status', Application::IS_REVIEWED);
        });

        $builder->macro('isNotReviewed', function (Builder $builder) {
            return $builder->whereNot('status', Application::IS_REVIEWED);
        });

        $builder->macro('isAccepted', function (Builder $builder) {
            return $builder->where('status', Application::IS_ACCEPTED);
        });

        $builder->macro('isNotAccepted', function (Builder $builder) {
            return $builder->whereNot('status', Application::IS_ACCEPTED);
        });

        $builder->macro('isRejected', function (Builder $builder) {
            return $builder->where('status', Application::IS_REJECTED);
        });

        $builder->macro('isNotRejected', function (Builder $builder) {
            return $builder->whereNot('status', Application::IS_REJECTED);
        });

        $builder->macro('isDisbursed', function (Builder $builder) {
            return $builder->where('status', Application::IS_DISBURSED);
        });

        $builder->macro('isNotDisbursed', function (Builder $builder) {
            return $builder->whereNot('status', Application::IS_DISBURSED);
        });

        $builder->macro('isRepaid', function (Builder $builder) {
            return $builder->where('status', Application::IS_REPAID);
        });

        $builder->macro('isNotRepaid', function (Builder $builder) {
            return $builder->whereNot('status', Application::IS_REPAID);
        });

    }

}
