<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

/**
 * UserController Class user controller to control user logic & retrieval
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @const string represent friday
     */
    const FRIDAY = 'Fri';

    /**
     * @const string  represent saturday
     */
    const SATURDAY = 'Sat';

    public function show(User $user)
    {
        $lastDayOfCurrentMonth = date('t');
        $currentDate = new \DateTime ();
        $currentDate->setDate(
            intval($currentDate->format('Y')),
            intval($currentDate->format('m')),
            intval($lastDayOfCurrentMonth)
        );

        $paymentSalariesDay =  $currentDate->format('D');
        if ($paymentSalariesDay == self::SATURDAY) {
            $paymentSalariesDay =  intval($currentDate->format('d'))-2;
        } else if ($paymentSalariesDay == self::FRIDAY) {
            $paymentSalariesDay =  intval($currentDate->format('d'))-1;
        } else {
            $paymentSalariesDay =  intval($currentDate->format('d'));
        }

        $currentDate->setDate(
            intval($currentDate->format('Y')),
            intval($currentDate->format('m')),
            15
        );

        $bonusSalariesDay =  $currentDate->format('D');
        if ($bonusSalariesDay == self::SATURDAY) {
            $bonusSalariesDay =  intval($currentDate->format('d')) + 6;
        } else if ($bonusSalariesDay == self::FRIDAY) {
            $bonusSalariesDay =  intval($currentDate->format('d')) + 5;
        } else {
            $bonusSalariesDay =  intval($currentDate->format('d'));
        }

        $paymentSalary = $user->salary;
        $bonusSalary = $user->{'bonus-percentage'} * $paymentSalary /100;
        $data = [
            'Month' => date('M'),
            'name' => $user->name,
            'salaries_payment_day' => $paymentSalariesDay,
            'Bonus_payment_day' => $bonusSalariesDay,
            'salaries_total' => $paymentSalary,
            'Bonus_total' => $bonusSalary,
            'payment_total' => $bonusSalary + $paymentSalary,
        ];
        return $data;
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }
}
