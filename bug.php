```php
function myFunction(array $arr): int {
  foreach ($arr as $value) {
    if (is_null($value)) {
      return 0; //This will return 0 if any element is null, even if others are valid integers.
    }
    if (!is_int($value)) {
      return 0; //This will also return 0 if any element is not an integer.
    }
  }
  return array_sum($arr);
}

$myArr = [1,2,3,null,5];
echo myFunction($myArr); //Output: 0
```