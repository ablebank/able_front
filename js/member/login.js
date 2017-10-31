var LogInJs = {

    init: function(){
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
                urls = apiHost+"/ico/access/user/profile/"+self.authKey;

                $.ajax({
                    url: urls,
                    method: 'POST',
                    data: {
                        mail_key: self.authKey,
                        timestamp: self.timestamp
                    },
                    dataType: 'json',
                    success: function(d){
                        console.log(d);
                        if(d.resultCode == 200){
                            //change check todo
                            return false;
                        }else{
                            alert("crate Account Fail");
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