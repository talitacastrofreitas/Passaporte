const checkboxList = document.querySelectorAll(".custom-control-input");
const noSymptoms = document.querySelector('input[name=resp_1]');
const hiddenInput = document.querySelector('input[name=items]');
const divTel = document.getElementById('tel_cel');


let symptoms = [];

for (symptom of checkboxList) {
    symptom.addEventListener('click', handleSelectedSymptom);
    console.log('executado');
}

function handleSelectedSymptom(event) {
    const symptom = event.target;
    const symptomId = symptom.dataset.id;

    const alreadySelected = symptoms.findIndex(symptom => symptom == symptomId);


    if (alreadySelected != -1) {
        const filteredSymptoms = symptoms.filter(symptom => symptom != symptomId);

        symptoms = filteredSymptoms;

    } else {
        symptoms.push(symptomId);
    }

    noSymptoms.checked = false;
    hiddenInput.value = symptoms;

    if(hiddenInput.value == []){

        noSymptoms.disabled = false;
        divTel.hidden = true;
        $("#tel").prop('required',false);

    } else {

        noSymptoms.disabled = true;
        divTel.hidden = false;
        $("#tel").prop('required',true);

    }

}

