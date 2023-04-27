function loginout() {
    if (document.cookie) {
        var expireTime = new Date();
        expireTime.setTime(expireTime.getTime() - 1);
        document.cookie = "name=;expires=" + expireTime.toGMTString() + "path=/;SameSite=Strict";
        document.cookie = "flag=;expires=" + expireTime.toGMTString() + "path=/;SameSite=Strict";
        alert("Logout Successfully");
    }
    else {
        document.cookie = "name=Zodiac;path=/;SameSite=Strict";
        document.cookie = "flag=aTOpsEcRet;path=/;SameSite=Strict";
        alert("Login Successffully");
    }
    location.reload();
}

if (document.cookie) {
    var name = document.cookie.split(";")[0].split("=")[1]
    document.getElementById("welcome").innerHTML = "Hello, " + name + "!";
    document.getElementById("log").innerHTML = "logout";
}