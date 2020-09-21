<?php

namespace App\Exports;

use App\Registeration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisterationExport implements Fromquery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function __construct(int $from ,int $to)
    {
        $this->to=date("Y-m-d",$to);
        $this->from=date("Y-m-d",$from);
    }
    public function query()
    {
        return  Registeration::whereBetween('date',[$this->from,$this->to]);
    }
    public function headings() : array 
    {
        return
        [
            'Id',
            'Created_at',
            'Updated_at',
            'Date',
            'Name',
            'Phone',
            'Address',
            'Email',
            'Qualification',
            'Branch',
            'Age',
            'Contected'

        ];
    }
}