<?php

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = [
            [
                'image' => '/client/assets/images/static/team/1',
                'name_en' => trans('team.members.0.name', [], 'en'),
                'name_uk' => trans('team.members.0.name', [], 'uk'),
                'description_en' => trans('team.members.0.description', [], 'en'),
                'description_uk' => trans('team.members.0.description', [], 'uk'),
            ],
            [
                'image' => '/client/assets/images/static/team/2',
                'name_en' => trans('team.members.1.name', [], 'en'),
                'name_uk' => trans('team.members.1.name', [], 'uk'),
                'description_en' => trans('team.members.1.description', [], 'en'),
                'description_uk' => trans('team.members.1.description', [], 'uk'),
            ],
            [
                'image' => '/client/assets/images/static/team/3',
                'name_en' => trans('team.members.2.name', [], 'en'),
                'name_uk' => trans('team.members.2.name', [], 'uk'),
                'description_en' => trans('team.members.2.description', [], 'en'),
                'description_uk' => trans('team.members.2.description', [], 'uk'),
            ],
            [
                'image' => '/client/assets/images/static/team/4',
                'name_en' => trans('team.members.3.name', [], 'en'),
                'name_uk' => trans('team.members.3.name', [], 'uk'),
                'description_en' => trans('team.members.3.description', [], 'en'),
                'description_uk' => trans('team.members.3.description', [], 'uk'),
            ],
            [
                'image' => '/client/assets/images/static/team/5',
                'name_en' => trans('team.members.4.name', [], 'en'),
                'name_uk' => trans('team.members.4.name', [], 'uk'),
                'description_en' => trans('team.members.4.description', [], 'en'),
                'description_uk' => trans('team.members.4.description', [], 'uk'),
            ],
            [
                'image' => '/client/assets/images/static/team/6',
                'name_en' => trans('team.members.5.name', [], 'en'),
                'name_uk' => trans('team.members.5.name', [], 'uk'),
                'description_en' => trans('team.members.5.description', [], 'en'),
                'description_uk' => trans('team.members.5.description', [], 'uk'),
            ],
        ];

        collect($team)->each(function (array $member) {
            Team::create($member);
        });

    }
}
