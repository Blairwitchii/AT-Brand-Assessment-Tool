<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Client List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f1f1;
      font-family: 'Segoe UI', sans-serif;
    }

    .alphabet-filter .btn {
      background-color: transparent;
      border: none;
      font-weight: 600;
      color: #333;
    }

    .alphabet-filter .btn.active {
      background-color: #fff;
      border-radius: 6px;
      padding: 6px 12px;
    }

    .client-list {
      background: #f1f1f1;
      padding: 20px;
    }

    .client-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 15px 20px;
      border-bottom: 1px solid #ddd;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .client-item:hover,
    .client-item.active {
      background-color: #1e1e1e;
      color: #d6dc37;
    }

    .client-item .dropdown-toggle {
      border: none;
      background: transparent;
      color: inherit;
    }

    .dropdown-menu {
      font-size: 0.9rem;
    }

    .search-bar {
      max-width: 300px;
      margin-left: auto;
    }

    .load-more-btn {
      margin: 20px auto;
      display: block;
    }
  </style>
</head>
<body>

  <div class="container-fluid py-4">
    <!-- Alphabet Filters -->
    <div class="d-flex align-items-center mb-4 gap-2 alphabet-filter">
      <button class="btn active" onclick="filterClients('All')">All</button>
      <button class="btn" onclick="filterClients('A-F')">Clients A-F</button>
      <button class="btn" onclick="filterClients('G-L')">Clients G-L</button>
      <button class="btn" onclick="filterClients('M-P')">Clients M-P</button>
      <button class="btn" onclick="filterClients('Q-Z')">Clients Q-Z</button>
      <input type="text" class="form-control search-bar" placeholder="Search clients" onkeyup="searchClients(this.value)">
    </div>

    <!-- Client List -->
    <div id="clientList" class="client-list">
      <!-- Items injected here -->
    </div>

    <button class="btn btn-outline-dark load-more-btn" onclick="loadMoreClients()">
      <i class="bi bi-arrow-repeat"></i> Load More
    </button>
  </div>

  <!-- Bootstrap + JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const allClients = [
      "About Today", "Agile Workplaces", "Alpha Infrastructure", "Bizmart & connectr", "Boss Aluminium",
      "BRE Services", "Brennan IT", "BusiPay", "Client One", "Client Two", "Client Three"
    ];

    let displayedCount = 0;
    const pageSize = 7;

    function renderClients(list) {
      const clientList = document.getElementById("clientList");
      clientList.innerHTML = '';
      list.slice(0, displayedCount).forEach(name => {
        const firstChar = name[0].toUpperCase();
        const menu = `
          <div class="dropdown">
            <button class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              ⚙️
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">View Assessment</a></li>
              <li><a class="dropdown-item" href="#">Update Assessment</a></li>
              <li><a class="dropdown-item" href="#">Edit Client Details</a></li>
              <li><a class="dropdown-item bg-warning" href="#">Share Link</a></li>
              <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
            </ul>
          </div>`;
        clientList.innerHTML += `<div class="client-item" data-letter="${firstChar}"><span>${name}</span>${menu}</div>`;
      });
    }

    function loadMoreClients() {
      displayedCount += pageSize;
      renderClients(filteredClients);
    }

    let filteredClients = [...allClients];

    function filterClients(range) {
      document.querySelectorAll('.alphabet-filter .btn').forEach(btn => btn.classList.remove('active'));
      event.target.classList.add('active');

      switch (range) {
        case "A-F":
          filteredClients = allClients.filter(name => /^[A-Fa-f]/.test(name));
          break;
        case "G-L":
          filteredClients = allClients.filter(name => /^[G-Lg-l]/.test(name));
          break;
        case "M-P":
          filteredClients = allClients.filter(name => /^[M-Pm-p]/.test(name));
          break;
        case "Q-Z":
          filteredClients = allClients.filter(name => /^[Q-Zq-z]/.test(name));
          break;
        default:
          filteredClients = [...allClients];
      }
      displayedCount = pageSize;
      renderClients(filteredClients);
    }

    function searchClients(query) {
      filteredClients = allClients.filter(name => name.toLowerCase().includes(query.toLowerCase()));
      displayedCount = pageSize;
      renderClients(filteredClients);
    }

    // Initial Load
    window.onload = () => {
      displayedCount = pageSize;
      renderClients(filteredClients);
    };
  </script>
</body>
</html>
