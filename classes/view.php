<?php

class view
{

    protected $data = [];

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __set($key, $val)
    {
        $this->data[$key] = $val;
    }

    public function render($template)
    {
        foreach ($this->data as $key=>$val) {
            $$key = $val;
        }

        ob_start();
        include __DIR__ . '/../views/' . $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

}