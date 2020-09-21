<?php

namespace App\Exports;

use App\monthly_cost;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
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
        return monthly_cost::all();
    }
}
