<?php

namespace App\Observers;

use App\Components\Image\Image;
use App\Models\Portfolio ;
use Illuminate\Support\Str;

class PortfolioObserver
{

    public function created(Portfolio $item)
    {
        //
    }

    public function creating(Portfolio $item)
    {
        $this->setImage($item);
        $this->setSlug($item);
        $this->processingText($item);
    }

    /**
     * Handle the Portfolio "updated" event.
     *
     * @param  \App\Models\Portfolio  $item
     * @return void
     */
    public function updated(Portfolio $item)
    {
        //
    }

    public function updating(Portfolio $item)
    {
        $this->setImage($item);
        $this->setSlug($item);
        $this->processingText($item);
    }

    /**
     * Handle the Portfolio "deleted" event.
     *
     * @param  \App\Models\Portfolio  $item
     * @return void
     */
    public function deleted(Portfolio $item)
    {
        //
    }

    /**
     * Handle the Portfolio "restored" event.
     *
     * @param  \App\Models\Portfolio  $item
     * @return void
     */
    public function restored(Portfolio $item)
    {
        //
    }

    /**
     * Handle the Portfolio "force deleted" event.
     *
     * @param  \App\Models\Portfolio  $item
     * @return void
     */
    public function forceDeleted(Portfolio $item)
    {
        //
    }

    private function setSlug(Portfolio $item)
    {
        if (empty($item->slug)) {
            $item->slug = Str::slug($item->title);
        }
    }

    protected function setImage(Portfolio $item)
    {
        $file = request()->file('image');

        if ($file) { // был загружен файл изображения
            $path = $file->store('portfolio/images', 'public');
            $item->image = 'storage/' . $path;
        }

        if (empty($item->image)) {
            $item->image = '';
        }
    }

    protected function processingText(Portfolio $item)
    {
        if (!isset($item->text)) {
            $item->text = '';
        }

        $item->text = Image::replaceBase64FromHTML($item->text);
    }

}
