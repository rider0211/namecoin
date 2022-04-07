function registerWalletAddress(res){
    var wallet_address = $('#wallet_address').val();
    const wallet_address_regEXP = new RegExp('^[a-zA-Z0-9]{34}$');
    var validate = wallet_address_regEXP.test(wallet_address);
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var data;
    if(!validate){
        swal("Oops!", "Please input correct wallet address!");  
    }else{
        $.post("/register_wallet_Address",
        {
            _token: csrf,
            wallet_address : wallet_address,
        },
        function(data, status){
            if(data == "success"){
                res({data:true});
            }else{
                res({data:false});
            }
        });
    }
    return data;
}

function findDomainName(res){
    var domainName = $('#request_domainName').val();
    var wallet_address = $('#wallet_address').val();
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var data;
    if(domainName == ""){
        swal("Oops!", "Please input Domain Name!");  
    }else{
        $.post("/findDomainName",
        {
            _token: csrf,
            name : domainName,
            wallet_address : wallet_address,
        },
        function(data, status){
            if(data == "success"){
                res({data:true});
            }else{
                res({data:false});
            }
        });
    }
    return data;
}

function validateTwitterDisplayName(res){
    var twitterUserName = $('#twitterUserName').val();
    var wallet_address = $('#wallet_address').val();
    const twitter_username_regEXP = new RegExp('^[A-Za-z0-9_]{4,15}$');
    var username_validate = twitter_username_regEXP.test(twitterUserName);
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var data;
    if(!username_validate){
        swal("Oops!", "Please input correct your twitter username!");  
    }else{
        $.post("/validate_twitter_displayName",
        {
            _token: csrf,
            twitterUserName : twitterUserName,
            wallet_address : wallet_address,
        },
        function(data, status){
            if(data == "success"){
                res({data:true});
            }else{
                res({data:false});
            }
        });
    }
    return data;
}
function confirmEmail(res){
    var email = $('#user_email').val();
    var wallet_address = $('#wallet_address').val();
    const email_regEXP = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
    var email_validate = email_regEXP.test(email);

    var phone = $('#user_phone').val();

    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var data;
    if(!email_validate){
        swal("Oops!", "Please input correct your email!");  
    }else{
        $.post("/confirm_email",
        {
            _token: csrf,
            user_email : email,
            user_phone : phone,
            wallet_address : wallet_address,
        },
        function(data, status){
            if(data == "success"){
                res({data:true});
            }else{
                res({data:false});
            }
        });
    }
    return data;
}

function changeImage(step){
    var describeImage = document.getElementById("describeImage");
    describeImage.src = "./assets/images/describe/"+step+".jpg";
}