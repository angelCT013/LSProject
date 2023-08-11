<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    public function backupDatabase($backupName)
    {
        try {
            Artisan::call('backup:run', [
                '--only-db' => true,
                '--disable-notifications' => true,
                '--filename' => $backupName, // Usar el nombre proporcionado en la solicitud
            ]);

            return response()->json(['message' => 'Backup realizado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al realizar el respaldo'], 500);
        }
    }
}
