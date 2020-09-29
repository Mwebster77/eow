const auditCorrectAnswers = [
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20},
	{correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20},
	{correctAnswer: "A", points: 5}, {correctAnswer: "A", points: 5}, {correctAnswer: "A", points: 5}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 5},
	{correctAnswer: "A", points: 5}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, 
	{correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}];


const venueCorrectAnswers = [
	//outside Area 1-7
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 5}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 20},
	//Customer Area 8-27
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 5},
	//Toliets % Disabled 28 - 44
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10},
	//Cloakroom 45 - 50
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	//Back of House 51 - 55
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},	
	//DJ Console & Effects 56 - 61
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 1},
	//Staff Area & Toilets 62 - 70
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1},
	//Bars 71 - 93
	{correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1},
	{correctAnswer: "A", points: 5}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 20},
	{correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 20},
	{correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 20},
	//Cellar 94 - 110 
	{correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 1}, {correctAnswer: "A", points: 10},
	{correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 1},  {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 20}, {correctAnswer: "A", points: 10},
	{correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 10}, {correctAnswer: "A", points: 5}];



const form = document.querySelector('.venueAudit-form');
const formConfirm = document.querySelector('.submitResults-form')
const venueResult = document.querySelector('.venueResult');
const auditResult = document.querySelector('.auditResult');
// const confirmResult = document.querySelector('.confirmResult');
const checkResult = document.querySelector('.checkResult');



form.addEventListener('submit', e => {
    e.preventDefault();

	let auditScore = 0;
	let venueScore = 0;
	var venuePercentage = 0;
	venuePercentage = +venuePercentage.toFixed(2);
	var auditPercentage = 0;
	auditPercentage = +auditPercentage.toFixed(2);

	
	//takes the value from each radio button
	const userAuditAnswers = 	[form.a1.value, form.a2.value, form.a3.value, form.a4.value, form.a5.value, form.a6.value, form.a7.value, form.a8.value, form.a9.value, form.a10.value, form.a11.value, 
								form.a12.value, form.a13.value, form.a14.value, form.a15.value, form.a16.value, form.a17.value, form.a18.value, form.a19.value, form.a20.value, form.a21.value, form.a22.value];
								
	const userVenueAnswers = 	[form.v1.value, form.v2.value, form.v3.value, form.v4.value, form.v5.value, form.v6.value, form.v7.value, form.v8.value, form.v9.value, form.v10.value, form.v11.value, form.v12.value, form.v13.value, form.v14.value, form.v15.value, form.v16.value, form.v17.value, form.v18.value, form.v19.value, form.v20.value, 
								form.v21.value, form.v22.value, form.v23.value, form.v24.value, form.v25.value, form.v26.value, form.v27.value, form.v28.value, form.v29.value, form.v30.value, form.v31.value, form.v32.value, form.v33.value, form.v34.value, form.v35.value, form.v36.value, form.v37.value, form.v38.value, form.v39.value, form.v40.value, 
								form.v41.value, form.v42.value, form.v43.value, form.v44.value, form.v45.value, form.v46.value, form.v47.value, form.v48.value, form.v49.value, form.v50.value, form.v51.value, form.v52.value, form.v53.value, form.v54.value, form.v55.value, form.v56.value, form.v57.value, form.v58.value, form.v59.value, form.v60.value, 
								form.v61.value, form.v62.value, form.v63.value, form.v64.value, form.v65.value, form.v66.value, form.v67.value, form.v68.value, form.v69.value, form.v70.value,	form.v71.value, form.v72.value, form.v73.value, form.v74.value, form.v75.value, form.v76.value, form.v77.value, form.v78.value, form.v79.value, form.v80.value, 
								form.v81.value, form.v82.value, form.v83.value, form.v84.value, form.v85.value, form.v86.value, form.v87.value, form.v88.value, form.v89.value, form.v90.value, form.v91.value, form.v92.value, form.v93.value, form.v94.value, form.v95.value, form.v96.value, form.v97.value, form.v98.value, form.v99.value, form.v100.value,
								form.v101.value, form.v102.value, form.v103.value, form.v104.value, form.v105.value, form.v106.value, form.v107.value, form.v108.value, form.v109.value, form.v110.form];

	// checks management audit scores

	for(var i = 0; i < userAuditAnswers.length; i++)
		if(userAuditAnswers[i] === auditCorrectAnswers[i].correctAnswer)  
		auditScore += auditCorrectAnswers[i].points;

	// checks venue audit scores

	for(var i = 0; i < userVenueAnswers.length; i++)
		if(userVenueAnswers[i] === venueCorrectAnswers[i].correctAnswer)
		venueScore += venueCorrectAnswers[i].points;

		venuePercentage += Math.round(((venueScore / 528) * 100) * 100) / 100;
		auditPercentage += Math.round(((auditScore / 336) * 100) * 100) / 100;



	// sends results to console
	localStorage.setItem("venuePercentage", auditPercentage);
	localStorage.setItem("auditPercentage", venuePercentage);
	console.log('local storage has stored the Audit Percentage as ' + localStorage.getItem("auditPercentage") + '% and, the Venue Percentage as ' + localStorage.getItem("venuePercentage") + '%');
	console.log('the Audit score was ' + auditScore);
	console.log('the Venue score was ' + venueScore);
	console.log('the Audit Percentage was ' + auditPercentage + '%');
	console.log('the Venue Percentage was ' + venuePercentage + '%');


		// output results on page
	// local storage has to go at the end as this is the final value of each item.
	
	venueResult.querySelector('span').textContent = `${venuePercentage}%`;
	venueResult.classList.remove('hide');
	auditResult.querySelector('span').textContent = `${auditPercentage}%`;
	auditResult.classList.remove('hide');

	formConfirm.classList.remove('hide');

});

