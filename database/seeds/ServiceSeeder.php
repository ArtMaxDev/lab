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
                'url' => 'screening-and-early-diagnosis',
                'text_en' => file_get_contents(database_path('seeds/service-stubs/screening-en.html')),
                'text_uk' => file_get_contents(database_path('seeds/service-stubs/screening-uk.html')),
                'title_en' => 'Screening and early diagnosis',
                'title_uk' => 'Cкринінг та рання діагностика',
                'description_en' => 'MiR-TEST<br/> ONCO Check-Up',
                'description_uk' => 'MiR-TECT<br/> ОНКО Check-Up',
                'meta_title_en' => 'Screening and early diagnosis',
                'meta_title_uk' => 'Cкринінг та рання діагностика',
                'meta_description_en' => 'Screening and early diagnosis',
                'meta_description_uk' => 'Cкринінг та рання діагностика',
                'meta_keywords_en' => 'Screening, early diagnosis, cancer, test, miR-TEST',
                'meta_keywords_uk' => 'Cкринінг, рання діагностика, рак, аналізи, miR-ТЕСТ',
            ],
            [
                'image' => '/client/assets/images/static/s2.png',
                'url' => 'sensitivity-to-chemotherapy',
                'text_en' => file_get_contents(database_path('seeds/service-stubs/sensitivity-en.html')),
                'text_uk' => file_get_contents(database_path('seeds/service-stubs/sensitivity-uk.html')),
                'title_en' => 'Sensitivity to chemotherapy',
                'title_uk' => 'Чутливість до хіміотерапії',
                'description_en' => 'Individual sensitivity to antitumor drugs',
                'description_uk' => 'Індивідуальна чутливість до протипухлинних препаратів',
                'meta_title_en' => 'Sensitivity to chemotherapy',
                'meta_title_uk' => 'Чутливість до хіміотерапії',
                'meta_description_en' => 'Sensitivity to chemotherapy',
                'meta_description_uk' => 'Чутливість до хіміотерапії',
                'meta_keywords_en' => 'chemotherapy, ONCO Drug Test',
                'meta_keywords_uk' => 'хіміотерапія, ОНКО Drug Test',
            ],
            [
                'image' => '/client/assets/images/static/s3.png',
                'url' => 'oncohematological-studies',
                'text_en' => file_get_contents(database_path('seeds/service-stubs/oncohematological-en.html')),
                'text_uk' => file_get_contents(database_path('seeds/service-stubs/oncohematological-uk.html')),
                'title_en' => 'Oncohematological studies',
                'title_uk' => 'Онкогематологічні дослідження',
                'description_en' => null,
                'description_uk' => null,
                'meta_title_en' => 'Oncohematological studies',
                'meta_title_uk' => 'Онкогематологічні дослідження',
                'meta_description_en' => 'Oncohematological studies - Clinic for Personalized Diagnostics and Therapy Design',
                'meta_description_uk' => 'Онкогематологічні дослідження',
                'meta_keywords_en' => 'Oncohematological studies',
                'meta_keywords_uk' => 'Онкогематологічні дослідження',
            ],
            [
                'image' => '/client/assets/images/static/s4.png',
                'url' => config('app.url') . '/storage/price.pdf',
                'url_target' => '_blank',
                'text_en' => 'Basic clinical tests',
                'text_uk' => 'Загальноклінічні аналізи',
                'title_en' => 'Basic clinical tests',
                'title_uk' => 'Загальноклінічні аналізи',
                'description_en' => null,
                'description_uk' => null,
                'meta_title_en' => null,
                'meta_title_uk' => null,
                'meta_description_en' => null,
                'meta_description_uk' => null,
                'meta_keywords_en' => null,
                'meta_keywords_uk' => null,
            ],
        ];

        collect($services)->each(function (array $service) {
            Service::create(array_merge([
                'status' => true
            ], $service));
        });

    }
}
