document.addEventListener('DOMContentLoaded', function() {
    var showAllButton = document.getElementById('showAllButton');
    var showAllButtonSurv = document.getElementById('showAllButtonSurv');
    var survivors = document.querySelectorAll('.divSurvivor');
    var killers = document.querySelectorAll('.divKiller');
    var credits = document.querySelector(".posCredits");
    var characterSelect = document.getElementById('characterSelect');
    var characters = document.querySelectorAll('.divKiller');
    var dropdown = document.getElementById('dropdownContainer');
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    var modalDescription = document.getElementById("modalDescription");
    var modalImg = document.getElementById("modalImg");
    
    const formattingRules = {
        'bbq': [
            { number: 60, color: 'yellow' },
            { number: 50, color: 'green' },
            { number: 40, color: 'purple' },
            { number: 4, color: 'yellow' },
            { text: 'Barbecue & Chili', color: 'red' }
        ],
        'grim': [
            { number: 1, color: 'orange' },
            { number: 4, color: 'orange' },
            { number: 6, color: 'yellow' },
            { number: 8, color: 'green' },
            { number: 10, color: 'purple' },
            { number: 40, color: 'red' },
            { number: 6, color: 'orange', occurrence: 2 },
            { text: 'Abbraccio Lugubre', color: 'red' },
            { text: 'Abbraccio Lugubre', color: 'white', occurrence: 2 }
        ],
        'anghingo': [
            { number: 35, color: 'yellow' },
            { number: 40, color: 'green' },
            { number: 45, color: 'purple' },
            { number: 20, color: 'orange' },
            { text: '-', color: 'orange' },
            { text: 'Anghingò', color: 'red' },
            { text: 'Anghingò', color: 'white', occurrence: 2 }
        ],
        'DMS': [
            { number: 20, color: 'yellow' },
            { number: 25, color: 'green' },
            { number: 30, color: 'purple' },
            { text: 'blocchi', color: 'orange' },
            { text: "Dispositivo dell'Uomo Morto", color: 'red' },
            { text: "Dispositivo dell'Uomo Morto", color: 'white', occurrence: 2 }
        ],
        'corrupt': [
            { number: 80, color: 'yellow' },
            { number: 100, color: 'green' },
            { number: 120, color: 'purple' },
            { text: '3 Generatori', color: 'orange' },
            { text: 'Intervento Corrotto', color: 'red'},
            { text: 'Intervento Corrotto', color: 'white', occurrence: 2}
        ],
        'noed': [
            { text: 'Maledizione: Nessuno Sfugge alla Morte', color: 'red'},
            { text: 'Vulnerabilità', color: 'red'},
            { number: '2', color: 'yellow' },
            { number: '3', color: 'green' },
            { number: '4', color: 'purple' },
            { number: '4', color: 'orange', occurrence: 2},
            { number: '24', color: 'orange' },
            { number: '30', color: 'orange' },
            { text: 'metri', color: 'orange'},
            { text: 'metri', color: 'orange', occurrence: 2}
        ],
        'deadlock': [
            { number: '15', color: 'yellow' },
            { number: '20', color: 'green' },
            { number: '25', color: 'purple'},
            { text: 'Impasse', color:'red'}
        ],
        'brutal': [
            { number: '10', color: 'yellow' },
            { number: '15', color: 'green'},
            { number: '20', color: 'purple'},
            { text: 'Forza Brutale', color: 'red'}
        ],
        'inganno': [
            { text: 'Inganno', color: 'red'},
            { text: 'Inganno', color: 'white', occurrence: 2},
            { text: 'Inganno', color: 'white', occurrence: 3},
            { text: 'una sola', color: 'orange'},
            { number: '8', color: 'yellow' },
            { number: '5', color: 'yellow' },
            { number: '12', color: 'green'},
            { number: '10', color: 'green'},
            { number: '16', color: 'purple'},
            { number: '15', color: 'purple'},
        ],
        'nowhere': [
            { text: 'Impossibile Nascondersi', color: 'red'},
            { text: '24 metri', color: 'orange'},
            { number: '3', color: 'yellow' },
            { number: '4', color: 'green'},
            { number: '5', color: 'purple'}
        ],
        'darkness': [
            { text: 'Oscurità Rivelata', color: 'red'},
            { number: '3', color: 'yellow' },
            { number: '4', color: 'green'},
            { number: '5', color: 'purple'},
            { text: 'cooldown', color: 'orange'},
            { number: '30', color: 'orange' }
        ],
        'lethal': [
            { text: 'Inseguitore Letale', color: 'red'},
            { number: '7', color: 'yellow' },
            { number: '8', color: 'green'},
            { number: '9', color: 'purple'},
            { number: '2', color: 'orange' }
        ],
        'coup': [
            { text: 'Colpo di Grazia', color: 'red'},
            { text: 'Colpo di Grazia', color: 'white', occurrence: 2},
            { text: 'Colpo di Grazia', color: 'white', occurrence: 3},
            { number: '2', color: 'yellow' },
            { number: '10', color: 'orange' },
            { number: '70', color: 'yellow' },
            { number: '75', color: 'green'},
            { number: '80', color: 'purple'},
            { text: '1 token', color: 'orange'},
            { text: '5 token', color: 'orange'},
        ],
        'painres': [
            { text: 'Flagello Appuntito: Eco di Dolore', color:'red'},
            { text: '4 ganci', color: 'orange'},
            { text: '4 token', color: 'orange'},
            { text: '1 token', color: 'orange'},
            { number: '10', color: 'yellow' },
            { number: '15', color: 'green'},
            { number: '20', color: 'purple'},
        ],
        'makeyour': [
            { text: "Fa' la tua Scelta", color: 'red'},
            { text: '32 metri', color: 'orange'},
            { number: '40', color: 'yellow' },
            { number: '50', color: 'green'},
            { number: '60', color: 'purple'},
            { text: 'Cooldown', color: 'orange'},
            { number: '60', color: 'orange', occurrence: 2}
        ],
        'savethebest': [
            { text: 'Conserva il meglio per la fine', color: 'red'},
            { text: '1 token', color: 'orange'},
            { number: '6', color: 'yellow' },
            { number: '7', color: 'green'},
            { number: '8', color: 'purple'},
            { text: '-4%', color: 'orange'},
            { number: '24', color: 'yellow' },
            { number: '28', color: 'green'},
            { number: '32', color: 'purple'},
            { text: 'perdi 2 token', color: 'orange'}
        ],
        'rapidbrut': [
            { text: 'Brutalità Rapida', color: 'red'},
            { text: '5%', color: 'orange'},
            { number: '8', color: 'yellow' },
            { number: '9', color: 'green'},
            { number: '10', color: 'purple'},
        ],
        'spiritfury': [
            { text: 'Furia dello Spirito', color: 'red'},
            { number: '4', color: 'yellow' },
            { number: '3', color: 'green'},
            { number: '2', color: 'purple'},
        ],
        'enduring': [
            { text: 'Resistente', color: 'red'},
            { number: '40', color: 'yellow' },
            { number: '45', color: 'green'},
            { number: '50', color: 'purple'},
        ],
        'gift': [
            { text: 'Flagello Appuntito: Dono del Dolore', color: 'red'},
            { text: 'Emorragia', color: 'orange'},
            { text: 'Lacerazione', color: 'orange'},
            { text: '90 secondi', color: 'orange'},
            { number: '10', color: 'yellow' },
            { number: '13', color: 'green'},
            { number: '16', color: 'purple'},
        ],
        'thana': [
            { text: 'Tanatofobia', color: 'red'},
            { number: '1', color: 'yellow' },
            { number: '1', color: 'green', occurrence: 2},
            { text: '.5', color: 'green'},
            { number: '2', color: 'purple'},
            { number: '4', color: 'yellow' },
            { number: '6', color: 'green'},
            { number: '8', color: 'purple'},
            { text: '12%', color: 'orange'},
            { number: '16', color: 'yellow' },
            { text: '18', color: 'green'},
            { number: '20', color: 'purple'},
        ],
        'pwyf': [
            { text: 'Gioca con il tuo cibo', color: 'red'},
            { text: '1 token', color: 'orange'},
            { number: '3', color: 'orange'},
            { number: '3', color: 'yellow', occurrence: 2},
            { number: '4', color: 'green'},
            { number: '5', color: 'purple'},
            { number: '9', color: 'yellow'},
            { number: '12', color: 'green'},
            { number: '15', color: 'purple'},
            { text: 'Cooldown', color: 'orange'},
            { text: '10 secondi', color: 'orange'},
        ],
        'fright': [
            { text: 'Terrore Contagioso', color: 'red'},
            { number: '4', color: 'yellow'},
            { number: '5', color: 'green'},
            { number: '6', color: 'purple'},
        ],
        'allears': [
            { text: "Sono Tutt'Orecchi", color: 'red'},
            { text: "48 metri", color: 'orange'},
            { text: "6 secondi", color: 'orange'},
            { text: "Cooldown", color: 'orange'},
            { number: '60', color: 'yellow'},
            { number: '50', color: 'green'},
            { number: '40', color: 'purple'},
        ],
        'eruption': [
            { text: 'Eruzione', color: 'red'},
            { text: 'Eruzione', color: 'white', occurrence: 2},
            { text: '10%', color: 'orange'},
            { number: '8', color: 'yellow'},
            { number: '10', color: 'green', occurrence: 2},
            { number: '12', color: 'purple'},
        ],
        'weapon': [
            { text: 'Arma Suprema', color: 'red'},
            { text: '32 metri', color: 'orange'},
            { text: 'Accecamento', color: 'orange'},
            { text: '30 secondi', color: 'orange'},
            { text: 'Cooldown', color: 'orange'},
            { number: '80', color: 'yellow'},
            { number: '70', color: 'green'},
            { number: '60', color: 'purple'},
        ],
        'ferro': [
            { text: 'Vergine di Ferro', color: 'red'},
            { number: '30', color: 'yellow', occurrence: 1},
            { number: '40', color: 'green'},
            { number: '50', color: 'purple'},
            { text: '4 secondi', color: 'orange'},
            { text: '30 secondi', color: 'orange'},
        ],
        'ruin': [
            { text: 'Maledizione: Rovina', color: 'red'},
            { number: '50', color: 'yellow'},
            { number: '75', color: 'green'},
            { number: '100', color: 'purple'},
        ],
        'facedark': [
            { text: "Maledizione: Affronta l'Oscurità", color: 'red'},
            { number: '35', color: 'yellow'},
            { number: '30', color: 'green'},
            { number: '25', color: 'purple'},
            { text: '2 secondi', color: 'orange'},
        ],
        'thrill': [
            { text: 'Maledizione: Il Brivido della Caccia', color: 'red'},
            { number: '8', color: 'yellow'},
            { number: '9', color: 'green'},
            { number: '10', color: 'purple'},
            { number: '40', color: 'yellow'},
            { number: '45', color: 'green'},
            { number: '50', color: 'purple'},
            { number: '5', color: 'orange'},
            { number: '1', color: 'orange'},
        ],
        'undying': [
            { text: 'Maledizione: Immortale', color: 'red'},
            { number: '2', color: 'yellow'},
            { number: '3', color: 'green'},
            { number: '4', color: 'purple'},
        ],
        'surge': [
            { text: 'Scarica', color: 'red'},
            { text: '32 metri', color: 'orange'},
            { number: '6', color: 'yellow'},
            { number: '7', color: 'green'},
            { number: '8', color: 'purple'},
        ],
        'dissolution': [
            { text: 'Dissoluzione', color: 'red'},
            { text: '3 secondi', color: 'orange'},
            { number: '12', color: 'yellow'},
            { number: '16', color: 'green'},
            { number: '20', color: 'purple'},
        ],
        'rememberme': [
            { text: 'Ricordati di me', color: 'red'},
            { text: '1 token', color: 'orange'},
            { number: '2', color: 'yellow'},
            { number: '3', color: 'green'},
            { number: '4', color: 'purple'},
            { text: '6 secondi', color: 'orange'},
            { number: '12', color: 'yellow'},
            { number: '18', color: 'green'},
            { number: '24', color: 'purple'},
        ],
        'bloodwarden': [
            { text: 'Custode Sanguinario', color: 'red'},
            { number: '30', color: 'yellow'},
            { number: '40', color: 'green'},
            { number: '60', color: 'purple'},
        ],
        'nowayout': [
            { text: "Nessuna Via d'Uscita", color: 'red'},
            { text: '1 token', color: 'orange'},
            { text: '12 secondi', color: 'orange'},
            { number: '6', color: 'yellow'},
            { number: '9', color: 'green'},
            { number: '12', color: 'purple'},
            { text: 'secondi', color: 'white', occurrence: 2},
            { number: '36', color: 'yellow'},
            { number: '48', color: 'green'},
            { number: '60', color: 'purple'},
        ],
        "lithe": [
            { text: 'Agilità', color: 'red'},
            { text: '3 secondi', color: 'orange'},
            { text: '150%', color: 'orange'},
            { number: '60', color: 'yellow'},
            { number: '50', color: 'green'},
            { number: '40', color: 'purple'},
            { text: 'Agilità', color: 'white', occurrence: 2},
        ],
        "resil": [
            { text: 'Determinazione', color: 'red'},
            { number: '3', color: 'yellow'},
            { number: '6', color: 'green'},
            { number: '9', color: 'purple'},
        ],
        'windows': [
            { text: 'Momenti Propizi', color: 'red'},
            { number: '24', color: 'yellow'},
            { number: '28', color: 'green'},
            { number: '32', color: 'purple'},
        ],
        'champion': [
            { text: 'Campione di luce', color: 'red'},
            { text: '50%', color: 'orange'},
            { text: 'Rallentamento del 20% per 6 secondi', color: 'orange'},
            { number: '80', color: 'yellow'},
            { number: '70', color: 'green'},
            { number: '60', color: 'purple'},
        ],
        'fixated': [
            { text: 'Fissata', color: 'red'},
            { number: '10', color: 'yellow'},
            { number: '15', color: 'green'},
            { number: '20', color: 'purple'},
        ],
        'vigil': [
            { text: 'Veglia', color: 'red'},
            { number: '20', color: 'yellow'},
            { number: '25', color: 'green'},
            { number: '30', color: 'purple'},
            { text: '8 metri', color: 'orange'},
        ],
        'deja': [
            { text: 'Déjà-Vu', color: 'red'},
            { text: '3 Generatori vicini', color: 'orange'},
            { number: '4', color: 'yellow'},
            { number: '5', color: 'green'},
            { number: '6', color: 'purple'},
        ],
        'stakeout': [
            { text: 'Sotto Controllo', color: 'red'},
            { text: '15 secondi', color: 'orange'},
            { text: '1 token', color: 'orange'},
            { number: '2', color: 'yellow'},
            { number: '3', color: 'green'},
            { number: '4', color: 'purple'},
        ],
        'deadline': [
            { text: 'Deadline', color: 'red'},
            { number: '6', color: 'yellow'},
            { number: '8', color: 'green'},
            { number: '10', color: 'purple'},
            { text: '50%', color: 'orange'},
        ],
        'hyper': [
            { text: 'Iperconcentrazione', color: 'red'},
            { text: '6 Token', color: 'orange'},
            { text: '4%', color: 'orange'},
            { number: '10', color: 'yellow'},
            { number: '20', color: 'green'},
            { number: '30', color: 'purple'},
        ],
        "sprint": [
            { text: 'Scatto Improvviso', color: 'red'},
            { text: '3 secondi', color: 'orange'},
            { text: '150%', color: 'orange'},
            { number: '60', color: 'yellow'},
            { number: '50', color: 'green'},
            { number: '40', color: 'purple'},
            { text: 'Scatto Improvviso', color: 'white', occurrence: 2},
        ],
        "adren": [
            { text: 'Adrenalina', color: 'red'},
            { text: '3 secondi', color: 'orange'},
            { text: '1 stato di salute', color: 'orange'},
            { text: '150%', color: 'orange'},
            { number: '60', color: 'yellow'},
            { number: '50', color: 'green'},
            { number: '40', color: 'purple'},
            { text: 'Adrenalina', color: 'white', occurrence: 2},
        ],
        "otr": [
            { text: 'In Via Ufficiosa', color: 'red'},
            { text: 'In Via Ufficiosa', color: 'white', occurrence: 2},
            { number: '60', color: 'yellow'},
            { number: '70', color: 'green'},
            { number: '80', color: 'purple'},
        ]
        
    };
    
    function formatDescription(description, imageId) {
        if (formattingRules[imageId]) {
            const rules = formattingRules[imageId];
            rules.forEach(rule => {
                let regex;
                if (rule.number !== undefined) {
                    if (rule.occurrence) {
                        regex = new RegExp(`\\b${rule.number}\\b`, 'g');
                        let occurrenceCount = 0;
                        description = description.replace(regex, (matched) => {
                            occurrenceCount++;
                            if (occurrenceCount === rule.occurrence) {
                                return `<span style="color: ${rule.color};">${matched}</span>`;
                            }
                            return matched;
                        });
                    } else {
                        regex = new RegExp(`\\b${rule.number}\\b`, 'g');
                        description = description.replace(regex, `<span style="color: ${rule.color};">${rule.number}</span>`);
                    }
                } else if (rule.text !== undefined) {
                    if (rule.occurrence) {
                        regex = new RegExp(rule.text, 'g');
                        let occurrenceCount = 0;
                        description = description.replace(regex, (matched) => {
                            occurrenceCount++;
                            if (occurrenceCount === rule.occurrence) {
                                return `<span style="color: ${rule.color};">${matched}</span>`;
                            }
                            return matched;
                        });
                    } else {
                        regex = new RegExp(rule.text, 'g');
                        description = description.replace(regex, `<span style="color: ${rule.color};">${rule.text}</span>`);
                    }
                }
            });
        }
        return description;
    }
    
    fetch('descriptions.json')
        .then(response => response.json())
        .then(data => {
            descriptions = data;
        })
        .catch(error => console.error('Error fetching descriptions:', error));
    
    document.querySelectorAll('.altPerks img').forEach(function(image) {
        image.addEventListener('click', function(event) {
            event.preventDefault();
            var imageId = this.id;
            var description = descriptions[imageId];
            var formattedDescription = formatDescription(description, imageId);
            modalDescription.innerHTML = formattedDescription || "Nessuna descrizione disponibile.";
            modalImg.src = this.src; // Aggiorna la sorgente dell'immagine nel modal
            modalImg.alt = this.alt; // Aggiorna il testo alternativo dell'immagine nel modal
            modal.style.display = "block";
        });
    });
    
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    showAllButton.addEventListener('click', function() {
        dropdown.classList.remove('hidden');
        showAllButtonSurv.classList.remove('active');
        this.classList.add('active');

        killers.forEach(function(killer) {
            killer.classList.remove('hidden', 'centeredKiller');
            credits.classList.remove('credits');
        });
        survivors.forEach(function(surv) {
            surv.classList.add('hidden');
        });
    });

    showAllButtonSurv.addEventListener('click', function() {
        dropdown.classList.add('hidden');
        characterSelect.value = "";
        showAllButton.classList.remove('active');
        killers.forEach(function(killer) {
            killer.classList.add('hidden');
        });
        survivors.forEach(function(surv) {
            surv.classList.remove('hidden');
            credits.classList.add('credits');
        });
        this.classList.add('active');
    });

    document.querySelectorAll('.altBuilds').forEach(function(button) {
        button.addEventListener('click', function() {
            var parentKiller = this.closest('.divKiller');
            var selectedBuild = this.getAttribute('data-name');

            parentKiller.querySelectorAll('.altBuilds').forEach(function(btn) {
                btn.classList.remove('active');
            });
            this.classList.add('active');

            parentKiller.querySelectorAll('.perkKiller').forEach(function(perk) {
                if (perk.classList.contains(selectedBuild)) {
                    perk.classList.remove('hidden');
                } else {
                    perk.classList.add('hidden');
                }
            });
        });
    });


    characters.forEach(function(character) {
        var classes = character.className.split(' ');
        var dataName = classes.find(cls => cls !== 'divKiller');
        character.setAttribute('data-name', dataName);
    });

    characterSelect.addEventListener('change', function() {
        var selectedCharacter = this.value;

        characters.forEach(function(character) {
            if (selectedCharacter === "" || character.getAttribute('data-name') === selectedCharacter) {
                character.classList.remove('hidden');
            } else {
                character.classList.add('hidden');
            }
        });
    });

    // Assicurarsi che tutti i personaggi siano visibili al caricamento della pagina
    window.addEventListener('load', function() {
        characters.forEach(function(character) {
            character.classList.remove('hidden');
        });
    });
});
