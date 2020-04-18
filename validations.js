function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");
    var a= document.getElementById("searchbar").value;

    // Add the "show" class to DIV
    

    if(a==null || a=="") {

        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else {
        window.location.href = "usearch attorney.php";
        return true;
    }
}

function myCase() {

    // Get the snackbar DIV
    var x = document.getElementById("snackbar");
    var a= document.getElementById("casetitle").value;

    // Add the "show" class to DIV
    

    if(a==null || a=="") {

        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else {
        window.location.href = "casedetails.php";
        return true;
    }
}

function myAppointment() {

    var title = document.getElementById("ctitle").value;
    var des = document.getElementById("cdescription").value;
    var date = document.getElementById("txtDate").value;
    var x = document.getElementById("snackbar");

    if(title==null||title=="") {
        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else if(des==null||des=="") {

        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else if(date==null||des=="") {

        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else {

        alert("appointment Successful");
        return true;
    }
}

function searchbtn() {

    var x = document.getElementById("snackbar");
    var a= document.getElementById("attorneysearch").value;

    // Add the "show" class to DIV
    

    if(a==null || a=="") {

        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else {
        return true;
    }
}

function catSearch() {
    
    var x = document.getElementById("snackbar");
    var cb1= document.getElementById("cb1").checked;
    var cb2= document.getElementById("cb2").checked;
    var cb3= document.getElementById("cb3").checked;
    var cb4= document.getElementById("cb4").checked;
    var cb5= document.getElementById("cb5").checked;
    var cb6= document.getElementById("cb6").checked;
    var cb7= document.getElementById("cb7").checked;
    var cb8= document.getElementById("cb8").checked;
    var cb9= document.getElementById("cb9").checked;
    var cb10= document.getElementById("cb10").checked;

    // Add the "show" class to DIV
    

    if(cb1==false && cb2==false && cb3==false && cb4==false && cb5==false && cb6==false && cb7==false && cb8==false && cb9==false && cb10==false) {

        x.className = "show";

    // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        return false;
    }
    else {
        return true;
    }
}

function loginbtn() {

    window.location.href = "uuserlogin.php";
}