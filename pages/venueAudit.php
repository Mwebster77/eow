<!doctype html>
<html>

<?php include('../templates/header.php') ?>
<?php include('../templates/navbar.php') ?>

<style>
    [type="radio"]:checked + span:after,
    [type="radio"].with-gap:checked + span:before,
    [type="radio"].with-gap:checked + span:after {

        border: 2px solid #78909c;
    }

    [type="radio"]:checked + span:after,
    [type="radio"].with-gap:checked + span:after {
    
        background-color: #78909c;
    }
</style>

	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>

	<script src="../js/firebaseConnection.js"></script>

<!-- questions -->

<div class="container blue-grey-text text-lighten-1">
	<form class="venueAudit-form brown lighten-5 p-b-10">
      	<div class="row">
            <div class="col s12 center-align"><h2>Venue Audit</h2></div>
            <!-- blank coloumn  -->
            <div class="col s1"></div>
			
            <!-- Left side container block -->
            <div class="col s5 p-t-10 p-b-10">
                
                <!-- Outside Area -->
                <div class="container p-t-2 p-l-2 p-b-2">
                    <h5>Outside</h5>
                </div>

                <div class="container p-t-2 p-l-2 p-b-2">
                        <p class="text1">Shopfront Fasica Clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v1" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v1" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Windows Clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v2" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v2" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">POS all in date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v3" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v3" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All bulbs working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v4" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v4" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Signage Working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v5" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v5" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Correct Graphics & Signage</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v6" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v6" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Alarm Working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v7" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v7" value="B"/><span>No</span>
                                </label>
                            </div> 
                    </div>
                <!-- end of section -->

                <!-- Customer Area -->
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                    <h5>Customer Area</h5>
                </div> 

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">Floor polished & clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v8" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v8" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Skirting clean with no polish build-up</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v9" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v9" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Tables <b>NOT</b> sticky</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v10" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v10" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No chewing gum</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v11" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v11" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Walls clean with no marks/scuffs</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v12" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v12" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Aircon Extract grills clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v13" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v13" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Door Frames</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v14" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v14" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Kick plates clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v15" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v15" value="B"/><span>No</span>
                                </label>
                            </div>                            
                        <p class="text1">All Bulbs working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v16" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v16" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Doors closing properly</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v17" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v17" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Bar-Top clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v18" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v18" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Bar front chewing gum free</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v19" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v19" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Beer Taps and complete</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v20" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v20" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">POS in date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v21" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v21" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Entrance desk tidy</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v22" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v22" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Tills marked correctly & draws Working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v23" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v23" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All metal polished</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v24" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v24" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Staircase & Risers clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v25" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v25" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Fire Equipment in correct position</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v26" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v26" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All fixed seating clean & no rips</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v27" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v27" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->

                <!-- Toilets and Disabled -->
                <div class="container p-t-2 p-l-2 p-r-2">
                    <h5>Toilets & Disabled</h5>
                </div>

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">Hand dryers working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v28" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v28" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Toilet papaer dispensers full & working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v29" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v29" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Soap dispensers full</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v30" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v30" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Toilet blocks/pads present</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v31" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v31" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No Urine odour present</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v32" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v32" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Cubical locks working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v33" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v33" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Toilets flush</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v34" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v34" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Floor Seats not broken</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v35" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v35" value="B"/><span>No</span>
                                </label>
                            </div>                            
                        <p class="text1">Floor clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v36" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v36" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Taps working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v37" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v37" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Urinals flush</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v38" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v38" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">POS in date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v39" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v39" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Walls clean with no marks</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v40" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v40" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Mirrors clean with no smears</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v41" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v41" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Tampon bins correct</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v42" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v42" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Lights working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v43" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v43" value="B"/><span>No</span>
								</label>
                            </div>
                        <p class="text1">Hot water working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v44" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v44" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->

                <!-- Staff Area & Toilets -->
                <div class="container p-t-2 p-l-2-r-2 p-b-5">
                    <h5>Staff Areas & Toilets</h5>
                </div>

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text1">Staff toilets clean<p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v56" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v56" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Soap & Nail brushes present</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v57" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v57" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Toilet paper dispensers full & working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v58" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v58" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Signage Up</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v59" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v59" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Floors & Walls clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v60" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v60" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Locks working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v61" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v61" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Lights Working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v62" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v62" value="B"/><span>No</span>
                                </label>
                            </div>
						<p class="text1">Lockers Tidy</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v63" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v63" value="B"/><span>No</span>
                                </label>
                            </div>
		                <p class="text1">No Clutter</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v64" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v64" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->           

                <!-- Back of House -->
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
					<h5>Back of House</h5>
				</div>
				
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">Bin area clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v51" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v51" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Area clean & tidy, free of clutter</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v52" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v52" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Heath & Safety poster displayed</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v53" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v53" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Promotional items stored correctly</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v54" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v54" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">First-Aid boxes in correct locations & full</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v55" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v55" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->
				
				<!-- DJ Consul & Efforts -->
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                    <h5>DJ Consul & Effects</h5>
                </div>

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">CDJ's Working & Clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v88" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v88" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Tidy Area</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v89" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v89" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Mixer Working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v90" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v90" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Surfaces Clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v91" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v91" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Sound equipment all working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v92" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v92" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Lighting all working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v93" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v93" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Lighting controllers working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v94" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v94" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->
				
				
				
            <!-- bottom of coloured background block -->  
            </div>

            <!-- right side container block -->
            <div class="col s5 p-t-10 p-b-10">
                
                <!-- Cloakroom -->
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                    <h5>Cloakroom</h5>
                </div>

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <!-- Outside areas -->
                        <p class="text2">Clean & Tidy</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v45" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v45" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No lost property</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v46" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v46" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Till draw working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v47" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v47" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Correct button marking</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v48" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v48" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Enough hangers available</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v49" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v49" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Cloakroom tikcets on hangers</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v50" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v50" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->

                <!-- Bars -->
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                    <h5>Bars</h5>
                </div> 

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">PDQ on charge & working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v65" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v65" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Bar back clean & tidy</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v66" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v66" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Mirrors Polished</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v67" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v67" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">TV Screens Clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v68" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v68" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Glasswear Clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v69" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v69" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Glasswear in correct order</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v70" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v70" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Shelving not sticky</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v71" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v71" value="B"/><span>No</span>
								</label>
                            </div>
                        <p class="text1">Correct Jiggers in Place</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v72" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v72" value="B"/><span>No</span>
                                </label>
                            </div>                            
                        <p class="text1">No stickiness on dispense pumps</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v73" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v73" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No bar Fly</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v74" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v74" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Cling-film/Bottle covers in place</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v75" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v75" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All Spirits locked up</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v76" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v76" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Fridges stocked correctly</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v77" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v77" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Glasswash Empty</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v78" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v78" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No dirty glasses</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v79" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v79" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Floor clean & not sticky</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v80" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v80" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Lights Working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v81" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v81" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Fridges working & clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v82" value="A" checked/><span>Yes</span>
								</label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v82" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Post-Mix calibrated</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v83" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v83" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Tills working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v84" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v84" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Correct signage in place</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v85" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v85" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Price List up-to-date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v86" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v86" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Measured 25ml pourers on site</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v87" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v87" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->

                <!-- Cellar -->
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                    <h5>Cellar</h5>
                </div>

                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">Spirit room locked</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v95" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v95" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Cellar door locked</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v96" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v96" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Cellar clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v97" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v97" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Correct temperature</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v98" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v98" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Line clean record complete</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v99" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v99" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Gas cyclinders chained up</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v100" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v100" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text2">Stocks off of floor</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v101" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v101" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Stock in correct positions</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v102" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v102" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Cellar mate active</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v103" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v103" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Ice Machines working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v104" value="A" checked/><span>Yes</span>
								</label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v104" value="B"/><span>No</span>
                                </label>
							</div>
                        <p class="text1">Bag-in-Box clean</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v105" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v105" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Stock at correct levels</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v106" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v106" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All in date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v107" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v107" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Empty barrels, actually empty</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v108" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v108" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No unauthorised stock</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v109" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v109" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Empty barrels stacked</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v110" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="v110" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
                <!-- end of section -->            

                <!-- Managers Office -->
				<div class="light-blue lighten-5">
                <div class="container p-t-2 p-l-2 p-r-2 p-b-20">
					<h5>Managers Office</h5>
				</div>
				
                <div class="container p-t-2 p-l-2 p-r-2 p-b-5">
                        <p class="text2">Clean & Tidy</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a1" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a1" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All files up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a2" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a2" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Licensing folder complete & up-to-date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a3" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a3" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Fire folder complete & up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a4" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a4" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Health & Safety folder complete up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a5" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a5" value="B"/><span>No</span>
                                </label>
                            </div>
                        
						<p class="text2">Security folder complete & up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a6" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a6" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Pre-Brief/Debrief</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a7" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a7" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Float Check</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a8" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a8" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">CCTV 31 days recording</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a9" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a9" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">All cameras working & burning correctly</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a10" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a10" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Float Check record</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a11" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a11" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Computers working</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a12" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a12" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Radios Charging</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a13" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a13" value="B"/><span>No</span>
                                </label>
                            </div>
						<p class="text2">Homebase software completed</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a14" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a14" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Safe protocol</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a15" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a15" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">No broken PDQ machines</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a16" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a16" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Body camera footage saved to drive (Incidents)</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a17" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a17" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Incident reports completed correctly</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a18" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a18" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Facebook up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a19" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a19" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Instagram up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a20" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a20" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Twitter up to date</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a21" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a21" value="B"/><span>No</span>
                                </label>
                            </div>
                        <p class="text1">Photos Uploaded & taken to Standard</p>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a22" value="A" checked/><span>Yes</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input class="with-gap" type="radio" name="a22" value="B"/><span>No</span>
                                </label>
                            </div>
                    </div>
				</div>	
                <!-- end of section -->
            <!-- bottom of coloured background block -->  
            </div>
			
			<!-- blank coloumn  -->
            <div class="col s1"></div>
		</div>
		
        <!-- results section -->
        <div class="container center-align brown lighten-5 blue-grey-text text-lighten-1 p-b-10">
            <div class="row">
                <div>
                    <!-- results section - hidden from user on loading -->

                    <!-- venueResult is the class element used -->
                    <div class="venueResult container hide center-align blue-grey-text text-lighten-1">
                        <div class="row">
                            <div class="col s4"><h4>Admin Audit Score</h4></div>
                            <div class="col s4">
                                <h4><i><span class="text-center">0%</span></i></h4>
                            </div>
                            <div class="col s4"></div>
                        </div>
                    </div>

                    <!-- auditResult is the class element used -->
                    <div class="auditResult container hide center-align blue-grey-text text-lighten-1">
                        <div class="row">
                            <div class="col s4"><h4>Admin Audit Score</h4></div>
                            <div class="col s4">
                                <h4><i><span class="text-center">0%</span></i></h4>
                            </div>
                            <div class="col s4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container center-align p-b-10">
            <div>
                <div class="row">
                    <!-- blank coloumn -->
                    <div class="col s3"></div>

                    <div class="checkResult">
                        <div class="col s3 center-align">
                            <button class="btn brand waves-effect waves-light" type="submit" id="submit">Check Result<i class="material-icons right">check</i></button>
                        </div>
                    </div>

                    <div class="confirmResult hide">
                        <div class="col s4 center-align">
                            <button class="btn red lighten-2 waves-effect waves-light" type="button" formaction="../js/auditFormConfirm.js" id="confirm">Confirm & Submit<i class="material-icons right">send</i></button> 
                        <div>
                    </div>

                    <!-- blank coloumn -->
                    <div class="col s2"></div>
                </div>
            </div>
        </div>
    </form>


    <!-- <form class="auditFormConfirm brown lighten-5 p-b-10">
        <div class="confirmResult hide">
            <div class="col s3 center-align">
                <button class="btn red lighten-2 waves-effect waves-light" type="submit" name="confirm">Confirm & Submit<i class="material-icons right">send</i></button> 
            <div>
        </div>
    </form> -->


    <!-- <form class="container hide" action="venueAudit.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col s12"><h2>Venue Audit</h2>
                    <div>
                    <-- results section - hidden from user on loading --
                        <div class="venueResult container">
                            <div class="row">
                                <div class="col s4"><h4>Unit Audit Score</h4></div>
                                <div class="col s4">
                                    <h4><i><span class="text-center">0%</span></i></h4>
                                </div>
                                <div class="col s4"></div>
                            </div>
                        </div>
                        <div class="auditResult container">
                            <div class="row">
                                <div class="col s4"><h4>Unit Audit Score</h4></div>
                                <div class="col s4">
                                    <h4><i><span class="text-center">0%</span></i></h4>
                                </div>
                                <div class="col s4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form> -->
</div>


<?php include('../templates/footer.php') ?>
</html>