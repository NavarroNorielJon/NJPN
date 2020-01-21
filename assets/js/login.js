$(document).ready(function() {
    $("#login_form").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'Authenticates/login',
			method: "POST",
			data: $(this).serialize(),
            dataType: "json",
			success: function(response) {
                if(response.user === 1 ){
                    password = response.password;
                    user_type = response.user_type;

                    if(password === 1 && user_type === 1){
                        $("#error").html("");
                        $("#password").css({"border" : "initial"});
                        window.location.href = "/Authenticates/home";
                    }else if(password === 1 && user_type != 1){
                        $("#error").html("<p>User is not an administrator</p>");
                        $("#email").css({"border" : "1px solid #EA2828", "border-radius" : "4px"});   
                        $("#error").html("");
                        $("#password").css({"border" : "initial"});   
                    }else{
                        $("#error").html("<p>Incorrect Password</p>");
                        $("#password").css({"border" : "1px solid #EA2828", "border-radius" : "4px"});   
                    }
                }else{
                    $("#error").html("<p>User does not exists</p>");
                    $("#email").css({"border" : "1px solid #EA2828", "border-radius" : "4px"});
                }
            }
        })
    })
});