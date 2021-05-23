<?php
namespace App\Util;
use App\Interfaces\OrderReportCreator;
use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class OrderReportPDFCreator implements OrderReportCreator {

    public function createReport($items)
    {
        $order = $items['order'];

        // share data to view
        $pdf = PDF::loadView('pdf_view', $order);
  
        // download PDF file with download method
        return $pdf->download('order'.''.'.pdf');
    }
}
