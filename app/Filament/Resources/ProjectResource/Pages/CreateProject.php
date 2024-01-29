<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use App\Models\CategoryProject;
use App\Models\Project;
use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        return static::getModel()::create($data);
    }

    protected function afterCreate(): void
    {
        if (count($this->data['category_id'])){
            $this->record->categories()->detach();

            foreach ($this->data['category_id'] as $item) {
                $this->record->categories()->attach($item);
            }
        }
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['file'] = json_encode($data['file']);
        return $data;
    }
}
