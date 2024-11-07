<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['report_type', 'title', 'url'];

    // Define a relação com a tabela pages
    public function page()
    {
        return $this->belongsTo(Page::class, 'report_type');
    }
}
