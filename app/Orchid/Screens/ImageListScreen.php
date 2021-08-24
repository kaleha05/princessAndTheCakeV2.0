<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\ImageListLayout;
use App\Models\Image;
use Orchid\Screen\Actions\Link;

class ImageListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'All Images';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'images' => Image::paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Add new')
            ->icon('pencil')
            ->route('platform.image.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            ImageListLayout::class
        ];
    }
}
