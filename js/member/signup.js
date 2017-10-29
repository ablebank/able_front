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

    //api data
    mailTmp: null, //connection tmp
    email: null, //email
    timestamp: null, //phoneTimestamp
    authKey: null, //authKey

    //step by
    step: 11,
    //success


    init: function(){
        emailStepIcon = document.querySelector("#emailStepIcon");
        smsStepIcon = document.querySelector("#smsStepIcon");

        mailSendBtn = document.querySelector(".mailSendBtn");
        mailKeyBtn = document.querySelector(".mailKeyBtn");
        smsSendBtn = document.querySelector(".smsSendBtn");
        smsKeyBtn = document.querySelector(".smsKeyBtn");
        apiHost = "http://devapi.able-coin.io";


        var self = this;

        ////////////////////////////
        //메일 Send Event (메일 전송)
        //STEP 1
        ///////////////////////////
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
            self.email = inputEl.value;

            urls = apiHost+"/ico/access/auth/email/"+encodeURIComponent(self.email);

            $.ajax({
                url: urls,
                dataType: 'json',
                success: function(d){
                    if(d.resultCode == 200){
                        self.mailTmp = d.tmp;
                        alert("send Email Success.\nWrite Email Security Key");
                    }
                }
            });
        },false);


        ////////////////////////////
        //mail Key auth Event (메일 인증키 입력)
        //STEP 2
        ////////////////////////////
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
            urls = apiHost+"/ico/verify/auth/email/"+self.mailTmp;

            $.ajax({
                url: urls,
                method: 'POST',
                data: {
                    email :self.email
                },
                dataType: 'json',
                success: function(d){
                    console.log(d);
                    if(d.resultCode == 200){
                        self.timestamp = d.timestamp;
                        self.authKey = d.authkey;
                        alert("Email Security Key Success");

                        //change check box step todo
                        emailStepIcon.classList.remove('glyphicon-remove','red-icon');
                        emailStepIcon.classList.add('glyphicon-ok','green-icon','blinking');
                    }else{
                        alert("이메일 인증에 실패하였습니다\n인증키를 다시 입력 해주세요");
                    }
                }
            });
        },false);

        ////////////////////////////
        //sms Send Event (문자 전송)
        //STEP 3
        ////////////////////////////
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
            urls = apiHost+"/ico/access/auth/phone/"+inputEl.value;

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
                        self.authKey = d.authkey;
                        alert("SMS Send Success\nWrite Sms Security Number");

                        //change check box step todo

                    }
                }
            });
        },false);

        ////////////////////////////
        //sms key auth Event (sms 키 인증)
        //STEP 4
        ////////////////////////////
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
            urls = apiHost+"/ico/verify/auth/phone/"+self.authKey;

            $.ajax({
                url: urls,
                method: 'POST',
                data: {
                    login: inputEl.value,
                    timestamp: self.timestamp
                },
                dataType: 'json',
                success: function(d){
                    console.log(d);
                    if(d.resultCode == 200){
                        self.authkey = d.authkey;
                        alert("SMS Send Success\nWrite Sms Security Number");

                        //change check box step todo
                        smsStepIcon.classList.remove('glyphicon-remove','red-icon');
                        smsStepIcon.classList.add('glyphicon-ok','green-icon','blinking');
                    }
                }
            });
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