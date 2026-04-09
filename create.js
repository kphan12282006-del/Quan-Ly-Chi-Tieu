function validateForm() {
    let email = document.getElementById("account").value;
    let pass = document.getElementById("password").value;
    let repass = document.getElementById("repassword").value;
    let error = document.getElementById("error");

    if (email === "" || pass === "" || repass === "") {
        error.innerText = "Không được để trống!";
        return false;
    }

    if (pass.length < 6) {
        error.innerText = "Mật khẩu >= 6 ký tự!";
        return false;
    }

    if (pass !== repass) {
        error.innerText = "Mật khẩu không khớp!";
        return false;
    }

    return true;
}
function togglePass(id, el) {
    let input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        el.innerText = "👁️"; // hiện
    } else {
        input.type = "password";
        el.innerText = "👁️‍🗨️"; // ẩn (có dấu /)
    }
}
