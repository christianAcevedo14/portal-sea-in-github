<?php

namespace App\Http\Repositories;


use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class FiscalYearRepository
{
    public function currentFiscalYear ()
    {
        /**
         * Codigo para calcular el año fiscal corriente
         */

//        $year = 2021; $month = 10; $day = 15;
//
//
//
//        $inputDate = Carbon::createFromDate($year, $month, $day);
        $inputDate = now();
        /*$fyEnd = "11/30";
        $fyStart = "12/01";*/
        $fyEnd = "09/30";
        $fyStart = "10/01";

        // durante este periodo se puede crear informes para el año fiscal anterior y no afectar la información
        $gracePeriod = '10/16';

        $date = strtotime($inputDate);
        $currentFiscalYear = strftime('%Y', $date);
        $inputyear = strftime('%Y', $date);

//        $fyenddate = strtotime($fyEnd . '/' . $inputyear);

//        $fystartdate = strtotime($fyStart . '/' . $inputyear);

        $fyGracePeriod = strtotime($gracePeriod . '/' . $inputyear);


        if ($date >= $fyGracePeriod) {
            $inputyear = intval($inputyear)+1;
            $currentFiscalYear = intval($currentFiscalYear)+1;
        }

        if(!Session::has('originalInputYear')) {
            Session::put('originalInputYear', $inputyear);

        }
        elseif (Session::has('originalInputYear') && Session::has('newInputYear')) {
            if (Session::get('newInputYear') === Session::get('originalInputYear')) {
                $inputyear = Session::get('originalInputYear');

            }
            elseif (Session::get('newInputYear') !== Session::get('originalInputYear')) {
                $inputyear = Session::get('newInputYear');

            }
        }
        elseif (Session::has('originalInputYear') && !Session::has('newInputYear')) {
            $inputyear = Session::get('originalInputYear');

        }

        $fystartdate = strtotime($fyStart . '/' . $inputyear);
        $fyenddate = strtotime($fyEnd . '/' . $inputyear);
        $fy = intval($inputyear);
        /*if ($date <= $fyenddate) {
            $fy = intval($inputyear);
        }
        else {
            $fy = intval(intval($inputyear) + 1);
        }*/

        /**
         * Codigo para comparar el año fiscal corriente con el created-at
         */

        //this makes the start date be one year before the selected Fiscal Year
        $newStartDate = date('Y-m-d', strtotime('-1year', $fystartdate));
        $newEndDate = date('Y-m-d', $fyenddate);

        return compact('fy' , 'newStartDate' , 'newEndDate', 'currentFiscalYear');
    }

}
