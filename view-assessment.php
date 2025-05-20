<?php include "includes/header.php" ?>
<?php include "includes/main-nav.php" ?>

<div class="presentation-header px-4" id="presentationHeader">
  <div>
    <h3 class="mb-0 companytitle">Agile Workplaces - Assessment</h3>
  </div>
  <div class="d-flex gap-3 align-items-center">
    <button class="btn btn-link text-dark presentbtns" onclick="downloadPDF()"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.25 6.75H5.625C5.12772 6.75 4.65081 6.94754 4.29917 7.29917C3.94754 7.65081 3.75 8.12772 3.75 8.625V14.875C3.75 15.3723 3.94754 15.8492 4.29917 16.2008C4.65081 16.5525 5.12772 16.75 5.625 16.75H11.875C12.3723 16.75 12.8492 16.5525 13.2008 16.2008C13.5525 15.8492 13.75 15.3723 13.75 14.875V8.625C13.75 8.12772 13.5525 7.65081 13.2008 7.29917C12.8492 6.94754 12.3723 6.75 11.875 6.75H11.25M6.25 9.875L8.75 12.375M8.75 12.375L11.25 9.875M8.75 12.375V1.75M13.75 9.25H14.375C14.8723 9.25 15.3492 9.44754 15.7008 9.79917C16.0525 10.1508 16.25 10.6277 16.25 11.125V17.375C16.25 17.8723 16.0525 18.3492 15.7008 18.7008C15.3492 19.0525 14.8723 19.25 14.375 19.25H8.125C7.62772 19.25 7.15081 19.0525 6.79917 18.7008C6.44754 18.3492 6.25 17.8723 6.25 17.375V16.75" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg> Download</button>
    <button class="btn btn-link text-dark presentbtns" onclick="printSlides()"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.6 12.0242C5.4 12.0492 5.2 12.0758 5 12.1042M5.6 12.0242C8.52188 11.6576 11.4781 11.6576 14.4 12.0242M5.6 12.0242L5.28333 15.5M14.4 12.0242C14.6 12.0492 14.8 12.0758 15 12.1042M14.4 12.0242L14.7167 15.5L14.9075 17.6025C14.9193 17.7322 14.904 17.863 14.8624 17.9864C14.8209 18.1099 14.7541 18.2233 14.6663 18.3195C14.5785 18.4157 14.4716 18.4926 14.3524 18.5452C14.2332 18.5978 14.1044 18.625 13.9742 18.625H6.02583C5.47417 18.625 5.0425 18.1517 5.0925 17.6025L5.28333 15.5M5.28333 15.5H4.375C3.87772 15.5 3.40081 15.3025 3.04917 14.9508C2.69754 14.5992 2.5 14.1223 2.5 13.625V8.38C2.5 7.47917 3.14 6.70083 4.03083 6.5675C4.56079 6.48823 5.09229 6.4196 5.625 6.36167M14.715 15.5H15.6242C15.8705 15.5001 16.1144 15.4517 16.342 15.3575C16.5695 15.2633 16.7763 15.1252 16.9505 14.9511C17.1247 14.777 17.2629 14.5703 17.3572 14.3427C17.4515 14.1152 17.5 13.8713 17.5 13.625V8.38C17.5 7.47917 16.86 6.70083 15.9692 6.5675C15.4392 6.48823 14.9077 6.4196 14.375 6.36167M14.375 6.36167C11.4669 6.04525 8.53308 6.04525 5.625 6.36167M14.375 6.36167V3.3125C14.375 2.795 13.955 2.375 13.4375 2.375H6.5625C6.045 2.375 5.625 2.795 5.625 3.3125V6.36167M15 9.25H15.0067V9.25667H15V9.25ZM12.5 9.25H12.5067V9.25667H12.5V9.25Z" stroke="#1E1E1E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg> Print</button>
    <button class="btn btn-dark btn-sm sharelink" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
    <a href="#" class="btn btn-link text-danger text-decoration-none d-none" onclick="togglePresentation()">❌ Close</a>
  </div>
</div>

