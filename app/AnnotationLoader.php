<?php

namespace App;

/**
 * Annotation parser
 *
 * @since 2.0
 */
class AnnotationLoader extends \Swoft\Annotation\AnnotationLoader
{
    /**
     * Get namespace and dirs
     *
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }
}