<?php

namespace PhpAssets\Css;

interface MinifierInterface
{
    /**
     * Minify css string.
     *
     * @param string $css
     * @return string
     */
    public function minify($css);
}
