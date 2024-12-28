```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncates strings longer than 10 characters
    }
  }
  return $data;
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
```