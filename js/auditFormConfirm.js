const formConfirm = document.querySelector('.venueAudit-form');

formConfirm.addEventListener('button', e => {
	e.preventDefault();

	const auditNow = new Date();
	const audit_results = {
		admin_score: formConfirm.auditPercentage.value, 
		audit_score: formConfirm.venuePercentage.value,
		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
	};

	auditDB.collection('audit_result').add(audit_results).then(() => {
		console.log('audit result added');
	}).catch(err => {
		console.log(err);
	})

});