document.addEventListener('DOMContentLoaded', function() {
    var characterButtons = document.querySelectorAll('.characterButton');
    var showAllButton = document.getElementById('showAllButton');
    var showAllButtonSurv = document.getElementById('showAllButtonSurv');
    var survivors = document.querySelectorAll('.divSurvivor');
    var killers = document.querySelectorAll('.divKiller');
    var credits = document.querySelector(".posCredits");

    showAllButton.addEventListener('click', function() {
        showAllButtonSurv.classList.remove('active');
        characterButtons.forEach(function(btn) {
            btn.classList.remove('active');
            btn.classList.remove('hidden');
        });
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
        showAllButton.classList.remove('active');
        characterButtons.forEach(function(charbutton) {
            charbutton.classList.add('hidden');
        });
        killers.forEach(function(killer) {
            killer.classList.add('hidden');
            credits.classList.add('credits');
        });
        survivors.forEach(function(surv) {
            surv.classList.remove('hidden');
        });
        this.classList.add('active');
    });

    characterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            characterButtons.forEach(function(btn) {
                btn.classList.remove('active');
            });

            this.classList.add('active');

            var characterName = this.getAttribute('data-name');
            var selectedKiller = document.querySelector('.divKiller.' + characterName);

            killers.forEach(function(killer) {
                if (killer === selectedKiller) {
                    killer.classList.remove('hidden');
                    killer.classList.add('centeredKiller');
                    credits.classList.add('credits');
                } else {
                    killer.classList.remove('centeredKiller');
                    killer.classList.add('hidden');
                }               
            });
        });
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
});
