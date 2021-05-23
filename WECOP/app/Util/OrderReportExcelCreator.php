<?php
namespace App\Util;
use App\Interfaces\OrderReportCreator;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class OrderReportExcelCreator implements OrderReportCreator {
    public function createReport($items)
    {
        Excel::create('Report2016', function($excel) {

            // Set the title
            $excel->setTitle('My awesome report 2016');

            // Chain the setters
            $excel->setCreator('Me')->setCompany('Our Code World');

            $excel->setDescription('A demonstration to change the file properties');

            $data = [12,"Hey",123,4234,5632435,"Nope",345,345,345,345];

            $excel->sheet('Sheet 1', function ($sheet) use ($data) {
                $sheet->setOrientation('landscape');
                $sheet->fromArray($data, NULL, 'A3');
            });

        })->download('xlsx');
    }
}