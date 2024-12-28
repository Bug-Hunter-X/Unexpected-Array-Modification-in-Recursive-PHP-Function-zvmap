# Unexpected Array Modification in Recursive PHP Function

This repository demonstrates a subtle bug in a recursive PHP function that unexpectedly modifies the original array. The function `processData` is designed to process an array recursively, truncating strings longer than 10 characters. However, due to the way the array is modified within the recursion, the original array is also affected, leading to unintended side effects.

The `bug.php` file contains the buggy code.  The `bugSolution.php` file shows the corrected version using pass by value.