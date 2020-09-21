<?php

namespace App\Exports;

use App\Newsletter;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NewsletterExport implements FromQuery, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function __construct(int $from ,int $to)
    {
        $this->to=date("Y-m-d",$to);
        $this->from=date("Y-m-d",$from);
    }
    public function query()
    {
        return  Newsletter::whereBetween('date',[$this->from,$this->to]);
    }
    public function headings() :array
    {
        return [
            'id',
            'created_at',
            'updated_at',
            'date',
            'email',
            'verified'
        ];
    }
}
