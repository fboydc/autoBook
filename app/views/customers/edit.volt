{{ content() }}

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            {{ partnerelements.getMenu() }}
        </ul>
    </div>
</nav>
<ul class="pager">
    <li class="previous pull-right">
        {{ link_to('customers', '&larr; Go Back') }}
    </li>
</ul>
<h1>Edit Customer</h1>

{{ form("customers/save", 'role':'form', 'id':'editcustomerForm') }}
<fieldset>
            {{ form.render('id') }}
        <div class="control-group">
        {{ form.label('first', ['class':'control-label']) }}<i>(*)<i/>:
            <div class="controls">
                {{ form.render('first', ['class':'form-control']) }}
            </div>
                <div class="alert alert-warning" id="first_alert">
                    <strong>Required!</strong> First name field is required.
                </div>
        </div>

    <div class="control-group">
        {{ form.label('last', ['class':'control-label']) }}<i>(*)</i>:
        <div class="controls">
            {{ form.render('last', ['class' : 'form-control']) }}
        </div>
        <div class="alert alert-warning" id="last_alert">
            <strong>Required!</strong> Last name field is required.
        </div>
    </div>

    <div class="control-group">
        {{ form.label('address1', ['class':'control-label']) }}<i>(*)</i>:
        <div>
            {{ form.render('address1', ['class':'form-control']) }}
        </div>
        <div class="alert alert-warning" id="address1_alert">
            <strong>Required!</strong> Address 1 field is required.
        </div>
    </div>

    <div class="control-group">
        {{ form.label('address2', ['class':'control-label']) }}
        <div>
            {{ form.render('address2', ['class':'form-control']) }}
        </div>
    </div>

    <div class="control-group">
        {{ form.label('phonenum', ['class':'control-label']) }}<i>(*)</i>:
        <div>
            {{ form.render('phonenum', ['class':'form-control']) }}
        </div>
        <div class="alert alert-warning" id="phone_alert">
            <strong>Required!</strong> phone field is required.
        </div>
    </div>

    <div class="control-group">
        {{ form.label('email', ['class':'control-label']) }}<i>(*)</i>:
        <div>
            {{ form.render('email', ['class':'form-control']) }}
        </div>
        <div class="alert alert-warning" id="email_alert">
            <strong>Required!</strong> Email field is required.
        </div>
    </div>

    <div class="control-group">
        {{ form.label('ssn', ['class':'form-label']) }}<i>(*)</i>:
        <div>
            {{ form.render('ssn', ['class':'form-control']) }}
        </div>
        <div class="alert alert-warning" id="ssn_alert">
            <strong>Required!</strong> ssn field is required.
        </div>
    </div>

    <br>
    Note:<i> (*) =  Required field</i>
    <br>
    <div class="control-group">
        <div class="form-actions">
            {{ submit_button('Save', 'class': 'btn btn-primary', 'onclick':'return SignUp.validate();') }}
        </div>
    </div>

</fieldset>
</form>