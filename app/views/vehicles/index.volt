{{ content() }}
<ul class="pager">
    <li class="pull-right">
        {{ link_to("vehicles/create", "Create Vehicle") }}
    </li>
</ul>

<table id="vehicles" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Plate Number</th>
            <th>Make</th>
            <th>Model</th>
            <th>Color</th>
            <th>Year</th>
            <th>Milage</th>
        </tr>
    </thead>
    <tbody>
        {% for vehicle in vehicles %}
            <tr>
                <td>{{ link_to("vehicles/profile/"~vehicle.id, vehicle.plate_num) }}</td>
                <td>{{ vehicle.make }}</td>
                <td>{{ vehicle.model }}</td>
                <td>{{ vehicle.color }}</td>
                <td>{{ vehicle.year }}</td>
                <td>{{ vehicle.milage }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>