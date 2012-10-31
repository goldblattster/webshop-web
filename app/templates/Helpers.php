<?php
class Helpers
{
    public function link_to($route, $content)
    {
        return '<a href="index.php?page="' . $route . '">' . $content . '</a>';
    }

    public function button_link_to($route, $content)
    {
        return '<a class="button" href="index.php?page="' . $route . '">' . $content . '</a>';
    }
}