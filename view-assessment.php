<?php include "includes/header.php" ?>
<div class="header" id="mainHeader">
  <div class="layer">
    <img class="vector" src="https://c.animaapp.com/ct0n38lD/img/vector.svg">
    <img class="group" src="https://c.animaapp.com/ct0n38lD/img/group@2x.png">
  </div>
  <!-- Account Dropdown -->
  <div class="dropdown d-flex align-items-center">
    <button class="btn bg-transparent border-0 dropdown-toggle d-flex flex-column align-items-start" type="button" id="accountMenu" data-bs-toggle="dropdown" aria-expanded="false">
      <div class="d-flex align-items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="7" r="4" />
          <path d="M5.5 21a7.5 7.5 0 0 1 13 0" />
        </svg>
        <div class="text-start lh-sm">
          <small class="text-muted">My Account</small><br />
          <strong>Shaun Ryan</strong>
        </div>
      </div>
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountMenu">
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
    </ul>
  </div>

</div>

<div class="presentation-header px-4" id="presentationHeader">
  <div>
    <h3 class="mb-0">Agile Workplaces - Assessment</h3>
  </div>
  <div class="d-flex gap-3 align-items-center">
    <button class="btn btn-link text-dark" onclick="downloadPDF()">🔌 Download</button>
    <button class="btn btn-link text-dark" onclick="printSlides()">🖨️ Print</button>
    <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
    <a href="#" class="btn btn-link text-danger text-decoration-none d-none" onclick="togglePresentation()">❌ Close</a>
  </div>
</div>

<div class="nav-header" id="navHeader">
  <a href="#" class="text-decoration-none">&larr; Edit client details</a>
  <div class="d-flex align-items-center">
    <button id="prevBtn" class="btn btn-light me-2">&larr;</button>
    <button id="nextBtn" class="btn btn-light me-2">&rarr;</button>
    <span class="pagination-text" id="paginationText">Page 1 of 3</span>
    <div class="vr mx-3"></div>
    <button id="presentationToggle" class="btn btn-outline-secondary btn-sm me-2">🎥 Presentation View</button>
    <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
  </div>
</div>

<div class="slides-container" id="slidesContainer">
  <div class="slide slide-cover active" id="slide-0">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <p class="slide-subtitle">360° Brand Analysis + Digital Growth Strategy</p>
        <h2 class="cover-name"><strong>Client</strong> <em>Name</em>.</h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>

  </div>
  <div class="slide" id="slide-1">
    <h2>Overview</h2>
    <p>This slide provides an overview of our findings.</p>
    <?php include "includes/slide-footer.php" ?>
  </div>
  <div class="slide" id="slide-2">
    <h2>About Us</h2>
    <p>This acts as a North Star, providing a consistent brand narrative...</p>
    <?php include "includes/slide-footer.php" ?>
  </div>
  <div class="slide" id="slide-3">
    <h2>Contact</h2>
    <p>This acts as a North Star, providing a consistent brand narrative...</p>
    <?php include "includes/slide-footer.php" ?>
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

<?php include "includes/footer.php" ?>