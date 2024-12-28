```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strlen($value) > 10) {
      $newData[$key] = substr($value, 0, 10);
    } else {
      $newData[$key] = $value; //handles other data types
    }
  }
  return $newData;
}

$data = [
  'name' => 'VeryLongNameIndeed',
  'details' => [
    'address' => 'AnotherVeryLongAddress',
    'city' => 'ShortCity'
  ]
];

$processedData = processData($data);
print_r($processedData);
print_r($data); // Original array remains unchanged
```