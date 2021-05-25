<?php

if (! function_exists('url')) {
    function url(string $url = ''): string {
        return sprintf('%s/%s', \IsaEken\Application::$config->url, $url);
    }
}
