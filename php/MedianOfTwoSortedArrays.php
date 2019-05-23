<?php
/**
 * @author yabin
 * @datetime 2019-05-23 上午2:32
 * @encoding UTF-8
 * @Description
 */

$nums1 = [1, 3];
$nums2 = [2];

$res = MedianOfTwoSortedArrays($nums1, $nums2);
var_dump($res);

function MedianOfTwoSortedArrays(array $nums1, array $nums2) {
    $i = $j = 0;
    $temp = [];
    $count = 0;
    while (isset($nums1[$i]) || isset($nums2[$j])) {
        if (isset($nums1[$i]) && isset($nums2[$j])) {
            if ($nums1[$i] <= $nums2[$j]) {
                $temp[] = $nums1[$i];
                ++$i;
                ++$count;
            } else {
                $temp[] = $nums2[$j];
                ++$j;
                ++$count;
            }
        } elseif (isset($nums1[$i])) {
            $temp[] = $nums1[$i];
            ++$i;
            ++$count;
        } elseif (isset($nums2[$j])) {
            $temp[] = $nums2[$j];
            ++$j;
            ++$count;
        }
    }

    if ($count == 1) {
        return $temp[0];
    }

    if ($count & 1) {
        return $temp[($count - 1) / 2];
    } else {
        $mid = $count / 2;
        return ($temp[$mid - 1] + $temp[$mid]) / 2;
    }
}