# Taobao Affiliate API for Laravel/Lumen

The Taobao Affiliate API has been upgraded to version 2.0, merging the "Taobao Affiliate Basic Package" into the "Taobao Affiliate Basic API".

## Laravel Integration

### Installation

Install the package via Composer:

```bash
composer require orzcc/taobao-top-client
```

### Configuration

1. Add the service provider to the `providers` array in `config/app.php`:

```php
Orzcc\TopClient\TopClientServiceProvider::class,
```

2. Add the facade to the `aliases` array in `config/app.php`:

```php
'TopClient' => Orzcc\TopClient\Facades\TopClient::class,
```

3. Publish the configuration file:

```bash
php artisan vendor:publish --provider="Orzcc\TopClient\TopClientServiceProvider"
```

4. Set your `appid` and `appsecret` in the `.env` file:

```
TAOBAO_APP_KEY=your_app_key
TAOBAO_APP_SECRET=your_app_secret
```

### Usage Example

```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('phone');
$req->setSort("tk_total_sales");
$req->setPageNo('1');  // Note: Use string values for correct pagination
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```

## Lumen Integration

### Installation

Install the package via Composer:

```bash
composer require orzcc/taobao-top-client
```

### Configuration

1. Manually copy the configuration file:

```bash
cp vendor/orzcc/taobao-top-client/config/taobaotop.php config/taobaotop.php
```

2. Add the following to `bootstrap/app.php`:

```php
if (!class_exists('TopClient')) {
    class_alias('Orzcc\TopClient\Facades\TopClient', 'TopClient');
}
$app->register(Orzcc\TopClient\TopClientServiceProvider::class);
```

3. Set your `appid` and `appsecret` in the `.env` file:

```
TAOBAO_APP_KEY=your_app_key
TAOBAO_APP_SECRET=your_app_secret
```

### Usage Example

The usage example for Lumen is the same as for Laravel:

```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('phone');
$req->setSort("tk_total_sales");
$req->setPageNo('1');  // Note: Use string values for correct pagination
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```

## Sponsor
This project is sponsored by [SoPicks](https://www.sopicks.com/), a revolutionary fashion discovery platform that aggregates products from multiple online stores, offering a seamless way to find and purchase desired brands all in one place.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
