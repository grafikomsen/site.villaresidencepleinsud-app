<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'name' => 'Jean Dupont',
            'email' => 'jean.dupont@example.com',
            'phone' => '+33612345678',
            'visit_date' => Carbon::now()->addDays(3)->setHour(14)->setMinute(30),
            'message' => 'Très intéressé par la visite de la villa. J\'aimerais avoir plus de détails sur les équipements.',
            'contacted_at' => Carbon::now(),
        ]);

        Reservation::create([
            'name' => 'Marie Martin',
            'email' => 'marie.martin@example.com',
            'phone' => '+33698765432',
            'visit_date' => Carbon::now()->addDays(5)->setHour(10)->setMinute(0),
            'message' => 'Souhaitez une visite rapidement. Nous cherchons une propriété de luxe.',
            'contacted_at' => null,
        ]);

        Reservation::create([
            'name' => 'Robert Bernard',
            'email' => 'robert.bernard@example.com',
            'phone' => '+33611223344',
            'visit_date' => Carbon::now()->addDays(7)->setHour(16)->setMinute(0),
            'message' => 'Intéressé pour une visite en fin de semaine.',
            'contacted_at' => null,
        ]);

        Reservation::create([
            'name' => 'Sophie Lefevre',
            'email' => 'sophie.lefevre@example.com',
            'phone' => '+33699887766',
            'visit_date' => Carbon::now()->addDays(2)->setHour(11)->setMinute(30),
            'message' => 'Demande de visite pour samedi prochain si possible.',
            'contacted_at' => Carbon::now(),
        ]);
    }
}
