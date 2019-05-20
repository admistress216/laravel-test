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
