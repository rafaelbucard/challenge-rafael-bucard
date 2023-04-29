<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Controller;
use App\Services\DayNumberService;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Checks the date by returning the day of the year and the year
     * Method POST 
     */
    public function dayNumber(Request $request)
    {
        try {
            $service = (new DayNumberService($request->get('date')))->execute();
            return view('day-number', ['viewModel' => $service]);
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Data inválida! A data inserida para ser válida deve ser entre 1º de janeiro de 1900 e 31 de dezembro de 2022.');
        }

    }
}
