<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'image' => '/client/assets/images/static/s1.png',
                'text_uk' => file_get_contents(database_path('seeds/service-stubs/screening-uk.html')),
                'text_en' => file_get_contents(database_path('seeds/service-stubs/screening-en.html')),
                'title_en' => 'Screening and early diagnosis',
                'title_uk' => 'Cкринінг та рання діагностика',
                'meta_title_en' => 'Screening and early diagnosis',
                'meta_title_uk' => 'Cкринінг та рання діагностика',
                'meta_description_en' => 'Screening and early diagnosis',
                'meta_description_uk' => 'Cкринінг та рання діагностика',
                'meta_keywords_en' => 'Screening, early diagnosis, cancer, test, miR-TEST',
                'meta_keywords_uk' => 'Cкринінг, рання діагностика, рак, аналізи, miR-ТЕСТ',
            ],
            [
                'image' => '/client/assets/images/static/s2.png',
                'text_uk' => file_get_contents(database_path('seeds/service-stubs/sensitivity-uk.html')),
                'text_en' => file_get_contents(database_path('seeds/service-stubs/sensitivity-en.html')),
                'title_en' => 'Sensitivity to chemotherapy',
                'title_uk' => 'Чутливість до хіміотерапії',
                'meta_title_en' => 'Sensitivity to chemotherapy',
                'meta_title_uk' => 'Чутливість до хіміотерапії',
                'meta_description_en' => 'Sensitivity to chemotherapy',
                'meta_description_uk' => 'Чутливість до хіміотерапії',
                'meta_keywords_en' => 'chemotherapy, ONCO Drug Test',
                'meta_keywords_uk' => 'хіміотерапія, ОНКО Drug Test',
            ],
            [
                'image' => '/client/assets/images/static/s3.png',
                'text_uk' => file_get_contents(database_path('seeds/service-stubs/oncohematological-uk.html')),
                'text_en' => file_get_contents(database_path('seeds/service-stubs/oncohematological-en.html')),
                'title_en' => 'Oncohematological studies',
                'title_uk' => 'Онкогематологічні дослідження',
                'meta_title_en' => 'Oncohematological studies',
                'meta_title_uk' => 'Онкогематологічні дослідження',
                'meta_description_en' => 'Oncohematological studies - Clinic for Personalized Diagnostics and Therapy Design',
                'meta_description_uk' => 'Онкогематологічні дослідження',
                'meta_keywords_en' => 'Oncohematological studies',
                'meta_keywords_uk' => 'Онкогематологічні дослідження',
            ],
        ];

        collect($services)->each(function (array $service) {
            Service::create(array_merge([
                'status' => true
            ], $service));
        });

    }
}
