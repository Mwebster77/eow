const confirmForm = document.querySelector('.submitResults-form');
const formResults = document.querySelector('.venueAudit-form');

confirmForm.addEventListener('submit', e => {
	e.preventDefault();

	const auditNow = new Date();
	const addResults = {
		admin_score: confirmForm.auditPercentage2.value, 
		audit_score: confirmForm.venuePercentage2.value,
		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
	};

	auditDB.collection('audit_result').add(addResults).then(() => {
		console.log('audit result added');
	}).catch(error => {
		console.log(error);
	});
});
