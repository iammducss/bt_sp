
function dangky(e) {
    event.preventDefault();
    var usename = document.getElementById("usename").value;
    var sdt = document.getElementById("sdt").value;
    var password = document.getElementById("password").value;
    var username = {
        usename: usename,
        sdt: sdt,
        password: password,
    }
    var json = JSON.stringify(username)
    localStorage.setItem(usename, json);
    alert("Đăng ký thành công");
}