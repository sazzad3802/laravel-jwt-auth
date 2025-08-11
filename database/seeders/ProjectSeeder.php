<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'code' => '212',
                'name' => 'Urban Development Project',
                'start_date' => '2023-01-01',
                'program' => 'UDP',
                'type' => 'FD5',
                'donor' => 'ADB',
                'lifetime' => '3y',
                'running' => '1y',
                'fund_proposed' => '75000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '213',
                'name' => 'Rural Infrastructure Project',
                'start_date' => '2023-02-01',
                'program' => 'RIP',
                'type' => 'FD5',
                'donor' => 'World Bank',
                'lifetime' => '2y',
                'running' => '6m',
                'fund_proposed' => '50000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '214',
                'name' => 'Healthcare Improvement Initiative',
                'start_date' => '2023-03-01',
                'program' => 'HII',
                'type' => 'FD6',
                'donor' => 'WHO',
                'lifetime' => '4y',
                'running' => '8m',
                'fund_proposed' => '30000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '215',
                'name' => 'Education Reform Program',
                'start_date' => '2023-04-01',
                'program' => 'ERP',
                'type' => 'FD5',
                'donor' => 'UNICEF',
                'lifetime' => '5y',
                'running' => '1y6m',
                'fund_proposed' => '45000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '216',
                'name' => 'Water Sanitation Project',
                'start_date' => '2023-05-01',
                'program' => 'WSP',
                'type' => 'FD5',
                'donor' => 'UNDP',
                'lifetime' => '2y',
                'running' => '1y',
                'fund_proposed' => '25000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '217',
                'name' => 'Agricultural Modernization',
                'start_date' => '2023-06-01',
                'program' => 'AMP',
                'type' => 'FD6',
                'donor' => 'FAO',
                'lifetime' => '3y',
                'running' => '9m',
                'fund_proposed' => '35000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '218',
                'name' => 'Renewable Energy Project',
                'start_date' => '2023-07-01',
                'program' => 'REP',
                'type' => 'FD5',
                'donor' => 'USAID',
                'lifetime' => '6y',
                'running' => '2y',
                'fund_proposed' => '120000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '219',
                'name' => 'Digital Transformation Initiative',
                'start_date' => '2023-08-01',
                'program' => 'DTI',
                'type' => 'FD6',
                'donor' => 'Google Foundation',
                'lifetime' => '4y',
                'running' => '1y3m',
                'fund_proposed' => '60000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '220',
                'name' => 'Tourism Development Project',
                'start_date' => '2023-09-01',
                'program' => 'TDP',
                'type' => 'FD5',
                'donor' => 'EU Fund',
                'lifetime' => '3y',
                'running' => '1y',
                'fund_proposed' => '40000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '221',
                'name' => 'Climate Change Mitigation Project',
                'start_date' => '2023-10-01',
                'program' => 'CCM',
                'type' => 'FD5',
                'donor' => 'Green Climate Fund',
                'lifetime' => '5y',
                'running' => '1y6m',
                'fund_proposed' => '80000000.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Project::insert($projects);
    }
}

