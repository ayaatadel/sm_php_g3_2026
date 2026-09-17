const { users, categories, products, analytics } = dashboardData;

const pageMeta = {
  overview: {
    title: "Overview Dashboard",
    subtitle: "Welcome back! Here is what's happening today.",
  },
  users: {
    title: "Users Management",
    subtitle: "View and manage all registered users.",
  },
  categories: {
    title: "Categories",
    subtitle: "Organize products into categories.",
  },
  products: {
    title: "Products",
    subtitle: "Browse and manage the full product catalog.",
  },
  analytics: {
    title: "Analytics",
    subtitle: "Insights and performance charts for your store.",
  },
};

const charts = {};
let searchQuery = "";
let categoryFilter = "all";

function formatCurrency(value) {
  return new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",
    maximumFractionDigits: 0,
  }).format(value);
}

function formatDate(dateStr) {
  return new Date(dateStr).toLocaleDateString("en-US", {
    month: "short",
    day: "numeric",
    year: "numeric",
  });
}

function getCategoryName(categoryId) {
  return categories.find((c) => c.id === categoryId)?.name ?? "Unknown";
}

function getProductsByCategory(categoryId) {
  return products.filter((p) => p.categoryId === categoryId).length;
}

function statusClass(status) {
  const key = status.toLowerCase().replace(/\s+/g, "-");
  if (key.includes("active")) return "active";
  if (key.includes("inactive") || key.includes("cancel")) return "inactive";
  return "pending";
}

function actionButtons() {
  return `
    <div class="actions">
      <button class="action-btn view" type="button" title="View"><i class="fa-solid fa-eye"></i></button>
      <button class="action-btn edit" type="button" title="Edit"><i class="fa-solid fa-pen"></i></button>
      <button class="action-btn delete" type="button" title="Delete"><i class="fa-solid fa-trash"></i></button>
    </div>
  `;
}

function matchesSearch(...fields) {
  if (!searchQuery) return true;
  const haystack = fields.join(" ").toLowerCase();
  return haystack.includes(searchQuery);
}

function renderStats() {
  const totalRevenue = analytics.monthlyRevenue.reduce((sum, m) => sum + m.value, 0);
  const lowStockCount = products.filter((p) => p.stock <= 10).length;
  const activeUsers = users.filter((u) => u.status === "Active").length;

  document.getElementById("stat-users").textContent = users.length;
  document.getElementById("stat-categories").textContent = categories.length;
  document.getElementById("stat-products").textContent = products.length;
  document.getElementById("stat-revenue").textContent = formatCurrency(totalRevenue);

  document.getElementById("stat-users-trend").textContent = `+${analytics.userRegistrations.at(-1).count} this month`;
  document.getElementById("stat-categories-trend").textContent = `${categories.length} active groups`;
  document.getElementById("stat-products-trend").textContent = `+${products.filter((p) => p.created.startsWith("2025-07")).length} in July`;
  document.getElementById("stat-revenue-trend").textContent = "+12.8% vs last month";

  document.getElementById("insight-top-category").textContent =
    analytics.categoryRevenue.sort((a, b) => b.revenue - a.revenue)[0].category;
  document.getElementById("insight-avg-price").textContent = formatCurrency(
    products.reduce((sum, p) => sum + p.price, 0) / products.length
  );
  document.getElementById("insight-low-stock").textContent = `${lowStockCount} products need restock`;
  document.getElementById("insight-active-users").textContent = `${Math.round((activeUsers / users.length) * 100)}% active`;
}

function renderRecentProducts() {
  const tbody = document.getElementById("recent-products-body");
  const recent = [...products].sort((a, b) => new Date(b.created) - new Date(a.created)).slice(0, 5);

  tbody.innerHTML = recent
    .map(
      (product) => `
      <tr>
        <td>#${product.id}</td>
        <td>${product.name}</td>
        <td>${getCategoryName(product.categoryId)}</td>
        <td>${formatCurrency(product.price)}</td>
        <td>${product.stock}</td>
        <td>${formatDate(product.created)}</td>
      </tr>
    `
    )
    .join("");
}

