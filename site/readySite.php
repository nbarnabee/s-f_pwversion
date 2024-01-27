<?php namespace ProcessWire;

use Exception;

/**
 * @var Wire $wire
 * @var WireFileTools $files
 */

/**
 * Returns sanitized SVG code from a file
 *
 * @param string $filePath the full path to the file to be included
 *
 * @return string
 */
$files->addHookMethod('inlineSvg', function (HookEvent $event) {
    /** @var WireFileTools $files */
    $files = $event->object;
    $filePath = $event->arguments(0);

    try {
        $svgSanitizer = $files->wire()->modules->get('FileValidatorSvgSanitizer')->getSvgSanitizer();
        $svgSanitizer->minify(true);
        $svgSanitizer->removeXMLTag(true);

        $event->return = $svgSanitizer->sanitize($files->fileGetContents($filePath));
    } catch (Exception) {
        $event->return = '';
    }
});