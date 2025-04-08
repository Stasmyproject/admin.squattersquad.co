function initFormWizard() {
    const wizard = document.querySelector('.form-wizard');
    console.log("wizard найден:", wizard);
    if (!wizard) return;

    const steps = wizard.querySelectorAll('.form-step');
    let currentStep = 0;

    function showStep(index) {
        steps.forEach((step, i) => {
            step.style.display = i === index ? 'block' : 'none';
            step.classList.toggle('active', i === index);
        });

    // 🔥 Обновляем прогресс
    const progressBar = wizard.querySelector('.progress-bar');
    if (progressBar) {
        const totalSteps = steps.length;
        const progressPercent = Math.round(((index + 1) / totalSteps) * 100);
        progressBar.style.width = progressPercent + '%';
        progressBar.setAttribute('aria-valuenow', progressPercent);
    }
    }


    showStep(currentStep);

    // ✅ Показываем форму, скрываем лоадер (Metronic way)
    document.getElementById('form_loader')?.classList.add('d-none');
    document.getElementById('form_wrapper')?.style?.removeProperty('display');

    // ✅ Каскадная загрузка USCities.json
    fetch('/wp-content/themes/metronic-wp/assets/data/USCities.json')
      .then(res => res.json())
      .then(data => {
          const stateSelect = wizard.querySelector('#state');
          const countySelect = wizard.querySelector('#county');
          const citySelect = wizard.querySelector('#city_select');
          const zipSelect = wizard.querySelector('#zip');

          const states = [...new Set(data.map(entry => entry.state))].sort();

          // 1. Заполняем ШТАТЫ
          states.forEach(stateCode => {
              const opt = document.createElement('option');
              opt.value = stateCode;
              opt.textContent = stateCode;
              stateSelect.appendChild(opt);
          });

          // 2. При выборе ШТАТА
          stateSelect.addEventListener('change', () => {
              const selectedState = stateSelect.value;
              countySelect.innerHTML = '<option value="">Select County</option>';
              citySelect.innerHTML = '<option value="">Select City</option>';
              zipSelect.innerHTML = '<option value="">Select ZIP Code</option>';
              countySelect.disabled = true;
              citySelect.disabled = true;
              zipSelect.disabled = true;

              if (!selectedState) return;

              const counties = [...new Set(data
                  .filter(entry => entry.state === selectedState)
                  .map(entry => entry.county))].sort();

              counties.forEach(county => {
                  const opt = document.createElement('option');
                  opt.value = county;
                  opt.textContent = county;
                  countySelect.appendChild(opt);
              });

              countySelect.disabled = false;
          });

          // 3. При выборе ОКРУГА
          countySelect.addEventListener('change', () => {
              const selectedState = stateSelect.value;
              const selectedCounty = countySelect.value;
              citySelect.innerHTML = '<option value="">Select City</option>';
              zipSelect.innerHTML = '<option value="">Select ZIP Code</option>';
              citySelect.disabled = true;
              zipSelect.disabled = true;

              if (!selectedCounty) return;

              const cities = [...new Set(data
                  .filter(entry => entry.state === selectedState && entry.county === selectedCounty)
                  .map(entry => entry.city))].sort();

              cities.forEach(city => {
                  const opt = document.createElement('option');
                  opt.value = city;
                  opt.textContent = city;
                  citySelect.appendChild(opt);
              });

              citySelect.disabled = false;
          });

          // 4. При выборе ГОРОДА
          citySelect.addEventListener('change', () => {
              const selectedState = stateSelect.value;
              const selectedCounty = countySelect.value;
              const selectedCity = citySelect.value;

              zipSelect.innerHTML = '<option value="">Select ZIP Code</option>';
              zipSelect.disabled = true;

              if (!selectedCity) return;

              const zips = [...new Set(data
                  .filter(entry =>
                      entry.state === selectedState &&
                      entry.county === selectedCounty &&
                      entry.city === selectedCity)
                  .map(entry => entry.zip_code))].sort();

              zips.forEach(zip => {
                  const opt = document.createElement('option');
                  opt.value = zip;
                  opt.textContent = zip;
                  zipSelect.appendChild(opt);
              });

              zipSelect.disabled = false;
          });
      });


    wizard.querySelectorAll('.next-step').forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    wizard.querySelectorAll('.prev-step').forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    const submitButton = wizard.querySelector('.submit-form');
    if (submitButton) {
        submitButton.addEventListener('click', () => {
            const projectId = wizard.dataset.projectId;
                const areYou = wizard.querySelector('select[name="are_you"]')?.value || '';
                const legalResidence = wizard.querySelector('select[name="legal_residence"]')?.value || '';
                const squattersDuration = wizard.querySelector('select[name="squatters_duration"]')?.value || '';
                const policeContacted = wizard.querySelector('select[name="police_contacted"]')?.value || '';
                const utilityServices = wizard.querySelector('select[name="utility_services"]')?.value || '';
                const receiveMail = wizard.querySelector('select[name="receive_mail"]')?.value || '';
                const moneyRequestedToLeave = wizard.querySelector('select[name="money_requested_to_leave"]')?.value || '';
            const content = wizard.querySelector('textarea[name="post_content"]')?.value.trim() || '';
                const state = wizard.querySelector('select[name="state"]')?.value || '';
                const county = wizard.querySelector('select[name="county"]')?.value || '';
                const city = wizard.querySelector('select[name="city"]')?.value || '';
                const zip = wizard.querySelector('select[name="zip"]')?.value || '';



            if (!projectId || parseInt(projectId) <= 0) {
                alert("❌ Project ID is missing or invalid.");
                return;
            }

            fetch(ajaxurl.url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'save_project_step',
                        are_you: areYou,
                        legal_residence: legalResidence, 
                        squatters_duration: squattersDuration,
                        police_contacted: policeContacted,
                        utility_services: utilityServices,
                        receive_mail: receiveMail,
                        money_requested_to_leave: moneyRequestedToLeave, 
                    project_id: projectId,
                    post_content: content,
                        state: state,
                        county: county,
                        city: city,
                        zip: zip,
                                            
                })
            })
            .then(res => res.json())
            .then(res => {
                if (res.success) {
                    alert("✅ Project saved successfully!");
                } else {
                    alert("❌ Error: " + res.data);
                }
            })
            .catch(err => {
                console.error(err);
                alert("AJAX error");
            });
        });
    }
}

