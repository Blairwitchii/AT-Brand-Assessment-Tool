<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slide Presentation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
    }
    body {
      background: #f0f0f0;
      margin: 0;
    }
    .header, .presentation-header {
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
    }
    .nav-header {
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
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .slide {
      display: none;
      padding: 2rem;
      position: relative;
      height: calc(100vh - 180px);
      overflow-y: auto;
    }
    .presentation-header.show ~ .slides-container .slide {
      height: calc(100vh - 220px);
    }
    .slide.active {
      display: block;
    }
    .btn-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.25rem 0.6rem;
    }
    .pagination-text {
      margin: 0 1rem;
      font-weight: 500;
    }
    .slide-footer {
      border-top: 1px solid #dee2e6;
      font-size: 0.8rem;
      color: #6c757d;
      padding-top: 1rem;
      margin-top: 2rem;
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
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      display: none;
      align-items: center;
      z-index: 1000;
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
  <div class="presentation-header w-100 px-4" id="presentationHeader">
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
      <button id="prevBtn" class="btn btn-light btn-icon me-2">&larr;</button>
      <span class="pagination-text" id="paginationText">Page 1 of 2</span>
      <button id="nextBtn" class="btn btn-light btn-icon ms-2">&rarr;</button>
      <div class="vr mx-3"></div>
      <button id="presentationToggle" class="btn btn-outline-secondary btn-sm me-2">🎥 Presentation View</button>
      <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
    </div>
  </div>

  <div class="slides-container" id="slidesContainer">
    <div class="slide active">
      <h2>Cover</h2>
      <p class="text-muted" style="font-size: 0.9rem;">360° Brand Analysis + Digital Growth Strategy</p>
      <h1><strong>Client</strong> <em>Name</em>.</h1>
      <div class="slide-footer">
        <strong>About Today.</strong>
        <span>All concepts within this document remain the exclusive property of About Today. Visit <a href="https://www.abouttoday.com.au" target="_blank">www.abouttoday.com.au</a> to view our full copyright policy.</span>
      </div>
    </div>
    <div class="slide">
      <h2>Overview</h2>
      <p>An analysis of the brand has identified some potential misalignment between the brand in its current state and the foundation work it should adopt to achieve its desired state according to the growth analysis.</p>
      <p>The business could benefit greatly from uncovering and developing a ‘tone of voice’ for their brand that aligns with the growth objectives.</p>
      <p>This then acts as a North Star, providing the framework for a consistent brand narrative, enabling better brand engagement, understanding and advocacy and conversations with prospects.</p>
      <div class="slide-footer">
        <strong>About Today.</strong>
        <span>All concepts within this document remain the exclusive property of About Today. Visit <a href="https://www.abouttoday.com.au" target="_blank">www.abouttoday.com.au</a> to view our full copyright policy.</span>
      </div>
    </div>
  </div>

  <div class="presentation-pagination" id="presentationPagination">
    <button id="prevBtnBottom" class="btn btn-light btn-icon me-2">&larr;</button>
    <span id="paginationTextBottom">Page 1 of 2</span>
    <button id="nextBtnBottom" class="btn btn-light btn-icon ms-2">&rarr;</button>
  </div>

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

    function updateSlides() {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === currentIndex);
      });
      prevBtn.disabled = prevBtnBottom.disabled = currentIndex === 0;
      nextBtn.disabled = nextBtnBottom.disabled = currentIndex === slides.length - 1;
      paginationText.textContent = paginationTextBottom.textContent = `Page ${currentIndex + 1} of ${slides.length}`;
    }

    function togglePresentation() {
      isPresentationMode = !isPresentationMode;
      navHeader.style.display = isPresentationMode ? 'none' : 'flex';
      mainHeader.style.display = isPresentationMode ? 'none' : 'flex';
      presentationHeader.classList.toggle('show', isPresentationMode);
      presentationPagination.classList.toggle('show', isPresentationMode);
    }

    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlides();
      }
    });
    nextBtn.addEventListener('click', () => {
      if (currentIndex < slides.length - 1) {
        currentIndex++;
        updateSlides();
      }
    });
    prevBtnBottom.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlides();
      }
    });
    nextBtnBottom.addEventListener('click', () => {
      if (currentIndex < slides.length - 1) {
        currentIndex++;
        updateSlides();
      }
    });
    presentationToggle.addEventListener('click', togglePresentation);

    updateSlides();

    function printSlides() {
      const originalState = [];
      slides.forEach((slide, i) => {
        originalState[i] = slide.classList.contains('active');
        slide.classList.add('active');
      });
      window.print();
      slides.forEach((slide, i) => {
        if (!originalState[i]) {
          slide.classList.remove('active');
        }
      });
    }

    function downloadPDF() {
      const originalStates = [];
      slides.forEach((slide, i) => {
        originalStates[i] = slide.classList.contains('active');
        slide.classList.add('active');
      });
      const element = document.getElementById('slidesContainer');
      const opt = {
        margin: 0.5,
        filename: 'slide-presentation.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      html2pdf().set(opt).from(element).save().then(() => {
        slides.forEach((slide, i) => {
          if (!originalStates[i]) {
            slide.classList.remove('active');
          }
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
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Share Link Modal -->
  <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 rounded-3 shadow">
        <div class="modal-body bg-light p-4 d-flex flex-column gap-3">
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-semibold text-success">✔️ Link created</div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="input-group">
            <input type="text" id="shareLinkInput" class="form-control rounded-pill px-3" value="https://abouttoday.sharepoint.com/:u:/r/site" readonly>
            <button class="btn btn-dark rounded-pill ms-2 px-4" onclick="copyShareLink()">Copy link</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
