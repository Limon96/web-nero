<?php

namespace App\Components;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

class Setting {

    public static function run(): void
    {
        self::setToConfig(self::getAll());
    }


    private static function getAll()
    {
        $settings = Cache::get('settings');

        if (is_null($settings)) {
            $settings = self::getFromStorage();
            Cache::put('settings', $settings, 360);
        }

        return $settings;
    }

    private static function setToConfig($settings): void
    {
        foreach ($settings as $setting) {
            config(['app.' . $setting->key => $setting->value]);
        }
    }

    private static function hasTable()
    {
        return Schema::hasTable('settings');
    }

    private static function getFromStorage()
    {
        if (self::hasTable()) {
            return \App\Models\Setting::all()->toBase();
        }

        return [];
    }
}
