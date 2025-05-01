document.addEventListener('DOMContentLoaded', () => {
    const loaderContainer = document.getElementById('loaderContainer');
    const content = document.getElementById('content');
    const progressText = document.getElementById('progressText');
    const progressMessages = [
        'Loading...',
    ];
    
    let progress = 0;
    let messageIndex = 0;
    
    // Change loading message
    const changeMessage = setInterval(() => {
        messageIndex = (messageIndex + 1) % progressMessages.length;
        progressText.textContent = progressMessages[messageIndex];
    }, 1500);
    
    // Simulated loading progress
    const loadingInterval = setInterval(() => {
        progress += Math.floor(Math.random() * 10) + 5;
        if (progress >= 100) {
            clearInterval(loadingInterval);
            clearInterval(changeMessage);
            progressText.textContent = 'Complete!';
            
            // Show content after loading
            setTimeout(() => {
                loaderContainer.classList.add('fade-out');
                setTimeout(() => {
                    content.classList.add('fade-in');
                }, 1000);
            }, 1000);
        }
    }, 800);
});