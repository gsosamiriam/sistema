<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        //timezone
        date_default_timezone_set('America/Mexico_City');

        $data = [
            array('usu_username'=>'Administrador', 'usu_email'=>'admon@sistema.com', 'usu_password'=>password_hash('adpass24',PASSWORD_DEFAULT), 'usu_status'=>1,'usu_created_at'=>date("Y-m-d H:i:s"), 'usu_created_by'=>1)
        ];
        $this->db->table('users')->truncate();
        $this->db->table('users')->insertBatch($data);

    }
}
