<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;


class isAuthPdfController extends Controller
{
    public function view(Request $request)
    {
        $itemData = $request->input('item');
        $item = json_decode($itemData); // Decoding as an object

        // Pass $item to the blade view for rendering
        return view('pdf.template')->with('item', $item);
    }

    public function template(Request $request)
    {

        $itemsData = $request->input('items');
        $items = array_map('json_decode', $itemsData);

        return view('pdf.template')->with('items', $items);
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
