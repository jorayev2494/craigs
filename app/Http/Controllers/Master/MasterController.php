<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use View;

class MasterController extends Controller
{

    protected $user_r;


    #region Данные к виду
    protected $title = null;
    protected $template = null;
    protected $vars = array();
    #endregion

    /**
     * Показать Интерфейс
     *
     * @param [type] $view
     * @param boolean $dataName
     * @param boolean $data
     * @return void
     */
    public function outputView($view, $dataName = false, $data = false)
    {
        $this->vars = Arr::add($this->vars, "title", $this->title);

        if ($dataName) {
            if (is_array($dataName) && is_array($data)) {
               foreach ($dataName as $key => $value) {
                   $this->vars = Arr::add($this->vars, $value, $data[$key]);
               }
            } else {
                $this->vars = Arr::add($this->vars, $dataName, $data);
            }
        }

        // dd($this->vars);
        return View::make($view)->with($this->vars);

    }

    /**
     * Передать данный в Интерфейс формате RESTful API
     *
     * @param [type] $view
     * @param boolean $dataName
     * @param boolean $data
     * @return void
     */
    public function outputRESTful(string $view, $dataName = false, $data = false)
    {
        $this->vars = Arr::add($this->vars, "title", $this->title);

        if ($dataName) {
            if (is_array($dataName) && is_array($data)) {
               foreach ($dataName as $key => $value) {
                   $this->vars = Arr::add($this->vars, $value, $data[$key]);
               }
            } else {
                $this->vars = Arr::add($this->vars, $dataName, $data);
            }
        }

        // dd($this->vars);
        return response()->json($this->vars, 200);

    }

}
