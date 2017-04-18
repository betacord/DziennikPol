<?php
/**
 * Created by PhpStorm.
 * User: t-krz
 * Date: 31.12.2016
 * Time: 19:24
 */

namespace App\Extensions;


class StringHelper
{
    //to jest bardzo nieeleganckie rozwiazanie, pod ktorym wstyd mi sie podpisac, ale jednoczesnie najbardziej oszczedne
    public static function getListMarks($marks)
    {
        $listMarks = array();
        foreach ($marks as $mark) {
            $listMarks[$mark->subject->name] = "";
        }
        foreach ($marks as $mark) {
            $listMarks[$mark->subject->name] .= $mark->mark->mark . ' ';
        }
        return $listMarks;
    }

    public static function getListAbsences($absences)
    {
        $listAbsences = array();
        foreach ($absences as $absence) {
            $listAbsences[$absence->lesson->lesson_date] = "";
        }
        foreach ($absences as $absence) {
            $listAbsences[$absence->lesson->lesson_date] .= $absence->lesson_number . ' ';
        }
        return $listAbsences;
    }





}