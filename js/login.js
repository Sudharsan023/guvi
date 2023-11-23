function openLog(){
  window.open('login.html', '_blank');
}
function openReg(){
  window.location.href= "register.html";
}


$("#myForm").submit(function (e) {
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "http://localhost/task/php/login.php",
    data: {
      UserName: $("#UserName").val().trim(),
      Password: $("#Password").val().trim(),
    },
    dataType: "json",
    success: function (response) {
      if (response.success) {
        localStorage.setItem("login", true);
        localStorage.setItem("id", response.id);
        window.location.href = "profile.html";
      } else {
        alert(response.message);
      }
    },
    error: function (error) {
      console.log("AJAX Error:", error);
    },
  });
});

