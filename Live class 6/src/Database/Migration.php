<?php

namespace App\Database;

use App\Storage\DB;

class Migration
{
    public function __construct(public DB $db)
    {

    }

    public function run()
    {
        $files = glob(__DIR__ . "/migrations/*");

        foreach ($files as $file) {
            if (is_file($file)) {
                $sql = file_get_contents($file);

                $this->db->createTable($sql);

                echo "Table: " . basename($file) . " created successfully";
            }
        }
    }
}