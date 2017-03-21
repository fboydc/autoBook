{{ content() }}

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            {{ partnerelements.getMenu() }}
        </ul>
    </div>
</nav>

{{ form('createcustomer', 'id': 'newcustomerForm') }}

    <fieldset>
        <div class="control-group">
            {{ form.label('first', ['class':'form-control']) }}
        </div>

    </fieldset>
</form>