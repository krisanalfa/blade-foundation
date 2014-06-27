<?php namespace KrisanAlfa\Theme;

use Bono\App;
use KrisanAlfa\Theme\BladeTheme;
use RuntimeException;

/**
 * A Blade Theme for Bono Theme
 *
 * @category  Theme
 * @package   BladeFoundation
 * @author    Krisan Alfa Timur <krisan47@gmail.com>
 * @copyright 2013 PT Sagara Xinix Solusitama
 * @license   https://raw.github.com/xinix-technology/bono/master/LICENSE MIT
 * @link      https://github.com/krisanalfa/blade-foundation
 */
class BladeFoundation extends BladeTheme
{
    public function __construct($config)
    {
        parent::__construct($config);

        $directory = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $directory = reset($directory);

        $this->addBaseDirectory($directory, 5);

        $this->resolveAssetPath('vendor/blade-foundation');
    }
}
