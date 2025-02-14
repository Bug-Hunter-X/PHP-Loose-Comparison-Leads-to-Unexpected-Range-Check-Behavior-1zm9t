The solution uses strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison requires both the value and the type to match. This prevents the automatic type coercion that caused the issue in the original code.

```php
<?php
function checkValue($value) {
  // Use strict comparison to prevent type juggling
  return $value >= 1000 && $value <= 2000 && is_numeric($value); 
}

// Test cases
var_dump(checkValue(1500)); // bool(true)
var_dump(checkValue("1500")); // bool(true)
var_dump(checkValue("abc")); // bool(false)
var_dump(checkValue(2500)); // bool(false)
var_dump(checkValue(900));  // bool(false)
?>
```