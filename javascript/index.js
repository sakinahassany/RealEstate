
function validateForm()
{
    //document.getElementsById('top')[0].onchange = function() {
 if (document.getElementById("top").value==" "){
alert("Please Select Type Of Property!");
return false;
}
if (document.getElementById("mxp").value==" "){
alert("Please Select Maximum Price!");
return false;
}
if (document.getElementById("mip").value==" "){
alert("Please Select Manimum Price!");
return false;
}
}
