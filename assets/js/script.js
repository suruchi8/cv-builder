
let currentTab = 0;
let allProfileTabs = document.querySelectorAll('.profile-tab');
const btnNext = document.getElementById('btn-next');
const btnPrev = document.getElementById('btn-prev');
const profileForm = document.getElementById('profile-form');

const displayTab = (tabIndex) => {
    allProfileTabs[tabIndex].style.display = "block";

    if(tabIndex == 0) btnPrev.style.display = "none";
    else btnPrev.style.display = "block";
    if(tabIndex == (allProfileTabs.length - 1)){
        btnNext.innerHTML = "Submit"
    }
}


const nextPrev = (value) => {
    allProfileTabs[currentTab].style.display = "none";
    currentTab = currentTab + value;
    if(currentTab >= allProfileTabs.length){
        profileForm.submit();
    }
}


displayTab(currentTab);