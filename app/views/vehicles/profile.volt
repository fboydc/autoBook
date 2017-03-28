<ul class="pager">
    <li class="pull-right">
        {{ link_to("vehicles", "&larr; Go Back") }}
    </li>
</ul>
<div id="profile_carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    {{ content() }}


    <!-- Wrapper for slides -->


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<table class="table table-responsive">
    <thead>
        <tr>
            <th colspan="2"><h2>Details</h2></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Plate #:</b> {{ vehicle.plate_num }}</td>
            <td><b>Chassis #:</b> {{ vehicle.ch_num }}</td>
        </tr>
        <tr>
            <td><b>Make:</b> {{ vehicle.make }}</td>
            <td><b>Model:</b> {{ vehicle.model }}</td>
        </tr>
        <tr>
            <td><b>Type:</b> {{ vehicle.type }}</td>
            <td><b>Year:</b> {{ vehicle.year }}</td>
        </tr>
        <tr>
            <td><b>Color:</b> {{ vehicle.color }}</td>
            <td><b>Milage:</b> {{ vehicle.milage }}</td>
        </tr>
    </tbody>

</table>
