<div class="darkside-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
    <h2>Dark Side!!!</h2>
    <hr>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
