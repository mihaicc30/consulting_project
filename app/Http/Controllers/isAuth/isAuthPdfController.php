<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\EzepostTracking;


class isAuthPdfController extends Controller
{
    public function view(Request $request)
    {
        $queryParameters = $request->query();
      
        $items = collect();
    
        foreach ($queryParameters as $key => $itemID) {
            $itemsList = EzepostTracking::where('mpID', $itemID)->get();
            foreach ($itemsList as $it) {

                $items->push($it);
            }
        }

        return view('pdf.template')->with('items', json_decode($items));
    }

    public function generate(Request $request)
    {

        $itemsData = $request->input('items') ?? $request->input('item');

        if (gettype($itemsData) === 'string') {
            $item = json_decode($itemsData); // Initialize an empty array if $itemsData is null
            // Initialize Dompdf
            $dompdf = new Dompdf();

            // Load the view and render PDF content
            $pdfView = view('pdf.generate', compact('item'))->render();

            $dompdf->loadHtml($pdfView);

            // Render the PDF (optional: set paper size, orientation, etc.)
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Download the generated PDF
            return $dompdf->stream('generated.pdf');
        } else {
            $items = array_map('json_decode', $itemsData);

            // Initialize Dompdf
            $dompdf = new Dompdf();

            // Load the view and render PDF content
            $pdfView = view('pdf.generate', compact('items'))->render();

            $dompdf->loadHtml($pdfView);

            // Render the PDF (optional: set paper size, orientation, etc.)
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Download the generated PDF
            return $dompdf->stream('generated.pdf');
        }
    }
}
