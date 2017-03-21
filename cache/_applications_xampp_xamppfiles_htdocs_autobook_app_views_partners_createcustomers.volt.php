<?= $this->getContent() ?>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <?= $this->partnerelements->getMenu() ?>
        </ul>
    </div>
</nav>

<?= $this->tag->form(['createcustomer', 'id' => 'newcustomerForm']) ?>

    <fieldset>
        <div class="control-group">
            <?= $form->label('first', ['class' => 'form-control']) ?>
        </div>

    </fieldset>
</form>