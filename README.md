# 淘宝API for laravel 5.1

当前淘宝客 API 升级为2.0，原「淘宝客初级包」合并到了「淘宝客基础API」。

```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('手机');
$req->setSort("tk_total_sales");
$req->setPageNo(1);
$req->setPageSize(40);
$resp = $topclient->execute($req);
dd($resp);
```
