<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Project;

use App\MoonShine\Resources\ProjectCategoryResource;
use App\MoonShine\Resources\ServiceResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Field;
use Throwable;

class ProjectFormPage extends FormPage
{
    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make(),
            Text::make('Название', 'name'),
            Text::make('Описание', 'description'),
            Image::make('Изображение', 'preview_path')->disk('public')->dir('project/images'),
            Number::make('Стоимость', 'price'),
            BelongsTo::make('Категория', 'category', fn($item) => $item->name, resource: new ProjectCategoryResource())->searchable(),
            BelongsTo::make('Услуга', 'service', fn($item) => $item->name, resource: new ServiceResource())->searchable(),
            Switcher::make('Опубликован', 'visibility'),
            Text::make('Дата завершения', 'completed_at'),
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
