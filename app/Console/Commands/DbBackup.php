<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Carbon\Carbon;
class DbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';
/**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Database Backup';
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
     * @return int
     */
    public function handle()
    {
        //mysqldump -u[user] -p[pass] [db] > [file_path]
        $filename = "backup-" . Carbon::now()->format('d-m-Y') . ".sql";
        $command = "C:/xampp/mysql/bin/mysqldump.exe --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . "  > " . storage_path() . "/app/backup/" . $filename;
        exec($command);
    }
}
