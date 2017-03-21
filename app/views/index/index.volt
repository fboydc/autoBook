{{ content() }}

    {{ form('session/start', 'role': 'form', 'class':'form-signin') }}
    <h2 class="form-signin-heading">Auto Book</h2>
    <label for="username" class="sr-only">Username:</label>
    {{ text_field('username', 'class':'form-control', 'placeholder':'Your Username', 'required', 'autofocus') }}
    <label for="password" class="sr-only">Password:</label>
    {{ password_field('password', 'class':'form-control', 'placeholder':'password','required') }}
    <div class="checkbox">
        <label>
            {{ check_field('remember', 'value':'remember-me') }} Remember Me
        </label>
    </div>
    {{ submit_button('Sign In', 'class':'btn btn-lg btn-primary btn-block') }}
    </form>

