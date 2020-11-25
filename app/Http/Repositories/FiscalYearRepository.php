<?php

namespace App\Http\Repositories;


class FiscalYearRepository
{
    public function currentFiscalYear ()
    {
        /**
         * Codigo para calcular el año fiscal corriente
         */
        $inputDate = now();
        $fyEnd = "12/31";
        $fyStart = "10/01";

        $date = strtotime($inputDate);
        $inputyear = strftime('%Y', $date);

        $fystartdate = strtotime($fyStart . '/' . $inputyear);
        $fyenddate = strtotime($fyEnd . '/' . $inputyear);

        if ($date <= $fyenddate) {
            $fy = intval($inputyear);
        } else {
            $fy = intval(intval($inputyear) + 1);
        }

        /**
         * Codigo para comparar el año fiscal corriente con el created-at
         */

        $newStartDate = date('Y-m-d', strtotime('-1year', $fystartdate));
        $newEndDate = date('Y-m-d', $fyenddate);

        return compact('fy' , 'newStartDate' , 'newEndDate');
    }

}
