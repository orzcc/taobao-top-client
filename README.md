# 淘宝API for laravel 5.1

当前淘宝客 API 升级为2.0，原「淘宝客初级包」合并到了「淘宝客基础API」。

## laravel
1. 安装
`composer require orzcc/taobao-top-client`
2. 配置
`php artisan vendor:publish --provider="Orzcc\TopClient\TopClientServiceProvider"`
3. 示例代码
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
1. 安装
`composer require orzcc/taobao-top-client`
2. 配置
* 手动复制vendor/orzcc/taobao-top-client/config/taobaotop.php到config目录下
* 在bootstrap/app.php下添加
```php
if (!class_exists('TopClient')) {
    class_alias('Orzcc\TopClient\Facades\TopClient', 'TopClient');
}
$app->register(Orzcc\TopClient\TopClientServiceProvider::class);
```
3. 示例代码
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
