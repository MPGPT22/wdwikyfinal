<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
    DB::table('users')->insert([
      'name' => "Omega",
      'email' => 'xyz@xyz.com',
      'password' => bcrypt('password'),
      'isAdmin' => false,
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
    DB::table('characters')->insert([
    [
      'public' => true,
      'type' => 'Main',
      'name' => 'John',
      'evolClass' => true,
      'classStart' => 'Knight',
      'classSecund' => 'Thunder Knight',
      'classThird' => 'Lightning Duelist',
      'classForth' => 'Astrapomancer',
      'element' => 'Thunder',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(1),
    ],
    [
      'public' => true,
      'type' => 'Boss',
      'name' => 'Shadow',
      'evolClass' => true,
      'classStart' => 'Reaper',
      'classSecund' => 'Shadow Reaper',
      'classThird' => 'Dark Knight',
      'classForth' => 'Demon Lord',
      'element' => 'Darkenss',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(4),
    ],
    [
      'public' => true,
      'type' => 'Extra',
      'name' => 'Jeff',
      'evolClass' => false,
      'classStart' => 'Ranger',
      'classSecund' => null,
      'classThird' => null,
      'classForth' => null,
      'element' => 'Physical',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(10),
    ],
    ]);


    DB::table('skills')->insert([
    [
      'public' => true,
      'name' => 'Slash',
      'scope' => '1 Enemy',
      'element' => 'Physical',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(1),
    ],
    [
      'public' => true,
      'name' => 'Pain Nullifier',
      'scope' => 'User',
      'element' => 'Thunder',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(5),
    ],
    [
      'public' => true,
      'name' => 'Tail Swing',
      'scope' => 'all Enemies',
      'element' => 'Fire',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(10),
    ],
    ]);
    DB::table('spells')->insert([
    [
      'public' => true,
      'name' => 'Bubbles',
      'scope' => '2 Random Enemies',
      'element' => 'Water',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(1),
    ],
    ]);
    DB::table('weapons')->insert([
    [
      'public' => true,
      'type' => 'Sword',
      'name' => 'Dull Sword',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subHours(1),
    ],
    [
      'public' => true,
      'type' => 'Axe',
      'name' => 'Doom Axe',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(5),
    ],
    ]);
    DB::table('armors')->insert([
    [
      'public' => true,
      'type' => 'General Armor',
      'equipmentType' => 'Head',
      'name' => 'Bronze Helmet',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(1),
    ],
    [
      'public' => true,
      'type' => 'Small Shield',
      'equipmentType' => 'Shield',
      'name' => 'Iron Buckler',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(5),
    ],
    ]);
    DB::table('items')->insert([
    [
      'public' => true,
      'name' => 'Key',
      'type' => 'Key Item',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subHours(1),
    ],
    [
      'public' => true,
      'name' => 'bucket',
      'type' => 'Regular Item',
      'descriptionInicial' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'created_at' => Carbon::now()->subDays(5),
    ],
    ]);
    DB::table('char_classes')->insert([
    [
      'name' => 'Knight',
      'evo_lvl' => 1,
      'HP' => '0.3*i^2+10^2.4',
      'MP' => '0.09*i^2+30+((10+10)/2)^2',
      'ATK' => '0.05*i^2+10^1.5',
      'DEF' => '450/(1+1.07^-i)-225+((10+10)*0.5)^1.5',
      'MAT' => '500/(1+1.14^(-i+48))+((10/4)+10)^1,3',
      'MDEF' => '0.025*i^2+((10+10)*0.4)^1.5',
      'AGI' => '0.0025*(i-50)^3+280+10^1.7',
    ],
    [
      'name' => 'Thunder Knight',
      'evo_lvl' => 2,
      'HP' => '0.26*i^2+10^2.4',
      'MP' => '0.3*i^2+30+((10+10)/2)^2',
      'ATK' => '0.125*i^2+10^1.5',
      'DEF' => '950/(1+1.07^-i)-484+((10+10)*0.5)^1.5',
      'MAT' => '1250/(1+1.14^(-i+48))-2+((10/4)+10)^1.3',
      'MDEF' => '0.05*i^2+((10+10)*0.4)^1.5',
      'AGI' => '0.0048*(i-50)^3+550+10^1.7',
    ],
    [
      'name' => 'Ligtning Duelist',
      'evo_lvl' => 3,
      'HP' => '0.24*i^2+10^2.4',
      'MP' => '(i-28)^2+100+((10+10)/2)^2',
      'ATK' => '0.19*i^2+10^1.5',
      'DEF' => '1500/(1+1.07^-i)-768+((10+10)*0.5)^1.5',
      'MAT' => '1900/(1+1.14^(-i+48))-3+((10/4)+10)^1.3',
      'MDEF' => '0.075*i^2+((10+10)*0.4)^1.5',
      'AGI' => '0.008*(i-50)^3+927+10^1.7',
    ],
    [
      'name' => 'Astrapomancer',
      'evo_lvl' => 4,
      'HP' => '0.215*i^2+10^2.4',
      'MP' => '1.25*(i-28)^2+200+((10+10)/2)^2',
      'ATK' => '0.25*i^2+10^1.5',
      'DEF' => '2000/(1+1.07^-i)-1026+((10+10)*0.5)^1.5',
      'MAT' => '2500/(1+1.14^(-i+48))-4+((10/4)+10)^1.3',
      'MDEF' => '0.1*i^2+((10+10)*0.4)^1.5',
      'AGI' => '0.0105*(i-50)^3+1221+10^1.7',
    ],
    ]);


    }
}
