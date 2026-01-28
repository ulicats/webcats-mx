<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('menus')->insert([
            "name"=>"Administradores",
            "description"=>"Administradores de tu sitio",
            "route"=>"/users",
            "icon"=>"fa fa-users-cog",
            "permissions_name"=>"users",
            "position"=>1
        ]);

        DB::table('menus')->insert([
            "name"=>"CRM",
            "description"=>"CRM de tu sitio",
            "route"=>"/",
            "icon"=>"fa fa-users",
            "permissions_name"=>"crm",
            "position"=>2
        ]);

        $extra=Menu::where('name','CRM')->first();
        DB::table('menus')->insert([
            "name"=>"Clientes",
            "description"=>"Clientes",
            "route"=>"/customers",
            "icon"=>"fa fa-user",
            "parent"=>$extra->id,
            "permissions_name"=>"crm"
        ]);
        DB::table('menus')->insert([
            "name"=>"Proveedores",
            "description"=>"Proveedores",
            "route"=>"/providers",
            "icon"=>"fas fa-warehouse",
            "parent"=>$extra->id,
            "permissions_name"=>"crm"
        ]);

        DB::table('menus')->insert([
            "name"=>"Operadores",
            "description"=>"Operadores de tu sitio",
            "route"=>"/operators",
            "icon"=>"fas fa-truck",
            "permissions_name"=>"operators",
            "position"=>3
        ]);
        DB::table('menus')->insert([
            "name"=>"Cotizaciones",
            "description"=>"Cotizaciones de tu sitio",
            "route"=>"/quotes",
            "icon"=>"fas fa-clipboard-list",
            "permissions_name"=>"quotes",
            "position"=>4
        ]);
        DB::table('menus')->insert([
            "name"=>"Ventas",
            "description"=>"Ventas de tu sitio",
            "route"=>"/sales",
            "icon"=>"fas fa-hand-holding-usd",
            "permissions_name"=>"sales",
            "position"=>5
        ]);
        DB::table('menus')->insert([
            "name"=>"Enbarques",
            "description"=>"Enbarques de tu sitio",
            "route"=>"/shipments",
            "icon"=>"fas fa-ship",
            "permissions_name"=>"shipments",
            "position"=>6
        ]);
        DB::table('menus')->insert([
            "name"=>"Monitor",
            "description"=>"Monitor de tu sitio",
            "route"=>"/monitor",
            "icon"=>"fas fa-chart-pie",
            "permissions_name"=>"monitor",
            "position"=>7
        ]);
        DB::table('menus')->insert([
            "name"=>"Reportes",
            "description"=>"Reportes de tu sitio",
            "route"=>"/reports",
            "icon"=>"fas fa-chart-line",
            "permissions_name"=>"reports",
            "position"=>8
        ]);
       
       
    }
}
