document.getElementById('licoes-link').addEventListener('click', function(event) {
    event.preventDefault();
    var dropdown = document.getElementById('licoes-dropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});
document.getElementById('licoes-link').addEventListener('blur', function(event) {
    event.preventDefault();
    var dropdown = document.getElementById('licoes-dropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});

// clock
function toggleFullscreenClock() {
    var clock = document.getElementById('clock');
    if (!document.fullscreenElement) {
        clock.requestFullscreen().catch(err => {
            alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
        });
        clock.style.fontSize = '20rem';
        clock.style.borderRadius = '450px';
        clock.style.padding = '10rem';
        document.getElementById('clock-text').style.transform = 'translateX(-25%) translateY(-25%)';
    } else {
        document.exitFullscreen();
        clock.style.fontSize = '';
        clock.style.borderRadius = '';
        clock.style.padding = '';
        clock.style.transform = '';
    }
}

document.getElementById('clock').addEventListener('click', function() {
    toggleFullscreenClock();
});

function updateClock() {
    var clock = document.getElementById('clock');
    var now = new Date();
    var formattedTime = now.toLocaleDateString('pt-BR') + ' ' + now.toLocaleTimeString('pt-BR');
    clock.textContent = formattedTime;
}

setInterval(updateClock, 1000);
updateClock(); // Initial call to set the clock immediately