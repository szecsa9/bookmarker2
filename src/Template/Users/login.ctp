<h1>Login</h1>
<?= $this->Form->create() ?> /* Csinál egy formot egy entitásnak, mivel a usersnél vagyunk, ezért egy Users entitást, a loginnak küldi el*/
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>