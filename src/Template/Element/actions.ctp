<ul class="side-nav">
	<li class="heading"><?=_('Actions');?></li>
	<li><?= $this->Html->link(__('New'.$type), ['action' => 'add']) ?> </li>
	<li><?= $this->Html->link(__('List'.$typePlural), ['action' => 'index']) ?> </li>

</ul>