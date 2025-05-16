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
    <div class="slide-content-wrap">
      <h2 class="slide-title">Overview</h2>
      <div class="overview-content">
        <p>An analysis of the brand has identified some potential misalignment between the brand in it’s current state and the foundation work it should adopt to achieve its desired state according to the growth analysis.</p>
        <p>
          The business could benefit greatly from uncovering and developing a ‘tone of voice’ for their brand that aligns with the growth objectives.
        </p>
        <p>
          This then acts as a North Star, providing the framework for a consistent brand narrative, enabling better brand engagement, understanding and advocacy and conversations with prospects.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>
  <div class="slide" id="slide-2">
    <h2 class="slide-title">This Document — Overview</h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Current Brand</h3>
        <p>What is the current state of the brand, what’s it’s personality, how does it represent itself?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Desired Brand</h3>
        <p>What should the tone of voice, sentiment and language guidelines be to represent the desired state?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">The Competition</h3>
        <p>Who are we up against, and what’s the gap in the defense?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Growth Plan</h3>
        <p>What’s the plan to bridge the gap between the current brand to the desired brand. How do we get there?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Black Light Revenue</h3>
        <p>Are there any hidden strategies that can be leveraged to open up new streams of revenue?
        </p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>
  <div class="slide slide-cover" id="slide-3">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <h2 class="cover-name"><strong>Current</strong> <em>Brands</em>.</h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>
  <div class="slide" id="slide-4">
    <h2 class="slide-title">This Document — Overview</h2>
    <div class="full-img-wrap m-auto">
      <img src="/assets/images/full-img-placeholder.png" alt="">
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>
  <div class="slide" id="slide-5">
    <h2 class="slide-title">Current Brand — Strengths</h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Strength 1</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Strength 2</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Strength 3</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Strength 4</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Strength 5</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-6">
    <h2 class="slide-title">Current Brand — Weakness</h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Weakness 1</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Weakness 2</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Weakness 3</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Weakness 4</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Weakness 5</h3>
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et aliquet lobortis sollicitudin vestibulum.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-7">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Audience — <em>Attributes</em></h2>
      <div class="overview-content">
        <p>An analysis of the brand has identified some potential misalignment between the brand in it’s current state and the foundation work it should adopt to achieve its desired state according to the growth analysis.</p>
        <p>
          The business could benefit greatly from uncovering and developing a ‘tone of voice’ for their brand that aligns with the growth objectives.
        </p>
        <p>
          This then acts as a North Star, providing the framework for a consistent brand narrative, enabling better brand engagement, understanding and advocacy and conversations with prospects.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide slide-cover" id="slide-8">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <h2 class="cover-name"><strong>Brand</strong> <em>Archetype(s)</em>.</h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-9">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Brand Archetypes — <em>Overview</em></h2>
      <div class="overview-content">
        <p>A brand’s archetype is its foundational DNA—when design and content reflect it authentically, a website transforms from a functional tool into a compelling brand experience.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-10">
    <h2 class="slide-title">Brand Archetypes — <em>Overview</em></h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">What is a brand archetype?</h3>
        <p>A brand archetype is a universally recognised character or persona that a brand embodies, which helps to convey its identity, values, and essence to its audience. These archetypes are based on common, recurring characters found in stories, myths, and cultural narratives, and they tap into deep-seated psychological patterns and emotions. By aligning with a specific archetype, a brand can create a consistent and relatable image that resonates with its target audience, fostering a engagement, connection, advocacy and loyalty.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Why is it important for a Brand to have an Archetype?</h3>
        <p>By identifying and embodying an archetype, a brand can develop a clear and coherent narrative that distinguishes it from
          competitors, making it easier for consumers to connect with and remember the brand. This strategy helps in building a strong
          brand voice, guiding marketing communications, and ensuring consistent messaging across all platforms.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">How do we explore and assign Brand Archetypes?</h3>
        <p>We begin by getting to know your brand’s core identity—its mission, values, and personality. Then, we look at who your target audience is, including their demographics, interests, and emotional drivers. We also analyse your competitors to find gaps and opportunities.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-11">
    <h2 class="slide-title">Brand Archetypes — <em>What are they?</em></h2>
    <div class="m-auto w-100">
      <div class="row three-col-grid">
        <div class="three-col-grid col-md-4">
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Innocent</h3>
            <p>Innocent brands are pure, optimistic, and wholesome. They evoke feelings of simplicity, sincerity, and nostalgia, appealing to those seeking happiness and a sense of security..</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Sage</h3>
            <p>Sage brands are wise, knowledgeable, and insightful. They offer guidance, expertise, and clarity, positioning themselves as authorities in their field and champions of learning.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Explorer</h3>
            <p>Explorer brands are adventurous, daring, and independent. They encourage individuals to seek new experiences, challenge the status quo, and embrace freedom and self-discovery.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Magician</h3>
            <p>Magician brands are visionary, transformative, and charismatic. They inspire wonder and awe, promising to unlock hidden potential and create extraordinary experiences.</p>
          </div>
        </div>

        <div class="three-col-grid col-md-4">
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Hero</h3>
            <p>The Hero archetype represents bravery, strength, and overcoming obstacles. Brands embodying this archetype often strive to inspire greatness and empower their customers.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Lover</h3>
            <p>Lover brands are passionate, sensual, and romantic. They celebrate intimacy, beauty, and emotional connections, offering products or services that evoke desire and pleasure.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Jester</h3>
            <p>Jester brands are playful, humorous, and irreverent. They entertain and delight, injecting joy and levity into everyday life while encouraging spontaneity and fun.</p>
          </div>
          <div class="doc-overview-box">
            <h3 class="h4-slide-title">The Everyman</h3>
            <p>Everyman brands are relatable, down-to-earth, and inclusive. They resonate with ordinary people and emphasise the value of community, belonging, and authenticity.</p>
          </div>
        </div>

        <div class="three-col-grid col-md-4">
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Caregiver</h3>
            <p>Caregiver brands are nurturing, compassionate, and supportive. They prioritise the well-being of others and foster connections based on empathy, trust, and generosity.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Ruler</h3>
            <p>Ruler brands are authoritative, prestigious, and commanding. They embody power, success, and sophistication, appealing to those who aspire to leadership and excellence.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Creator</h3>
            <p>Creator brands are imaginative, innovative, and expressive. They inspire creativity and self-expression, empowering individuals to bring their ideas to life and make a meaningful impact.</p>
          </div>
          <div class="doc-overview-box copy-12">
            <h3 class="h4-slide-title">The Rebel</h3>
            <p>Rebel brands are characterised by its defiance of norms and conventions, its propensity for disruption, and its celebration of individuality and freedom.</p>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide p-0" id="slide-12">
    <div class="slide-content-wrap with-side p-0 mb-0 ">
      <div class="black-side p-60 dark-bg">
        <div class="side-title d-block">
          Brand Archetypes<br>
          <em>Current State</em>
        </div>
        <div class="img-holder m-auto"> <img src="/assets/images/3-img-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner archetype name</span>
          <div class="pecentage-wrap">
            Alignment: 0%
          </div>
        </div>

      </div>
      <div class="r_content-box p-80">
        <div class="with-side-content m-auto">
          <div class="with-border-bottom">
            <h5 class="tiny-title">OVERVIEW</h5>
            <p class="mb-0">Netus quis elementum aptent phasellus. Rhoncus et velit sem, urna quis magnis lobortis eget nibh. Taciti. Commodo dignissim suscipit diam potenti venenatis donec nam mi class urna. Molestie scelerisque natoque justo ad libero. Volutpat placerat mus turpis cursus nisl interdum leo nec massa ultrices posuere. Inceptos torquent Sem dapibus ultricies.</p>
          </div>
          <div class="with-border-bottom">
            <h5 class="tiny-title">CHARACTERISTICS</h5>
            <p class="mb-0 ivy-32">Placeholder 1 / Placeholder 2 /<br>
              Placeholder 3 / Placeholder 4 </p>

          </div>
          <div>
            <h5 class="tiny-title">BRAND EXAMPLES</h5>
            <img src="/assets/images/logogrid-placeholder.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slide p-0" id="slide-13">
    <div class="slide-content-wrap with-side p-0 mb-0 ">
      <div class="black-side p-60 dark-bg">
        <div class="side-title d-block">
          Brand Archetypes<br>
          <em>Current State</em>
        </div>
        <div class="img-holder m-auto"> <img src="/assets/images/3-img-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner archetype name</span>
          <div class="pecentage-wrap">
            Alignment: 0%
          </div>
        </div>

      </div>
      <div class="r_content-box p-80">
        <div class="with-side-content m-auto">
          <div class="with-border-bottom">
            <h5 class="tiny-title">OVERVIEW</h5>
            <p class="mb-0">Netus quis elementum aptent phasellus. Rhoncus et velit sem, urna quis magnis lobortis eget nibh. Taciti. Commodo dignissim suscipit diam potenti venenatis donec nam mi class urna. Molestie scelerisque natoque justo ad libero. Volutpat placerat mus turpis cursus nisl interdum leo nec massa ultrices posuere. Inceptos torquent Sem dapibus ultricies.</p>
          </div>
          <div class="with-border-bottom">
            <h5 class="tiny-title">CHARACTERISTICS</h5>
            <p class="mb-0 ivy-32">Placeholder 1 / Placeholder 2 /<br>
              Placeholder 3 / Placeholder 4 </p>

          </div>
          <div>
            <h5 class="tiny-title">BRAND EXAMPLES</h5>
            <img src="/assets/images/logogrid-placeholder.png" alt="">
          </div>
        </div>
      </div>
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

<?php include "includes/footer.php" ?>