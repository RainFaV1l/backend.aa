<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Technology;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use Throwable;

class TechnologyIndexPage extends IndexPage
{
    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name')->sortable(),
            TinyMce::make('Описание', 'description'),
            Image::make('Изображение', 'image_path')->disk('public')->dir('technology/images'),
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
