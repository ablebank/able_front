var LogInJs = {

    init: function(){
        var emali = document.querySelector("#email");
        var password = document.querySelector("#password");
        apiHost = "http://devapi.able-coin.io";

        var self = this;

        $(".loginForm").validate({
            errorElement: 'p',
            errorClass: 'jq_err_msg text-danger',
            errorPlacement: function(error, element) {
                switch (element.attr("name")) {
                    case 'email':
                        error.insertAfter($("#box-1"));
                        break;
                    case 'password':
                        error.insertAfter($("#box-2"));
                        break;
                    default:
                    //nothing
                }
            },

            //submit event handle
            submitHandler: function() {
                //ajax
                urls = apiHost+"/ico/access/login";

                $.ajax({
                    url: urls,
                    method: 'POST',
                    data: {
                        login: $.md5(password.value),
                        email: email.value
                    },
                    dataType: 'json',
                    success: function(d){
                        console.log(d);
                        if(d.resultCode == 200){
                            //change check todo
                            alert("login success");
                            return false;
                        }else{
                            alert("login Fail");
                            return false;
                        }
                    }
                });
            },
            rules:{
                email: {
                    required : true,
                    minlength : 2,
                    email : true
                },
                password: {
                    required : true,
                    minlength : 6
                }
            }
        });
    }

}

LogInJs.init();