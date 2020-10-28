// functions
const displayMemberBio = (elem) => {
  let modals = document.getElementsByClassName("member-content");
  console.log(modals);
  for (var i = 0; i < modals.length; i++) {
    modals[i].style.display = "none";
  }

  let modal = elem.nextElementSibling;
  modal.style.display = "flex";
}

const closeMemberBio = (closeBtn) => {
  let modal = closeBtn.parentElement.parentElement;
  modal.style.display = "none";
}