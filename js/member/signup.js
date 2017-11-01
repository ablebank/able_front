
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
    smsInputVal: null,

    //passwod
    passwordInput: null,
    repasswordInput: null,

    //api data
    mailTmp: null, //connection tmp
    email: null, //email
    timestamp: null, //phoneTimestamp
    authKey: null, //authKey
    smsKey: null, //smsauthKey

    mailSendTrue: false,
    mailAuthTrue: false,
    smsSendTrue: false,
    smsAuthTrue: false,
    passwordAuthTrue: false,


    init: function(){
        emailStepIcon = document.querySelector("#emailStepIcon");
        smsStepIcon = document.querySelector("#smsStepIcon");

        mailSendBtn = document.querySelector(".mailSendBtn");
        mailKeyBtn = document.querySelector(".mailKeyBtn");
        smsSendBtn = document.querySelector(".smsSendBtn");
        smsKeyBtn = document.querySelector(".smsKeyBtn");
        //apiHost = "http://devapi.able-coin.io";
        apiHost = "http://api.able-coin.io";


        var self = this;

        ////////////////////////////
        //메일 Send Event (메일 전송)
        //STEP 1
        ///////////////////////////
        mailSendBtn.addEventListener('click',function(){
            //vali
            var targetEl = document.querySelector("#box-1");
            var inputEl = document.querySelector("#email");

            //공란 체크
            if(inputEl.value.length == 0){
                alert("email is required");
                return false;
            }

            //정규식 성공 여부
            if(targetEl.nextElementSibling.nodeName == "P" && targetEl.nextElementSibling.style.display !== "none"){
                return false;
            }

            //ajax
            self.email = inputEl.value;

            urls = apiHost+"/ico/access/auth/email/"+encodeURIComponent(self.email);

            $.ajax({
                url: urls,
                dataType: 'json',
                success: function(d){
                    switch(d.resultCode){
                        case 200:
                            self.mailTmp = d.tmp;
                            self.mailSendTrue = true;
                            alert("메일이 발송되었습니다.\n메일에 첨부된 인증키를 입력해주세요");
                        break;

                        case 10006:
                            alert("존재하는 메일주소입니다.\n다른 메일주소로 가입해주세요");
                        break;

                        default:
                            alert("메일 발송에 실패하였습니다.");
                        break;
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

            if(targetEl.nextElementSibling.nodeName == "P" && targetEl.nextElementSibling.style.display !== "none"){
                return false;
            }

            if(!self.mailSendTrue) {
                alert("인증메일을 받으신 후 입력해주세요");
                return false;
            }

            //ajax
            urls = apiHost+"/ico/verify/auth/email/"+inputEl.value;

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
                        self.mailAuthTrue = true;

                        alert("Email Security Key Success");

                        //change check box step todo
                        emailStepIcon.classList.remove('glyphicon-remove','red-icon');
                        emailStepIcon.classList.add('glyphicon-ok','green-icon','blinking');
                    }else{
                        alert("이메일 인증에 실패하였습니다\n다시 입력해주세요");
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

            if(targetEl.nextElementSibling.nodeName == "P" && targetEl.nextElementSibling.style.display !== "none"){
                return false;
            }

            if(!self.mailAuthTrue){
                alert("메일인증을 먼저 진행해 주세요");
                return false;
            }

            //ajax
            urls = apiHost+"/ico/access/auth/phone/"+inputEl.value;

            $.ajax({
                url: urls,
                method: 'POST',
                data: {
                    mail_key: self.authKey,
                    timestamp: self.timestamp,
                    //phone_timestamp: self.timestamp,
                    country: 82
                },
                dataType: 'json',
                success: function(d){
                    console.log(d);
                    if(d.resultCode == 200){
                        self.timestamp = d.timestamp;
                        self.authKey = d.authkey;
                        self.smsKey = d.pkey;
                        self.smsSendTrue = true;

                        alert("SMS Send Success\nWrite Sms Security Number");

                        //change check box step todo

                    }else{
                        alert("문자전송이 실패하였습니다\n다시 시도해주세요");
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
            self.smsInputVal = inputEl.value;

            if(inputEl.value.length == 0){
                alert("email is required");
                return false;
            }

            if(targetEl.nextElementSibling.nodeName == "P" && targetEl.nextElementSibling.style.display !== "none"){
                return false;
            }

            if(!self.mailAuthTrue){
                alert("메일인증을 먼저 진행 해주세요");
                return false;
            }

            if(!self.smsSendTrue){
                alert("문자를 먼저 수신 받아주세요");
                return false;
            }

            //ajax
            urls = apiHost+"/ico/verify/auth/phone/"+self.authKey;

            $.ajax({
                url: urls,
                method: 'POST',
                data: {
                    phone_key: self.smsInputVal,
                    timestamp: self.timestamp
                },
                dataType: 'json',
                success: function(d) {
                    console.log(d);
                    if (d.resultCode == 200) {
                        self.authkey = d.authkey;
                        self.timestamp = d.timestamp;
                        self.smsAuthTrue = true;

                        alert("SMS Send Success\nWrite Sms Security Number");

                        //change check box step todo
                        smsStepIcon.classList.remove('glyphicon-remove', 'red-icon');
                        smsStepIcon.classList.add('glyphicon-ok', 'green-icon', 'blinking');
                    }else{
                        alert("sms 인증이 실패하였습니다\n문자를 다시받으시거나 다시 입력해 주세요");

                        //toremove
                        //smsStepIcon.classList.remove('glyphicon-remove', 'red-icon');
                        //smsStepIcon.classList.add('glyphicon-ok', 'green-icon', 'blinking');
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
                //http://devapi.able-coin.io/ico/notifiy/auth/user/
                var passwordEl = document.querySelector("#repassword");

                urls = apiHost+"/ico/notifiy/auth/user/"+self.authKey;

                $.ajax({
                    url: urls,
                    method: 'POST',
                    data: {
                        login: $.md5(passwordEl.value),
                        timestamp: self.timestamp,
                    },
                    dataType: 'json',
                    success: function(d){
                        console.log(d);
                        if(d.resultCode == 200){
                            //change check todo
                            alert("crate Account Success");
                            return false;
                        }else{
                            alert("crate Account Fail");
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