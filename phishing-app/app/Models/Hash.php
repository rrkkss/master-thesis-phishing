<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hash extends Model
{
    protected $guarded = [];

    public static function getByHash(string $hash) : ?Hash
    {
        return Hash::where('hash', '=', $hash)
            ->first();
    }

    public static function updateVisited(?string $hash) : void
    {
        if ($hash && $hashDbo = Hash::getByHash($hash)) {
            $hashDbo->update([
                'visited' => $hashDbo->visited + 1
            ]);
        }
    }
}
