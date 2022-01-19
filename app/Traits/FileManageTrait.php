<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait FileManageTrait
{
    public function uploadFile($path, $file, $fileName)
    {
        try
        {
            return Storage::putFileAs($path, $file, $fileName);
        }
        catch (\Exception $e){
            Log::warning($e->getMessage()."\n".$e->getFile()."\n".$e->getLine());
        }
    }
}
