<?php

namespace App\Http\Repositories;


use Illuminate\Support\Facades\Session;

class FiscalYearRepository
{
    public function currentFiscalYear ()
    {
        /**
         * Codigo para calcular el año fiscal corriente
         */
        $inputDate = now();
        /*$fyEnd = "11/30";
        $fyStart = "12/01";*/
        $fyEnd = "09/30";
        $fyStart = "10/01";

        $date = strtotime($inputDate);
        $currentYear = strftime('%Y', $date);
        $inputyear = strftime('%Y', $date);

        $fyenddate = strtotime($fyEnd . '/' . $inputyear);

        if ($date >= $fyenddate) {
            $inputyear = intval($inputyear)+1;
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

        return compact('fy' , 'newStartDate' , 'newEndDate', 'currentYear');
    }

}
