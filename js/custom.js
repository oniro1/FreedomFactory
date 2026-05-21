document.addEventListener('DOMContentLoaded', function () {
    const pulsanti = document.querySelectorAll('.pulisci');
    const contenitori = document.querySelectorAll('.cookie');

    pulsanti.forEach(pulsante => {
        pulsante.addEventListener('click', function () {
            contenitori.forEach(contenitore => {
                contenitore.style.display = 'none';
            });
        });
    });
});