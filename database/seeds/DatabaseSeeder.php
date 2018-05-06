<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Client;
use App\Contact;
use App\Website;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Client::truncate();
        Contact::truncate();
        Website::truncate();

        $faker = Faker::create();

        for ($i=0; $i < 5 ; $i++) {
          $Client = new Client;
          $Client->company = $faker->company;
          $Client->save();
        }

        for ($i=0; $i < 10 ; $i++) {
          $Contact = new Contact;
          $Contact->client_id = rand(1,5);
          $Contact->name = $faker->name;
          $Contact->phone = $faker->e164PhoneNumber;
          $Contact->email = $faker->email;
          $Contact->save();
        }

        for ($i=0; $i < 8 ; $i++) {
          $Website = new Website;
          $Website->client_id = rand(1,5);
          $Website->url = $faker->url;
          $Website->expires = $faker->date($format = 'd-m-Y', $max = 'now');
          $Website->ssl = rand(0,1);
          $Website->save();
        }

    }
}
