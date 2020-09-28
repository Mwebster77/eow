const formResults = document.querySelector('.submitResults-form');

formResults.addEventListener('submit', e => {
	e.preventDefault();

	const auditNow = new Date();
	const addResults = {
		admin_score: formResults.venueScore.value, 
		audit_score: formResults.auditScore.value,
		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
	};

	auditDB.collection('audit_result').add(addResults).then(() => {
		console.log('audit result added');
	}).catch(error => {
		console.log(error);
	});
});
