# CakeCookie
Cookie Helper for PHP

## Usage
```php
# require helper
require '../src/CakeCookie.php';

$CCokie = new CakeCookie;

# setCookie([data:Array, [time:Array]])
$CCokie->setCookie(
    # cookie data
    array(
        'name' => 'John', 
        'age' => 26, 
        'list' => ['php', 'js', 'css']
    ),
    # expires time
    array(
        'month' => 3,  # year|month|day|hour|minute|second
        'second' => 30
        )
);

# Get 'name' cookie
echo $CCokie->getCookie('name');

# Get 'list' cookie
print_r($CCokie->getCookie('list'));

# Get 'all' cookie
print_r($CCokie->getCookie());


# Remove 'list' cookie
$CCokie->removeCookie('list');

# Remove 'all' cookie
$CCokie->removeCookie();

```
