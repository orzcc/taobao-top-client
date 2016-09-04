# 淘宝API for laravel/lumen (5.1|5.2)

当前淘宝客 API 升级为2.0，原「淘宝客初级包」合并到了「淘宝客基础API」。

## laravel
### 安装
`composer require orzcc/taobao-top-client`
### 配置
* 在config/app.php中的providers数组中添加`Orzcc\TopClient\TopClientServiceProvider::class,`
* 在config/app.php中的aliases数组中添加`'TopClient' => Orzcc\TopClient\Facades\TopClient::class,`
* 执行 `php artisan vendor:publish --provider="Orzcc\TopClient\TopClientServiceProvider"` 生成配置文件
* 编辑.env文件，设置appid,appsecret
### 示例代码
```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('手机');
$req->setSort("tk_total_sales");
$req->setPageNo('1'); // 实验后发现必需用字符串的数字才能正确分页
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```

## lumen
### 安装
`composer require orzcc/taobao-top-client`

### 配置
* 手动复制vendor/orzcc/taobao-top-client/config/taobaotop.php到config目录下
* 在bootstrap/app.php下添加
```php
if (!class_exists('TopClient')) {
    class_alias('Orzcc\TopClient\Facades\TopClient', 'TopClient');
}
$app->register(Orzcc\TopClient\TopClientServiceProvider::class);
```
* 编辑.env文件，设置appid,appsecret

### 示例代码
```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('手机');
$req->setSort("tk_total_sales");
$req->setPageNo('1'); // 实验后发现必需用字符串的数字才能正确分页
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```
