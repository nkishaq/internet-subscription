<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('subscriptions')->insert([
            'product_name' => 'Hi-Speed',
            'download_speed' => 100,
            'upload_speed' => 100,
            'speed_mesure' => 'MB/S',
            'technology' => 'DIAL',
        ]);
        DB::table('subscriptions')->insert([
            'product_name' => 'brodband',
            'download_speed' => 200,
            'upload_speed' => 200,
            'speed_mesure' => 'MB/S',
            'technology' => 'FIBER',
        ]);
       

        $subscriptionId[0] =DB::table('subscription_classes')->insertGetId([
            'class_name' => 'A',
            'description' => 'Basic plan',
        ]);
        $subscriptionId[1] =DB::table('subscription_classes')->insertGetId([
            'class_name' => 'B',
            'description' => 'Middle plan',
        ]);
        $subscriptionRuleId[0] =DB::table('susbcription_rules')->insertGetId([
            'subcription_field_name' => 'upload_speed',
            'condition' => '<=',
            'subcription_rule_value' => '100',
        ]);
        $subscriptionRuleId[1] =DB::table('susbcription_rules')->insertGetId([
            'subcription_field_name' => 'download_speed',
            'condition' => '<=',
            'subcription_rule_value' => '100',
        ]);
        $subscriptionRuleId[2] =DB::table('susbcription_rules')->insertGetId([
            'subcription_field_name' => 'technology',
            'condition' => '==',
            'subcription_rule_value' => 'DIAL',
        ]);
        $subscriptionRuleId[3] =DB::table('susbcription_rules')->insertGetId([
            'subcription_field_name' => 'download_speed',
            'condition' => '>=',
            'subcription_rule_value' => '200',
        ]);

        DB::table('subscription_class_rules')->insert([
            'subscription_class_id' => $subscriptionId[0],
            'subscription_rule_id' => $subscriptionRuleId[0],
            
        ]);
        DB::table('subscription_class_rules')->insert([
            'subscription_class_id' => $subscriptionId[0],
            'subscription_rule_id' => $subscriptionRuleId[1],
            
        ]);
        DB::table('subscription_class_rules')->insert([
            'subscription_class_id' => $subscriptionId[0],
            'subscription_rule_id' => $subscriptionRuleId[2],
            
        ]);
        DB::table('subscription_class_rules')->insert([
            'subscription_class_id' => $subscriptionId[1],
            'subscription_rule_id' => $subscriptionRuleId[3],
            
        ]);
    }
}
