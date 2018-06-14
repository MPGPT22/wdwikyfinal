<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('users')->insert([
      'name' => "MPGPT",
      'email' => 'abc@abc.com',
      'password' => bcrypt('password'),
      'isAdmin' => true,
      'adminRole' => 'GameMaster',
        ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "General Armor",
      ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "Magic Armor",
      ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "Light Armor",
      ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "Heavy Armor",
      ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "Small Shield",
      ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "Large Shield",
      ]
    );
    DB::table('armor_types')->insert([
          'public' => true,
          'name' => "Accessory",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Physical",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Fire",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Thunder",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Water",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Earth",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Wind",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Light",
      ]
    );
    DB::table('elements')->insert([
          'public' => true,
          'name' => "Darkness",
      ]
    );
    DB::table('item_types')->insert([
          'public' => true,
          'name' => "Regular Item",
      ]
    );
    DB::table('item_types')->insert([
          'public' => true,
          'name' => "Key Item",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "1 Enemy",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "All Enemies",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "1 Random Enemy",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "2 Random Enemies",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "3 Random Enemies",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "4 Random Enemies",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "1 Ally",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "All Allies",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "1 Ally (Dead)",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "All Allies (Dead)",
      ]
    );
    DB::table('spell_skill_targets')->insert([
          'public' => true,
          'name' => "User",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Dagger",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Sword",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Flail",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Axe",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Whip",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Cane",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Bow",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Crossbow",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Gun",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Claw",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Glove",
      ]
    );
    DB::table('weapon_types')->insert([
          'public' => true,
          'name' => "Spear",
      ]
    );
    DB::table('equipment_types')->insert([
          'public' => true,
          'name' => "Head",
      ]
    );
    DB::table('equipment_types')->insert([
          'public' => true,
          'name' => "Body",
      ]
    );
    DB::table('equipment_types')->insert([
          'public' => true,
          'name' => "Boots",
      ]
    );
    DB::table('equipment_types')->insert([
          'public' => true,
          'name' => "Ring",
      ]
    );
    DB::table('equipment_types')->insert([
          'public' => true,
          'name' => "Necklace",
      ]
    );
    DB::table('equipment_types')->insert([
          'public' => true,
          'name' => "Belt",
      ]
    );


    }
}
