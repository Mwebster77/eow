// variable to store the class section to send the results out
const auditList = document.querySelector('.auditUL'); 


//retrieves the audit_results collection then sends the documents in the audit_results to the dashboard card.
const addAuditResult = (audit_result) => {
	
	let auditHtml = `
		<div class="blue-grey-text text-lighten-1">
			<ul>
				<div><b>EOW date : ${audit_result.created_at.toDate().toDateString()}</b></div>
				<div>Audit Score is ${audit_result.audit_score} %</div>
				<div>Admin Score is ${audit_result.admin_score} %</div>
			</ul>
		</div>
		`;
	
	auditList.innerHTML += auditHtml;
};


// returns the collection audit_result from the blokzeroeow database, it limits it to the last 4 results and orders them in order they were created 
auditDB.collection('audit_result').orderBy('created_at').limit(4).get().then((snapshot) => {
	
	//when the data is retrieved runs the snapshot for each document in the audit_result collection

	snapshot.docs.forEach(doc => {
		console.log(doc.data());
		addAuditResult(doc.data());
		
	})
});