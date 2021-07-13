<?php

namespace App\Http\Repositories;
use App\User;


class NotificationsRepository
{
    public function notifySupervisor($plan, $isOtherAdmin, $informe)
    {
        $administrators = [];
        if(!$isOtherAdmin){
            if (auth()->user()->supervisedByPean) {
                $administrators = User::pean()->get();
            }
            elseif (auth()->user()->supervisedByAssocDean) {
                if($informe !== null){
                    if($informe->program_id === 18){
                        $administrators = User::assocDean()->get();
                    }
                } else {
                    $administrators = User::assocDean()->get();
                }
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
                $administrators = User::where('supervised_region', 'like', $plan->user->region)->orWhere('programmatic_unit_id', 'like', $plan->user->region . '00%')->coordinators()->get();
            }
        } else {
            //verify if its an informe
            if ($informe !== null) {
                //$plan->user->id !== 168 - Evita que Dir TMAG reciba notificaciones de id=168
                if($informe->program_id !== 18 && $plan->user->region === 600 && $plan->user->id !== 168){
                    $administrators = User::where('supervised_region', 'like', $plan->user->region)->orWhere('programmatic_unit_id', 'like', $plan->user->unit)->directors()->get();
                }
            } elseif($plan->user->region === 600){
                if (!($plan->user->unit === 691 || $plan->user->unit === 695)) {
                    $administrators = User::where('supervised_region', 'like', $plan->user->region)->orWhere('programmatic_unit_id', 'like', $plan->user->unit)->directors()->get();
                }
            }

        }
        return $administrators;
    }


}
