
document.addEventListener('DOMContentLoaded', function () {

	document
		.querySelector('#rosegarden-get-info')
		.addEventListener('click', function (event) {
			

			// eslint-disable-next-line no-undef
			fetch(rosegarden.ajax_url, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded',
				},
				body:
					'action=rosegarden&data=1'
			})
				.then((response) => {
					if (!response.ok) {
						throw new Error(response);
					}

					return response.text();
				})
				.then((data) => {
					console.log("Data", data)
				})
				.catch((error) => {
					console.error(error);
				});
		});
});
