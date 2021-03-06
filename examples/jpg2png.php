<?php
/*
 * This file is part of GImage.
 *
 * (c) José Luis Quintana <https://git.io/joseluisq>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Convert JPEG image to PNG with opacity.
 *
 * @author José Luis Quintana <https://git.io/joseluisq>
 */

namespace GImage\Examples;

use GImage\Image;

require __DIR__ . '/_config.php';
require __DIR__ . '/../tests/bootstrap.php';

$image = new Image();
$image
    // Load a JPEG image
    ->load('http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=300.jpg')
    // Resize and crop in the middle (100px x 80px)
    ->centerCrop(100, 80)
    // Change the format
    ->toPNG()
    // Set opacity to 50%
    ->setOpacity(0.5)
    // Save the resource
    ->save(__DIR__ . '/jpg2png.png');
