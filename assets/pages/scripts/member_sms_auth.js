var Login = function() {

    var handleRegister = function() {

        function format(state) {
            if (!state.id) { return state.text; }
            var $state = $(
                '<span><img src="/assets/global/img/flags/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
            );

            return $state;
        }

        if (jQuery().select2 && $('#country_list').size() > 0) {
            $("#country_list").select2({
                placeholder: '<i class="fa fa-map-marker"></i>&nbsp;Select a Country',
                templateResult: format,
                templateSelection: format,
                width: 'auto',
                escapeMarkup: function(m) {
                    return m;
                }
            });


            $('#country_list').change(function() {
                $('.register-form').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });
        }

        ///이메일 인증 블럭
        $('#sendMail').click(function(){
            $.ajax({
                url: "",
                dataType: 'jsonp',
                success: function(d) {
                    alert('200');
                },
                error: function(d) {
                    $("#sendMail").css({"background-color": "rgb(92, 184, 92)", "border-color": "rgb(76, 174, 76)"})
                    alert('현재 내부적인 문제로 차후에 다시 시도해 주시기 바랍니다.');
                }
            });
        })

        ///인증키 인증 블럭
        $('#authKeyConfirm').click(function(){
            $.ajax({
                url: "",
                dataType: 'jsonp',
                success: function(d) {
                    alert('200');
                },
                error: function(d) {
                    $("#authKeyConfirm").css({"background-color": "rgb(92, 184, 92)", "border-color": "rgb(76, 174, 76)"})
                    alert('현재 내부적인 문제로 차후에 다시 시도해 주시기 바랍니다.');
                }
            });
        })

        $('.register-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                email: {
                    required: true,
                    email: true
                },
                authKey: {
                    required: true,
                    minlength: 14
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit

            },


            highlight: function(element) { // hightlight error inputs
                //console.log(element)
                $(element)
                    .closest('.form-group').find(".help-block").addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                var block = $(element).closest('.form-group').find(".help-block");
                error.insertAfter(block);
            },

            submitHandler: function(form) {
                //해당 메일 사용자가 최종적으로 인증이 통과한 사람인지 서버단에서 flag 검사를 한다.
                $.ajax({
                    url: "",
                    dataType: 'jsonp',
                    success: function(d) {
                        alert('200');
                        form[0].submit();
                    },
                    error: function(d) {
                        alert('현재 내부적인 문제로 차후에 다시 시도해 주시기 바랍니다.');
                        return false;
                    }
                });
            }
        });

        $('.register-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.register-form').validate().form()) {
                    $('.register-form').submit();
                }
                return false;
            }
        });
    }

    return {
        //main function to initiate the module
        init: function() {
            handleRegister();
        }

    };

}();

jQuery(document).ready(function() {
    Login.init();
});