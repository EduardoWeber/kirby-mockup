<?php
class AboutPage extends Page
{
    public function image_cover()
    {
        return $this->content()->get('image_cover')->toFile() ?? $this->image();
    }
}
?>