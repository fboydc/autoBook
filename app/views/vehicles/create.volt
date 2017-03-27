{{ content() }}
<ul class="pager">
    <li class="pull-right">
        {{ link_to("vehicles", "&larr; Go Back") }}
    </li>
</ul>
<h1>Create New Vehicle</h1>

    {{ form('vehicles/create', 'id':'newvehicleForm', 'onbeforesubmit':'return false') }}
    <fieldset>
        <div class="control-group">
            {{ form.label('plate_num',['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('plate_num',['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="plate_num_alert">
                <strong>Required!</strong> The plate number field is required!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('ownerid',['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('ownerid',['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="ownerid_alert">
                <strong>Required!</strong> An owner must be assigned to this vehicle!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('make', ['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
               {{ form.render('make', ['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="make_alert">
                <strong>Required!</strong> The make field is required!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('model', ['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('model',['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="model_alert">
                <strong>Required!</strong> The model field is required!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('type', ['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('type', ['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="type_alert">
                <strong>Required!</strong> The milage field is required!
            </div>
        </div>
        <div>
            {{ form.label('year', ['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('year', ['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="year_alert">
                <strong>Required!</strong> The year field is required!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('color',['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('color', ['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="color_alert">
                <strong>Required!</strong> The color field is required!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('milage', ['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('milage', ['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="milage_alert">
                <strong>Required!</strong> The milage field is required!
            </div>
        </div>
        <div class="control-group">
            {{ form.label('ch_num', ['class':'control-label']) }}<i>(*)</i>:
            <div class="controls">
                {{ form.render('ch_num', ['class':'form-control']) }}
            </div>
            <div class="alert alert-warning" id="ch_num_alert">
                <strong>Required!</strong> The milage field is required!
            </div>
        </div>
        Note:<i> (*) =  Required field</i>
        <br>
        <div class="control-group">
            <div class="form-action">
                {{ submit_button('Create','class':'btn btn-primary', 'onclick':'return Vehicle.validate();') }}
            </div>
        </div>

    </fieldset>



    </from>
