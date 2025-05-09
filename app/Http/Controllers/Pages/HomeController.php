<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends BaseController
{
    public function __invoke(Request $request): View
    {
        $pageLink = $request->getRequestUri();
        $pageData = $this->getCommonPageInfo($pageLink, 'ru');
        return view(
            'pages.home',
            [
                'pageInfo' => $pageData['page_meta'],
                'headerLinks' => $pageData['header'],
                'contacts' => $pageData['contacts'],
                'pageText' => $pageData['page_text'],
                'counters' => $pageData['counters'],
                'services' => $pageData['services']
            ]
        );
    }
}
