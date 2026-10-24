<?php
$arr = [12, 5, 20, 6, 45];
/**
 * Find the maximum number in an array.
 *
 * Approach:
 * 1. Initialize $max with the first element of the array.
 * 2. Traverse the array using a for loop.
 * 3. Compare each element with the current maximum.
 * 4. If the current element is greater, update $max.
 * 5. Return the maximum number after traversing the array.
 *
 * Time Complexity: O(n) - Each element is checked once.
 * Space Complexity: O(1) - Only a constant amount of extra space is used.
 *
 * Note: Assumes the input array is non-empty.
 *
 * @param array $arr Array of numbers.
 * @return int|float The maximum number in the array.
 */
function findMaxNumber($arr)
{
    $len = count($arr);
    $max = $arr[0];
    for ($i = 0; $i < $len; $i++) {

        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    return $max;
}
