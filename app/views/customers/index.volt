{{ content() }}
<nav class="navbar navbar-default">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            {{ partnerelements.getMenu() }}
        </ul>
    </div>
</nav>
<h1>Customers</h1>



   <table id="owners" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>SSN</th>
                <th></th>
                <th></th>
                <!--<th>Edit</th>
                <th>Delete</th>-->
            </tr>
        </thead>
       <tbody>
       {% for owner in owners %}
            <tr>
                <td>{{ link_to("customer/profile", owner.last~", "~owner.first) }}</td>
                <td>{{ owner.phonenum }}</td>
                <td>{{ owner.email }}</td>
                <td>{{ owner.ssn }}</td>
                <td>
                    {{ link_to("customers/edit/"~owner.id, '<i class="glyphicon glyphicon-edit"></i>', 'class':'btn btn-default') }}
                </td>
                <td>
                    {{ link_to("customers/delete/"~owner.id, '<i class="glyphicon glyphicon-remove"></i>', 'class':'btn btn-default') }}
                </td>
            </tr>
       {% endfor %}
       </tbody>
   </table>



