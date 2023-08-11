<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class BackupController extends Controller
{
    public function backupDatabase($backupName)
    {
        try {
            Artisan::call('backup:run', [
                '--only-db' => true,
                '--disable-notifications' => true,
                '--filename' => $backupName,
            ]);

            // Llama al stored procedure para insertar el nombre en la tabla backups
            DB::select('CALL sp_insert_Backuptable(?)', [$backupName]);

            return response()->json(['message' => 'Backup realizado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al realizar el respaldo'], 500);
        }
    }
}
