<?php

declare(strict_types=1);

class ShowFeedIdExtension extends Minz_Extension {
	public function init() {
		Minz_View::appendScript($this->getFileUrl('showfeedid.js', 'js'));
	}
}
