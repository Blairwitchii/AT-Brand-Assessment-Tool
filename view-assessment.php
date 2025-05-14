<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Slide Presentation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    :root {
      --header-height: 64px;
      --nav-height: 64px;
      --presentation-header-height: 70px;
      --presentation-pagination-height: 80px;
    }

    html, body {
      height: 100%;
      margin: 0;
      background: #f0f0f0;
      scroll-behavior: auto !important;
    }

    body.presentation-mode {
      scroll-behavior: auto !important;
    }

    .header, .presentation-header {
      height: var(--header-height);
      background-color: #e3e64b;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .presentation-header {
      display: none;
    }

    .presentation-header.show {
      display: flex;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: var(--presentation-header-height);
      z-index: 1000;
    }

    .nav-header {
      height: var(--nav-height);
      background-color: #f8f9fa;
      padding: 0.75rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #dee2e6;
    }

    .slides-container {
      max-width: 1000px;
      margin: 1rem auto;
      padding: 1rem;
    }

    .slide {
      display: none;
      padding: 2rem;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      background: transparent;
    }

    .slide.active {
      display: block;
    }

    @media (min-width: 768px) {
      .slide.active {
        height: calc(100vh - var(--header-height) - var(--nav-height) - 2rem);
        overflow-y: auto;
      }

      body.presentation-mode .slide {
        height: calc(100vh - var(--presentation-header-height) - var(--presentation-pagination-height) - 3rem);
        margin-bottom: 3rem;
        display: block !important;
        overflow-y: auto;
        scroll-margin-top: var(--presentation-header-height);
      }
    }

    .slide-footer {
      border-top: 1px solid #dee2e6;
      font-size: 0.8rem;
      color: #6c757d;
      padding-top: 1rem;
      margin-top: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .slide-footer a {
      color: #6c757d;
      text-decoration: underline;
    }

    .presentation-pagination {
      position: fixed;
      bottom: 1rem;
      left: 50%;
      transform: translateX(-50%);
      background: #f8f9fa;
      border-radius: 30px;
      padding: 0.5rem 1.5rem;
      display: none;
      align-items: center;
      z-index: 1000;
      height: var(--presentation-pagination-height);
    }

    .presentation-pagination.show {
      display: flex;
    }
  </style>
</head>
<body>
  <div class="header" id="mainHeader">
    <div>Fisher</div>
    <div>My Account: Shaun Ryan</div>
  </div>

  <div class="presentation-header px-4" id="presentationHeader">
    <div><strong>Agile Workplaces - Assessment</strong></div>
    <div class="d-flex gap-3 align-items-center">
      <button class="btn btn-link text-dark" onclick="downloadPDF()">🔌 Download</button>
      <button class="btn btn-link text-dark" onclick="printSlides()">🖨️ Print</button>
      <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
    </div>
  </div>

  <div class="nav-header" id="navHeader">
    <a href="#" class="text-decoration-none">&larr; Edit client details</a>
    <div class="d-flex align-items-center">
      <button id="prevBtn" class="btn btn-light me-2">&larr;</button>
      <span class="pagination-text" id="paginationText">Page 1 of 3</span>
      <button id="nextBtn" class="btn btn-light ms-2">&rarr;</button>
      <div class="vr mx-3"></div>
      <button id="presentationToggle" class="btn btn-outline-secondary btn-sm me-2">🎥 Presentation View</button>
      <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
    </div>
  </div>

  <div class="slides-container" id="slidesContainer">
    <div class="slide active" id="slide-0">
      <h2>Cover</h2>
      <p class="text-muted">360° Brand Analysis + Digital Growth Strategy</p>
      <h1><strong>Client</strong> <em>Name</em>.</h1>
      <div class="slide-footer">
        <strong>About Today.</strong>
        <span>Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a></span>
      </div>
    </div>
    <div class="slide" id="slide-1">
      <h2>Overview</h2>
      <p>This slide provides an overview of our findings.</p>
      <div class="slide-footer">
        <strong>About Today.</strong>
        <span>Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a></span>
      </div>
    </div>
    <div class="slide" id="slide-2">
      <h2>About Us</h2>
      <p>This acts as a North Star, providing a consistent brand narrative...</p>
      <div class="slide-footer">
        <strong>About Today.</strong>
        <span>Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a></span>
      </div>
    </div>
  </div>

  <div class="presentation-pagination" id="presentationPagination">
    <button id="prevBtnBottom" class="btn btn-light me-2">&larr;</button>
    <span id="paginationTextBottom">Page 1 of 3</span>
    <button id="nextBtnBottom" class="btn btn-light ms-2">&rarr;</button>
  </div>

  <!-- Share Modal -->
  <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 rounded-3 shadow">
        <div class="modal-body bg-light p-4 d-flex flex-column gap-3">
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-semibold text-success">✔️ Link created</div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="input-group">
            <input type="text" id="shareLinkInput" class="form-control rounded-pill px-3" value="https://yourdomain.com/share-link" readonly>
            <button class="btn btn-dark rounded-pill ms-2 px-4" onclick="copyShareLink()">Copy link</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtnBottom = document.getElementById('prevBtnBottom');
    const nextBtnBottom = document.getElementById('nextBtnBottom');
    const paginationText = document.getElementById('paginationText');
    const paginationTextBottom = document.getElementById('paginationTextBottom');
    const presentationToggle = document.getElementById('presentationToggle');
    const presentationPagination = document.getElementById('presentationPagination');
    const navHeader = document.getElementById('navHeader');
    const mainHeader = document.getElementById('mainHeader');
    const presentationHeader = document.getElementById('presentationHeader');

    let currentIndex = 0;
    let isPresentationMode = false;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && isPresentationMode) {
          const index = Array.from(slides).indexOf(entry.target);
          if (index !== -1 && index !== currentIndex) {
            currentIndex = index;
            updatePaginationText();
          }
        }
      });
    }, { threshold: 0.5 });

    function setupScrollObserver() {
      slides.forEach(slide => observer.observe(slide));
    }

    function teardownScrollObserver() {
      slides.forEach(slide => observer.unobserve(slide));
    }

    function updatePaginationText() {
      paginationText.textContent = paginationTextBottom.textContent = `Page ${currentIndex + 1} of ${slides.length}`;
      prevBtn.disabled = prevBtnBottom.disabled = currentIndex === 0;
      nextBtn.disabled = nextBtnBottom.disabled = currentIndex === slides.length - 1;
    }

    function updateSlides() {
      if (isPresentationMode) {
        const offset = presentationHeader.offsetHeight;
        const target = document.getElementById(`slide-${currentIndex}`);
        window.scrollTo({ top: target.offsetTop - offset, behavior: 'auto' });
      } else {
        slides.forEach((slide, i) => {
          slide.classList.toggle('active', i === currentIndex);
        });
      }
      updatePaginationText();
    }

    function togglePresentation() {
      isPresentationMode = !isPresentationMode;
      document.body.classList.toggle('presentation-mode', isPresentationMode);
      navHeader.style.display = isPresentationMode ? 'none' : 'flex';
      mainHeader.style.display = isPresentationMode ? 'none' : 'flex';
      presentationHeader.classList.toggle('show', isPresentationMode);
      presentationPagination.classList.toggle('show', isPresentationMode);

      if (isPresentationMode) setupScrollObserver();
      else teardownScrollObserver();

      updateSlides();
    }

    function printSlides() {
      const originalDisplay = [];
      slides.forEach((slide, i) => {
        originalDisplay[i] = slide.style.display;
        slide.style.display = 'block';
      });
      window.print();
      slides.forEach((slide, i) => {
        slide.style.display = originalDisplay[i];
      });
    }

    function downloadPDF() {
      const originalDisplay = [];
      slides.forEach((slide, i) => {
        originalDisplay[i] = slide.style.display;
        slide.style.display = 'block';
      });

      const opt = {
        margin: 0.5,
        filename: 'slide-presentation.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      html2pdf().set(opt).from(document.getElementById('slidesContainer')).save().then(() => {
        slides.forEach((slide, i) => {
          slide.style.display = originalDisplay[i];
        });
      });
    }

    function copyShareLink() {
      const input = document.getElementById('shareLinkInput');
      input.select();
      input.setSelectionRange(0, 99999);
      navigator.clipboard.writeText(input.value).then(() => {
        alert('Link copied to clipboard!');
      });
    }

    prevBtn.addEventListener('click', () => { if (currentIndex > 0) currentIndex--; updateSlides(); });
    nextBtn.addEventListener('click', () => { if (currentIndex < slides.length - 1) currentIndex++; updateSlides(); });
    prevBtnBottom.addEventListener('click', () => { if (currentIndex > 0) currentIndex--; updateSlides(); });
    nextBtnBottom.addEventListener('click', () => { if (currentIndex < slides.length - 1) currentIndex++; updateSlides(); });
    presentationToggle.addEventListener('click', togglePresentation);

    updateSlides();
  </script>
</body>
</html>
