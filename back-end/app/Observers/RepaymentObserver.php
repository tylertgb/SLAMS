<?php

namespace App\Observers;

use App\Models\Application;
use App\Models\Disbursement;
use App\Models\Repayment;

class RepaymentObserver
{

    public function created(Repayment $repayment): void
    {
        $repaymentsMadeSoFar = Repayment::where('application_id', $repayment->application_id)->sum('amount');
        $application = Application::isDisbursed()->where('id', $repayment->application_id)->first();
        $amountRequested = $application->amount;

        if ($repaymentsMadeSoFar >= $amountRequested) {
            $application->status = Application::IS_REPAID;
            $application->save();
        }
    }

}
