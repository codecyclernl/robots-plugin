<?php namespace Codecycler\Robots;

use Illuminate\Support\Facades\DB;
use October\Rain\Database\Updates\Migration;

class InitializeDatabase extends Migration
{
    public function up()
    {
        DB::table('system_settings')->where('item', 'codecycler_robots_settings')->delete();

        DB::table('system_settings')->insert([
            'item' => 'codecycler_robots_settings',
            'value' => '{"content":"User-agent: *\r\nAllow: \/\r\nHost: $domain\r\nSitemap: $domain\/sitemap.xml"}',
        ]);
    }

    public function down()
    {
        DB::table('system_settings')->where('item', 'codecycler_robots_settings')->delete();
    }
}
