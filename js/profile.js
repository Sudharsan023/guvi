function openHtml() {
    window.open("login.html");
}

function aler(){
    alert("Successfully Updated...");
}

$(document).ready(function () {
    loadProfile();

    function loadProfile() {
    
        $.ajax({
            type: 'GET',
            url: 'get_profile.php',
            success: function (data) {

                $('#profcontainer').html(data);
            },
            error: function (xhr, status, error) {
            
                console.error('AJAX request failed with status ' + status + ' and error ' + error);
            }
        });
    }
});

