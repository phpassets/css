<?php

namespace PhpAssets\Css;

/**
 * Reader for CSS, extension language or template files.
 */
interface ReaderInterface
{
    /**
     * Get CSS extension language name from path.
     *
     * @param string $path
     * @return string
     */
    public function lang($path);

    /**
     * Get raw CSS or extension string from path.
     *
     * @param string $path
     * @return string
     */
    public function raw($path);
}
