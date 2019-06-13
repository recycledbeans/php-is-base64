# PHP is_base64

This package does one simple thing: _it adds a global function to determine whether a string is base64-encoded_.

### Installation

You can easily install with composer:

`composer require recycledbeans/is-base64`

or you can download the source and require a single file:

```php
<?php 

require_once('src/Base64.php');
```

### Usage

```php
<?php 

$is_b64 = is_base64('I am not base64-encoded'); // returns false

$is_b64 = is_base64('SSBhbSBiYXNlNjQtZW5jb2RlZAo='); // returns true

```

### Examples

```php

$my_encoded_string = $_REQUEST['should_be_encoded'];

if (! is_base64($my_encoded_string)) {

    $my_encoded_string = base64_encode($my_encoded_string);

}

```