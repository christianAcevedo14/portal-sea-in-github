<?php

namespace App\Http\Repositories;
use App\User;


class NotificationsRepository
{
    public function notifySupervisor($plan, $isOtherAdmin)
    {
        $administrators = [];
        if(!$isOtherAdmin){
            if (auth()->user()->supervisedByPean) {
                $administrators = User::pean()->get();
            }
            elseif (auth()->user()->supervisedByAssocDean) {
                $administrators = User::assocDean()->get();
            }
            elseif (auth()->user()->supervisedByAuxDean) {
                $administrators = User::auxDean()->get();
            }
            elseif (auth()->user()->supervisedByCFC) {
                $administrators = User::CFCs()->get();
            }
            elseif (auth()->user()->supervisedByPIA) {
                $administrators = User::pia()->get();
            }
            elseif (auth()->user()->supervisedByAgricultura) {
                $administrators = User::agricultura()->get();
            }
            else {
                $administrators = User::where('supervised_region', 'like', $plan->user->region . '00%')->orWhere('programmatic_unit_id', 'like', $plan->user->region . '00%')->coordinators()->get();
            }
        } else {

            if ($plan->user->region === "6") {
                if(!($plan->user->unit === 691 || $plan->user->unit === 695)){
                    $administrators = User::where('supervised_region', 'like', $plan->user->region . '00%')->orWhere('programmatic_unit_id', 'like', $plan->user->unit)->directors()->get();
                }
            }

        }
        return $administrators;
    }


}