function renderUsersTable() {
  const tbody = document.getElementById("users-table-body");
  const filtered = users.filter((user) =>
    matchesSearch(user.name, user.email, user.role, user.status)
  );

  document.getElementById("users-count").textContent = `${filtered.length} users`;

  tbody.innerHTML = filtered.length
    ? filtered
        .map(
          (user) => `
        <tr>
          <td>#${user.id}</td>
          <td>${user.name}</td>
          <td>${user.email}</td>
          <td>${user.role}</td>
          <td><span class="status ${statusClass(user.status)}">${user.status}</span></td>
          <td>${formatDate(user.joined)}</td>
          <td>${actionButtons()}</td>
        </tr>
      `
        )
        .join("")
    : `<tr class="empty-row"><td colspan="7">No users match your search.</td></tr>`;
}

function renderCategoriesTable() {
  const tbody = document.getElementById("categories-table-body");
  const filtered = categories.filter((category) =>
    matchesSearch(category.name, category.description)
  );

  document.getElementById("categories-count").textContent = `${filtered.length} categories`;

  tbody.innerHTML = filtered.length
    ? filtered
        .map(
          (category) => `
        <tr>
          <td>#${category.id}</td>
          <td>${category.name}</td>
          <td>${category.description}</td>
          <td>${getProductsByCategory(category.id)}</td>
          <td>${formatDate(category.created)}</td>
          <td>${actionButtons()}</td>
        </tr>
      `
        )
        .join("")
    : `<tr class="empty-row"><td colspan="6">No categories match your search.</td></tr>`;
}

function renderProductsTable() {
  const tbody = document.getElementById("products-table-body");
  const filtered = products.filter((product) => {
    const categoryName = getCategoryName(product.categoryId);
    const categoryMatch = categoryFilter === "all" || String(product.categoryId) === categoryFilter;
    const searchMatch = matchesSearch(product.name, categoryName, product.status);
    return categoryMatch && searchMatch;
  });

  document.getElementById("products-count").textContent = `${filtered.length} products`;

  tbody.innerHTML = filtered.length
    ? filtered
        .map(
          (product) => `
        <tr>
          <td>#${product.id}</td>
          <td>${product.name}</td>
          <td>${getCategoryName(product.categoryId)}</td>
          <td>${formatCurrency(product.price)}</td>
          <td>${product.stock}</td>
          <td><span class="status ${statusClass(product.status)}">${product.status}</span></td>
          <td>${formatDate(product.created)}</td>
          <td>${actionButtons()}</td>
        </tr>
      `
        )
        .join("")
    : `<tr class="empty-row"><td colspan="8">No products match your filters.</td></tr>`;
}

function populateCategoryFilter() {
  const select = document.getElementById("product-category-filter");
  categories.forEach((category) => {
    const option = document.createElement("option");
    option.value = String(category.id);
    option.textContent = category.name;
    select.appendChild(option);
  });
}

function chartDefaults() {
  Chart.defaults.font.family = "'Segoe UI', system-ui, sans-serif";
  Chart.defaults.color = "#64748b";
}

function destroyChart(key) {
  if (charts[key]) {
    charts[key].destroy();
    delete charts[key];
  }
}

