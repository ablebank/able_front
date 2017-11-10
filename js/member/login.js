var LogInJs = {

    init: function(){
        var email = document.querySelector("#email");
        var myEthAddr = document.querySelector("#myEthAddr");

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
                var Hemail, Hcountry, Hphone, Hauth_type;

                loginForm = document.querySelector(".loginForm");
                Hemail = document.querySelector("#Hemail");
                Hcountry = document.querySelector("#Hcountry");
                Hphone = document.querySelector("#Hphone");
                Hauth_type = document.querySelector("#Hauth_type");

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
                        Hemail = d.email;
                        Hcountry = d.contry;
                        Hphone = d.phone;
                        Hauth_type = d.auth_type;
                        HmyEthAddr = myEthAddr.value;

                        if(d.resultCode == 200 ){
                            //change check todo

                            loginForm.submit();
                            //location.href = "/member/memberInfo.php?email="+encodeURIComponent(d.email)+"&phone="+d.phone+"&myEthAddr="+myEthAddr.value;
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
                myEthAddr: {
                    required : true,
                    minlength : 42,
                    maxlength : 42
                }
            }
        });
    }

}

LogInJs.init();