<?php

namespace App\Exports;

use App\previous_monthly_cost;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class UsersExportLastMonth implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Name',
            'ID',
            'phone',
            'Cost',
        ];
    }
    public function collection()
    {
        return previous_monthly_cost::all();
    }
}
