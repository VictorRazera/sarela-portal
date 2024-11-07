<?php

namespace App\Http\Controllers;

use App\Models\FinancialReport;
use Illuminate\Http\Request;

class FinancialReportController extends Controller
{
    public function index()
    {
        // Busca todos os relatórios da tabela financial_reports
        $reports = FinancialReport::all();

        // Retorna a view financial_reports e passa os relatórios
        return view('financial-reports', ['reports' => $reports]);
    }
}
