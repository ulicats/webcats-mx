<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        Permission::create(['name' => 'configuration']);
        Permission::create(['name' => 'users']);
        Permission::create(['name' => 'crm']);
        Permission::create(['name' => 'operators']);
        Permission::create(['name' => 'quotes']);
        Permission::create(['name' => 'sales']);
        Permission::create(['name' => 'shipments']);
        Permission::create(['name' => 'monitor']);
        Permission::create(['name' => 'reports']);
    
       

        $admins = Role::create(['name' => 'administrador']);
        $admins->givePermissionTo('configuration');
        $admins->givePermissionTo('users');
        $admins->givePermissionTo('crm');
        $admins->givePermissionTo('operators');
        $admins->givePermissionTo('quotes');
        $admins->givePermissionTo('sales');
        $admins->givePermissionTo('shipments');
        $admins->givePermissionTo('monitor');
        $admins->givePermissionTo('reports');
       
        
       

        $customer = Role::create(['name' => 'cliente']);
        $customer = Role::create(['name' => 'proveedor']);

    }
}
