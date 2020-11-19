var user = document.getElementById("user");
user.addEventListener('click', function(){
    window.location.href = './create.php';
});
var back = document.getElementById("back");
back.addEventListener('click', function(){
    window.location.href = './login.php';
});