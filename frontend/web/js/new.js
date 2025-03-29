Fancybox.bind("[data-fancybox='gallery']", {
    Thumbs: {
        autoStart: true
    },
    trapFocus: false // <--- Отключаем перемещение фокуса
});
document.addEventListener("DOMContentLoaded", function () {
    const fancyboxContainers = document.querySelectorAll(".fancybox__container");
    fancyboxContainers.forEach(container => {
        container.setAttribute("inert", "true"); // Блокируем фокус
    });
});