document.addEventListener('DOMContentLoaded', function () {
    const wizard = document.querySelector('.form-wizard');
    if (!wizard) return;

    const steps = wizard.querySelectorAll('.form-step');
    const nextButtons = wizard.querySelectorAll('.next-step');
    const prevButtons = wizard.querySelectorAll('.prev-step');
    const submitButton = wizard.querySelector('.submit-form');
    let currentStep = 0;

    // Показать нужный шаг
    function showStep(index) {
        steps.forEach((step, i) => {
            step.style.display = (i === index) ? 'block' : 'none';
            step.classList.toggle('active', i === index);
        });
        currentStep = index;
    }

    // Обработка Next
    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                showStep(currentStep + 1);
            }
        });
    });

    // Обработка Back
    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep > 0) {
                showStep(currentStep - 1);
            }
        });
    });

    // Отправка данных на последнем шаге
    if (submitButton) {
        submitButton.addEventListener('click', () => {
            const projectId = wizard.dataset.projectId;
            const inputs = wizard.querySelectorAll('.form-step.active input, .form-step.active textarea');
            const data = {};

            inputs.forEach(input => {
                data[input.name] = input.value;
            });

            fetch(ajaxurl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'save_project_step',
                    project_id: projectId,
                    fields: JSON.stringify(data),
                })
            })
            .then(response => response.json())
            .then(response => {
                if (response.success) {
                    alert("✅ Данные успешно сохранены!");
                } else {
                    alert("❌ Ошибка при сохранении: " + response.data);
                }
            })
            .catch(err => {
                console.error(err);
                alert("AJAX error");
            });
        });
    }

    // Запускаем
    showStep(0);
});
