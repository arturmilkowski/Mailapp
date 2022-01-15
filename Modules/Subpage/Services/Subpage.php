<?php

declare(strict_types=1);

namespace Modules\Subpage\Services;

use Modules\Page\Entities\Page;

class Subpage
{
    /**
     * Handle action.
     *
     * @param string $slug Slug
     * 
     * @return Page
     */
    public static function handle(string $slug): Page
    {
        if ($slug == '') {
            $page = Page::where('slug', 'index')->first();
        } else {
            $page = Page::where('slug', $slug)->firstOrFail();
        }

        return $page;
    }
}