<div class="nav-header" id="navHeader">
  <a href="edit-client-details.php" class="text-decoration-none editdetails"><svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M5 9.5L1 5.5L5 1.5" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg> Edit client details</a>
  <div class="d-flex align-items-center">
    <button id="prevBtn" class="btn btn-light me-2 pagebtn"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 14L1.5 7.5M1.5 7.5L8 1M1.5 7.5H17.1" stroke="#1E1E1E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
      </svg></button>
    <button id="nextBtn" class="btn btn-light me-2 pagebtn"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 14L16.5 7.5M16.5 7.5L10 1M16.5 7.5H0.9" stroke="#1E1E1E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
      </svg></button>
    <span class="pagination-text" id="paginationText">Page 1 of 3</span>
    <div class="vr mx-3"></div>
    <button id="presentationToggle" class="btn btn-outline-secondary btn-sm me-2"><img src="/assets/images/presentation-icon.svg" alt=""> Presentation View</button>
    <button class="btn btn-dark btn-sm sharelink" data-bs-toggle="modal" data-bs-target="#shareModal">🔗 Share link</button>
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
        <h2 class="cover-name"><strong>Client</strong> <em>Name.</em></h2>
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
        <h2 class="cover-name"><strong>Current</strong> <em>Brands.</em></h2>
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
    <h2 class="slide-title">Current Brand — <em>Strengths</em></h2>
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
        <h2 class="cover-name"><strong>Brand</strong> <em>Archetype(s).</em></h2>
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
          <div class="doc-overview-box copy-12">
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
        <div class="img-holder m-auto"> <img src="/assets/images/singe-image-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner archetype name</span>
        </div>

      </div>
      <div class="r_content-box p-80">
        <div class="with-side-content m-auto">
          <div class="with-border-bottom">
            <h5 class="tiny-title">OVERVIEW</h5>
            <p class="mb-0">Netus quis elementum aptent phasellus. Rhoncus et velit sem, urna quis magnis lobortis eget nibh. Taciti. Commodo dignissim suscipit diam potenti venenatis donec nam mi class urna. Molestie scelerisque natoque justo ad libero. Volutpat placerat mus turpis cursus nisl interdum leo nec massa ultrices posuere. Inceptos torquent Sem dapibus ultricies.</p>
          </div>
          <div class="with-border-bottom">
            <h5 class="tiny-title">CORE TRAITS & VALUES</h5>
            <div class="row three-col-grid">
              <div class="three-col-grid col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 1</h3>
                  <p>Viverra suscipit, adipiscing dis euismod dictum laoreet semper tristique suspendisse lectus. Habitant pulvinar quis risus habitant convallis ornare purus, vitae nec in. Gravida in duis hac diam at. Duis, aliquet dui. Adipiscing rutrum nascetur tortor suscipit.</p>
                </div>
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 2</h3>
                  <p>Curabitur nisi arcu. Pharetra hendrerit ultrices inceptos sem magnis eu odio malesuada faucibus non rutrum netus lacinia sociis. Sagittis sodales congue. Ullamcorper lectus curabitur a at pede imperdiet. Tempus pede dolor massa mus metus varius dui vehicula.</p>
                </div>
              </div>

              <div class="three-col-grid col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 3</h3>
                  <p>Adipiscing porttitor senectus a, sociosqu non hac curae; feugiat vestibulum. Scelerisque viverra suscipit curabitur. Risus porttitor mi mauris quam tempor egestas donec feugiat eleifend elementum elit fusce conubia sodales taciti primis turpis dui fringilla in.</p>
                </div>
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 4</h3>
                  <p>Est diam nec nisl tempus amet per porta. Conubia. Imperdiet dignissim maecenas mollis suscipit nunc venenatis neque. Luctus orci nulla imperdiet tristique dolor tristique metus neque. Quis. Et felis sollicitudin nunc praesent magna a tincidunt accumsan nisl.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slide slide-cover" id="slide-14">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <h2 class="cover-name"><strong>Desired</strong> <em>Brand.</em></h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-15">
    <h2 class="slide-title">Desired Brand — <em>Overview</em></h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Core Values Assessment.</h3>
        <p>What’s the foundation we’re building from?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Unique Brand Archetype.</h3>
        <p>How the brand should be representing itself to the world? </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Language guidelines.</h3>
        <p>What principles to act as a ‘north star’ for all ongoing brand communications?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Brand story.</h3>
        <p>How to craft a narrative that articulates the brands vision against it’s archetype?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Tone of voice + Sentiment.</h3>
        <p>What’s the framework around brand personality, tone, sentiment and style?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Content Guidelines.</h3>
        <p>Re-imagining the content (language and aesthetic) to better reflect the desired archetype.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-16">
    <h2 class="slide-title">Desired Brand — <em>Core Values</em></h2>
    <div class="m-auto w-100">
      <div class="row three-col-grid contain-slide m-auto">
        <div class="three-col-grid col-md-6">
          <div class="doc-overview-box copy-16">
            <h3 class="h4-slide-title h4-32">Excellence</h3>
            <p>Striving for superior quality and workmanship in every project to ensure high standards and client satisfaction.</p>
          </div>
          <div class="doc-overview-box copy-16">
            <h3 class="h4-slide-title h4-32">Integrity</h3>
            <p>Upholding honesty and transparency in all dealings to foster trust with clients and stakeholders.</p>
          </div>
        </div>

        <div class="three-col-grid col-md-6">
          <div class="doc-overview-box copy-16">
            <h3 class="h4-slide-title h4-32">Care</h3>
            <p>Ensuring the well-being of both clients and employees, with a strong emphasis on customer service and community impact.</p>
          </div>
          <div class="doc-overview-box copy-16">
            <h3 class="h4-slide-title h4-32">Efficiency</h3>
            <p>Delivering projects on time and within budget through streamlined processes and effective team collaboration.</p>
          </div>
        </div>

      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide p-0" id="slide-17">
    <div class="slide-content-wrap with-side p-0 mb-0 ">

      <div class="r_content-box p-60 max-910">
        <h2 class="slide-title">Desired Brand — <em>Self Analysis</em></h2>
        <div class="mt-auto mb-auto">
          <div class="with-border-bottom border-0">
            <div class="row three-col-grid with-stars">
              <div class="three-col-grid col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title h3-26">Internal Brand Value Analysis</h3>
                  <p><img src="/assets/images/4stars-rate.svg" alt="4stars"></p>
                </div>
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title h3-26">Team Belief in Core Values</h3>
                  <p><img src="/assets/images/4stars-rate.svg" alt="4stars"></p>
                </div>
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title h3-26">Brand Memorability</h3>
                  <p><img src="/assets/images/4stars-rate.svg" alt="4stars"></p>
                </div>
              </div>

              <div class="three-col-grid col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title h3-26">Pricing Alignment</h3>
                  <p><img src="/assets/images/4stars-rate.svg" alt="4 stars"></p>
                </div>
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title h3-26">Importance of Content</h3>
                  <p><img src="/assets/images/3stars-rate.svg" alt="3 stars"></p>
                </div>
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title h3-26">Delivery on Promises</h3>
                  <p><img src="/assets/images/4-5stars-rate.svg" alt="4.5 stars"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="black-side p-60 dark-bg max-410 d-flex">

        <div class="side-bottom m-auto text-center">
          <span class="side-bottom-percent d-block mb-3">Overall Average</span>
          <img src="/assets/images/4stars-white.svg" alt="4 stars">
        </div>
      </div>
    </div>

  </div>

  <div class="slide dark-bg text-light" id="slide-18" style="padding-bottom:57px;">
    <div class="row three-col-grid h-100">
      <div class="three-col-grid col-md-4 text-center d-flex flex-column">
        <div class="side-title d-block">
          Archetype — <em>Primary</em>
        </div>
        <div class="img-holder m-auto"> <img src="/assets/images/3-img-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner archetype name</span>
          <div class="pecentage-wrap">
            Trait 1 / Trait 2 / Trait 3
          </div>
        </div>
      </div>

      <div class="three-col-grid col-md-4 text-center d-flex flex-column">
        <div class="side-title d-block">
          Archetype — <em>Secondary</em>
        </div>
        <div class="img-holder m-auto"> <img src="/assets/images/3-img-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner archetype name</span>
          <div class="pecentage-wrap">
            Trait 1 / Trait 2 / Trait 3
          </div>
        </div>
      </div>

      <div class="three-col-grid col-md-4 text-center d-flex flex-column">
        <div class="side-title d-block">
          Archetype — <em>Secondary</em>
        </div>
        <div class="img-holder m-auto"> <img src="/assets/images/3-img-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner archetype name</span>
          <div class="pecentage-wrap">
            Trait 1 / Trait 2 / Trait 3
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slide p-0" id="slide-19">
    <div class="slide-content-wrap with-side p-0 mb-0 ">
      <div class="black-side p-60 dark-bg">
        <div class="side-title d-block">
          Spirit Animal<br>
          <em>Desired State</em>
        </div>
        <div class="img-holder m-auto"> <img src="/assets/images/singe-image-placeholder.png" alt="">
        </div>
        <div class="side-bottom">
          <span class="side-bottom-percent">One or two-liner spirit animal name</span>
        </div>

      </div>
      <div class="r_content-box p-80">
        <div class="with-side-content m-auto">
          <div class="with-border-bottom">
            <h5 class="tiny-title">OVERVIEW</h5>
            <h3 class="h4-slide-title f-300" style="margin-bottom: 24px;">Integer tempor. Cum. Donec curabitur nisl eu dictumst duis aliquam sapien non potenti morbi natoque. Eros nullam luctus. Nulla lacus praesent curabitur eleifend orci lectus netus. Torquent netus tellus vestibulum justo. Non condimentum. Facilisis mollis dui, habitasse. Urna magnis bibendum.</h3>
            <p class="mb-0">Netus quis elementum aptent phasellus. Rhoncus et velit sem, urna quis magnis lobortis eget nibh. Taciti. Commodo dignissim suscipit diam potenti venenatis donec nam mi class urna. Molestie scelerisque natoque justo ad libero. Volutpat placerat mus turpis cursus nisl interdum leo nec massa ultrices posuere. Inceptos torquent Sem dapibus ultricies.</p>
          </div>
          <div class="with-border-bottom">
            <h5 class="tiny-title">CORE TRAITS &amp; VALUES</h5>
            <div class="row two-col-grid mb-4">
              <div class="col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 1</h3>
                  <p class="pe-0">Viverra suscipit, adipiscing dis euismod dictum laoreet semper tristique suspendisse lectus. Habitant pulvinar quis risus.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 2</h3>
                  <p class="pe-0">Curabitur nisi arcu. Pharetra hendrerit ultrices inceptos sem magnis eu odio malesuada faucibus non rutrum netus lacinia sociis.</p>
                </div>
              </div>
            </div>

            <div class="row two-col-grid">
              <div class="col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 3</h3>
                  <p>Adipiscing porttitor senectus a, sociosqu non hac curae; feugiat vestibulum. Scelerisque viverra suscipit curabitur.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="doc-overview-box copy-12">
                  <h3 class="h4-slide-title">Trait 4</h3>
                  <p>Est diam nec nisl tempus amet per porta. Conubia. Imperdiet dignissim maecenas mollis suscipit nunc venenatis neque.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slide" id="slide-20">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Language Guidelines — <em>Insights</em></h2>
      <div class="overview-content">
        <p>Congue dictum erat faucibus porttitor iaculis. Fringilla aptent, libero taciti fusce posuere dapibus tempor sagittis sodales Imperdiet conubia elit sagittis accumsan ipsum dictumst pede dui cubilia vel dictumst convallis pulvinar velit cras pellentesque quis vestibulum tincidunt convallis elementum viverra dignissim.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-21">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Language Guidelines — <em>Brand Story</em></h2>
      <div class="overview-content">
        <p>Sollicitudin quis id eget netus aliquam leo sociis purus sed sem etiam eleifend facilisi nec tempor ridiculus etiam.
        </p>
        <p>Parturient proin quam, ultricies inceptos scelerisque porttitor fringilla neque. Dis posuere est enim.
        </p>
        <p>Scelerisque eros. Parturient dictum imperdiet rhoncus magnis pulvinar fermentum tempus justo hendrerit etiam sem cubilia penatibus hendrerit mattis porttitor.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide sentiments" id="slide-22">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Language Guidelines — <em>Sentiments</em></h2>
      <div class="row gx-5" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h3 class="h3-32">Tone of Voice</h3>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Confident + Approachable</div>
            <p>Knowledgeable yet never condescending.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Straightforward + Clear</div>
            <p>No unnecessary jargon, just real solutions.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Professional</div>
            <p>Focused on both efficiency and genuine care.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Solutions Focused</div>
            <p>Every message should be about solving a problem.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Client First</div>
            <p>Prioritising the needs of retirement living communities.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h3 class="h3-32">Messaging Themes</h3>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Built for the Future</div>
            <p>We create spaces that stand the test of time, ensuring aged-care refurbishments are done right the first time.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Trust Through Experience</div>
            <p>With 30+ years in the industry, we know what it takes to deliver quality, efficiency, and peace of mind.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Seamless & Stress-Free</div>
            <p>Our end-to-end approach means you don’t have to juggle multiple contractors—we handle everything.</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Transforming Living Spaces</div>
            <p>Our refurbishments don’t just renovate; they elevate comfort, functionality, and aesthetics</p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Your Trusted Building Partner</div>
            <p>More than just builders, we’re dedicated advisors helping clients navigate every project with confidence.</p>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide sentiments" id="slide-23">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Re-imagining the Content — <em>Website</em></h2>
      <div class="row gx-5 web-example" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h3 class="h3-32">Current State</h3>
          </div>
          <div class="sentiment-wrap">
            <p>“Nisl tincidunt nullam. Sociis volutpat platea litora fermentum dis feugiat placerat Senectus suspendisse duis lectus luctus nullam velit inceptos sem consequat per. Laoreet diam purus eleifend felis nulla posuere. Cubilia per, proin integer habitant sem cras magnis. Proin auctor. Sem sagittis molestie pellentesque. Aliquet taciti.”</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h3 class="h3-32">Desired State</h3>
          </div>
          <div class="sentiment-wrap">
            <p>“Habitasse taciti, porta vestibulum, vitae. Habitasse conubia diam enim viverra sed dui imperdiet donec sodales enim, facilisi gravida scelerisque felis morbi nostra. Maecenas habitant blandit hymenaeos tempor mattis scelerisque ligula, massa congue natoque in pellentesque sem tempor ipsum lectus vel habitant viverra.”</p>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide sentiments" id="slide-24">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Re-imagining the Content — <em>Instagram Socials</em></h2>
      <div class="row gx-5 insta-post" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h5 class="tiny-title">INSTAGRAM POST 1</h5>
            <h3 class="h3-32">Visual: Before/After Renovation</h3>
          </div>
          <p class="ins-title">🛠️ MIRABILIS IN PROGRESSU 🛠️</p>
          <div class="insta-wrap">
            <p>Sed ut perspiciatis, quod et illum soluta nihil minus sit amet. Transforma elementum risus ultricies gravida, magnum tempora voluptatem! Consectetur. Curabitur. Ridiculus.</p>
            <p><strong>Consectetur. Curabitur. Ridiculus.</strong></p>
          </div>
          <span class="hash">#LocusRefurbishment #AliquamDolor #NihilFugiat</span>
        </div>

        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h5 class="tiny-title">INSTAGRAM POST 2</h5>
            <h3 class="h3-32">Visual: Team-focused</h3>
          </div>
          <p class="ins-title">🏗️ ECCE OMNIPOTENTIA DESIGN 🏗️</p>
          <div class="insta-wrap">
            <p>Lorem ipsum dolor sit amet! Aperiam sapiente dignissimos eligendi, quod obcaecati nihil est perferendis ut magni suscipit. Futurum erat antilogico distinctio. </p>
            <p><strong>Magnificus. Absurdus. Exquisitus. 🌍</strong></p>
          </div>
          <span class="hash">#ArchitectonicaIllusio #ModoNemo #DelectusStructurae</span>
        </div>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide sentiments" id="slide-25">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Re-imagining the Content — <em>LinkedIn Socials</em></h2>
      <div class="row gx-5 linkedin-post" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="doc-overview-box ">
            <h5 class="tiny-title">LINKEDIN POST 1</h5>
            <h3 class="h3-32">Visual: Before/After Renovation</h3>
          </div>
          <div class="insta-wrap">
            <p>Praesentium refurbum aged-care communitas! Ululatus projectus infinibus, nullus processus nihilistica. </p>
            <p>🔸 End-to-fantasm project operatio<br>🔸 Nulla mora, nulla pecunia, nihil sollicitus<br>🔸 Aedificatio pro aeternitate</p>
            <p><strong>Refurbum rectus est. Primo tempore.<br>Aedificemus aliquid melius una. </strong></p>
          </div>
        </div>

        <div class="col-md-6">

          <div class="image-holder mb-5">
            <img src="/assets/images/long-img-placeholder.png" alt="">
          </div>

        </div>
        <?php include "includes/slide-footer.php" ?>
      </div>
    </div>
  </div>

  <div class="slide slide-cover" id="slide-26">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <h2 class="cover-name"><strong>The</strong> <em>Competition.</em></h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-27">
    <h2 class="slide-title">The Competition — <em>Overview</em></h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">The Competition</h3>
        <p>These are some of your competitors.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Their Language</h3>
        <p>How do they present themselves and their brand to the world? </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">The Explorer</h3>
        <p>Where are the gaps in the defense that will allow us to break through?</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide competition" id="slide-28">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Competition — <em>Competition 1</em></h2>
      <div class="row gx-5" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="sentiment-wrap">
            <div class="sentiments-title">Market Positioning</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Operational Strengths</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Brand Awareness</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Pricing Competitiveness</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Customer Experience & Value Delivery</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
        </div>

        <div class="col-md-6">
          <img src="/assets/images/full-img-placeholder.png" alt="">
          <div class="star-table-wrap">
            <table class="startable">
              <thead>
                <tr>
                  <th>Factor</th>
                  <th>Client Name</th>
                  <th>Competitor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Market position</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Operational Strengths</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Brand Awareness</td>
                  <td class="stars">★★★☆☆</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Pricing Competitiveness</td>
                  <td class="stars">★★★☆☆</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Customer Experience</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
              <tfoot>
                <tr>
                  <td>Overall</td>
                  <td>4.4/5</td>
                  <td>3.2/5</td>
                </tr>
              </tfoot>
              </tbody>
            </table>

            <div class="recommendations">
              <strong>Strategic Recommendations:</strong> Sodales interdum at fringilla interdum auctor conubia, congue haretra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-footer">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <span>All concepts within this document remain the exclusive property of About Today. Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a> to view our full copyright policy.</span>
    </div>
  </div>

  <div class="slide competition" id="slide-29">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Competition — <em>Competition 2</em></h2>
      <div class="row gx-5" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="sentiment-wrap">
            <div class="sentiments-title">Market Positioning</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Operational Strengths</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Brand Awareness</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Pricing Competitiveness</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Customer Experience & Value Delivery</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
        </div>

        <div class="col-md-6">
          <img src="/assets/images/full-img-placeholder.png" alt="">
          <div class="star-table-wrap">
            <table class="startable">
              <thead>
                <tr>
                  <th>Factor</th>
                  <th>Client Name</th>
                  <th>Competitor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Market position</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Operational Strengths</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Brand Awareness</td>
                  <td class="stars">★★★☆☆</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Pricing Competitiveness</td>
                  <td class="stars">★★★☆☆</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Customer Experience</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
              <tfoot>
                <tr>
                  <td>Overall</td>
                  <td>4.4/5</td>
                  <td>3.2/5</td>
                </tr>
              </tfoot>
              </tbody>
            </table>

            <div class="recommendations">
              <strong>Strategic Recommendations:</strong> Sodales interdum at fringilla interdum auctor conubia, congue haretra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-footer">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <span>All concepts within this document remain the exclusive property of About Today. Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a> to view our full copyright policy.</span>
    </div>
  </div>

  <div class="slide competition" id="slide-30">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Competition — <em>Competition 3</em></h2>
      <div class="row gx-5" style="margin-top: 60px;">
        <div class="col-md-6">
          <div class="sentiment-wrap">
            <div class="sentiments-title">Market Positioning</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Operational Strengths</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Brand Awareness</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Pricing Competitiveness</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
          <div class="sentiment-wrap">
            <div class="sentiments-title">Customer Experience & Value Delivery</div>
            <p>Sodales interdum at fringilla interdum auctor conubia, congue. Pharetra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus vestibulum dapibus morbi blandit.<br><strong>Good Advantage: Advantage1, Advantage 2, Advantage 3</strong></p>
          </div>
        </div>

        <div class="col-md-6">
          <img src="/assets/images/full-img-placeholder.png" alt="">
          <div class="star-table-wrap">
            <table class="startable">
              <thead>
                <tr>
                  <th>Factor</th>
                  <th>Client Name</th>
                  <th>Competitor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Market position</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Operational Strengths</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Brand Awareness</td>
                  <td class="stars">★★★☆☆</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Pricing Competitiveness</td>
                  <td class="stars">★★★☆☆</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
                <tr>
                  <td>Customer Experience</td>
                  <td class="stars">★★★★★★</td>
                  <td class="stars">★★★☆☆</td>
                </tr>
              <tfoot>
                <tr>
                  <td>Overall</td>
                  <td>4.4/5</td>
                  <td>3.2/5</td>
                </tr>
              </tfoot>
              </tbody>
            </table>

            <div class="recommendations">
              <strong>Strategic Recommendations:</strong> Sodales interdum at fringilla interdum auctor conubia, congue haretra nisl interdum pharetra. Sem leo fusce sapien, posuere hendrerit posuere litora lacinia leo Non lectus.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-footer">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <span>All concepts within this document remain the exclusive property of About Today. Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a> to view our full copyright policy.</span>
    </div>
  </div>

  <div class="slide competition" id="slide-31">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Competition — <em>Their Language</em></h2>
      <div class="row gx-5 their-language" style="margin-top: 60px;">
        <div class="col-md-5">
          <div class="doc-overview-box">
            <h3 class="h3-slide-title">Competitor 1</h3>
            <div class="competitor-data">
              <p><strong>Approach:</strong> Short description goes here</p>
              <p><strong>Communication:</strong> Short description goes here</p>
              <p><strong>Differentiation:</strong> Short description goes here</p>
            </div>
          </div>
          <div class="doc-overview-box">
            <h3 class="h3-slide-title">Competitor 2</h3>
            <div class="competitor-data">
              <p><strong>Approach:</strong> Short description goes here</p>
              <p><strong>Communication:</strong> Short description goes here</p>
              <p><strong>Differentiation:</strong> Short description goes here</p>
            </div>
          </div>
          <div class="doc-overview-box">
            <h3 class="h3-slide-title">Competitor 3</h3>
            <div class="competitor-data">
              <p><strong>Approach:</strong> Short description goes here</p>
              <p><strong>Communication:</strong> Short description goes here</p>
              <p><strong>Differentiation:</strong> Short description goes here</p>
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="image-placeholder">
            <img src="/assets/images/three-long-img-placeholder.png" alt="">
          </div>

        </div>

      </div>
    </div>
    <div class="slide-footer">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <span>All concepts within this document remain the exclusive property of About Today. Visit <a href="https://www.abouttoday.com.au" target="_blank">abouttoday.com.au</a> to view our full copyright policy.</span>
    </div>
  </div>

  <div class="slide competition" id="slide-32">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Competition — <em>Gaps in the Defense</em></h2>
      <div class="row gx-5 gaps-defense" style="margin-top: 40px;">
        <div class="col-md-4">
          <div class="doc-overview-box">
            <div class="compt-data-wrap">
              <h3 class="h3-slide-title">The Client</h3>
              <table class="comp-data">
                <tr>
                  <th>Authority:</th>
                  <td>9</td>
                </tr>
                <tr>
                  <th>Traffic:</th>
                  <td>290p/m</td>
                </tr>
                <tr>
                  <th>Keywords:</th>
                  <td>39</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="doc-overview-box">
            <div class="compt-data-wrap">
              <h3 class="h3-slide-title">Competition 1</h3>
              <table class="comp-data">
                <tr>
                  <th>Authority:</th>
                  <td>9</td>
                </tr>
                <tr>
                  <th>Traffic:</th>
                  <td>290p/m</td>
                </tr>
                <tr>
                  <th>Keywords:</th>
                  <td>39</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="doc-overview-box">
            <div class="compt-data-wrap">
              <h3 class="h3-slide-title">Competition 2</h3>
              <table class="comp-data">
                <tr>
                  <th>Authority:</th>
                  <td>9</td>
                </tr>
                <tr>
                  <th>Traffic:</th>
                  <td>290p/m</td>
                </tr>
                <tr>
                  <th>Keywords:</th>
                  <td>39</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="doc-overview-box">
            <div class="compt-data-wrap">
              <h3 class="h3-slide-title">Competition 3</h3>
              <table class="comp-data">
                <tr>
                  <th>Authority:</th>
                  <td>9</td>
                </tr>
                <tr>
                  <th>Traffic:</th>
                  <td>290p/m</td>
                </tr>
                <tr>
                  <th>Keywords:</th>
                  <td>39</td>
                </tr>
              </table>
            </div>
          </div>

        </div>

        <div class="col-md-8">
          <div class="d-flex align-items-center" style="gap:32px; height:100%;">
            <div class="image-placeholder col-md-6">
              <img src="/assets/images/single-image-placeholder.png" alt="">
            </div>
            <div class="h3-slide-title ivymode col-md-6">
              <p class="ivymode">Integer lectus inceptos maecenas ipsum sociosqu netus cubilia iaculis. Penatibus felis ultricies curabitur Vehicula gravida placerat integer. Facilisis lacinia eleifend quam pellentesque lacinia magnis.</p>
              <p class="ivymode">

                Vitae ad ridiculus phasellus eros sed ultricies lobortis. Elementum ut amet pellentesque. Imperdiet. Sociis class condimentum lorem ipsum dolor.</p>
            </div>
          </div>


        </div>

      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide slide-cover" id="slide-33">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <h2 class="cover-name"><strong>Growth</strong> <em>Plan.</em></h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-34">
    <h2 class="slide-title">The Growth Plan — <em>Overview</em></h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">The Objectives.</h3>
        <p>What’s the goal?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Growth Strategies.</h3>
        <p>What are the strategies and tasks we need to do to hit the objective?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Examples.</h3>
        <p>How would we partner with Concept to achieve the growth objectives?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Market Analysis.
        </h3>
        <p>Where are the gaps in the defense that will allow us to break through?</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Timelines.
        </h3>
        <p>How do we roll all this out?</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-35">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Growth Plan — <em>Objective</em></h2>
      <div class="overview-content">
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et
        </p>
        <p>Aliquet lobortis sollicitudin vestibulum maecenas dignissim blandit facilisis hendrerit massa vulputate lorem ipsum dolor sed amet ut.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-36">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Growth Plan — <em>Objective</em></h2>
      <div class="overview-content">
        <p>Inceptos fusce ipsum ullamcorper habitasse odio. Morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum nisl elementum elit massa iaculis sed suspendisse et
        </p>
        <p>Aliquet lobortis sollicitudin vestibulum maecenas dignissim blandit facilisis hendrerit massa vulputate lorem ipsum dolor sed amet ut.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide competition" id="slide-37">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Growth Plan — <em>Market Analysis</em></h2>
      <div class="marketlysis mt-auto mb-auto">

        <table class="market-analysis-table">
          <thead>
            <tr>
              <th>Strategies</th>
              <th>Relevance</th>
              <th>Percentage of Budget</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="market-analysis-strategies num-title">1. Content Re-Position</span><br>
                Inceptos fusce ipsum ullamcorper habitasse odio morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum lorem ipsum dolor sed amet
              </td>
              <td class="market-analysis-relevance">
                <span>★★★★★</span>
              </td>
              <td class="market-analysis-percentage">25%</td>
            </tr>
            <tr>
              <td>
                <span class="market-analysis-strategies num-title">2. Thought Leadership</span><br>
                Inceptos fusce ipsum ullamcorper habitasse odio morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum lorem ipsum dolor sed amet
              </td>
              <td class="market-analysis-relevance">
                <span>★★★★★</span>
              </td>
              <td class="market-analysis-percentage">30%</td>
            </tr>
            <tr>
              <td>
                <span class="market-analysis-strategies num-title">3. Trade Show + Sponsorship</span><br>
                Inceptos fusce ipsum ullamcorper habitasse odio morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum lorem ipsum dolor sed amet
              </td>
              <td class="market-analysis-relevance">
                <span>★★★★☆</span>
              </td>
              <td class="market-analysis-percentage">15%</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide competition" id="slide-38">
    <div class="slide-content-wrap">
      <h2 class="slide-title">The Growth Plan — <em>Market Analysis</em></h2>
      <div class="marketlysis mt-auto mb-auto">

        <table class="market-analysis-table">
          <thead>
            <tr>
              <th>Strategies</th>
              <th>Relevance</th>
              <th>Percentage of Budget</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="market-analysis-strategies num-title">4. Google Marketing</span><br>
                Inceptos fusce ipsum ullamcorper habitasse odio morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum lorem ipsum dolor sed amet
              </td>
              <td class="market-analysis-relevance">
                <span>★★★★☆</span>
              </td>
              <td class="market-analysis-percentage">20%</td>
            </tr>
            <tr>
              <td>
                <span class="market-analysis-strategies num-title">5. Referral Program</span><br>
                Inceptos fusce ipsum ullamcorper habitasse odio morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum lorem ipsum dolor sed amet
              </td>
              <td class="market-analysis-relevance">
                <span>★★★★☆</span>
              </td>
              <td class="market-analysis-percentage">15%</td>
            </tr>
            <tr>
              <td>
                <span class="market-analysis-strategies num-title">6. Video Marketing </span><br>
                Inceptos fusce ipsum ullamcorper habitasse odio morbi orci phasellus, cursus laoreet id blandit interdum fusce mollis pulvinar molestie posuere felis cum lorem ipsum dolor sed amet
              </td>
              <td class="market-analysis-relevance">
                <span>★★★★☆</span>
              </td>
              <td class="market-analysis-percentage">10%</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-39">
    <h2 class="slide-title">The Growth Plan — <em>Examples (Social Media Content)</em></h2>
    <div class="full-img-wrap m-auto">
      <img src="/assets/images/full-img-placeholder.png" alt="">
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-40">
    <h2 class="slide-title">The Growth Plan — <em>Examples (Video Content)</em></h2>
    <div class="video-details mt-auto mb-auto">

      <div class="segment">
        <p class="time"></p>
        <div>
          <p><span class="label">Title:</span> Transforming Retirement Living – Lorem Ipsum Way</p>
          <p>(Length: 2.5 minutes)</p>

        </div>
      </div>
      <div class="segment">
        <p class="time">0:00 - 0:20</p>
        <div>
          <p><span class="label">Visual:</span> Slow pan of a completed renovation project.</p>
          <p><span class="label">Voiceover:</span> "Living spaces deserve excellence. At Ipsum Constructions, we specialise in seamless renovations that enhance comfort, safety, and quality of life."</p>
        </div>
      </div>

      <div class="segment">
        <p class="time">0:20 - 1:30</p>
        <div>
          <p><span class="label">Visual:</span> Before/After shots of a major renovation.</p>
          <p><span class="label">Interview snippet:</span> "We were looking for a team that truly understands design. Ipsum Constructions exceeded our expectations." - (Client Testimonial)</p>
          <p><span class="label">On-screen text:</span> "20+ Years Experience | Trusted by Leading Providers"</p>
        </div>
      </div>

      <div class="segment">
        <p class="time">1:30 - 2:30</p>
        <div>
          <p><span class="label">Visual:</span> Site team in action, final project handover.</p>
          <p><span class="label">Voiceover:</span> "From initial consultation to project completion, we deliver quality, efficiency, and trust. Contact us today to discuss your next renovation project."</p>
          <p><span class="label">CTA:</span> "Visit loremipsum.com Call (03) 1234 5678"</p>
        </div>
      </div>

    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-41">
    <h2 class="slide-title">The Growth Plan — <em>Examples (Adwords)</em></h2>
    <div class="d-flex align-items-center" style="height:100%;">
      <div class="image-placeholder col-md-5">
        <img src="/assets/images/single-image-placeholder.png" alt="" style="object-fit: cover; width: 481px;
