document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.querySelector('.login-form');
  const loginModal = document.getElementById('login-modal');
  const loginButton = document.querySelector('.login-button');

  if (!loginForm) return;

  loginForm.addEventListener('submit', async function (e) {
    e.preventDefault();
    const formData = new FormData(loginForm);
    const payload = {
      username: formData.get('username'),
      password: formData.get('password'),
    };

    try {
      const resp = await fetch('/api/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload),
      });
      const data = await resp.json();
      if (!data.ok) {
        alert(data.error || 'Đăng nhập thất bại');
        return;
      }

      // đóng modal và cập nhật header: thay nút Đăng nhập bằng tên user + nút Đăng xuất
      if (loginModal) {
        loginModal.classList.remove('open');
        loginModal.setAttribute('aria-hidden', 'true');
      }

      if (loginButton) {
        const parent = loginButton.parentElement;
        if (parent) {
          parent.innerHTML = `
            <span class="user-greeting">Xin chào, ${escapeHtml(data.user.userName)}</span>
            <button id="logout-btn" class="login-button">Đăng xuất</button>
          `;
          const logoutBtn = document.getElementById('logout-btn');
          if (logoutBtn) {
            logoutBtn.addEventListener('click', async function () {
              await fetch('/api/logout', { method: 'POST' });
              window.location.reload();
            });
          }
        }
      }
    } catch (err) {
      console.error(err);
      alert('Lỗi mạng');
    }
  });

  function escapeHtml(unsafe) {
    return unsafe
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;');
  }
});
