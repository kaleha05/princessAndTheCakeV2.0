<?php

namespace App\Orchid\Screens;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ImageEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Add Images';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Image $image): array
    {
        $this->exists = $image->exists;

        if($this->exists){
            $this->name = 'Add an image';
        }

        return [
            'img' => $image
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
            Button::make('Create')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists),
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
            Layout::rows([
                Cropper::make('img.image')
                    ->targetRelativeUrl()
                    ->title('Add the image')
                    ->width(1000)
                    ->height(1000)

            ])
        ];
    }

    public function createOrUpdate(Image $image, Request $request)
    {
        $image->fill($request->get('img'))->save();

        Alert::info('You have successfully created an image.');

        return redirect()->route('platform.image.list');
    }

    /**
     * @param Post $post
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Image $image)
    {
        $image->delete();

        Alert::info('You have successfully deleted the image.');

        return redirect()->route('platform.image.list');
    }
}
