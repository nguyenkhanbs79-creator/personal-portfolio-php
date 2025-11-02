const THEME_KEY = 'portfolio-theme';

function applyTheme(theme) {
    const body = document.body;
    const toggleBtn = document.getElementById('themeToggle');
    const icon = toggleBtn ? toggleBtn.querySelector('i') : null;

    if (theme === 'dark') {
        body.classList.add('dark');
        if (icon) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        }
    } else {
        body.classList.remove('dark');
        if (icon) {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const storedTheme = localStorage.getItem(THEME_KEY) || 'light';
    applyTheme(storedTheme);

    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const newTheme = document.body.classList.contains('dark') ? 'light' : 'dark';
            localStorage.setItem(THEME_KEY, newTheme);
            applyTheme(newTheme);
        });
    }

    const form = document.getElementById('contactForm');
    if (!form) {
        return;
    }

    const alertBox = document.getElementById('formAlert');
    const endpoint = form.dataset.endpoint || 'actions/contact.php';

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        event.stopPropagation();

        form.classList.add('was-validated');
        if (!form.checkValidity()) {
            return;
        }

        const formData = {
            name: form.name.value.trim(),
            email: form.email.value.trim(),
            message: form.message.value.trim(),
        };

        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
            });

            const result = await response.json();
            if (!response.ok || result.status !== 'success') {
                throw result;
            }

            form.reset();
            form.classList.remove('was-validated');
            if (alertBox) {
                alertBox.classList.remove('d-none', 'alert-danger');
                alertBox.classList.add('alert-success');
                alertBox.textContent = result.message || 'Gửi thành công!';
            }
        } catch (error) {
            const message = error?.message || 'Có lỗi xảy ra, vui lòng thử lại sau.';
            if (alertBox) {
                alertBox.classList.remove('d-none', 'alert-success');
                alertBox.classList.add('alert-danger');
                alertBox.textContent = message;
            }
        }
    });
});
