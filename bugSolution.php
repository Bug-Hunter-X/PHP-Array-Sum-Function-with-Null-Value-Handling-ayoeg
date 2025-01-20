```php
function myFunction(array $arr): int {
  $sum = 0;
  foreach ($arr as $value) {
    if (is_int($value)) {
      $sum += $value;
    } //Null values are ignored by default.
  }
  return $sum;
}

$myArr = [1,2,3,null,5];
echo myFunction($myArr);
//Output: 11
```