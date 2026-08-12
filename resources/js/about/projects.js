import { slcs, event, log } from '../functions.js'


// project type selector

event(document, 'DOMContentLoaded', () => {
    const projectTypes = slcs('.project-type');
    const projects = slcs('.projects-container .projects .project')

    projectTypes.forEach(projectType => {
        event(projectType, 'click', () => {
            projectTypes.forEach(pt => {
                pt.classList.remove('border-[#0a49bf]', 'bg-[#0a49bf]', 'text-white');
                pt.classList.add('border-[#eee]');
            });

            projectType.classList.add('border-[#0a49bf]', 'bg-[#0a49bf]', 'text-white');

            if (projectType.id === 'all-projects') {
                projects.forEach(project => {
                    project.classList.remove('hidden');
                })

                return;
            }

            projects.forEach(project => {
                if (project.getAttribute('type') === projectType.id) {
                    project.classList.remove('hidden');
                    return;
                }

                project.classList.add('hidden');
            })
        });
    });
});


// project image swapper

event(document, 'DOMContentLoaded', () => {
    const projectImagesContainer = slcs('.projects-container .projects .project .images');

    projectImagesContainer.forEach(projectImages => {
        const imagesContainerWidth = projectImages.offsetWidth;
        const images = [...projectImages.querySelectorAll('img')];
        const bars = [...projectImages.querySelectorAll('.bar')];

        switch (images.length) {
            case 1:
                return;
            case 2:
                const middleX = imagesContainerWidth / 2;

                event(projectImages, 'mousemove', (e) => {
                    if (e.offsetX < middleX) {
                        showImage(images, bars, 0);
                        return;
                    }

                    showImage(images, bars, 1);
                });

                return;
        }

        const leftBorderMiddleImage = imagesContainerWidth * .33;
        const rightBorderMiddleImage = imagesContainerWidth * .66;

        event(projectImages, 'mousemove', (e) => {
            if (e.offsetX < leftBorderMiddleImage) {
                showImage(images, bars, 0);
                return;
            }

            if (e.offsetX > rightBorderMiddleImage) {
                showImage(images, bars, 2);
                return;
            }

            showImage(images, bars, 1);
        });
    });
});

function showImage(images, bars, number) {
    images.forEach(image => {
        image.classList.add('invisible', 'opacity-0');
    });

    bars.forEach(bar => {
        bar.classList.remove('bg-white');
        bar.classList.add('bg-gray-400');
    })

    bars[number].classList.add('bg-white');
    images[number].classList.remove('invisible', 'opacity-0');
}
