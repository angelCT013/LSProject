<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    public function backupDatabase($backupName)
    {
        
        try {
            $backupPath = storage_path('app/backups/' . $backupName . '.sql');

            Artisan::call('backup:run', [
                '--only-db' => true,
                '--disable-notifications' => true,
                '--filename' => $backupPath,
            ]);
            // Artisan::call('backup:run', [
            //     '--only-db' => true,
            //     '--disable-notifications' => true,
            //     '--filename' => $backupName, // Usar el nombre proporcionado en la solicitud
            // ]);
            // Llama al stored procedure para insertar el nombre en la tabla backups
            // DB::select('CALL sp_insert_Backuptable(?)', [$backupName]);
            \DB::statement("CALL sp_insert_Backuptable(?)",
            [$backupName]);
            return response()->json(['message' => 'Backup realizado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al realizar el respaldo'], 500);
        }
    }
}
