const cardsPerPage = 12;
const cards = document.querySelectorAll(".user-card");
const pagination = document.getElementById("pagination");

let currentPage = 1;

function showPage(page) {
    const visibleCards = Array.from(cards).filter(
        (card) => card.dataset.visible !== "false"
    );

    const start = (page - 1) * cardsPerPage;
    const end = start + cardsPerPage;

    visibleCards.forEach((card, index) => {
        card.style.display = index >= start && index < end ? "" : "none";
    });

    Array.from(cards).forEach((card) => {
        if (!visibleCards.includes(card)) {
            card.style.display = "none";
        }
    });

    renderPagination(page, visibleCards.length);
}

function renderPagination(activePage, totalCards = cards.length) {
    pagination.innerHTML = "";

    const pageCount = Math.ceil(totalCards / cardsPerPage);

    for (let i = 1; i <= pageCount; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.className = `btn btn-sm ${
            i === activePage ? "btn-primary" : "btn-outline-primary"
        }`;
        btn.addEventListener("click", () => {
            currentPage = i;
            showPage(i);
        });
        pagination.appendChild(btn);
    }
}

document
    .getElementById("searchInput")
    .addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            const term = this.value.toLowerCase();

            cards.forEach((card) => {
                const content = card.textContent.toLowerCase();
                const matches = content.includes(term);
                card.dataset.visible = matches ? "true" : "false";
            });

            currentPage = 1;
            showPage(currentPage);
        }
    });

// Inicializa
cards.forEach((card) => (card.dataset.visible = "true"));
showPage(currentPage);
