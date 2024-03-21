document.getElementById('accountBtn').addEventListener('click', function() {
  document.getElementById('overlay').style.display = 'flex';
});

function closeModal() {
  document.getElementById('overlay').style.display = 'none';
}


//CHUYỂN TỪ FORM ĐĂNG NHẬP SANG ĐĂNG KÝ

// Thêm sự kiện cho nút "Tạo tài khoản"
document.getElementById('createAccountBtn').addEventListener('click', function() {
  showRegister();
});

// Thêm hàm hiển thị giao diện đăng ký và ẩn giao diện đăng nhập
function showRegister() {
  document.getElementById('loginModal').style.display = 'none';
  document.getElementById('registerModal').style.display = 'flex';
}

// Thêm hàm hiển thị giao diện đăng nhập
function showLogin() {
  document.getElementById('loginModal').style.display = 'flex';
  document.getElementById('registerModal').style.display = 'none';
}

