// Глобально доступная функция
function renderFAQ(faqArray) {
    const faqContainer = document.getElementById('faq-body');
    if (!faqContainer) return;

    faqContainer.innerHTML = ''; // Очистить

    if (!faqArray || faqArray.length === 0) {
        faqContainer.innerHTML = '<p class="text-muted">Нет подсказок для этого шага.</p>';
        return;
    }

    faqArray.forEach((faq, index) => {
        const block = document.createElement('div');
        block.className = 'mb-5';

        block.innerHTML = `
            <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#faq_${index}">
                <span class="accordion-icon">
                    <span class="svg-icon svg-icon-4"><i class="bi bi-question-circle"></i></span>
                </span>
                <h3 class="fs-6 text-gray-800 fw-bold">${faq.question}</h3>
            </div>
            <div id="faq_${index}" class="accordion-collapse collapse">
                <div class="accordion-body text-muted ps-10">${faq.answer}</div>
            </div>
        `;

        faqContainer.appendChild(block);
    });
}


document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        const wizard = document.querySelector('.form-wizard[data-json-form="1"]');
        if (!wizard) return;

        const steps = wizard.querySelectorAll('.form-step');
        const progressBar = document.querySelector('.progress-bar.bg-success');
        if (!progressBar) return;

        // Группируем шаги по секциям
        const sectionMap = {};
        steps.forEach((step) => {
            const sectionName = step.dataset.section;
            if (!sectionMap[sectionName]) sectionMap[sectionName] = [];
            sectionMap[sectionName].push(step);
        });

        const sectionNames = Object.keys(sectionMap);
        const totalSections = sectionNames.length;

        function updateSmartProgressBar() {
            let completedSections = 0;
            let percent = 0;

            for (let i = 0; i < totalSections; i++) {
                const sectionSteps = sectionMap[sectionNames[i]];
                let sectionFields = 0;
                let sectionFilled = 0;

                sectionSteps.forEach((step) => {
                    const inputs = step.querySelectorAll('input, textarea, select');
                    sectionFields += inputs.length;

                    inputs.forEach((el) => {
                        if (el.value.trim() !== '') {
                            sectionFilled++;
                        }
                    });
                });

                if (sectionFilled === 0) break;

                if (sectionFilled === sectionFields) {
                    completedSections++;
                } else {
                    percent = ((completedSections + sectionFilled / sectionFields) / totalSections) * 100;
                    progressBar.style.width = `${percent}%`;
                    progressBar.setAttribute('aria-valuenow', Math.round(percent));
                    return;
                }
            }

            percent = (completedSections / totalSections) * 100;
            progressBar.style.width = `${percent}%`;
            progressBar.setAttribute('aria-valuenow', Math.round(percent));
        }

        function renderFAQ(faqArray) {
            const faqContainer = document.getElementById('faq-body');
            if (!faqContainer) return;

            faqContainer.innerHTML = ''; // Очистить

            if (!faqArray || faqArray.length === 0) {
                faqContainer.innerHTML = '<p class="text-muted">Нет подсказок для этого шага.</p>';
                return;
            }

            faqArray.forEach((faq, index) => {
                const block = document.createElement('div');
                block.className = 'mb-5';

                block.innerHTML = `
                    <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#faq_${index}">
                        <span class="accordion-icon">
                            <span class="svg-icon svg-icon-4"><i class="bi bi-question-circle"></i></span>
                        </span>
                        <h3 class="fs-6 text-gray-800 fw-bold">${faq.question}</h3>
                    </div>
                    <div id="faq_${index}" class="accordion-collapse collapse">
                        <div class="accordion-body text-muted ps-10">${faq.answer}</div>
                    </div>
                `;

                faqContainer.appendChild(block);
            });
        }


        wizard.querySelectorAll('input, textarea, select').forEach(el => {
            el.addEventListener('input', updateSmartProgressBar);
        });

        updateSmartProgressBar();


        document.querySelectorAll('.progress-nav-item').forEach(item => {
        item.addEventListener('click', () => {
            const section = item.dataset.jumpTo;
            const targetStep = wizard.querySelector(`.form-step[data-section="${section}"]`);

            if (targetStep) {
                // Спрятать все
                wizard.querySelectorAll('.form-step').forEach(step => {
                    step.classList.remove('active');
                    step.style.display = 'none';
                });

                // Показать нужный
                targetStep.classList.add('active');
                targetStep.style.display = 'block';
                const faqData = targetStep.dataset.faq ? JSON.parse(targetStep.dataset.faq) : [];
                renderFAQ(faqData);
            }
        });
    });

    }, 300);
});
