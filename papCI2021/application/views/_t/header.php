<header class="container">
    <?php if (! isset($_header['usuario'])): ?>
    	<a href="<?=base_url()?>persona/login">LOGIN</a>
    <?php else: ?>
        <?= $_header['usuario']->nombre ?> / 
        <a href="<?=base_url()?>persona/logout">LOGOUT</a>
    <?php endif; ?>
</header>
