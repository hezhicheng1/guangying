<?php
namespace Gy\Packagetest;

use Illuminate\Support\ServiceProvider;

class PackagetestServiceProvider extends ServiceProvider
{
     /**
      * 服务提供者加是否延迟加载.
      *
      * @var bool
      */
     protected $defer = true; // 延迟加载服务
     /**
      * Bootstrap the application services.
      *
      * @return void
      */
     public function boot()
     {
         $this->loadViewsFrom(__DIR__ . '/views', 'Packagetest'); // 视图目录指定
         $this->publishes([
             __DIR__.'/views/packagetest.blade.php' => base_path('resources/views/packagetest.blade.php'),  // 发布视图目录到resources 下
             __DIR__.'/config/packagetest.php' => config_path('packagetest.php'), // 发布配置文件到 laravel 的config 下
             __DIR__.'/database/2023_04_02_001616_create_table_banner.php' => base_path('database/migrations/2023_04_02_001616_create_table_banner.php'),  // 发布数据库表迁移文件
              __DIR__.'/model/Banner.php' => base_path('app/Models/Banner.php'),  // 发布模型文件
              __DIR__.'/seeds/BannerTableSeeder.php' => base_path('database/seeds/BannerTableSeeder.php'),  // 发布填充文件
         ]);
     }
     /**
      * Register the application services.
      *
      * @return void
      */
     public function register()
     {
          // 单例绑定服务
         $this->app->singleton('packagetest', function ($app) {
             return new Packagetest($app['session'], $app['config']);
         });
     }
     /**
      * Get the services provided by the provider.
      *
      * @return array
      */
     public function provides()
     {
         // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
         return ['packagetest'];
     }
 }