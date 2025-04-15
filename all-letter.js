function allletter(inputtxt)
{
var letters=/^[A-Za-z]+$/;
if (inputtxt.value.match(letters))
{
alert('your name have accepted');
return true;
}
else
{
alert('please input alphabet');
return false;
}
}
