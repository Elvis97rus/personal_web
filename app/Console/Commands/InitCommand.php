<?php

namespace App\Console\Commands;

use App\Helpers\Experience as ExperienceHelper;
use App\Helpers\Skill;
use App\Models\Category;
use App\Models\Experience;
use App\Models\MediaItem;
use App\Models\Project;
use Illuminate\Console\Command;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $categories = \App\Helpers\Category::getCategoryList();
        foreach ($categories as $item){
            $cat = Category::updateOrCreate(['title' => $item],[]);
            $this->info("created/updated Category with id: " . $cat->id );
        }

        $projects = \App\Helpers\Project::getProjectList();
        foreach ($projects as $item){
            $project = Project::updateOrCreate(
              [
                  'title' => $item['title'],
                  'lang' => $item['lang'],
              ],
              [
                  'active' => $item['active'],
                  'content' => $item['content'],
                  'position' => $item['position'],
              ]
            );
            $this->info("created/updated Project with id: " . $project->id );

            if ($project->id){
              $tags = explode(', ', $item['tags']);
              $attachment = Category::whereIn('title', $tags)->pluck('id');
              $project->categories()->attach($attachment);
                $this->info("created/updated Project with id: " . $project->id . print_r($attachment,1));
          }
        }

        $skills = Skill::getSkillList();
        foreach ($skills as $item){
            MediaItem::updateOrCreate(
                ['title' => $item['title']],
                [
                    'key' => $item['key'],
                    'content' => $item['content'],
                    'position' => $item['position'],
                    'active' => $item['active'],
                ]
            );

            $this->info($item['title'] . ' updated.');
        }

        $experience = ExperienceHelper::getExperienceList();
        foreach ($experience as $item){
            Experience::updateOrCreate(
                [
                    'date' => $item['date'],
                    'lang' => $item['lang'],
                ],
                [
                    'heading' => $item['heading'],
                    'stack' => $item['stack'],
                    'tasks' => $item['tasks'],
                    'skills' => $item['skills'],
                    'active' => $item['active'],
                    'position' => $item['position']
                ]
            );

            $this->info($item['date'] . ' updated.');
        }

    }
}
