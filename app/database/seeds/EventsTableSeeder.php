<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		$event=array(['nom_evento'=>'Concierto', 'lugar'=>'DF', 'desc_evento'=>'bien chido',
		 'created_at'=> new DateTime,'updated_at'=> new DateTime, 'user_id'=>1]);
		DB::table('events')->insert($event);
	}

}