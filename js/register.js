$(".submit").click(function (ev) {
  ev.preventDefault();
  var form = $("#myForm");
  var url = "http://localhost/task/php/register.php";
  console.log(form.serialize());
  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (data) {
        console.log(data);
        if(data.includes("succesfully Logged")){
          window.location.href = "login.html";
        }
        
    },
    error: function (data) {
        alert("some Error");
    },
  });
});
