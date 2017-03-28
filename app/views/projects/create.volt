<ul class="pager">
    <li class="pull-right">
        {{ link_to("projects", "&larr; Go Back") }}
    </li>
</ul>
<h1>New Project</h1>
{{ form('projects/create', 'id':'newprojectForm', 'onbeforesubmit':'return false') }}
    <fieldset>
        <div class="control-group">
            {{ form.label('name', ['class':'control-label']) }}
        </div>
    </fieldset>
</form>