<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'admin']);
        $role2=Role::create(['name'=>'vendedor']);
        $role3=Role::create(['name'=>'usuario']);

        Permission::create(['name'=>'ver productos'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'editar productos'])->syncRoles([$role1]);
        Permission::create(['name'=>'eliminar productos'])->syncRoles([$role1]);
        Permission::create(['name'=>'crear productos'])->syncRoles([$role1,$role2]);


        
        Permission::create(['name'=>'ver categorias'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'editar categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'eliminar categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'crear categorias'])->syncRoles([$role1]);



        
        Permission::create(['name'=>'ver vendedores'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'editar vendedores'])->syncRoles([$role1]);
        Permission::create(['name'=>'eliminar vendedores'])->syncRoles([$role1]);
        Permission::create(['name'=>'crear vendedores'])->syncRoles([$role1]);
    }
}
