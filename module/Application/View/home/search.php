<header class="header header-search">
    <h2><a href="?module=application&controller=home&action=index">Farol</a></h2>
    <form method="post">
		<input type="text" placeholder="O que você procura?" name="search" class="search-bar" value="<?php echo $this->data['search'];?>" autofocus required>
		<input type="submit" class="search-button-inverse" value="&#xf002;">
	</form>
</header>
<section>
    <p>Não há nenhum resultado</p>
</section>