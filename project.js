document.addEventListener('DOMContentLoaded', function() {
    var characterButtons = document.querySelectorAll('.characterButton');
    var showAllButton = document.getElementById('showAllButton');
    var killers = document.querySelectorAll('.divKiller');
    var builds = document.querySelectorAll('.perkKiller');
    var credits = document.querySelector(".posCredits");
    var altBuildsButtons = document.querySelectorAll('.altBuilds');

    showAllButton.addEventListener('click', function() {
        characterButtons.forEach(function(btn) {
            btn.classList.remove('active');
        });
        this.classList.add('active');

        killers.forEach(function(killer) {
            killer.classList.remove('hidden', 'centered');
            credits.classList.remove('credits');
        });
    });

    characterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            showAllButton.classList.remove('active');
            characterButtons.forEach(function(btn) {
                btn.classList.remove('active');
            });


            this.classList.add('active');

            var characterName = this.getAttribute('data-name');
            var selectedKiller = document.querySelector('.divKiller.' + characterName);

            killers.forEach(function(killer) {
                if (killer === selectedKiller) {
                    killer.classList.remove('hidden');
                    killer.classList.add('centered');
                    credits.classList.add('credits');
                } else {
                    killer.classList.remove('centered');
                    killer.classList.add('hidden');
                }               
            });   
        });
    });

    altBuildsButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            altBuildsButtons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            this.classList.add('active');

            var characterName = this.parentElement.classList[1];
            var selectedBuild = this.getAttribute('data-name');
            var selectedPerks = document.querySelectorAll('.' + characterName + ' .perkKiller');

            selectedPerks.forEach(function(perk) {
                if (perk.classList.contains(selectedBuild)) {
                    perk.classList.remove('hidden');
                } else {
                    perk.classList.add('hidden');
                }
            });
        });
    });
});

