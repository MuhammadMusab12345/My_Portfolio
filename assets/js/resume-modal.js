/**
 * Muhammad Musab - Resume Lightbox Modal Handler
 */

document.addEventListener('DOMContentLoaded', () => {
  const modalOverlay = document.getElementById('resumeModalOverlay');
  const openButtons = document.querySelectorAll('.open-resume-modal-btn');
  const closeButton = document.getElementById('closeResumeModalBtn');
  const downloadButton = document.getElementById('downloadResumeBtn');

  const resumeImageUrl = 'https://raw.githubusercontent.com/MuhammadMusab12345/My-Resume/refs/heads/main/Muhammad-Musab-Resume.png';

  if (!modalOverlay) return;

  const openModal = (e) => {
    if (e) e.preventDefault();
    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const closeModal = () => {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
  };

  openButtons.forEach(btn => {
    btn.addEventListener('click', openModal);
  });

  if (closeButton) {
    closeButton.addEventListener('click', closeModal);
  }

  // Click outside to close
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });

  // ESC key to close
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
      closeModal();
    }
  });

  // Download Handler
  if (downloadButton) {
    downloadButton.addEventListener('click', async (e) => {
      e.preventDefault();
      try {
        const response = await fetch(resumeImageUrl);
        const blob = await response.blob();
        const blobUrl = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = blobUrl;
        link.download = 'Muhammad-Musab-Resume.png';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(blobUrl);
      } catch (err) {
        // Fallback: open image directly
        window.open(resumeImageUrl, '_blank');
      }
    });
  }
});
