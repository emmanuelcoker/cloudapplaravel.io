<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Role;
use App\Models\User;
use App\Models\Zone;
use App\Models\Path;
use App\Models\Permission;
use App\Models\Plan;
use App\Models\SupportTeam;
use App\Models\Tab;
use Illuminate\Support\Facades\Artisan;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //run full database migration
        Artisan::call('migrate');
        //create role
        Role::firstOrCreate(['name' => 'SuperAdmin']);
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'IT Support']);

        //create default zones
        Industry::firstOrCreate(['name' => 'Default']);
        Industry::firstOrCreate(['name' => 'Bank']);
        Industry::firstOrCreate(['name' => 'Hotel']);
        Industry::firstOrCreate(['name' => 'Telcom']);


        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Default Zone']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Service Zone']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Meeting Room']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Board Room']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Customer Reception']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Tech Squad']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Customer Service']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Receiption']);

        //add first country
        Country::firstOrCreate(['id' => 160, 'iso2' => 'NG', 'name' => 'Nigeria']);

        //plans
        Plan::firstOrCreate(['name' => 'Basic', 'price' => 2000, 'image' => 'Plan_Basic.png', 'banners' => 5, 'logos' => 5, 'media' => 5, 'schedule_video' => 5, 'locations' => 5, 'displays' => 15]);
        Plan::firstOrCreate(['name' => 'Standard', 'price' => 6000, 'image' => 'Plan_Standard.png', 'banners' => 10, 'logos' => 10, 'media' => 10, 'schedule_video' => 10, 'locations' => 10, 'displays' => 25]);
        Plan::firstOrCreate(['name' => 'Premium', 'price' => 10000, 'banners' => 30, 'image' => 'Plan_Premium.png', 'logos' => 30, 'media' => 30, 'schedule_video' => 30, 'locations' => 30, 'displays' => 55]);

        //plans
        Path::firstOrCreate(['path' => 'Lcoation/App/index.html']);

        Tab::firstOrCreate(
            [
                'tab1' => 'FX Rate',
                'tab2' => 'PTA Rate',
                'tab3' => 'Interest Rate',
                'tab4' => 'Tab Name 1',
                'tab5' => 'Tab Name 2',
                'tab6' => 'Tab Name 3',
                'news_title' => 'Today\'s News',
                'announcement' => 'Announcement',
                'training' => 'Scheduled Communication'
            ]
        );

        Permission::firstOrCreate(['key' => 'can_upload_banners', 'name' => 'Upload banners', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'can_upload_media_contents', 'name' => 'Upload media contents', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'can_update_rate', 'name' => 'Update rate', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'can_change_background_color', 'name' => 'Change background color', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'visibility_change_display', 'name' => 'Change display', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'can_change_logo', 'name' => 'Change_logo', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'can_edit_rss_news', 'name' => 'Edit rss news', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'can_edit_custom_news', 'name' => 'Edit custom news', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'visibility_location', 'name' => 'View location', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_media', 'name' => 'View media', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_banner', 'name' => 'View banner', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_logo', 'name' => 'View logo', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_template', 'name' => 'View template', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_branding', 'name' => 'View branding', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_annouce', 'name' => 'View annouce', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_rate', 'name' => 'View rate', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_news', 'name' => 'View news', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_clock', 'name' => 'View clock', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_training', 'name' => 'View training', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_calendar', 'name' => 'View calendar', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_help', 'name' => 'View help', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_faq', 'name' => 'View faq', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_tutorials', 'name' => 'View tutorials', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'visibility_plans', 'name' => 'View plans', 'role' => '["Admin","SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'visibility_manage_users', 'name' => 'Manage users', 'role' => '["SuperAdmin"]']);
        Permission::firstOrCreate(['key' => 'visibility_activity_log', 'name' => 'View activity log', 'role' => '["Admin","SuperAdmin","IT Support"]']);
        Permission::firstOrCreate(['key' => 'global_setting', 'name' => 'Global Setting', 'role' => '["SuperAdmin"]']);


        //moore advice surport
        SupportTeam::create(['image' => 'cloudAppImage.png', 'name' => 'Cloudapp Support', 'email' => 'cloudapp@mooreadvice.com', 'phone' => '08033371555']);

        //create admin
        User::firstOrCreate(['name' => 'Administrator', 'country_id' => 160, 'email' => 'admin@gmail.com', 'role_id' => 1, 'password' => '$2y$10$/bcJvAPtPPVNPZTz6noOKuYdEgWgwdjY4.DS7nB0c8q53zXt7ZppS']);
    }
}
