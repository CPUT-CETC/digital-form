$(document).ready(() =>
{
    $("#DisabilityNature").attr("disabled", true);
    $("#BirthCountry").attr("disabled", true);
});

$("#IsDisabled").click((e) => 
{ 
    if($("#IsDisabled").val() == "Yes")
    {
        $("#DisabilityNature").attr("disabled", false);
    }
});

$("#IsDisabledNo").click((e) => 
{ 
    if($("#IsDisabledNo").val() == "No")
    {
        $("#DisabilityNature").attr("disabled", true);
    }
});

$("#IsSouthAfricanCitizen").click(function (e) 
{ 
    if($("#IsSouthAfricanCitizen").val() == "Yes")
    {
        $("#BirthCountry").attr("disabled", true);
    }
});

$("#IsSouthAfricanCitizenNo").click(function (e) 
{ 
    if($("#IsSouthAfricanCitizenNo").val() == "No")
    {
        $("#BirthCountry").attr("disabled", false);
    }
});