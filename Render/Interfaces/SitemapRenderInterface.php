<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Sitemap\Render\Interfaces;

use Elcodi\Component\Sitemap\Profile\Interfaces\SitemapProfileInterface;

/**
 * Interface SitemapRenderInterface
 */
interface SitemapRenderInterface
{
    /**
     * Render a sitemap profile
     *
     * @param SitemapProfileInterface $sitemapProfile Sitemap profile
     *
     * @return string Rendered XML
     */
    public function render(SitemapProfileInterface $sitemapProfile);
}
