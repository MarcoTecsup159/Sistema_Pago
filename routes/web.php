<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarEmail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pagos', [PagoController::class, 'pagina_pago']);
Route::post('/pago', [PagoController::class, 'pago'])->name('pago');


Route::post('enviar-correo', function () {
    $user = Auth::user();
    if ($user) {
        Mail::to($user->email)->send(new EnviarEmail);
        return "Correo Enviado";
    }
    return "no hay usuario autenticado";
})->name('enviar-correo');

require __DIR__.'/auth.php';
