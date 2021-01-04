(function ($) {
    const anchors = $.querySelectorAll('[data-type="anchor"]');
    const area = $.querySelector('[data-ref="anchor"]');

    if (!area) {
        return log('Anchor', 'Anchor area is missing. Note: data-ref="anchor"');
    }

    Array.from(anchors).forEach(element => {
        const anchorElement = document.createElement('div');
        anchorElement.innerText = element.dataset.label;
        anchorElement.className = 'main-button cursor-pointer';

        // add event
        anchorElement.addEventListener('click', () => {
            element.scrollIntoView({
                behavior: 'smooth'
            })
        })

        area.appendChild(anchorElement);
    });
})(document);
