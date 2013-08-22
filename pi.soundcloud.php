<?php
class Plugin_soundcloud extends Plugin {

    var $meta = array(
        'name'       => 'Soundcloud',
        'version'    => '1.0',
        'author'     => 'Jeremy Sexton',
        'author_url' => 'http://jeremysexton.net'
    );

    public function sound()
    {
      $width = $this->fetchParam('width', "100%");
      $height = $this->fetchParam('height', "166px");
      $url = $this->fetchParam('url', null);
    
      if ($url) {
	      $output = '
	      <iframe width="'.$width.'" height="'.$height.'" src="http://w.soundcloud.com/player/?url='.$url.'&auto_play=false" frameborder="0"></iframe>
	      ';
	      return $output;
      }
      
    }

}