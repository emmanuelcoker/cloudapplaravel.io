<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Industry;
use App\Models\Role;
use App\Models\User;
use App\Models\Zone;
use App\Models\Path;
use App\Models\Permission;
use App\Models\Plan;
use App\Models\Tab;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create role
        Role::firstOrCreate(['name' => 'Client']);
        Role::firstOrCreate(['name' => 'SuperAdmin']);

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
        Country::firstOrCreate(['id' => 160, 'sortname' => 'NG', 'name' => 'Nigeria']);

        //plans
        Plan::firstOrCreate(['name' => 'Basic', 'price' => 2000, 'banners' => 5, 'logos' => 5, 'media' => 5, 'schedule_video' => 5, 'locations' => 5, 'displays' => 15]);
        Plan::firstOrCreate(['name' => 'Professional', 'price' => 6000, 'banners' => 10, 'logos' => 10, 'media' => 10, 'schedule_video' => 10, 'locations' => 10, 'displays' => 25]);
        Plan::firstOrCreate(['name' => 'Premium', 'price' => 10000, 'banners' => 30, 'logos' => 30, 'media' => 30, 'schedule_video' => 30, 'locations' => 30, 'displays' => 55]);

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

        Permission::firstOrCreate(['key' => 'can_upload_banners', 'name' => 'Upload banners']);
        Permission::firstOrCreate(['key' => 'can_upload_media_contents', 'name' => 'Upload media contents']);
        Permission::firstOrCreate(['key' => 'can_update_rate', 'name' => 'Update rate']);
        Permission::firstOrCreate(['key' => 'can_change_background_color', 'name' => 'Change background color']);
        Permission::firstOrCreate(['key' => 'visibility_change_display', 'name' => 'Change display']);
        Permission::firstOrCreate(['key' => 'can_change_logo', 'name' => 'Change_logo']);
        Permission::firstOrCreate(['key' => 'can_edit_rss_news', 'name' => 'Edit rss news']);
        Permission::firstOrCreate(['key' => 'can_edit_custom_news', 'name' => 'Edit custom news']);
        Permission::firstOrCreate(['key' => 'visibility_location', 'name' => 'View location']);
        Permission::firstOrCreate(['key' => 'visibility_media', 'name' => 'View media']);
        Permission::firstOrCreate(['key' => 'visibility_banner', 'name' => 'View banner']);
        Permission::firstOrCreate(['key' => 'visibility_logo', 'name' => 'View logo']);
        Permission::firstOrCreate(['key' => 'visibility_template', 'name' => 'View template']);
        Permission::firstOrCreate(['key' => 'visibility_branding', 'name' => 'View branding']);
        Permission::firstOrCreate(['key' => 'visibility_annouce', 'name' => 'View annouce']);
        Permission::firstOrCreate(['key' => 'visibility_rate', 'name' => 'View rate']);
        Permission::firstOrCreate(['key' => 'visibility_news', 'name' => 'View news']);
        Permission::firstOrCreate(['key' => 'visibility_clock', 'name' => 'View clock']);
        Permission::firstOrCreate(['key' => 'visibility_training', 'name' => 'View training']);
        Permission::firstOrCreate(['key' => 'visibility_calendar', 'name' => 'View calendar']);
        Permission::firstOrCreate(['key' => 'visibility_help', 'name' => 'View help']);
        Permission::firstOrCreate(['key' => 'visibility_faq', 'name' => 'View faq']);
        Permission::firstOrCreate(['key' => 'visibility_tutorials', 'name' => 'View tutorials']);
        Permission::firstOrCreate(['key' => 'visibility_plans', 'name' => 'View plans']);
        Permission::firstOrCreate(['key' => 'visibility_manage_users', 'name' => 'View manage users']);
        Permission::firstOrCreate(['key' => 'visibility_activity_log', 'name' => 'View activity log']);
        Permission::firstOrCreate(['key' => 'global_setting', 'name' => 'Global Setting']);
        

        //create admin
        User::firstOrCreate(['name' => 'Administrator', 'country_id' => 160, 'email' => 'admin@gmail.com', 'role_id' => 2, 'password' => '$2y$10$/bcJvAPtPPVNPZTz6noOKuYdEgWgwdjY4.DS7nB0c8q53zXt7ZppS']);
    }
}
