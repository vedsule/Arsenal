const url = "https://raw.githubusercontent.com/iMJ007/Time-Tracking-Dashboard/main/data.json";
let dataList = "";
const fetchJson = async () => {
    try {
        const data = await fetch(url);
        dataList = await data.json();
        updateValues();
    } catch (error) {
        console.log(error);
    }
};
const activityContainers = document.querySelectorAll(".activity-container");
const periods = document.querySelectorAll('input[type="radio"]');

const updateValues = (period = 'daily') => {
    for (const activityContainer of activityContainers) {
        if (!dataList){
            return;
        }
        let activityType = activityContainer.querySelector('span:first-child').innerText;
        let activityDetails = dataList.find((object) => object.title === activityType);
        let activityTimeFrame = activityDetails.timeframes[`${period}`];
        console.log(activityDetails);
        activityContainer.querySelector('h2').innerText = `${activityTimeFrame.current}hr${activityTimeFrame.current > 1 ? 's' : ''}`;

        if (period !== 'daily'){
            activityContainer.querySelector('p').innerText = `Last ${period === 'weekly' ? 'Week' : 'Month'} - ${activityTimeFrame.previous}hr${activityTimeFrame.previous > 1 ? 's' : ''}`;
        } else{
            activityContainer.querySelector('p').innerText = `Yesterday - ${activityTimeFrame.previous}hr${activityTimeFrame.previous > 1 ? 's' : ''}`;
        }

    }
}

for (let period of periods) {
    period.addEventListener('change', () => {
        updateValues(period.value.toLowerCase());
    })
}

async function sayHello() {
    Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Save`,
        denyButtonText: `Don't save`,
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire('Saved!', '', 'success')
        } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')
        }
      })
      
}

fetchJson();