height: 479px;">
      </div>
      <div class="ivymode col-md-7 the-adwords" style="padding: 20px 32px">
        <p class="ivymode">Google Ads-based advertising using the content guidelines established in the “desired brand” section.</p>
        <p class="ivymode">

          Google Ads is a very useful way to harvest data around search terms that are very specific and often show up ‘innacurately’ in software research.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-42"> <!-- Tobe Continued -->
    <h2 class="slide-title">The Growth Plan — <em>Timelines</em></h2>
    <div class="d-flex align-items-center" style="margin-top: 60px;">
      <div class="col-md-7">
        <table class="timelines">
          <thead>
            <tr>
              <th>Month / QTR</th>
              <th>Key Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Month 1</td>
              <td>Launch LinkedIn campaign. Define content calendar. SEO audit of website.</td>
            </tr>
            <tr>
              <td>Month 2</td>
              <td>Publish first video case study. Attend initial industry trade show.</td>
            </tr>
            <tr>
              <td>Month 3</td>
              <td>Implement referral program. Begin targeted Google Ads.</td>
            </tr>
          </tbody>
        </table>

        <table class="timelines">
          <thead>
            <tr>
              <th>Month / QTR</th>
              <th>Key Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Month 4</td>
              <td>Optimize LinkedIn strategy. Send first email marketing campaign.</td>
            </tr>
            <tr>
              <td>Month 5</td>
              <td>Publish second video case study. Increase networking efforts.</td>
            </tr>
            <tr>
              <td>Month 6</td>
              <td>Mid-year review of all campaigns. Adjust budgets based on performance.</td>
            </tr>
          </tbody>
        </table>

        <table class="timelines">
          <thead>
            <tr>
              <th>Month / QTR</th>
              <th>Key Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Month 7</td>
              <td>Attend second trade show. Start expanding referral partner list.</td>
            </tr>
            <tr>
              <td>Month 8</td>
              <td>SEO content revamp based on keyword performance.</td>
            </tr>
            <tr>
              <td>Month 9</td>
              <td>Launch new ad creatives based on data insights.</td>
            </tr>
          </tbody>
        </table>

        <table class="timelines">
          <thead>
            <tr>
              <th>Month / QTR</th>
              <th>Key Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Month 10</td>
              <td>Increase industry collaborations and PR efforts.</td>
            </tr>
            <tr>
              <td>Month 11</td>
              <td>Prep final quarter marketing push.</td>
            </tr>
            <tr>
              <td>Month 12</td>
              <td>Full-year review. Define next-year strategy.</td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="col-md-5" style="padding-left:32px;">
        <div class="timelines-box">
          <div class="sentiments-title">Biggest [Expected] Growth Drivers</div>
          <h3 class="slide-title">LinkedIn, Trade Shows, SEO.</h3>
        </div>
        <div class="timelines-box">
          <div class="sentiments-title">Main Risks </div>
          <h3 class="slide-title">Price undercutting by competitors, scalability challenges, and market saturation.</h3>
        </div>
        <div class="timelines-box">
          <div class="sentiments-title">Critical Success Factors
          </div>
          <h3 class="slide-title">Reputation management, continued client retention, and brand positioning as the go-to leader in retirement living refurbishments.</h3>
        </div>
      </div>
    </div>
    <p class="note">*Note that this timeline is a very rough outline of how the recommended strategies could be executed.</p>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide slide-cover active" id="slide-43">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title">
        <h2 class="cover-name"><strong>Black Light</strong> <em>Revenue.</em></h2>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-44">
    <h2 class="slide-title">Black Light Revenue — <em>Overview</em></h2>
    <div class="contain-slide document-overview">
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">What’s BLV?</h3>
        <p>What is “Black Light Revenue?”.</p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Potential BLV Opportunities.</h3>
        <p>What are some BLV opportunities that can be explored?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Potential BLV Monetisation.
        </h3>
        <p>AI is everywhere now. How can we take advantage of it?
        </p>
      </div>
      <div class="doc-overview-box">
        <h3 class="h3-slide-title">Key Takeaways.
        </h3>
        <p>What does all this mean for the business?</p>
      </div>

    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-45">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Black Light Revenue — <em>Overview</em></h2>
      <div class="overview-content">
        <p>Black Light Revenue refers to opportunities in the business that are hiding in plain sight. There are more than likely multiple potential revenue streams that exist, but have previously not been thought of.
        </p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-46">
    <h2 class="slide-title">Black Light Revenue — <em>Overview</em></h2>
    <div class="row mt-auto mb-auto blacklight" style="height:100%; padding-top: 60px; padding-bottom: 60px;">
      <div class="col-md-4">
        <div class="overview-col copy-16">
          <h3 class="h3-slide-title">AI-Enhanced Quoting & Estimation System</h3>
          <p>Develop an AI-powered system that analyzes previous project data, material costs, and labor estimates to generate faster, more competitive quotes with high accuracy.
          </p>
          <p>Your industry relies heavily on competitive pricing, but price misalignment is a common reason for losing contracts. I can ensure real-time cost analysis, reducing pricing discrepancies with competitors. Faster quotes mean a higher conversion rate, improving client acquisition speed.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="overview-col copy-16">
          <h3 class="h3-slide-title">AI-Powered Tender & Proposal Writing Automation</h3>
          <p>Use AI-powered document generation tools to help streamline tender applications, reducing the time and effort required.
          </p>
          <p>Tenders are time-consuming, and inefficiencies in this process limit scalability.AI can auto-generate tender submissions, ensuring compliance with client requirements while maintaining high-quality, persuasive proposals. More tenders submitted = higher chances of securing contracts.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="overview-col copy-16">
          <h3 class="h3-slide-title">AI-Driven Workforce & Project Scheduling</h3>
          <p>An AI-driven workforce management tool optimizes labor allocation, minimizing project delays and ensuring that your staff-to-client ratio remains efficient.
          </p>
          <p>Scalability is a major challenge as the company grows. AI can predict workforce needs based on upcoming projects, ensuring efficient team deployment across Sydney, Newcastle, and South Australia. Helps balance project timelines and prevent over-allocation of resources.</p>
        </div>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-47">
    <h2 class="slide-title">Black Light Revenue — <em>Overview</em></h2>
    <div class="contain-slide mt-0" style="padding-top: 60px;">
      <div class="d-flex backlight-ov" style="margin-bottom: 40px;">
        <div class="col-md-6">
          <div class="overview-col pt-0 pb-0">
            <h3 class="h3-slide-title h3-24">AI-Optimized Marketing & Lead Scoring</h3>
            <p>AI-based marketing tools analyze LinkedIn activity, client interactions, and website behavior to predict the highest-value prospects and automate follow-ups.
            </p>
            <p>Your industry is highly relationship-driven – AI can track potential leads and identify the best prospects. Enhances LinkedIn strategy by optimizing engagement with decision-makers in retirement living. Saves time by automating outreach based on client behavior.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="overview-col pt-0 pb-0">
            <h3 class="h3-slide-title h3-24">AI-Driven Compliance & Risk Management</h3>
            <p>An AI system analyzes project compliance, safety regulations, and legal risks to ensure adherence to construction standards.
            </p>
            <p>Regulatory changes are a major disruption risk, and AI can predict upcoming legal requirements to ensure compliance. Prevents potential fines or legal challenges, protecting profitability and reputation. Enhances safety tracking and reduces project risks.</p>
          </div>
        </div>
      </div>
      <table class="blacklight-table">
        <thead>
          <tr>
            <th>Strategy</th>
            <th>Risk</th>
            <th>Cost</th>
            <th>Time</th>
            <th>Revenue</th>
            <th>Brand</th>
            <th>Overall</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Quoting System</td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
          </tr>
          <tr>
            <td>Tender Automation</td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
            </td>
          </tr>
          <tr>
            <td>Project Scheduling</td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
          </tr>
          <tr>
            <td>Market + Lead Score</td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
            </td>
          </tr>
          <tr>
            <td>Risk Management</td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
            <td>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-filled">★</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
              <span class="blacklight-star-empty">☆</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide" id="slide-48">
    <div class="slide-content-wrap">
      <h2 class="slide-title">Black Light Revenue — <em>Key Takeaways</em></h2>
      <div class="overview-content">
        <p>Cras sociosqu libero pretium a sodales aliquet phasellus turpis pharetra primis felis aliquam non cursus vulputate ante nec dignissim dapibus in nisi taciti inceptos, aptent porttitor duis faucibus in.
        </p>
        <p>Faucibus odio accumsan mattis ante est iaculis aenean mollis natoque aliquam nisi sagittis Cum accumsan penatibus mattis facilisis hymenaeos bibendum Euismod fusce viverra conubia facilisis.
        </p>
        <p>Natoque nisl mauris nostra massa aliquam curabitur facilisis per torquent praesent a sociis cubilia faucibus. Libero tempor feugiat eros sed arcu rhoncus pede id porta nascetur sollicitudin Magna.</p>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

  <div class="slide slide-cover" id="slide-49">
    <div class="slide-content-wrap">
      <div class="cover-at-logo">
        <img src="/assets/images/at-transparent-logo.svg" alt="at logo">
      </div>
      <div class="cover-title" style="    display: flex
;
    align-items: end;
    justify-content: space-between;">
        <h2 class="cover-name" style="line-height: 1;"><em>Thanks.</em></h2>
        <div class="contact-det"><a href="mailto:shaun@abouttoday.com.au"></a>shaun@abouttoday.com.au</a>
          <div class="date">April 2025</div>
        </div>
      </div>
    </div>
    <?php include "includes/slide-footer.php" ?>
  </div>

</div>

<div class="presentation-pagination" id="presentationPagination">
  <button id="prevBtnBottom" class="btn btn-light me-2"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 14L1.5 7.5M1.5 7.5L8 1M1.5 7.5H17.1" stroke="#1E1E1E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
      </svg></button>
  <button id="nextBtnBottom" class="btn btn-light ms-2"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 14L16.5 7.5M16.5 7.5L10 1M16.5 7.5H0.9" stroke="#1E1E1E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
      </svg></button>
      <span id="paginationTextBottom">Page 1 of 3</span>
</div>

<?php include "includes/footer.php" ?>