# http-status-code
Helper to get HTTP status code by using common name, so it's easier to read while coding.

-------------------------------

## How to install?
In your project, run in your terminal

```bash
$ composer require mac1qc/http-status-code
```

-------------------------------

## How to use?
Instead of writting your Status code in number like:
```php
if ($statusCode === 200) {
  return 'something';
}
```

Do something like:
```php
if ($statusCode === StatusCode::OK->value) {
  return 'something';
}
```


-------------------------------

## Wanna show your appreciation?
If you find that library useful, you can [buy me a coffee/beer](https://www.buymeacoffee.com/invite/macl)
