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

    const formattingRules = {
        'bbq': [
            { number: 60, color: 'yellow' },
            { number: 50, color: 'green' },
            { number: 40, color: 'purple' },
            { number: 4, color: 'yellow' },
            { text: 'Barbecue & Chili', color: 'red' }
        ],
        'grim': [
            {number : 1, color: 'cyan'},
            {text : '-', color: 'cyan'},
            {number : 3, color: 'cyan'},
            {number : 4, color: 'cyan'},
            { number: 6, color: 'yellow' },
            { number: 8, color: 'green' },
            { number: 10, color: 'purple' },
            { number: 40, color: 'red' },
            { number: 6, color: 'purple', occurrence: 2 },
            { text: 'Abbraccio Lugubre', color: 'red'},
            { text: 'Abbraccio Lugubre', color: 'white', occurrence: 2}
            
        ],
        'anghingo': [
            { number: 35, color: 'yellow' },
            { number: 40, color: 'green' },
            { number: 45, color: 'purple' },
            { number: 20, color: 'yellow' },
            {text : '-', color: 'yellow'},
            { text: 'Anghingò', color: 'red'},
            { text: 'Anghingò', color: 'white', occurrence: 2}
        ],
        'DMS': [
            { number: 20, color: 'yellow' },
            { number: 25, color: 'green' },
            { number: 30, color: 'purple' },
            { text: 'blocchi', color: 'red'},
            { text: "Dispositivo dell'Uomo Morto", color: 'red'},
            { text: "Dispositivo dell'Uomo Morto", color: 'white', occurrence: 2}
        ],

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
