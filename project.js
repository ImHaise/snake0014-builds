document.addEventListener('DOMContentLoaded', function() {
    var characterButtons = document.querySelectorAll('.characterButton');
    var showAllButton = document.getElementById('showAllButton');
    var killers = document.querySelectorAll('.divKiller');

    characterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var characterName = this.getAttribute('data-name');
            var selectedKiller = document.querySelector('.divKiller.' + characterName);

            killers.forEach(function(killer) {
                if (killer === selectedKiller) {
                    killer.classList.remove('hidden');
                    killer.classList.add('centered');
                } else {
                    killer.classList.remove('centered');
                    killer.classList.add('hidden');
                }               
            });   
        });
    });   

    // Gestione del click sul pulsante "Mostra tutti"
    showAllButton.addEventListener('click', function() {
        killers.forEach(function(killer) {
            killer.classList.remove('hidden', 'centered');
        });
    });
});
