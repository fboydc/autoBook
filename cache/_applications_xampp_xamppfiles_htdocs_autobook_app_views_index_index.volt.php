<?= $this->getContent() ?>

    <?= $this->tag->form(['session/start', 'role' => 'form', 'class' => 'form-signin']) ?>
    <h2 class="form-signin-heading">Auto Book</h2>
    <label for="username" class="sr-only">Username:</label>
    <?= $this->tag->textField(['username', 'class' => 'form-control', 'placeholder' => 'Your Username', 'required', 'autofocus']) ?>
    <label for="password" class="sr-only">Password:</label>
    <?= $this->tag->passwordField(['password', 'class' => 'form-control', 'placeholder' => 'password', 'required']) ?>
    <div class="checkbox">
        <label>
            <?= $this->tag->checkField(['remember', 'value' => 'remember-me']) ?> Remember Me
        </label>
    </div>
    <?= $this->tag->submitButton(['Sign In', 'class' => 'btn btn-lg btn-primary btn-block']) ?>
    </form>

