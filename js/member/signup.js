var SignUpJs = {
    //메일 el 모음
    mailSendInput: null,
    mailSendBtn: null,
    mailKeyInput: null,
    mailKeyBtn: null,

    //sms el 모음
    smsSendInput: null,
    smsSendBtn: null,
    smsKeyInput: null,
    smsKeyBtn: null,

    //passwod
    passwordInput: null,
    repasswordInput: null,

    //success


    init: function(){
        mailSendBtn = document.querySelector(".mailSendBtn");
        mailKeyBtn = document.querySelector(".mailKeyBtn");
        smsSendBtn = document.querySelector(".smsSendBtn");
        smsKeyBtn = document.querySelector(".smsKeyBtn");
        apiHost = "http://devapi.able-coin.io";

        var self = this;

        //메일 Send Event
        mailSendBtn.addEventListener('click',function(){
            //vali
            var targetEl = document.querySelector("#box-1");
            var inputEl = document.querySelector("#email");

            if(inputEl.value.length == 0){
                alert("email is required");
                return false;
            }

            if(targetEl.nextElementSibling.nodeName == "P"){

                return false;
            }

            //ajax
            var apiTarget = "/ico/access/auth/email/";
            var emailEncode = encodeURIComponent(inputEl.value);
            var urls = apiHost+apiTarget+emailEncode;
            console.log(urls)

            //urls = "http://devapi.able-coin.io/ico/access/auth/email/chise44%40naver.com";
            urls = "https://api.github.com/feeds";
            /*
            $.ajax({
                url: urls,
                dataType: 'jsonp',
                success: function(d){
                    console.log(d)
                }
            });
            */
            alert(1)
            $.ajax({
                url: urls,
                dataType: 'json',
                success: function(data){
                    console.log(data)
                }
            });


        },false);

        //mail Key auth Event
        mailKeyBtn.addEventListener('click',function(){
            //vali
            var targetEl = document.querySelector("#box-2");
            var inputEl = document.querySelector("#emailAuthKey");

            if(inputEl.value.length == 0){
                alert("email is required");
                return false;
            }

            if(targetEl.nextElementSibling.nodeName == "P"){

                return false;
            }

            //ajax

        },false);

        //sms Send Event
        smsSendBtn.addEventListener('click',function(){
            //vali
            var targetEl = document.querySelector("#box-3");
            var inputEl = document.querySelector("#phoneNumber");

            if(inputEl.value.length == 0){
                alert("email is required");
                return false;
            }

            if(targetEl.nextElementSibling.nodeName == "P"){

                return false;
            }

            //ajax

        },false);

        //sms key auth Event
        smsKeyBtn.addEventListener('click',function(){
            //vali
            var targetEl = document.querySelector("#box-4");
            var inputEl = document.querySelector("#smsAuthKey");

            if(inputEl.value.length == 0){
                alert("email is required");
                return false;
            }

            if(targetEl.nextElementSibling.nodeName == "P"){

                return false;
            }

            //ajax

        },false);

        $(".signupForm").validate({
            errorElement: 'p',
            errorClass: 'jq_err_msg text-danger',
            errorPlacement: function(error, element) {
                switch (element.attr("name")) {
                    case 'email':
                        error.insertAfter($("#box-1"));
                        break;
                    case 'emailAuthKey':
                        error.insertAfter($("#box-2"));
                        break;
                    case 'phoneNumber':
                        error.insertAfter($("#box-3"));
                        break;
                    case 'smsAuthKey':
                        error.insertAfter($("#box-4"));
                        break;
                    case 'password':
                        error.insertAfter($("#box-5"));
                        break;
                    case 'repassword':
                        error.insertAfter($("#box-6"));
                        break;
                    default:
                    //nothing
                }
            },

            //submit event handle
            submitHandler: function() {

            },
            rules:{
                email: {
                    required : true,
                    minlength : 2,
                    email : true
                },
                emailAuthKey: {
                    required : true,
                    minlength : 10
                },
                phoneNumber: {
                    required : true,
                    number : true,
                    minlength : 11
                },
                smsAuthKey: {
                    required : true,
                    minlength : 4
                },
                password: {
                    required : true,
                    minlength : 6
                },
                repassword: {
                    required : true,
                    equalTo: "#password"
                }
            }
        });
    }

}

SignUpJs.init();