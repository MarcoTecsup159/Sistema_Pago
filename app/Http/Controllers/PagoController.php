<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PagoController extends Controller
{
    public function pagina_pago()
    {
        return view('pagos');
    }

    public function pago(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debe estar autenticado.');
        }

        $request->validate([
            'fileToUpload' => 'required|file|mimes:jpg,jpeg,png,bmp|max:10048',
        ]);

        if ($request->hasFile('fileToUpload')) {
            $file = $request->file('fileToUpload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('comprobantes', $filename);

            // Insertar el nombre de la imagen en la tabla 'pagos'
            DB::table('factura')->insert([
                'id_usuario'=>$user-> id,
                'monto_pagado'=>40,
                'comprobante' => $path,
            ]);

        $userData = DB::table('users')
        ->where('id', $user-> id)
        ->select('id', 'name', 'email') 
        ->first();

        $factura = DB::table('factura')
        ->where('id_usuario', $user-> id)
        ->select('id', 'monto_pagado')
        ->orderBy('id', 'desc')
        ->first();

        $pdf = Pdf::loadView('pdf_pago', compact('userData', 'factura'));
        return $pdf->stream();
        }
        return back()->withErrors(['fileToUpload' => 'No se ha podido cargar la imagen.']);
    }
}