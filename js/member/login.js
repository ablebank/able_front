var LogInJs = {

    init: function(){
        var email = document.querySelector("#email");
        var myEthAddr = document.querySelector("#myEthAddr");
        //var password = document.querySelector("#password");

        var self = this;

        $(".loginForm").validate({
            errorElement: 'p',
            errorClass: 'jq_err_msg text-danger',
            errorPlacement: function(error, element) {
                switch (element.attr("name")) {
                    case 'email':
                        error.insertAfter($("#box-1"));
                        break;
                    case 'myEthAddr':
                        error.insertAfter($("#box-2"));
                        break;
                    default:
                    //nothing
                }
            },

            //submit event handle
            submitHandler: function() {
                //ajax
                urls = "/gateway/signin.php";

                $.ajax({
                    url: urls,
                    method: 'POST',
                    data: {
                        login: myEthAddr.value,
                        email: email.value
                    },
                    dataType: 'json',
                    success: function(d){
                        console.log(d);

                        if(d.auth_type == 3 ){
                            //change check todo

                            location.href = "/member/memberInfo.php?email="+encodeURIComponent(d.email)+"&phone="+d.phone+"&myEthAddr="+myEthAddr.value;
                            //alert("login success");
                            return false;
                        }else{
                            alert("로그인에 실패하였습니다\n다시 시도 해주세요");
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
                    minlength : 42,
                    maxlength : 42
                }
            }
        });
    }

}

LogInJs.init();