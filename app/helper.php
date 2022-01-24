<?php
function fragment($route, $fragment) {
    return route($route) . "/#{$fragment}";
}
