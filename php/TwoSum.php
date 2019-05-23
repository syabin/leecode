<?php
/**
 * @author yabin
 * @datetime 2019-05-23 上午1:46
 * @encoding UTF-8
 * @Description Two Sum
 */

/*
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * Example:
 *  Given nums = [2, 7, 11, 15], target = 9,
 *  Because nums[0] + nums[1] = 2 + 7 = 9,
 *  return [0, 1].
 */

$nums = [2, 7, 11, 15];
$target = 9;

$res = twoSum($nums, $target);
var_dump($res);


function twoSum(array $nums, $target) {
    $result = [];
    $nums_match = [];
    foreach ($nums as $_k => $_v) {
        if ($_v > $target) {
            continue;
        }

        if (!isset($nums_match[$target - $_v])) {
            $nums_match[$target - $_v] = $_k;
        }

        if (isset($nums_match[$_v]) && $nums_match[$_v] != $_k) {
            $result = [
                $nums_match[$_v],
                $_k,
            ];
            break;
        }
    }

    return $result;
}

