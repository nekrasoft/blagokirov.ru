<?php
/**
 * Компонент формы обратной связи
 * Использование: include с параметрами $formType ('callback' или 'order') и $pageName
 */
$formType = isset($formType) ? $formType : 'callback';
$pageName = isset($pageName) ? $pageName : '';
$formId = 'callback-form-' . uniqid();
?>
<style>
.callback-form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}
.callback-form-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    color: #2c3e50;
}
.callback-form-group {
    margin-bottom: 20px;
}
.callback-form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}
.callback-form-input {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}
.callback-form-input:focus {
    outline: none;
    border-color: #007bff;
}
.callback-form-submit {
    width: 100%;
    padding: 15px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
}
.callback-form-submit:hover {
    background: #0056b3;
}
.callback-form-submit:disabled {
    background: #ccc;
    cursor: not-allowed;
}
.callback-form-message {
    margin-top: 15px;
    padding: 12px;
    border-radius: 5px;
    text-align: center;
    display: none;
}
.callback-form-message.success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.callback-form-message.error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
.callback-form-required {
    color: #dc3545;
}
</style>

<div class="callback-form-container">
    <h3 class="callback-form-title">
        <?php echo $formType === 'order' ? 'Оставьте заявку' : 'Перезвоните мне'; ?>
    </h3>
    <form id="<?php echo $formId; ?>" class="callback-form" method="post" action="../includes/form-handler.php">
        <input type="hidden" name="page" value="<?php echo htmlspecialchars($pageName); ?>">
        <input type="hidden" name="type" value="<?php echo htmlspecialchars($formType); ?>">

        <div class="callback-form-group">
            <label class="callback-form-label" for="<?php echo $formId; ?>-name">
                Имя <span class="callback-form-required">*</span>
            </label>
            <input type="text"
                   id="<?php echo $formId; ?>-name"
                   name="name"
                   class="callback-form-input"
                   placeholder="Ваше имя"
                   required>
        </div>

        <div class="callback-form-group">
            <label class="callback-form-label" for="<?php echo $formId; ?>-phone">
                Телефон <span class="callback-form-required">*</span>
            </label>
            <input type="tel"
                   id="<?php echo $formId; ?>-phone"
                   name="phone"
                   class="callback-form-input"
                   placeholder="+7 (___) ___-__-__"
                   required
                   pattern="[\+]?[0-9\s\-\(\)]+">
        </div>

        <button type="submit" class="callback-form-submit">
            <?php echo $formType === 'order' ? 'Отправить заявку' : 'Заказать звонок'; ?>
        </button>

        <div class="callback-form-message" id="<?php echo $formId; ?>-message"></div>
    </form>
</div>

<script>
(function() {
    const form = document.getElementById('<?php echo $formId; ?>');
    const messageDiv = document.getElementById('<?php echo $formId; ?>-message');
    const submitBtn = form.querySelector('.callback-form-submit');

    // Маска для телефона
    const phoneInput = form.querySelector('input[name="phone"]');
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.startsWith('8')) {
            value = '7' + value.substring(1);
        }
        if (!value.startsWith('7') && value.length > 0) {
            value = '7' + value;
        }

        let formatted = '';
        if (value.length > 0) {
            formatted = '+7';
            if (value.length > 1) {
                formatted += ' (' + value.substring(1, 4);
            }
            if (value.length >= 4) {
                formatted += ') ' + value.substring(4, 7);
            }
            if (value.length >= 7) {
                formatted += '-' + value.substring(7, 9);
            }
            if (value.length >= 9) {
                formatted += '-' + value.substring(9, 11);
            }
        }
        e.target.value = formatted;
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Отключаем кнопку
        submitBtn.disabled = true;
        submitBtn.textContent = 'Отправка...';
        messageDiv.style.display = 'none';

        // Подготовка данных
        const formData = new FormData(form);

        // AJAX запрос
        const formAction = form.action || '../includes/form-handler.php';
        fetch(formAction, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                messageDiv.className = 'callback-form-message success';
                messageDiv.textContent = data.message;
                messageDiv.style.display = 'block';
                form.reset();

                // Скрыть сообщение через 5 секунд
                setTimeout(() => {
                    messageDiv.style.display = 'none';
                }, 5000);
            } else {
                messageDiv.className = 'callback-form-message error';
                messageDiv.textContent = data.message || 'Произошла ошибка. Пожалуйста, попробуйте позже.';
                messageDiv.style.display = 'block';
            }
        })
        .catch(error => {
            messageDiv.className = 'callback-form-message error';
            messageDiv.textContent = 'Ошибка подключения. Пожалуйста, позвоните нам по телефону.';
            messageDiv.style.display = 'block';
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = '<?php echo $formType === 'order' ? 'Отправить заявку' : 'Заказать звонок'; ?>';
        });
    });
})();
</script>

