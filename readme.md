# laravel项目测试
### 1. 创建模型
```php
php artisan make:model Model/Admin -m
参数:
-m: create a new migration file for the model
效果:
创建App/Model/Admin.php和database/migrations/..create_admins_table.php文件
```

### 2. 生成数据
```php
php artisan tinker
factory(App\Model\Admin::class,3)->create(); //利用database/factories/ModelFactory.php文件规则生成测试数据
```

### 3. 创建控制器
```php
php artisan make:constroller Admin/EntryController
```

### 4. 创建中间件
```php
php artisan make:middleware AdminMiddleware
```

### 5.laravel自带Auth总结
```php
//返回用户是否登录,登录true,未登录false
Auth::check()
//尝试用户登录,登录成功返回true,失败false
Auth::attempt()
```
