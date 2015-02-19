
## Creating Your Application Service Providers

------

You can create your own service providers in here. Please read this documentation http://obullo.com/doc/2.0/serviceProviders.


### Register Your Service Providers

Look other app/providers.php and add your provider class.



### Loading Service Providers

Getting from your configuration

```php
$this->name = $this->c['service provider name']->get($params);
```

Creating New ( Factory ) without Static Configuration

```php
$this->name = $this->c['app service provider name']->factory($params);
```