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
</body>

</html>