function renderCharts() {
  chartDefaults();

  const categoryCounts = categories.map((category) => ({
    label: category.name,
    count: getProductsByCategory(category.id),
  }));

  destroyChart("categoryPie");
  charts.categoryPie = new Chart(document.getElementById("chart-category-pie"), {
    type: "doughnut",
    data: {
      labels: categoryCounts.map((c) => c.label),
      datasets: [
        {
          data: categoryCounts.map((c) => c.count),
          backgroundColor: ["#4f46e5", "#06b6d4", "#10b981", "#f59e0b", "#ef4444", "#8b5cf6"],
          borderWidth: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { position: "bottom" } },
    },
  });

  destroyChart("revenueLine");
  charts.revenueLine = new Chart(document.getElementById("chart-revenue-line"), {
    type: "line",
    data: {
      labels: analytics.monthlyRevenue.map((m) => m.month),
      datasets: [
        {
          label: "Revenue",
          data: analytics.monthlyRevenue.map((m) => m.value),
          borderColor: "#4f46e5",
          backgroundColor: "rgba(79, 70, 229, 0.12)",
          fill: true,
          tension: 0.35,
          pointRadius: 4,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { display: false } },
      scales: {
        y: {
          ticks: {
            callback: (value) => `$${value / 1000}k`,
          },
        },
      },
    },
  });

  destroyChart("usersBar");
  charts.usersBar = new Chart(document.getElementById("chart-users-bar"), {
    type: "bar",
    data: {
      labels: analytics.userRegistrations.map((m) => m.month),
      datasets: [
        {
          label: "New Users",
          data: analytics.userRegistrations.map((m) => m.count),
          backgroundColor: "#06b6d4",
          borderRadius: 8,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { display: false } },
    },
  });

  destroyChart("categoryBar");
  charts.categoryBar = new Chart(document.getElementById("chart-category-bar"), {
    type: "bar",
    data: {
      labels: analytics.categoryRevenue.map((c) => c.category),
      datasets: [
        {
          label: "Revenue",
          data: analytics.categoryRevenue.map((c) => c.revenue),
          backgroundColor: "#10b981",
          borderRadius: 8,
        },
      ],
    },
    options: {
      indexAxis: "y",
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { display: false } },
      scales: {
        x: {
          ticks: {
            callback: (value) => `$${value / 1000}k`,
          },
        },
      },
    },
  });

  const inStock = products.filter((p) => p.stock > 10).length;
  const lowStock = products.filter((p) => p.stock > 0 && p.stock <= 10).length;
  const outOfStock = products.filter((p) => p.stock === 0).length;

  destroyChart("stockDoughnut");
  charts.stockDoughnut = new Chart(document.getElementById("chart-stock-doughnut"), {
    type: "doughnut",
    data: {
      labels: ["In Stock", "Low Stock", "Out of Stock"],
      datasets: [
        {
          data: [inStock, lowStock, outOfStock],
          backgroundColor: ["#10b981", "#f59e0b", "#ef4444"],
          borderWidth: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { position: "bottom" } },
    },
  });

  const { completed, processing, shipped, cancelled } = analytics.orderStatus;

  destroyChart("ordersPolar");
  charts.ordersPolar = new Chart(document.getElementById("chart-orders-polar"), {
    type: "polarArea",
    data: {
      labels: ["Completed", "Processing", "Shipped", "Cancelled"],
      datasets: [
        {
          data: [completed, processing, shipped, cancelled],
          backgroundColor: ["#4f46e5", "#06b6d4", "#10b981", "#ef4444"],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { position: "bottom" } },
    },
  });
}

function switchSection(sectionId) {
  document.querySelectorAll(".panel").forEach((panel) => {
    panel.hidden = panel.id !== sectionId;
    panel.classList.toggle("active", panel.id === sectionId);
  });

  document.querySelectorAll(".nav-item").forEach((item) => {
    item.classList.toggle("active", item.dataset.section === sectionId);
  });

  const meta = pageMeta[sectionId];
  document.getElementById("page-title").textContent = meta.title;
  document.getElementById("page-subtitle").textContent = meta.subtitle;

  if (sectionId === "analytics" || sectionId === "overview") {
    requestAnimationFrame(renderCharts);
  }
}

function refreshTables() {
  renderUsersTable();
  renderCategoriesTable();
  renderProductsTable();
  renderRecentProducts();
  renderStats();
}

function initNavigation() {
  document.querySelectorAll(".nav-item").forEach((item) => {
    item.addEventListener("click", () => switchSection(item.dataset.section));
  });

  document.querySelectorAll("[data-jump]").forEach((button) => {
    button.addEventListener("click", () => switchSection(button.dataset.jump));
  });
}

function initFilters() {
  document.getElementById("global-search").addEventListener("input", (event) => {
    searchQuery = event.target.value.trim().toLowerCase();
    refreshTables();
  });

  document.getElementById("product-category-filter").addEventListener("change", (event) => {
    categoryFilter = event.target.value;
    renderProductsTable();
  });
}

function init() {
  populateCategoryFilter();
  renderStats();
  renderRecentProducts();
  renderUsersTable();
  renderCategoriesTable();
  renderProductsTable();
  renderCharts();
  initNavigation();
  initFilters();
}

document.addEventListener("DOMContentLoaded", init);
