<?php namespace App\Http\Widgets;

use Orchid\Platform\Widget\Widget;
use Orchid\Platform\Core\Models\Menu;

class MenuWidget extends Widget {

    /**
     * @return mixed
     */
    public function handler()
    {
        $menu = Menu::whereNull('parent')
            ->where('type', 'header')->get();

        return view('partials.menu', [
            'menu'  => $menu,
        ]);
    }

}
