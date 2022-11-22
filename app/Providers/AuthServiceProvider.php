<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('danh-sach-tin-tuc', function ($user) {
            return $user->checkPermissionAccess('danh-sach-tin-tuc');
        });
        Gate::define('sua-tin-tuc', function ($user) {
            return $user->checkPermissionAccess('sua-tin-tuc');
        });
        Gate::define('them-tin-tuc', function ($user) {
            return $user->checkPermissionAccess('them-tin-tuc');
        });
        Gate::define('xoa-tin-tuc', function ($user) {
            return $user->checkPermissionAccess('xoa-tin-tuc');
        });

        Gate::define('danh-sach-loaitintuc', function ($user) {
            return $user->checkPermissionAccess('danh-sach-loaitintuc');
        });
        Gate::define('sua-loaitintuc', function ($user) {
            return $user->checkPermissionAccess('sua-loaitintuc');
        });
        Gate::define('them-loaitintuc', function ($user) {
            return $user->checkPermissionAccess('them-loaitintuc');
        });
        Gate::define('xoa-loaitintuc', function ($user) {
            return $user->checkPermissionAccess('xoa-loaitintuc');
        });

        Gate::define('danh-sach-san-pham', function ($user) {
            return $user->checkPermissionAccess('danh-sach-san-pham');
        });
        Gate::define('sua-san-pham', function ($user) {
            return $user->checkPermissionAccess('sua-san-pham');
        });
        Gate::define('them-san-pham', function ($user) {
            return $user->checkPermissionAccess('them-san-pham');
        });
        Gate::define('xoa-san-pham', function ($user) {
            return $user->checkPermissionAccess('xoa-san-pham');
        });

        Gate::define('danh-sach-loai-san-pham', function ($user) {
            return $user->checkPermissionAccess('danh-sach-loai-san-pham');
        });
        Gate::define('sua-loai-san-pham', function ($user) {
            return $user->checkPermissionAccess('sua-loai-san-pham');
        });
        Gate::define('them-loai-san-pham', function ($user) {
            return $user->checkPermissionAccess('them-loai-san-pham');
        });
        Gate::define('xoa-loai-san-pham', function ($user) {
            return $user->checkPermissionAccess('xoa-loai-san-pham');
        });

        Gate::define('danh-sach-san-pham-banner', function ($user) {
            return $user->checkPermissionAccess('danh-sach-san-pham-banner');
        });
        Gate::define('sua-san-pham-banner', function ($user) {
            return $user->checkPermissionAccess('sua-san-pham-banner');
        });
        Gate::define('them-san-pham-banner', function ($user) {
            return $user->checkPermissionAccess('them-san-pham-banner');
        });
        Gate::define('xoa-san-pham-banner', function ($user) {
            return $user->checkPermissionAccess('xoa-san-pham-banner');
        });

        Gate::define('danh-sach-banner', function ($user) {
            return $user->checkPermissionAccess('danh-sach-banner');
        });
        Gate::define('sua-banner', function ($user) {
            return $user->checkPermissionAccess('sua-banner');
        });
        Gate::define('them-banner', function ($user) {
            return $user->checkPermissionAccess('them-banner');
        });
        Gate::define('xoa-banner', function ($user) {
            return $user->checkPermissionAccess('xoa-banner');
        });

        Gate::define('danh-sach-phan-hoi', function ($user) {
            return $user->checkPermissionAccess('danh-sach-phan-hoi');
        });
        Gate::define('them-phan-hoi', function ($user) {
            return $user->checkPermissionAccess('them-phan-hoi');
        });
        Gate::define('xoa-phan-hoi', function ($user) {
            return $user->checkPermissionAccess('xoa-phan-hoi');
        });

        Gate::define('danh-sach-duan', function ($user) {
            return $user->checkPermissionAccess('danh-sach-duan');
        });
        Gate::define('sua-duan', function ($user) {
            return $user->checkPermissionAccess('sua-duan');
        });
        Gate::define('them-duan', function ($user) {
            return $user->checkPermissionAccess('them-duan');
        });
        Gate::define('xoa-duan', function ($user) {
            return $user->checkPermissionAccess('xoa-duan');
        });

        Gate::define('danh-sach-khachhang', function ($user) {
            return $user->checkPermissionAccess('danh-sach-khachhang');
        });
        Gate::define('sua-khachhang', function ($user) {
            return $user->checkPermissionAccess('sua-khachhang');
        });
        Gate::define('them-khachhang', function ($user) {
            return $user->checkPermissionAccess('them-khachhang');
        });
        Gate::define('xoa-khachhang', function ($user) {
            return $user->checkPermissionAccess('xoa-khachhang');
        });

        Gate::define('danh-sach-loaikhach', function ($user) {
            return $user->checkPermissionAccess('danh-sach-loaikhach');
        });
        Gate::define('sua-loaikhach', function ($user) {
            return $user->checkPermissionAccess('sua-loaikhach');
        });
        Gate::define('them-loaikhach', function ($user) {
            return $user->checkPermissionAccess('them-loaikhach');
        });
        Gate::define('xoa-loaikhach', function ($user) {
            return $user->checkPermissionAccess('xoa-loaikhach');
        });

        Gate::define('danh-sach-role', function ($user) {
            return $user->checkPermissionAccess('danh-sach-role');
        });
        Gate::define('sua-role', function ($user) {
            return $user->checkPermissionAccess('sua-role');
        });
        Gate::define('them-role', function ($user) {
            return $user->checkPermissionAccess('them-role');
        });
        Gate::define('xoa-role', function ($user) {
            return $user->checkPermissionAccess('xoa-role');
        });

        Gate::define('danh-sach-user', function ($user) {
            return $user->checkPermissionAccess('danh-sach-user');
        });
        Gate::define('sua-user', function ($user) {
            return $user->checkPermissionAccess('sua-user');
        });
        Gate::define('them-user', function ($user) {
            return $user->checkPermissionAccess('them-user');
        });
        Gate::define('xoa-user', function ($user) {
            return $user->checkPermissionAccess('xoa-user');
        });
    }
}
