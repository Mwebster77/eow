const formConfirm = document.querySelector('.venueAudit-form');

formConfirm.addEventListener('confirm', e => {
	e.preventDefault();

	const auditNow = new Date();
	const audit_results = {
		admin_score: formConfirm.auditPercentage, 
		audit_score: formConfirm.venuePercentage,
		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
	};

	auditDB.collection('audit_result').add(audit_results).then(() => {
		console.log('audit result added');
	}).catch(err => {
		console.log(err);
	})

});