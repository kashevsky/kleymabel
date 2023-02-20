<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        \App\Models\Category::class => 'App\Http\Sections\Categories',
        \App\Models\Product::class => 'App\Http\Sections\Products',
        \App\Models\Basket::class => 'App\Http\Sections\Baskets',
        \App\Models\MenuCategory::class => 'App\Http\Sections\MenuCategories',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
