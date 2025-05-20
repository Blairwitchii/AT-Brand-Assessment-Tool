<!-- Mobile/Tablet Overlay -->
<div id="device-overlay">
  <div class="device-overlay-content">
    <h2>This site is best viewed on a desktop</h2>
    <p>For the best experience, please use a desktop or laptop computer.</p>
  </div>
</div>
<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content at-modal border-0 rounded-3 shadow">
      <div class="modal-body bg-light p-4 d-flex flex-column gap-3">
        <div class="d-flex justify-content-between align-items-center">
          <div class="fw-semibold linkcreated"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 10.75L9.25 13L13 7.75M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg> Link created</div>
          <div class="closebtn"  data-bs-dismiss="modal" aria-label="Close"><img src="/assets/images/close.png" alt="close"></div>
        </div>
        <div class="input-group linkcopy-wrap">
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
    }, {
        threshold: 0.5
    });

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
            const headerOffset = presentationHeader.offsetHeight + 30; // add 30px below fixed navbar
            const target = document.getElementById(`slide-${currentIndex}`);
            const scrollTargetY = target.offsetTop - headerOffset;

            window.scrollTo({
                top: scrollTargetY,
                behavior: 'auto'
            });
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
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
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

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) currentIndex--;
        updateSlides();
    });
    nextBtn.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) currentIndex++;
        updateSlides();
    });
    prevBtnBottom.addEventListener('click', () => {
        if (currentIndex > 0) currentIndex--;
        updateSlides();
    });
    nextBtnBottom.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) currentIndex++;
        updateSlides();
    });
    presentationToggle.addEventListener('click', togglePresentation);

    updateSlides();
</script>

<script>
  function checkDeviceOverlay() {
    const overlay = document.getElementById('device-overlay');
    const body = document.body;

    if (window.innerWidth < 1350) {
      overlay.style.display = 'flex';
      body.classList.add('no-scroll');
    } else {
      overlay.style.display = 'none';
      body.classList.remove('no-scroll');
    }
  }

  window.addEventListener('load', checkDeviceOverlay);
  window.addEventListener('resize', checkDeviceOverlay);
</script>
</body>

</html>