function validate()
{
    var check = document.forms["form1"]["photopath"].value;
    var http = new XMLHttpRequest;
    http.open('HEAD', check, false);
    http.send();
    return http.status!= 404;
    if(fs.exists(check) == false)
    {
        alert('not found image.');
        return false;
    }

    else
    {
        return true;
    }
}