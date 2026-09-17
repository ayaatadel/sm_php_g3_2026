const filters = document.querySelectorAll('.filter');
const projects = document.querySelectorAll('.project-card');

filters.forEach((filter) => {
	filter.addEventListener('click', () => {
		const selectedCategory = filter.dataset.filter;

		filters.forEach((item) => item.classList.toggle('active', item === filter));
		projects.forEach((project) => {
			const categories = project.dataset.category.split(' ');
			project.hidden = selectedCategory !== 'all' && !categories.includes(selectedCategory);
		});
	});
});
