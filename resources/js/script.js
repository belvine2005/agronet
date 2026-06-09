

document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modal");
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const profileForm = document.getElementById("profileForm");

    if (openModal && modal) {
        openModal.onclick = () => {
            modal.style.display = "flex";
        };
    }

    if (closeModal && modal) {
        closeModal.onclick = () => {
            modal.style.display = "none";
        };
    }

    function calculAge(dateNaissance) {
        const naissance = new Date(dateNaissance);
        const aujourdHui = new Date();

        let age = aujourdHui.getFullYear() - naissance.getFullYear();
        const mois = aujourdHui.getMonth() - naissance.getMonth();

        if (
            mois < 0 ||
            (mois === 0 && aujourdHui.getDate() < naissance.getDate())
        ) {
            age--;
        }

        return age;
    }

    if (profileForm) {
        profileForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const inputs = {
                nom: document.getElementById("inputNom"),
                genre: document.getElementById("inputGenre"),
                role: document.getElementById("inputRole"),
                email: document.getElementById("inputEmail"),
                contact: document.getElementById("inputContact"),
                region: document.getElementById("inputRegion"),
                adresse: document.getElementById("inputAdresse"),
                date: document.getElementById("inputDate"),
                avatar: document.getElementById("avatar"),
            };

            if (!inputs.nom || !inputs.genre || !inputs.role || !inputs.email || !inputs.contact || !inputs.region || !inputs.adresse || !inputs.date || !inputs.avatar || !modal) {
                return;
            }

            document.getElementById("nom").textContent = inputs.nom.value;
            document.getElementById("genre").textContent = inputs.genre.value;
            document.getElementById("role").textContent = inputs.role.value;
            document.getElementById("email").textContent = inputs.email.value;
            document.getElementById("contact").textContent = inputs.contact.value;
            document.getElementById("region").textContent = inputs.region.value;
            document.getElementById("adresse").textContent = inputs.adresse.value;

            const dateValue = inputs.date.value;
            document.getElementById("dateNaissance").textContent = dateValue;
            document.getElementById("age").textContent = calculAge(dateValue);

            const nomParts = inputs.nom.value.split(" ");
            let initiales = "";
            nomParts.forEach(partie => {
                if (partie.length > 0) {
                    initiales += partie.charAt(0);
                }
            });

            inputs.avatar.textContent = initiales.toUpperCase();
            modal.style.display = "none";
            alert("Profil mis à jour avec succès !");
        });
    }
});




    
    let filteredData = [...rawData];
    let currentPage = 1;
    const rowsPerPage = 2; // Nombre d'éléments par page

    const tableBody = document.getElementById('table-body');
    const pageNumbersContainer = document.getElementById('page-numbers');
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    const searchInput = document.getElementById('js-search-input');
    const clearBtn = document.getElementById('js-clear-btn');

    //  Fonction d'affichage du tableau
    function displayTable(page) {
        tableBody.innerHTML = "";
        
        let start = (page - 1) * rowsPerPage;
        let end = start + rowsPerPage;
        let paginatedItems = filteredData.slice(start, end);

        if (paginatedItems.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="5" style="text-align: center; color: #94a3b8; padding: 2rem;">Aucun résultat trouvé.</td></tr>`;
            return;
        }

        paginatedItems.forEach(item => {
            let statusClass = item.statut === 'Actif' ? 'status' : 'status-suspended';
            let row = `
                <tr>
                    <td><strong>${item.nom}</strong></td>
                    <td>${item.ville}</td>
                    <td>${item.email}</td>
                    <td><span class="${statusClass}">${item.statut}</span></td>
                    <td><a href="#" class="edit">Voir</a></td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });
    }

    //  Fonction de génération de la pagination
    function setupPagination() {
        pageNumbersContainer.innerHTML = "";
        let pageCount = Math.ceil(filteredData.length / rowsPerPage);

        for (let i = 1; i <= pageCount; i++) {
            let btn = document.createElement('button');
            btn.innerText = i;
            btn.classList.add('num-btn');
            if (currentPage === i) btn.classList.add('active');

            btn.addEventListener('click', () => {
                currentPage = i;
                initDashboard();
            });
            pageNumbersContainer.appendChild(btn);
        }

        // Activer / Désactiver PREVIOUS et NEXT
        btnPrev.disabled = (currentPage === 1);
        btnNext.disabled = (currentPage === pageCount || pageCount === 0);
    }

    //  Gestion des événements (Recherche et Boutons)
    btnPrev.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            initDashboard();
        }
    });

    btnNext.addEventListener('click', () => {
        let pageCount = Math.ceil(filteredData.length / rowsPerPage);
        if (currentPage < pageCount) {
            currentPage++;
            initDashboard();
        }
    });

    searchInput.addEventListener('input', (e) => {
        let value = e.target.value.toLowerCase();
        
        clearBtn.style.display = value ? 'inline-block' : 'none';

        filteredData = rawData.filter(item => 
            item.nom.toLowerCase().includes(value) || 
            item.ville.toLowerCase().includes(value)
        );

        currentPage = 1; // Revenir à la première page lors d'une recherche
        initDashboard();
    });

    clearBtn.addEventListener('click', () => {
        searchInput.value = "";
        clearBtn.style.display = 'none';
        filteredData = [...rawData];
        currentPage = 1;
        initDashboard();
    });

    function initDashboard() {
        displayTable(currentPage);
        setupPagination();
    }

    // Lancement au chargement de la page
    initDashboard();








   