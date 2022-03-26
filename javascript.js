$('#m_login_password').keyup(function(){
    var pass = $("#m_login_password").val();
    if(pass == ''){
        $("._2pi9").hide();
    }else{
        $("._2pi9").show();	
    }
});
const passField = document.getElementById("m_login_password");
const showBtn = document.getElementById("show-btn");
showBtn.onclick = (()=>{
    if(passField.type === "password"){
        passField.type = "text";
        $("#u_0_4_fv").hide();
        $("#u_0_3_fj").show();
    }else{
        passField.type = "password";
        $("#u_0_3_fj").hide();
        $("#u_0_4_fv").show();	  
    }
});