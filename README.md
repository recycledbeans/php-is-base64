# PHP is_base64

From time to time, I've found it necessary to validate whether a bit of text is already encoded in base64. Since PHP does not include an easy function to do this, I decided to write this. This package does one simple thing: _it adds some nice helper functions to know whether a text string is base64-encoded or not_.

### Installation

You can easily install with composer:

`composer require recycledbeans/is-base64`


### Usage

#### is_base64()

```php
<?php 

$is_b64 = is_base64('I am not base64-encoded'); // returns false

$is_b64 = is_base64('SSBhbSBiYXNlNjQtZW5jb2RlZAo='); // returns true

```

#### is_base64_encode()

Useful when you do not want to have to check whether something is encoded before encoding. Will ensure that the string is base64-encoded and encode it if the string was not previously.

```php

$my_encoded_string = is_base64_encode($_REQUEST['could_be_base64_encoded_or_not']); // returns base64-encoded string

```

#### is_base64_decode()

Useful when you do not want to have to check whether something is encoded before decoding. Will return the string value whether the original string was already base64-encoded or not.

```php

$my_encoded_string = is_base64_decode($_REQUEST['could_be_base64_encoded_or_not']); // returns decoded string

```


### Examples

```php

$my_encoded_string = $_REQUEST['should_be_encoded'];

if (! is_base64($my_encoded_string)) {

    $my_encoded_string = base64_encode($my_encoded_string);

}

```
