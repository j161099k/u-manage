<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesListItem extends Model
{
    use HasFactory;

    public function expenses_list()
    {
        return $this->belongsTo(ExpensesList::class);
    }
}
