<div class="container">
	<?php foreach($this->view->teste as $teste): ?>
		<p>Nome: <?=$teste['nome']?> </p>
		<p>CPF: <?=$teste['cpf'];?></p>
	<?php endforeach; ?>
</div>
