<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Uuid;
use Hash;

class admin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $uuid = Uuid::generate(4);
        User::create([
            "name" => "Admin",
            "lastname" => "Adminov",
            "uuid"  => $uuid,
            "email" => "admin@admin.com",
            "password" => Hash::make(476674),
            "role_id"  => 1
        ]);
        echo "Admin Success Created!";
    }
}
