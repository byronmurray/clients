<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Note;
use App\Login;
use App\Client;
use App\Domain;
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
        Domain::truncate();
        Login::truncate();
        Note::truncate();

        $faker = Faker::create();

        $no_clients = 5;
        $no_websites = $no_clients;

        for ($i=0; $i < $no_clients ; $i++) {
          $Client = new Client;
          $Client->company = $faker->company;
          $Client->save();
        }

        for ($i=0; $i < 10 ; $i++) {
          $Contact = new Contact;
          $Contact->client_id = rand(1, $no_clients);
          $Contact->name = $faker->name;
          $Contact->phone = $faker->e164PhoneNumber;
          $Contact->email = $faker->email;
          $Contact->save();
        }

        for ($i=0; $i < $no_websites ; $i++) {
          $Website = new Website;
          $Website->client_id = $i + 1;
          $Website->created_by = $faker->name;
          $Website->start = $faker->date($format = 'd-m-Y', $max = 'now');
          $Website->expires = $faker->date($format = 'd-m-Y', $max = 'now');
          $Website->ssl = rand(0,1);
          $Website->save();
        }

        for ($i=0; $i < 20 ; $i++) {
          $Domain = new Domain;
          $Domain->website_id = rand(1, $no_websites);
          $Domain->url = $faker->url;
          $Domain->primary = rand(0,1);
          $Domain->note = $faker->sentence(5, true);
          $Domain->save();
        }

        for ($i=0; $i < 8 ; $i++) {
          $Login = new Login;
          $Login->client_id = rand(1, $no_clients);
          $Login->name = $faker->name;
          $Login->url = $faker->url;
          $Login->username = $faker->userName;
          $Login->password = $faker->password;
          $Login->notes = $faker->sentence(5, true);
          $Login->save();
        }

        for ($i=0; $i < 8 ; $i++) {
          $Note = new Note;
          $Note->client_id = rand(1, $no_clients);
          $Note->title = $faker->sentence(2, true);
          $Note->body = $faker->paragraph(2, true);
          $Note->save();
        }

    }
}
