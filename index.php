<?php
function getSeason () {
    $month = date("n");
    $day = date("d");
    //echo $month, $day;
    if ($month >= 3 && $month < 6) {
        if ($month == 9) {
            if ($day < 21) {
                return 'winter';
            } else {
                return 'spring';
            }
        }
        return ('spring');
    };
    if ($month >= 6 && $month < 9) {
        if ($month == 9) {
            if ($day < 21) {
                return 'spring';
            } else {
                return 'summer';
            }
        }
        return ('summer');
    }
    if ($month >= 9 && $month < 12) {
        if ($month == 9) {
            if ($day < 21) {
                return 'summer';
            } else {
                return 'autumn';
            }
        }
        return ('autumn');
    }
    if ($month >= 12 || $month >= 1 && $month < 3) {
        if ($month == 12) {
            if ($day < 21) {
                return 'autumn';
            } else {
                return 'winter';
            }
        }
        return ('winter');
    }
}


echo "It's ", getSeason();

