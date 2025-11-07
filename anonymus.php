<?php


function useCallback($number, $callback) {
    return $callback($number);
};
function square($num) {
    return $num**3;
};
echo useCallback(5, function
($num) {
    return $num**3;
});
?>