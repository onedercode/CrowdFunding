<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->delete();
        $users = array(
            array('id' => '1',       'user_id' => '1',    'category_id' => '1',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '2',       'user_id' => '1',    'category_id' => '1',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '3',       'user_id' => '1',    'category_id' => '1',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '2',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '4',       'user_id' => '1',    'category_id' => '1',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '3',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '5',       'user_id' => '2',    'category_id' => '1',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '4',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '6',       'user_id' => '2',    'category_id' => '2',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '7',       'user_id' => '2',    'category_id' => '2',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '8',       'user_id' => '2',    'category_id' => '3',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '9',       'user_id' => '3',    'category_id' => '3',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '10',      'user_id' => '3',    'category_id' => '4',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '11',      'user_id' => '3',    'category_id' => '4',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '12',      'user_id' => '3',    'category_id' => '5',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '13',      'user_id' => '4',    'category_id' => '5',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '14',      'user_id' => '4',    'category_id' => '6',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '15',      'user_id' => '4',    'category_id' => '6',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '1',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '16',      'user_id' => '4',    'category_id' => '7',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '0',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '17',      'user_id' => '5',    'category_id' => '7',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '0',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '18',      'user_id' => '5',    'category_id' => '8',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '0',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '0',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '19',      'user_id' => '5',    'category_id' => '8',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '0',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '1',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
            array('id' => '20',      'user_id' => '5',    'category_id' => '8',     'slug' => 'a-campaign',     'title' => 'a campaign',     'short_description' => 'this is a campaign',   'description' => 'this is a campaign for help',     'feature_image' => '/uploads/campaign/full/16321297892m53y-bg1.jpg',      'feature_video' => '',      'goal' => '100000',     'end_method' => '0',    'start_date' => '2021-01-01',   'end_date' => '2021-12-30',     'min_amount' => '10',   'max_amount' => '100000',     'recommended_amount' => '500',      'amount_prefilled' => '10,50,100,500,1000',      'status' => '2',       'created_at' => '2021-08-05 04:17:09',  'updated_at' => '2021-08-05 04:17:09'),
        );
        
        DB::table('campaigns')->insert($users);
    }
}
