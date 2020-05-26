let quests_all = document.getElementById("quests_all");
let quests_request = document.getElementById("quests_request");
let quests_completed = document.getElementById("quests_completed");
let quests_pending = document.getElementById("quests_pending");
let quests_expired = document.getElementById("quests_expired");
let quests_select = document.getElementById("quests_select");

function hideallquests(){
    quests_all.style.display = "none";
    quests_request.style.display = "none";
    quests_completed.style.display = "none";
    quests_pending.style.display = "none";
    quests_expired.style.display = "none";
}

function filterquest(){
    hideallquests();
    if(quests_select.value == "all"){
        quests_all.style.display = "block";
    }
    if(quests_select.value == "request"){
        quests_request.style.display = "block";
    }
    if(quests_select.value == "completed"){
        quests_completed.style.display = "block";
    }
    if(quests_select.value == "pending"){
        quests_pending.style.display = "block";
    }
    if(quests_select.value == "expired"){
        quests_expired.style.display =   "block";
    }
}