// ✅ Попробовать запустить при DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(initFormWizard, 100); // ← задержка, чтобы форма точно отрендерилась
});

// ✅ Можно вызвать вручную, если подгружается через AJAX
// initFormWizard();


// стздание нового преокта через кнопку создать преокт
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('create-new-project');

    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            fetch(ajaxurl.url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'create_new_project'
                })
            })
            .then(res => res.json())
            .then(res => {
                if (res.success && res.data.project_url) {
                    window.location.href = res.data.project_url;
                } else {
                    alert('❌ Could not create a new project');
                }
            })
            .catch(err => {
                console.error(err);
                alert('AJAX error');
            });
        });
    }
});


// Универсальный обработчик "Next", исключая шаг 9
$('.next-step').on('click', function (e) {
    const $step = $(this).closest('.form-step');
    const currentStep = parseInt($step.data('step'));

    // ❗ Пропускаем шаг 9 — он имеет собственную логику
    if (currentStep === 9) return;

    const $next = $step.next('.form-step');
    if ($next.length) {
        $step.removeClass('active').hide();
        $next.addClass('active').fadeIn();
    }
});



// Шаг 9 — отдельная валидация и переход
$(document).on('click', '.form-step.step-9 .next-step', function (e) {
    e.preventDefault();

    let valid = true;

    $('.form-step.step-9 select[required]').each(function () {
        const $el = $(this);
        if (!$el.val() || $el.prop('disabled')) {
            $el.addClass('is-invalid');
            valid = false;
        } else {
            $el.removeClass('is-invalid');
        }
    });

    if (!valid) {
        alert('Please fill in all required address fields.');
        return;
    }

    // ✅ Только если валидация прошла — двигаем на шаг 10
    $('.form-step').removeClass('active').hide();
    $('.form-step.step-10').addClass('active').fadeIn();
});


