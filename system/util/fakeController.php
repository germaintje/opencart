<?php
namespace util;
class FakeController extends \Controller
{
    function getView($view, $data)
    {
        $this->template = $view . ".tpl";
        $this->data = $data;
        return $this->render();
    }
}

?>