<?php

namespace App\Observers;

use App\Models\PortfolioCategory;
use Illuminate\Support\Str;

class PortfolioCategoryObserver
{

    public function created(PortfolioCategory $item)
    {
        //
    }
    public function creating(PortfolioCategory $item)
    {
        $this->setImage($item);
        $this->setSlug($item);
    }

    /**
     * Handle the PortfolioCategory "updated" event.
     *
     * @param  \App\Models\PortfolioCategory  $item
     * @return void
     */
    public function updated(PortfolioCategory $item)
    {
        //
    }


    public function updating(PortfolioCategory $item)
    {
        $this->setImage($item);
        $this->setSlug($item);
    }

    /**
     * Handle the PortfolioCategory "deleted" event.
     *
     * @param  \App\Models\PortfolioCategory  $item
     * @return void
     */
    public function deleted(PortfolioCategory $item)
    {
        //
    }

    /**
     * Handle the PortfolioCategory "restored" event.
     *
     * @param  \App\Models\PortfolioCategory  $item
     * @return void
     */
    public function restored(PortfolioCategory $item)
    {
        //
    }

    /**
     * Handle the PortfolioCategory "force deleted" event.
     *
     * @param  \App\Models\PortfolioCategory  $item
     * @return void
     */
    public function forceDeleted(PortfolioCategory $item)
    {
        //
    }

    private function setSlug(PortfolioCategory $item)
    {
        if (empty($item->slug)) {
            $item->slug = Str::slug($item->title);
        }
    }

    private function setText(PortfolioCategory $item)
    {
        if (empty($item->text)) {
            $item->text = '';
        }
    }

    protected function setImage(PortfolioCategory $item)
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

}
