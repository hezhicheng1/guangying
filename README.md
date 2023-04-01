#安装扩展包 
composer update gy492/hzc

在config/app.php文件添加配置
providers 里添加
Gy\Packagetest\PackagetestServiceProvider::class  
aliases 里添加
'Packagetest' => Gy\Packagetest\Facades\Packagetest::class 

执行 composer dump-autoload 

发布服务
php artisan vendor:publish --provider="Gy\Packagetest\PackagetestServiceProvider" 