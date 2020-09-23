const form = document.querySelector('.venueAudit-form');

form.addEventListener('button2', e => {
	e.preventDefault();

	const auditNow = new Date();
	const audit_results = {
		admin_score: form.auditPercentage, 
		audit_score: form.venuePercentage,
		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
	};

	auditDB.collection('audit_result').add(audit_results).then(() => {
		console.log('audit result added');
	}).catch(err => {
		console.log(err);
	})

});