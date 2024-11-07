<?php

namespace App\Http\Controllers;

use App\Models\FinancialReport;
use Illuminate\Http\Request;

class FinancialReportController extends Controller
{
    public function index()
    {
        $reports = FinancialReport::all();

        return view('financial-reports', ['reports' => $reports]);
    }
}
