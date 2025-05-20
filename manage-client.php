<?php include "includes/header.php" ?>
<style>
    .tabs {
        display: flex;
        gap: 1rem;
        padding: 1rem;
    }

    .tabs button {
        background: none;
        border: none;
        color: #555;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .tabs .active {
        background: #ddd;
        border-radius: 6px;
        padding: 0.5rem 1rem;
    }

    .search-bar {
        margin-left: auto;
        margin-right: 1rem;
        max-width: 332px;
        border-radius: 30px;
        height: 35px;
        border: 0;
        font-family: Manrope;
        font-size: 13px !important;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .search-bar:focus {
        box-shadow: none;
        outline: none;
        border: 0;
    }

    .client-list {
        padding: 0 1rem;
    }

    .client-item {
        background: transparent;
        border-bottom: 1px solid #ddd;
        padding: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.3s;
        position: relative;
    }

    .client-item:hover {
        background: #1a1a1a;
        color: #E2E774;
        border-radius: 10px;

    }

    .client-item .dropdown-toggle::after {
        display: none;
    }

    .client-item.active {
        background: #1a1a1a;
        color: #e5e23b;
    }

    .client-item .dropdown-menu {
        right: 0;
        left: auto;
        min-width: 200px;
    }

    .client-item .dropdown {
        position: relative;
    }

    .client-item .dropdown>button::after {
        content: ' ▼';
        font-size: 0.75rem;
        margin-left: 4px;
        vertical-align: middle;
    }

    #loadMore {
        margin: 2rem auto;
        display: block;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    button#loadMore svg {
        margin-right: 3px;
        transition: 0.3s;
    }

    #loadMore:hover svg path {
        stroke:#fff;
    }

    .client-item span {
        font-family: Roca;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: -0.6px;
    }
</style>

<?php include "includes/main-nav.php" ?>

<div class="dashboard-new">
    <div class="content-sec container">
        <div class="frame-3">
            <div class="frame-4">
                <div class="text-wrapper-5">Manage Clients</div>
            </div>
            <div class="clients-wrap w-100">
                <div class="d-flex align-items-center tabs">
                    <button class="active" onclick="filterClients('all')">All</button>
                    <button onclick="filterClients('A-F')">Clients A-F</button>
                    <button onclick="filterClients('G-L')">Clients G-L</button>
                    <button onclick="filterClients('M-P')">Clients M-P</button>
                    <button onclick="filterClients('Q-Z')">Clients Q-Z</button>
                    <input type="text" class="form-control search-bar" placeholder="Search clients" oninput="searchClients(this.value)">
                </div>

                <div class="client-list" id="clientList">
                    <!-- Dynamic Client Items Insert Here -->
                </div>

                <button class="btn btn-outline-dark" id="loadMore" onclick="loadMoreClients()">
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4813 5.0716H14.1112L11.7982 2.75709C11.0535 2.01239 10.1259 1.47686 9.10859 1.20434C8.09131 0.93181 7.02022 0.931889 6.00298 1.20457C4.98574 1.47725 4.05822 2.01291 3.31364 2.75772C2.56907 3.50252 2.03369 4.43022 1.76133 5.44754M1.00073 12.5583V8.9284M1.00073 8.9284H4.63065M1.00073 8.9284L3.31306 11.2429C4.05775 11.9876 4.98535 12.5231 6.00263 12.7957C7.01991 13.0682 8.091 13.0681 9.10824 12.7954C10.1255 12.5228 11.053 11.9871 11.7976 11.2423C12.5422 10.4975 13.0775 9.56978 13.3499 8.55246M14.1112 1.44167V5.07015" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Load More
                </button>

                <script>
                    const clients = [
                        'About Today', 'Agile Workplaces', 'Alpha Infrastructure', 'Bizmart & connectr', 'Boss Aluminium', 'BRE Services', 'Brennan IT', 'BusiPay',
                        'Cadence Partners', 'Delta Strategy', 'Elevate Ventures', 'Fortuna Digital', 'GrandTech', 'Haven Legal', 'Insight Group', 'Juno Systems',
                        'Kinetic Edge', 'Lumina Group', 'Mentorly', 'NovaTech', 'Optima Consulting', 'Pulse Advisory', 'Quantum Leap', 'Redshift Media', 'Synapse AI', 'Trustlink Group'
                    ];

                    let filteredClients = clients;
                    let currentIndex = 0;
                    const itemsPerPage = 8;

                    function displayClients() {
                        const list = document.getElementById('clientList');
                        const end = Math.min(currentIndex + itemsPerPage, filteredClients.length);

                        for (let i = currentIndex; i < end; i++) {
                            const client = filteredClients[i];
                            const item = document.createElement('div');
                            item.className = 'client-item';
                            item.innerHTML = `
                                <span>${client}</span>
                                <div class="dropdown position-relative">
                                    <button class="btn" type="button" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291a1.873 1.873 0 0 0-1.116-2.693l-.318-.094c-.835-.246-.835-1.428 0-1.674l.319-.094a1.873 1.873 0 0 0 1.115-2.692l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.693-1.116l.094-.318z"/>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu client-det-drop">
                                        <li><a class="dropdown-item" href="view-assessment.php">View Assessment</a></li>
                                        <li><a class="dropdown-item" href="#">Update Assessment</a></li>
                                        <li><a class="dropdown-item" href="#">Edit Client Details</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#shareModal">Share Link</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            `;
                            list.appendChild(item);
                        }
                        currentIndex = end;
                    }

                    function loadMoreClients() {
                        displayClients();
                    }

                    function searchClients(query) {
                        query = query.toLowerCase();
                        filteredClients = clients.filter(name => name.toLowerCase().includes(query));
                        currentIndex = 0;
                        document.getElementById('clientList').innerHTML = '';
                        displayClients();
                    }

                    function filterClients(range) {
                        document.querySelectorAll('.tabs button').forEach(btn => btn.classList.remove('active'));
                        event.target.classList.add('active');

                        if (range === 'all') {
                            filteredClients = clients;
                        } else {
                            const ranges = {
                                'A-F': /^[A-F]/i,
                                'G-L': /^[G-L]/i,
                                'M-P': /^[M-P]/i,
                                'Q-Z': /^[Q-Z]/i
                            };
                            filteredClients = clients.filter(name => name.match(ranges[range]));
                        }

                        currentIndex = 0;
                        document.getElementById('clientList').innerHTML = '';
                        displayClients();
                    }

                    // Initial display
                    displayClients();
                </script>
            </div>
        </div>

        <section>
            <footer class="footer">
                <p class="privacy-policy-terms">
                    <a href="#"><span class="span">Privacy Policy</span></a>
                    <span class="text-wrapper-4">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <a href="#"><span class="span">Terms and Conditions</span></a>
                </p>
                <p class="p">© Fisher 2025. All rights reserved.</p>
            </footer>
        </section>
    </div>
</div>

<?php include "includes/footer.php" ?>