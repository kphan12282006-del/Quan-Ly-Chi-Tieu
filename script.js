// Bắt sự kiện click vào icon con mắt
const togglePassword = document.querySelector('#togglePassword');
const passwordInput = document.querySelector('#password');

togglePassword.addEventListener('click', function () {
    // Kiểm tra type hiện tại của input
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    
    // Đổi icon con mắt sang trạng thái gạch chéo và ngược lại
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
