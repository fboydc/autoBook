var SignUp = {
    check: function(id){
        if($.trim($('#'+id)[0].value)=='')
        {
            $('#'+id)[0].focus();
            $('#'+id+"_alert").show();
            return false;
        }
        return true;
    },
    validate: function(){
        if(SignUp.check("first") == false){
            return false;
        }
        if(SignUp.check("last") == false){
            return false;
        }
        if(SignUp.check("address1") == false){
            return false;
        }
        if(SignUp.check("phone") == false){
            return false;
        }
        if(SignUp.check("email") == false){
            return false;
        }
        if(SignUp.check("ssn") == false){
            return false;
        }

    }

};

var Vehicle = {
    check: function(id){
        if($.trim($("#"+id)[0].value)=='')
        {

            $("#"+id)[0].focus();
            $("#"+id+"_alert").show();
            return false;
        }
        return true;
    },
    validate: function(){
        if(Vehicle.check("plate_num") == false){
            return false;
        }
        if(Vehicle.check("ownerid") == false){
            return false;
        }
        if(Vehicle.check("make") == false){
            return false;
        }
        if(Vehicle.check("model") == false){
            return false;
        }
        if(Vehicle.check("type") == false){
            return false;
        }
        if(Vehicle.check("year") == false){
            return false;
        }
        if(Vehicle.check("color") == false){
            return false;
        }
        if(Vehicle.check("milage") == false){
            return false;
        }
        if(Vehicle.check("ch_num") == false){
            return false;
        }

    }

};


function hideWarnings()
{
    $("#newcustomerForm .alert").hide();
    $("#editcustomerForm .alert").hide();
    $("#newvehicleForm .alert").hide();
}





$(document).ready(function(){
    hideWarnings();
    $("#owners").DataTable();
    $("#vehicles").DataTable();

});