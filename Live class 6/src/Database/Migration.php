<?php

namespace App\Database;

use App\Storage\DB;

class Migration
{
    private DB $db;

    public function __construct()
    {
        $this->db = DB::createConnection();
    }

    public function run(): void
    {
        // read all files path from the given directory
        $files = glob(__DIR__ . "/migrations/*");

        foreach ($files as $file) {
            if (is_file($file)) {
                // Get the given file's content which is SQL command for creating tables
                $sql = file_get_contents($file);
                $this->db->createTable($sql);
            }
        }
    }
}