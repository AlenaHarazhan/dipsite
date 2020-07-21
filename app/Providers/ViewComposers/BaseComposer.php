<?
namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Maintext;

class BaseComposer{
public function compose(View $view){
        $my=$_SERVER['REQUEST_URI'];
        $my_arr=explode('/', $my);
        $v_page=end($my_arr);
        $v_pages=Maintext::all();
        $view->with('v_page', $v_page)->with('v_pages', $v_pages);
        }
}
