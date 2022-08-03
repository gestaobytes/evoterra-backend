<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Editorial;
use App\Observers\EditorialObserver;
use App\Models\Sitepage;
use App\Observers\SitepageObserver;
use App\Models\User;
use App\Observers\UserObserver;
use App\Models\Role;
use App\Observers\RoleObserver;
use App\Models\Permission;
use App\Observers\PermissionObserver;
use App\Models\Galery;
use App\Observers\GaleryObserver;
use App\Models\Institutiona;
use App\Observers\InstitutionaObserver;
use App\Models\About;
use App\Observers\AboutObserver;
use App\Models\Team;
use App\Observers\TeamObserver;
use App\Models\Testimonial;
use App\Observers\TestimonialObserver;
use App\Models\Post;
use App\Observers\PostObserver;
use App\Models\PermissionRole;
use App\Observers\PermissionRoleObserver;
use App\Models\RoleUser;
use App\Observers\RoleUserObserver;
use App\Models\Itemsgallery;
use App\Observers\ItemsgalleryObserver;


class AppServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->app->bind(
            'App\Interfaces\v1\EditorialInterface',
            'App\Repositories\v1\EditorialRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\SitepageInterface',
            'App\Repositories\v1\SitepageRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\UserInterface',
            'App\Repositories\v1\UserRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\RoleInterface',
            'App\Repositories\v1\RoleRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\PermissionInterface',
            'App\Repositories\v1\PermissionRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\GaleryInterface',
            'App\Repositories\v1\GaleryRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\InstitutionaInterface',
            'App\Repositories\v1\InstitutionaRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\AboutInterface',
            'App\Repositories\v1\AboutRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\TeamInterface',
            'App\Repositories\v1\TeamRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\TestimonialInterface',
            'App\Repositories\v1\TestimonialRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\PostInterface',
            'App\Repositories\v1\PostRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\PermissionRoleInterface',
            'App\Repositories\v1\PermissionRoleRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\RoleUserInterface',
            'App\Repositories\v1\RoleUserRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\ItemsgalleryInterface',
            'App\Repositories\v1\ItemsgalleryRepository'
        );

        /** provavelmente, os binds abaixo sao padrao */
        $this->app->bind(
            'App\Interfaces\v1\_HomeInterface',
            'App\Repositories\v1\_HomeRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\_WebInterface',
            'App\Repositories\v1\_WebRepository'
        );
        $this->app->bind(
            'Illuminate\Contracts\Filesystem\Factory',
            'Illuminate\Contracts\Filesystem\Factory'
        );
    }

    public function boot()
    {
        Schema::defaultStringLength(191);

        Editorial::observe(EditorialObserver::class);
        Sitepage::observe(SitepageObserver::class);
        User::observe(UserObserver::class);
        Role::observe(RoleObserver::class);
        Permission::observe(PermissionObserver::class);
        Galery::observe(GaleryObserver::class);
        Institutiona::observe(InstitutionaObserver::class);
        About::observe(AboutObserver::class);
        Team::observe(TeamObserver::class);
        Testimonial::observe(TestimonialObserver::class);
        Post::observe(PostObserver::class);
        PermissionRole::observe(PermissionRoleObserver::class);
        RoleUser::observe(RoleUserObserver::class);
        Itemsgallery::observe(ItemsgalleryObserver::class);
    }
}
