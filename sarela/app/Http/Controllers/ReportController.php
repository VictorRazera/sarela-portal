<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Report;

class ReportController extends Controller
{
    public function index(Request $request, $name)
    {
        $page = Page::where('name', $name)->first();

        if (!$page) {
            return abort(404, 'Página não encontrada');
        }

        $reports = Report::where('report_type', $page->id)->get();

        return view('reports', compact('reports', 'page'));
    }
}
