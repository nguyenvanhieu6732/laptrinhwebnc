
const nameInput = document.querySelector("input[name='fullName']");
nameInput.addEventListener("input", validateName);

const emailInput = document.querySelector("input[name='email']");
emailInput.addEventListener("input", validateEmail);

const passwordInput = document.querySelector("input[name='passWord']");
passwordInput.addEventListener("input", validatePassword);

const phoneInput = document.querySelector("input[name='phoneNumber']");
phoneInput.addEventListener("input", validatePhone);
// Hàm kiểm tra tên
function validateName(event) {
    const value = event.target.value;

    const regex = /^[a-zA-ZÀ-ỹ\s]*$/;
    if (!regex.test(value)) {
        event.target.setCustomValidity("Tên của bạn không hợp lệ");
    } else {
        event.target.setCustomValidity("");
    }
}

// Hàm kiểm tra email
function validateEmail(event) {
    const value = event.target.value;

    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!regex.test(value)) {
        event.target.setCustomValidity("Email không hợp lệ");
    } else {
        event.target.setCustomValidity("");
    }
}

// Hàm kiểm tra mật khẩu
function validatePassword(event) {
    const value = event.target.value;

    if (value.length < 6) {
        event.target.setCustomValidity("Mật khẩu cần có ít nhất 6 ký tự");
    } else {
        event.target.setCustomValidity("");
    }
}

//Ham kiem tra so dien thoai
function validatePhone(event) {
    const value = event.target.value;

    const regex = /^(?:\+84|0)[0-9]{9,10}$/;

    if (!regex.test(value)) {
        event.target.setCustomValidity("Số điện thoại không hợp lệ");
    } else {
        event.target.setCustomValidity("");
    }
}
