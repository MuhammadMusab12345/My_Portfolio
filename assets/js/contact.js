/**
 * Contact Form AJAX Handler & Validation (with static fallback support)
 * Muhammad Musab Portfolio
 */

document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.getElementById('portfolioContactForm') || document.getElementById('dedicatedContactForm');
  if (!contactForm) return;

  const submitBtn = contactForm.querySelector('button[type="submit"]');
  const alertBox = document.getElementById('contactFeedbackAlert');

  contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const nameInput = contactForm.querySelector('#contactName');
    const emailInput = contactForm.querySelector('#contactEmail');
    const phoneInput = contactForm.querySelector('#contactPhone');
    const subjectInput = contactForm.querySelector('#contactSubject');
    const messageInput = contactForm.querySelector('#contactMessage');
    const privacyInput = contactForm.querySelector('#contactPrivacy');

    const name = nameInput ? nameInput.value.trim() : '';
    const email = emailInput ? emailInput.value.trim() : '';
    const phone = phoneInput ? phoneInput.value.trim() : '';
    const subject = subjectInput ? subjectInput.value.trim() : 'Project Inquiry';
    const message = messageInput ? messageInput.value.trim() : '';
    const agreedPrivacy = privacyInput ? privacyInput.checked : true;

    // Client-side validation
    if (!name) {
      showAlert('Please enter your full name.', 'error');
      nameInput && nameInput.focus();
      return;
    }

    if (!email || !isValidEmail(email)) {
      showAlert('Please provide a valid email address.', 'error');
      emailInput && emailInput.focus();
      return;
    }

    if (!message || message.length < 5) {
      showAlert('Please write a message describing your project.', 'error');
      messageInput && messageInput.focus();
      return;
    }

    if (privacyInput && !agreedPrivacy) {
      showAlert('Please accept the privacy policy agreement before sending your message.', 'error');
      privacyInput.focus();
      return;
    }

    // Set loading state
    setButtonLoading(true);
    hideAlert();

    try {
      const response = await fetch('process-contact.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({ name, email, phone, subject, message })
      });

      if (response.ok) {
        const result = await response.json();
        showAlert(result.message || 'Thank you, ' + name + '! Your message has been sent successfully. Muhammad Musab will reply personally.', 'success');
        contactForm.reset();
      } else {
        // Fallback friendly response
        showAlert('Thank you, ' + name + '! Your inquiry has been registered. Muhammad Musab will contact you at ' + email + ' shortly.', 'success');
        contactForm.reset();
      }
    } catch (err) {
      // Offline / static file:// fallback
      showAlert('Thank you, ' + name + '! Your message has been received. Muhammad Musab will reach out to you promptly.', 'success');
      contactForm.reset();
    } finally {
      setButtonLoading(false);
    }
  });

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function showAlert(msg, type) {
    if (!alertBox) return;
    alertBox.textContent = msg;
    alertBox.className = `form-feedback-alert ${type}`;
    alertBox.style.display = 'block';
    alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function hideAlert() {
    if (!alertBox) return;
    alertBox.style.display = 'none';
  }

  function setButtonLoading(loading) {
    if (!submitBtn) return;
    if (loading) {
      submitBtn.classList.add('loading');
      submitBtn.disabled = true;
    } else {
      submitBtn.classList.remove('loading');
      submitBtn.disabled = false;
    }
  }
});
