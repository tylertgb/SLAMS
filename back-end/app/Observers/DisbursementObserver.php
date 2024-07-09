<?php

namespace App\Observers;

use App\Models\Application;
use App\Models\Disbursement;
use Illuminate\Database\Eloquent\Model;

class DisbursementObserver
{
    public function creating(Disbursement $disbursement): void
    {
        $disbursement->disbursed_by = auth()->id();
    }

    public function created(Disbursement $disbursement): void
    {
        $amountDisbursedSoFar = Disbursement::where('application_id', $disbursement->application_id)
            ->sum('amount');
//
        $application = Application::isAccepted()->where('id', $disbursement->application_id)->first();
        $amountRequested = $application->amount;
//        dd($amountDisbursedSoFar, $amountRequested);
        if ($amountDisbursedSoFar >= $amountRequested) {
            $application->status = Application::IS_DISBURSED;
            $application->save();
        }

    }


}
