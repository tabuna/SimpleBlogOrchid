<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\Core\Models\Menu;

class MenuWidget extends Widget {

    /**
     * @return mixed
     */
    public function run()
    {
        $menu = Menu::where('lang', config('app.locale'))
            ->whereNull('parent')
            ->where('type', 'header')->get();

        return view('partials.menu', [
            'menu'  => $menu,
        ]);
    }

}
