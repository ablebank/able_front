var st = {
    email: null,
    authKey: null,
    country: null,
    authType: null,
    authFlag: false,

    //현재의 접속자의 새로운 데이터를 갱신하거나 체크
    init: function(){
        //status api call todo
        //ajax
        urls = apiHost+"/ico/access/login";

        $.ajax({
            url: urls,
            method: 'POST',
            data: {
                login: self.authKey,
                email: self.timestamp
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
    }
}
