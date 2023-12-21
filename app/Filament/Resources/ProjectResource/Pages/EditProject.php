<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        if (count($this->data['category_id'])){
            $this->record->categories()->detach();

            foreach ($this->data['category_id'] as $item) {
                $this->record->categories()->attach($item);
            }
        }

        $record->update($data);

        return $record;
    }
}
