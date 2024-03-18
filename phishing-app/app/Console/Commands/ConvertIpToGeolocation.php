<?php

namespace App\Console\Commands;

use App\Models\Fail;
use App\Models\Login;
use Error;
use Illuminate\Console\Command;

class ConvertIpToGeolocation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:convert-ip-to-geolocation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Login::all()
            ->each(function ($login) {
                $login->update([
                    'geolocation' => $this->updateGeo($login)
                ]);
            });
    }

    private function updateGeo(Login $login)
    {
        $output = [];

        try {
            $output[] = exec("whois {$login->geolocation} | grep address", $output);
        } catch(Error $e) {
            Fail::create([
                'ip_address' => $login->geolocation,
                'username' => $login->username,
                'user_agent' => $login->userAgent,
                'created_at' => now(),
                'updated_at' => now(),
                'hash_id' => $login->hashId,
                'type' => 'geo resolve command'
            ]);
        }

        return $output ? implode(' |*| ', $output) : 'failed to resolve location from: ' . $login->geolocation;
    }
}
