<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CorpController extends BaseController
{
    public function __invoke(Request $request): View
    {
        $pageLink = $request->getRequestUri();
        $pageData = $this->getCommonPageInfo($pageLink, 'ru');
        return view(
            'pages.corp-events',
            [
                'pageInfo' => $pageData['page_meta'],
                'headerLinks' => $pageData['header'],
                'contacts' => $pageData['contacts'],
                'services' => $pageData['services'],
                'pageText' => $pageData['page_text'],
                'images' => $pageData['images']
            ]
        );
    }
}
