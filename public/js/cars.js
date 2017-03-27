
var cars = [
    {brand:'select make', models:['']},
    {brand: 'Audi', models:['A1','A3', 'A5', 'Q5', 'Q7']},
    {brand: 'BMW', models:['330', '430','550', '760','X5']},
    {brand: 'Ford', models:['Focus', 'F150', 'Mustang']},
    {brand: 'Mazda', models:['CX3','CX5', 'CX9']},
    {brand: 'Mercedez', models:['Class C', 'Class E', 'Class S', 'ML']},
    {brand: 'Volvo', models:['XC90','XC60', 'V90', 'V60', 'S90']}


];

var years = [
    '2000',
    '2001',
    '2002',
    '2003',
    '2004',
    '2005',
    '2006',
    '2007',
    '2008',
    '2009',
    '2010',
    '2011',
    '2012',
    '2013',
    '2014',
    '2015',
    '2016',
    '2017'
];

var types = [
    'Cabriolet',
    'Coupe',
    'Hatchback',
    'PickUp',
    'Sedan',
    'SUV',
    'Van',
    'Wagon'
]

var makes = $("#make");
var models = $("#model");
var year = $("#year");
var type = $("#type");



$(document).ready(function() {

    year.append(
        $.map(years, function(a){
            return '<option value="'+a+'">'+a+"</option>";
        }).join('')
    );

    type.append(
        $.map(types, function(a){
           return '<option value"'+a+'">'+a+'</option>';
        }).join('')
    );


    makes.html(
        $.map(cars, function(car){
            return '<option value="'+car['brand']+'">'+car['brand']+"</option>";
        }).join('')
    );

    makes.change(function(){
        var make = $(this).val();
        var html = '';

        if(make === 'select make'){
            models.html("<option value=''>select model</option>")
        }else{

            $.each(cars, function(a){
                if(cars[a]['brand'] == make)
                {
                    html = $.map(cars[a]['models'], function(model){
                        return '<option value="'+model+'">'+model+'</option>'
                    }).join('');

                }
            });

            models.html(html);
        }

    });


} );

