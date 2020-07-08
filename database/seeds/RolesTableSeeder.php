<?php

use App\Models\Role;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Role::count() == 0){
            Role::create([
                "id"=> Uuid::uuid4()->toString(),
                "name"=>"admin",
                "display_name"=>"Admin",
            ]);

            Role::create([
                "id"=> Uuid::uuid4()->toString(),
                "name"=>"user",
                "display_name"=>"User",
            ]);

         
        }
    }
}
