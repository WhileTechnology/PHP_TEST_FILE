<?php

?>
[[selected]]<li class="current">{{PageNumber}}</li>[[/selected]]
[[unselected]]<li><a class="js-updatesearch" href="#" data-role="fsmpaginglink" data-page="{{PageNumber}}">{{PageNumber}}</a></li>[[/unselected]]


<ul>
	[[firstPrevious]]<li class="prev inactive">	&lt;&lt; <span class="hide-for-small">Prev</span></li>[[/firstPrevious]]
	[[previous]]<li class="prev" data-role="fsmpaginglink" data-page="{{PreviousPage}}">&lt;&lt;<span class="hide-for-small">Prev</span></li>[[/previous]]
	{{List}}
	[[next]]<li class="next" data-role="fsmpaginglink" data-page="{{NextPage}}"><span class="hide-for-small">Next</span>&gt;&gt;</li>[[/next]]
	[[lastNext]]<li class="next inactive"><span class="hide-for-small">Next</span>&gt;&gt;</li>[[/lastNext]]
	<li class="showall">Show all</li>
</ul>